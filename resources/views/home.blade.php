@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <br class="panel-body">
                    @foreach($blog as $b)
                        {!! $b->title !!}<br/>
                        {!! $b->content !!}<br/>
                        {!! $b->url !!}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
