<?php

namespace App\Http\Controllers\Public;

use App\Blog;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Show blog to view
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);

        return view('blog',compact('blog'));
    }

    /**
     * Show list blogs
     *
     * @param  int  $id
     * @return Response
     */
    public function showAll()
    {

    }

    /**
     * add new blog to database
     *
     * @param  int  $id
     * @return Response
     */
    public function create(BlogRequest $request)
    {
        $blog = new Blog;
        $blog->title = $request->b_title;
        $blog->slug = str_slug($request->b_title,'-');
        $blog->content = $request->b_content;
        $blog->user_id = Auth::id();
        $blog->save();
        return redirect()->route('public.home');
    }

    /**
     * show infomation of a blog to edit
     *
     * @param  int  $id
     * @return Response
     */
    public function showEdit()
    {
        $blog = Blog::find($id);
        if($blog->user_id != auth()->id()) {
            return redirect()->route('home')->with([
                'error' => 'class',
                'message' => 'You cant edit this blog'
            ]);
        }
        return view('public.edit',compact('blog'));
    }

    /**
     * update after edit
     *
     * @param  int  $id
     * @return Response
     */
    public function update(BlogRequest $request)
    {
        $blog = Blog::find($id);
        if($blog->user_id != auth()->id()) {
            return redirect()->route('home')->with([
                'error' => 'class',
                'message' => 'You cant edit this blog'
            ]);
        }
        $blog->update([
            'title'=>$request->get('b_title'),
            'content' => $request->get('b_content')
        ]);
        return redirect()->route('home');
    }

    /**
     * remove a blog from database
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if($blog->user_id != auth()->id()) {
            return redirect()->route('home')->with([
                "error"=>"class",
                "message"=>"You can't delete this"
            ]);
        }
        $blog->delete();
        return redirect()->route('home')->with([
            "error"=>"class",
            "message"=>"Complete!"
        ]);
    }
}
