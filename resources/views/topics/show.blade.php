@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Topic / Show #{{ $topic->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('topics.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('topics.edit', $topic->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Title</label>
<p>
	{{ $topic->title }}
</p> <label>Body</label>
<p>
	{{ $topic->body }}
</p> <label>User_id</label>
<p>
	{{ $topic->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $topic->category_id }}
</p> <label>Reply_count</label>
<p>
	{{ $topic->reply_count }}
</p> <label>View_count</label>
<p>
	{{ $topic->view_count }}
</p> <label>Last_reply_user_id</label>
<p>
	{{ $topic->last_reply_user_id }}
</p> <label>Order</label>
<p>
	{{ $topic->order }}
</p> <label>Excerpt</label>
<p>
	{{ $topic->excerpt }}
</p> <label>Slug</label>
<p>
	{{ $topic->slug }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
