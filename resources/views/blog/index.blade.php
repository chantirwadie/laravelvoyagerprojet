@extends('master')
@section('content')

<div class="row">
    <div class="col-md-12"></div>
    <h1>welcome </h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor praesentium ipsa dicta at dolorem nisi odio necessitatibus eaque ducimus! Molestias quas modi reprehenderit explicabo sit, error voluptatibus non dolor quasi.
</div>
<div class="row">
    @foreach ( $myPosts as $post)
    <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('/storzge/'.$post->image) }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text">{{ str_limit($post->excerpt , 100) }}</p>
                </div>
            </div>

        </div>
    @endforeach

</div>

@endsection
