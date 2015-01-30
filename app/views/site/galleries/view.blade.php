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

@section('content')
    <div class="col-md-12">
        <div id="gallery-1" class="royalSlider rsDefault">
            <?php $i = 0; ?>
            @foreach($album->photos as $photo)
                <div class="rsContent">
                    @if($i==0)
                        <a class="rsImg bugaga" data-rsbigimg="{{  asset('uploads/thumbnail/'.$photo->name) }}" href="{{  asset('uploads/large/'.$photo->name) }}">{{ $photo->title }}</a>
                    @else
                        <a class="rsImg" data-rsbigimg="{{  asset('uploads/thumbnail/'.$photo->name) }}" href="{{  asset('uploads/large/'.$photo->name) }}">{{ $photo->title }}</a>
                    @endif
                    {{ HTML::image('uploads/thumbnail/'.$photo->name.'',$photo->name,array('class'=>'rsTmb','width'=> '96', 'height'=>'72')) }}
                    <?php $i ++; ?>
                </div>
            @endforeach
        </div>
    </div>
@stop