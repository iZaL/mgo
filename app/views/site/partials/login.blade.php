{{--<!-- Hide this In Mobile -->--}}
{{--<div class="hidden-xs">--}}
<div class="panel panel-default">
    <div class="panel-heading">
        {{ trans('word.login') }}
    </div>
    <div class="panel-body">
        @if(!Auth::user())
            @include('site.auth._login-form')
        @else
            <ul class="dropdown">
                @include('site.auth._settings-button')
            </ul>
        @endif
    </div>
</div>
{{--</div>--}}
{{--<!-- mobile -->--}}
{{--<div class="row">--}}
{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<div class="visible-xs">--}}
{{--<li class="dropdown"  style="list-style-type:none ">--}}
{{--@if(!Auth::check())--}}
{{--<a type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon  glyphicon-lock"></i> &nbsp;{{ trans('word.login') }}--}}
{{--<span class="caret"></span>--}}
{{--</a>--}}
{{--<ul class="dropdown-menu columns padded">--}}
{{--@include('site.auth._login-form')--}}
{{--</ul>--}}

{{--@else--}}
{{--@include('site.auth._settings-button')--}}
{{--@endif--}}

{{--</li>--}}
{{--@include('site.partials.region')--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--</ul>--}}

