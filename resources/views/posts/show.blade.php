@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="{{ asset('/storage/'.$post->image) }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ asset($post->user->profile->profileImage()) }}" class="w-100 rounded-circle" style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="font-weight-bold ">
                                <a href="{{ url('profile/'.$post->user->id) }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a> |
                        <a href="#" class="pl-3">Follow</a>
                    </div>
                    </div>
                </div>
                <hr>
                <div>
                    <p>
                        <span class="font-weight-bold ">
                            <a href="{{ url('profile/'.$post->user->id) }}"><span class="text-dark pr-2">{{ $post->user->username }}</span>
                            </a>
                        </span>{{ $post->caption }}
                    </p>
                </div> 
                @foreach($post->comments as $comment)
                <p>
                    <span class="font-weight-bold ">
                        <a href="{{ url('profile/'.$comment->user_id) }}"><span class="text-dark pr-2">{{ $comment->user->username }}</span>
                        </a>
                    </span>{{ $comment->content}}
                </p>
                @endforeach
                <form action="{{ url('/comments/'.$post->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="content">
                        <button class="btn btn-primary" type="submit">Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
