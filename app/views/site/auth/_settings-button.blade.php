<div class="btn-group" role="group">
    <button type="button" class="btn btn-default">
        <a href="{{ action('UserController@getProfile', Auth::user()->id) }}">
            <i class="fa fa-user" style="font-size: 11px;"></i>&nbsp;{{ trans('word.profile') }}
        </a>
    </button>
    @if(Helper::isMod())
        <button type="button" class="btn btn-default">
            <a href="{{ URL::to('admin')}}">
                <i class="fa fa-cog" style="font-size: 11px;"></i>&nbsp; {{ trans('word.admin_panel')}}
            </a>
        </button>
    @endif
    <button type="button" class="btn btn-default">
        <a href="{{ action('AuthController@getLogout') }}">
            <i class="fa fa-close" style="font-size: 11px;"></i>&nbsp;{{ trans('word.logout') }}
        </a>
    </button>
</div>