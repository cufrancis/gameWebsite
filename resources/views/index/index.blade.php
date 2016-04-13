@extends('layouts.app')

@section('content')
<ul>
    @foreach ($articles as $article)
        <li>
            <a href="/blog/{{ $article->slug }}">{{ $article->title }} </a>
            <em>( {{ $article->published_at }} )</em>
            <p>{{ str_limit( $article->content ) }}</p>
        </li>
    @endforeach
</ul>
{{-- 分页 --}}
{!! $articles->render() !!}
@endsection
