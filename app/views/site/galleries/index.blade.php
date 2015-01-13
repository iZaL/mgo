@extends('site.layouts._two_column')

@section('breadcrumb')
<li><a href="{{ action('GalleriesController@index') }} ">{{ trans('word.gallery') }}</a></li>
@stop

@section('content')
<div class="row">
    @foreach($categories as $category)
        <div class="col-sm-6 col-md-6">
            <div class="thumbnail gallery">
                @if(count($category->galleries) && count($category->galleries[0]->photos))
                    <a href="{{ action('GalleriesController@show',$category->id) }}">
                        {{ HTML::image('uploads/medium/'.$category->galleries[0]->photos[0]->name.'','image1',array('class'=>'img-responsive img-thumbnail')) }}
                    </a>
                @else
                    <a href="{{ action('GalleriesController@show',$category->id) }}">
                        <img src="http://placehold.it/350x310" class="img-responsive img-thumbnail">
                    </a>
                @endif
                <div class="caption">
                    <p class="text-center">
                        <a href="{{ action('GalleriesController@show',$category->id) }}">
                            {{ $category->name }}
                        </a>
                    </p>
                    <a href="#" class="pull-right"><i class="fa fa-camera"></i>
                        {{ count($category->galleries) }}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
{{ $categories->appends(Request::except('page'))->links() }}
@stop