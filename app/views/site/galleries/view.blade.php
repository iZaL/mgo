@extends('site.layouts._two_column')

@section('title')
    Album {{$album->title}}
@stop
@section('style')
    @parent
    {{ HTML::style('css/royalslider.css') }}
    <link class="rs-file" href="{{ asset('css/rs-default.css') }}" rel="stylesheet">
    <style>
        #gallery-1 {
            width: 100%;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
    </style>
@stop

@section('content')

    <div class="col-md-12">
        <div class="description">
            <h2>{{ $album->title }}</h2>
        </div>
    </div>

    <div class="col-md-12">
        <div id="gallery-1" class="royalSlider rsDefault">
            <?php $i = 0; ?>
            @foreach($album->photos as $photo)
                <div class="rsContent">
                    @if($i==0)
                        <a class="rsImg bugaga" data-rsbigimg="{{  asset('uploads/large/'.$photo->name) }}" href="{{  asset('uploads/large/'.$photo->name) }}">{{ $photo->title }}</a>
                    @else
                        <a class="rsImg" data-rsbigimg="{{  asset('uploads/large/'.$photo->name) }}" href="{{  asset('uploads/large/'.$photo->name) }}">{{ $photo->title }}</a>
                    @endif
                    {{ HTML::image('uploads/thumbnail/'.$photo->name.'',$photo->name,array('class'=>'rsTmb','width'=> '96', 'height'=>'72')) }}
                    <?php $i ++; ?>
                </div>
            @endforeach
        </div>
    </div>


    <div class="col-md-12">
        <div class="description">
            <h2>{{trans('word.description')}}</h2>
            {{ $album->description }}
        </div>
    </div>
    <!-- Comments -->
    <div class="col-md-12">
        @if(count($album->comments))
            <h3><i class=" glyphicon glyphicon-comment"></i>&nbsp;{{trans('word.comment') }}</h3>
            @foreach($album->comments as $comment)
                <div class="comments_dev">
                    <p>{{ $comment->content }}</p>
                    @if ( App::getLocale() == 'en')
                        <p class="text-left text-primary">
                    @else
                        <p class="text-right text-primary">
                            @endif
                            {{ $comment->user ?  $comment->user->username : ''}}
                            <span class="text-muted"> - {{ $comment->created_at }} </span>
                        </p>
                </div>
            @endforeach
        @endif
    </div>
    <div class="col-md-12">
        @if(Auth::check())
            {{ Form::open(array( 'action' => array('CommentsController@store', $album->id))) }}
            {{ Form::hidden('commentable_id',$album->id)}}
            {{ Form::hidden('commentable_type','Gallery')}}
            <div class="form-group">
                <label for="comment"></label>
                {{ Form::textarea('content',null,['class'=>'form-control','placehodler'=>trans('word.comment'),'rows'=>3]) }}
            </div>
            <button type="submit" class="btn btn-default"> {{ trans('word.add_comment') }}</button>
            {{ Form::close() }}
        @endif
        @if ($errors->any())
            <ul> {{ implode('', $errors->all('<li class="error">:message</li> ')) }} </ul>
        @endif
    </div>
@stop

@section('script')
    @parent
    {{ HTML::script('js/jquery.royalslider.min.js') }}
    <script id="addJS">
        jQuery(document).ready(function ($) {
            $('#gallery-1').royalSlider({
                fullscreen: {
                    enabled: true,
                    nativeFS: true
                },
                controlNavigation: 'thumbnails',
                autoScaleSlider: true,
                autoScaleSliderWidth: 960,
                autoScaleSliderHeight: 850,
                loop: false,
                imageScaleMode: 'fit-if-smaller',
                navigateByClick: true,
                numImagesToPreload: 2,
                arrowsNav: true,
                arrowsNavAutoHide: true,
                arrowsNavHideOnTouch: true,
                keyboardNavEnabled: true,
                fadeinLoadedSlide: true,
                globalCaption: false,
                globalCaptionInside: false,
                thumbs: {
                    appendSpan: true,
                    firstMargin: true,
                    paddingBottom: 4
                }
            });
        });
    </script>
@stop
