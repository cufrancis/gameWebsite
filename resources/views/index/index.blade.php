@extends('layouts.app')

@section('content')
    <div class="container">
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ url('/article/show/'.$article->slug) }}">{{ $article->title }} </a>
                <em>( {{ $article->published_at }} )</em>
                <p>{{ str_limit( $article->content ) }}</p>
            </li>
        @endforeach
    </ul>
    {{-- 分页 --}}
    {!! $articles->render() !!}
</div>
@endsection
