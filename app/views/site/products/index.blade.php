@extends('site.layouts._two_column')

@section('sidebar')
    @include('site.blog._category')
    @include('site.blog._tags')
    @parent
@stop

@section('content')

    @foreach ($posts as $post)

        @include('site.products._results')

    @endforeach

    {{ $posts->links() }}

@stop
