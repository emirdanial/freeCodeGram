@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="{{ url('/p/'.$post->id) }}">
                    <img src="{{ asset('/storage/'.$post->image) }}" class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-5">
            <div class="col-6 offset-3">
                <div class="d-flex align-items-center">
                <p>
                    <span class="font-weight-bold pr-2">
                        <a href="{{ url('profile/'.$post->user->id) }}"><span class="text-dark">{{ $post->user->username }}</span></a>
                    </span>{{ $post->caption }}
                </p>
            </div>
            <div>
                <a href="{{ url('/p/'.$post->id) }}" class="btn btn-outline-info">View comments</a>
            </div>
        </div>
    </div>
    @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>

</div>
@endsection
