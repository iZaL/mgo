<a type="button" class="btn btn-info btn-default btn-sm" href="{{ action('UserController@getProfile', Auth::user()->id) }}">
    <i class="fa fa-user" style="font-size: 11px;"></i>&nbsp;{{ trans('word.profile') }}
</a>

{{ (Helper::isMod()) ? '<a type="button" class="btn btn-default btn-sm" href="'. URL::to('admin') .'">
    <i class="fa fa-cog" style="font-size: 11px;"></i>&nbsp;'. trans('word.admin_panel') .'
</a>' : '' }}

<a type="button" class="btn btn-danger btn-default btn-sm" href="{{ action('AuthController@getLogout') }}">
    <i class="fa fa-close" style="font-size: 11px;"></i>&nbsp;{{ trans('word.logout') }}
</a>
