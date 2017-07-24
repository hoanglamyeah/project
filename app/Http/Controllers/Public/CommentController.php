<?php

namespace App\Http\Controllers\Public;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Show the comments in a post
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {

    }

    /**
     * create a comment
     *
     * @param  int  $id
     * @return Response
     */
    public function create(CommentRequest $request)
    {
        $comment = new Comment();
        $comment->content = $request->c_comment;
        $comment->user_id = Auth::id();
        $comment->blog_id = $request->b_id;
        $comment->save();
        return redirect()->route('public.home');
    }

    /**
     * Show the comments to update
     *
     * @param  int  $id
     * @return Response
     */
    public function showEdit()
    {

    }

    /**
     * update a comment
     *
     * @param  int  $id
     * @return Response
     */
    public function update()
    {

    }

    /**
     * delete a comment
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {

    }
}
