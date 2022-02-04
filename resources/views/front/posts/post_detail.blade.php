@extends('front.layouts.app')

@section('title', __('Post List'))

@section('content')
    <div id="singleBlogSection1" style="background-image: url('{{ '/storage/'. $post->image }}');">
    </div>
    <div id="singleBlogSection2">
        <p>
            {{ $post->title }}
        </p>
    </div>
    <div id="singleBlogSection3" class="d-flex align-items-center justify-content-start">
    <span>
        <img class="mx-2" src="{{ asset('front/images/Pen.svg') }}" alt="{{ $post->user->name }}">
        {{ $post->user->name }}
    </span>
        <span>{{ $post->published_at }}</span>
    </div>
    <div id="singleBlogSection4">
        {!! $post->content !!}
    </div>
    <!-- <div id="singleBlogSection5">

    </div> -->

    <div id="singleBlogSection5">
        <section id="section2Blog">
            <div class="d-flex flex-md-row flex-wrap justify-content-md-between justify-content-center">
                @foreach($posts as $post)
                    <div class="blog1 d-flex flex-column">
                    <div class="item1">
                        <img src="/storage/{{ $post->image }}" alt="{{ $post->title }}">
                    </div>
                    <div class="item2 d-flex flex-column justify-content-end">
                        <div>
                            <span style="font-size: 20px;font-weight: bold;">
                                {{ $post->title }}
                            </span>
                        </div>
                        <div class="heightPost">
                            <span style="font-size: 14px;font-weight: bold;">
                                {{ strip_tags(\Illuminate\Support\Str::words($post->content, 250)) }}
                            </span>
                        </div>
                        <div>
                            <a class="btn from-right" href='{{ route('posts.detail', [$post->code, $post->slug]) }}'>
                                {{ __('Read more') }}
                            </a>
                        </div>
                        <div class="lastChild d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <img style="width: 20px;height: 20px;" src="{{ asset('front/images/Pen.svg') }}" width="5" height="5" alt="{{ $post->user->name }}">
                                <span class="mx-2" style="font-size: 14px;font-weight: bold;">{{ $post->user->name }}</span>
                            </div>
                            <div><span style="font-size: 14px;font-weight: bold;">{{ $post->published_at }}</span></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
