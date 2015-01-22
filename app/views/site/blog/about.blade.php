@extends('site.layouts._two_column')
@section('content')

    <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="well well-sm" style="margin-bottom: 10px;">
                        <span class="label label-default
                        @if ( App::getLocale() == 'en')
                            pull-right
                        @else
                                pull-left
                            @endif
                                " style=" padding: 5px; margin:0px; margin-bottom: 5px;">
                        Posted {{ $post->created_at }}
                        </span>
                </div>

                <p class="text-justify">{{ $post->description }}</p>
            </div>
        </div>

    </div>

@stop
