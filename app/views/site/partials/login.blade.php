    {{--<ul class="dropdown">--}}
        {{--<!-- Hide this In Mobile -->--}}
        {{--<div class="hidden-xs">--}}
            {{--@if(!Auth::user())--}}
                {{--<div class="row">--}}
                    {{--@include('site.auth._login-form')--}}
                {{--</div>--}}
            {{--@else--}}
                {{--@include('site.auth._settings-button')--}}
            {{--@endif--}}
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

    <div class="panel panel-default">
        <div class="panel-heading">
            Login
        </div>
        <div class="panel-body">
            <form role="form">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="sr-only">Email address</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter username or email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="sr-only">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Password">
                    </div>
                    <a href="#" class="pull-right small">Forgot password?</a>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Stay signed in
                    </label>
                </div>
                <button type="button" class="btn btn-primary btn-sm">Sign in</button>
            </form>
        </div>
    </div>