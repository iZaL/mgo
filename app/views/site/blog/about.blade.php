@extends('site.layouts._two_column')
@section('content')
    <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <p class="text-justify">{{ $post->description }}</p>
            </div>
        </div>
    </div>
@stop
