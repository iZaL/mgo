<!-- Extends From Two Column Layou -->
@extends('site.layouts._home')

@section('style')
    @parent
    {{ HTML::style('packages/royalslider/royalslider.css') }}
    {{ HTML::style('packages/royalslider/skins/minimal-white/rs-minimal-white.css') }}
    <style>
        #full-width-slider {
            width: 100%;
            color: #000;
        }
        .coloredBlock {
            padding: 12px;
            background: rgba(255, 0, 0, 0.6);
            color: #FFF;
            width: 200px;
            left: 20%;
            top: 5%;
        }
        .infoBlock {
            position: absolute;
            top: 30px;
            right: 30px;
            left: auto;
            max-width: 25%;
            padding-bottom: 0;
            background: #FFF;
            background: rgba(255, 255, 255, 0.8);
            overflow: hidden;
            padding: 20px;
        }

        .infoBlockLeftBlack {
            color: #FFF;
            background: #000;
            background: rgba(0, 0, 0, 0.75);
            left: 30px;
            right: auto;
        }
        .infoBlock h4 {
            font-size: 20px;
            line-height: 1.2;
            margin: 0;
            padding-bottom: 3px;
        }

        .infoBlock p {
            font-size: 14px;
            margin: 4px 0 0;
        }

        .infoBlock a {
            color: #FFF;
            text-decoration: underline;
        }

        .photosBy {
            position: absolute;
            line-height: 24px;
            font-size: 12px;
            background: #FFF;
            color: #000;
            padding: 0px 10px;
            position: absolute;
            left: 12px;
            bottom: 12px;
            top: auto;
            border-radius: 2px;
            z-index: 25;
        }

        .photosBy a {
            color: #000;
        }

        .fullWidth {
            max-width: 1400px;
            margin: 0 auto 24px;
        }

        @media screen and (min-width: 960px) and (min-height: 660px) {
            .heroSlider .rsOverflow,
            .royalSlider.heroSlider {
                height: 520px !important;
            }
        }

        @media screen and (min-width: 960px) and (min-height: 1000px) {
            .heroSlider .rsOverflow,
            .royalSlider.heroSlider {
                height: 660px !important;
            }
        }

        @media screen and (min-width: 0px) and (max-width: 800px) {
            .royalSlider.heroSlider,
            .royalSlider.heroSlider .rsOverflow {
                height: 300px !important;
            }

            .infoBlock {
                padding: 10px;
                height: auto;
                max-height: 100%;
                min-width: 40%;
                left: 5px;
                top: 5px;
                right: auto;
                font-size: 12px;
            }

            .infoBlock h3 {
                font-size: 14px;
                line-height: 17px;
            }
        }
    </style>
@stop

@section('slider')
    <div class="col-md-12">
        <div class="sliderContainer fullWidth clearfix">
            <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
                @if($gallery && count($gallery->photos))
                    @foreach($gallery->photos as $photo)
                        <div class="rsContent">
                            <img class="rsImg" src="/uploads/large/{{$photo->name}}"/>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </div>
@stop
@section('content')
    @if($gallery)
        <div class="slider-description">
            {{$gallery->description}}
        </div>
    @endif
@stop

@section('script')
    @parent
    {{ HTML::script('packages/royalslider/jquery.royalslider.min.js') }}
    <script>
        jQuery(document).ready(function ($) {
            $('#full-width-slider').royalSlider({
                arrowsNav: true,
                loop: false,
                keyboardNavEnabled: true,
                controlsInside: false,
                imageScaleMode: 'fill',
                arrowsNavAutoHide: false,
                autoScaleSlider: true,
                autoScaleSliderWidth: 960,
                autoScaleSliderHeight: 350,
                controlNavigation: 'bullets',
                thumbsFitInViewport: false,
                navigateByClick: true,
                startSlideId: 0,
                autoPlay: false,
                transitionType: 'move',
                globalCaption: false,
                deeplinking: {
                    enabled: true,
                    change: false
                },
                /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
                imgWidth: 1400,
                imgHeight: 680
            });
        });

    </script>
@stop