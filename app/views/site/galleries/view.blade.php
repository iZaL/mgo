@extends('site.layouts._two_column')


@section('breadcrumb')
<li><a href="{{ action('GalleriesController@index') }} ">{{ trans('word.gallery') }}</a></li>
<li><a href="{{ action('GalleriesController@show', $galleries->id) }} "> {{ $galleries->name}}</a></li>
@stop

@section('content')
<div class="row">
    @foreach($galleries->galleries as $gallery)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail gallery">
                @if(count($gallery->photos))
                <a href="{{ action('GalleriesController@showAlbum',$gallery->id) }}" >
                    {{ HTML::image('uploads/medium/'.$gallery->photos[0]->name.'','image1',array('class'=>'img-responsive img-thumbnail')) }}
                </a>
                @else
                <a href="{{ action('GalleriesController@showAlbum',$gallery->id) }}">
                    <img src="http://placehold.it/350x310" class="img-responsive img-thumbnail" >
                </a>
                @endif
                <div class="caption">
                    <p class="text-center">
                        <a href="{{ action('GalleriesController@showAlbum',$gallery->id) }}" >
<!--                            {{ App::make('GalleriesController')->getDate($gallery->id) }}-->
                            {{ App::make('GalleriesController')->getDate($gallery->id) }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@stop