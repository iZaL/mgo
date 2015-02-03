<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ ! empty($title) ? $title . ' - ' : '' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('style')
        <style>
            @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
        @import url(http://fonts.googleapis.com/css?family=PT+Sans);

                html, body {
                    font-family: 'Droid Arabic Kufi','PT Sans' !important;
                    font-weight: bold;
                }

                h1, h2, h3, h4, span, p, div, table {
                    font-family: 'Droid Arabic Kufi','PT Sans' !important;
                }
            </style>
        @if ( App::getLocale() == 'ar')
            <style>
                .nav li {
                    float: right !important;
                }
            </style>
            {{ HTML::style('css/bootstrap-rtl.min.css') }}
        @endif
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/font-awesome.min.css') }}
        {{ HTML::style('css/intlTelInput.css'); }}
        {{ HTML::style('css/custom.css') }}
    @show
</head>

<body>
<div class="container-fluid">
    <!-- header -->
    <div class="row" >
        <div class="col-md-3 col-sm-3 col-xs-12
        @if ( App::getLocale() == 'ar')
        {{ 'pull-right' }}
        @else
        {{ 'pull-left' }}
        @endif
        ">
            <a href="/">{{ HTML::image('images/Logo.png','kaizen',array('class'=>'img-responsive')) }}</a>
        </div>

        <div class="col-md-6
          @if ( App::getLocale() == 'en')
        {{ 'pull-right' }}
        @else
        {{ 'pull-left' }}
        @endif
        " >
            <div class="row">
                <div class="col-md-12 locale">
                    @include('site.partials.locale')
                </div>
                <div class="col-md-8 slogan">
                    {{ HTML::image('images/slogan.png','kaizen',array('class'=>'img-responsive')) }}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="row">
            <div class="col-md-11">
                @include('site.partials.navigation')
            </div>

        </div>

        <!-- End mobile Div -->
        <div class="row">
            <div class="col-md-12">
                @include('site.partials.notification')
            </div>
        </div>

        <div class="row">
            {{ $content }}
        </div>

        <div class="row">
            @include('site.partials.footer')
        </div>
    </div>

</div>

<!-- Javascript -->
@section('script')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@show

</body>
</html>