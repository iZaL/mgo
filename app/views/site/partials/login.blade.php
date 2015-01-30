<div class="panel panel-default">
    <div class="panel-heading">
        {{ trans('word.login') }}
    </div>
    <div class="panel-body">
        @if(!Auth::user())
            @include('site.auth._login-form')
        @else
            @include('site.auth._settings-button')
        @endif
    </div>
</div>