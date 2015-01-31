@extends('site.layouts._two_column')

@section('breadcrumb')
    <li><a href="{{ action('GalleriesController@index') }} ">{{ trans('word.gallery') }}</a></li>
@stop

@section('content')
    <div class="row">
        @foreach($galleries as $gallery)
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail gallery">
                    @if(count($gallery->photos))
                        <a href="{{ action('GalleriesController@show',$gallery->id) }}">
                            {{ HTML::image('uploads/medium/'.$gallery->photos[0]->name.'','image1',array('class'=>'img-responsive img-thumbnail')) }}
                        </a>
                    @else
                        <a href="{{ action('GalleriesController@show',$gallery->id) }}">
                            <img src="http://placehold.it/350x310" class="img-responsive img-thumbnail">
                        </a>
                    @endif
                    <div class="caption">
                        <p class="text-center">
                            <a href="{{ action('GalleriesController@show',$gallery->id) }}">
                                {{ $gallery->title }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $galleries->appends(Request::except('page'))->links() }}
@stop