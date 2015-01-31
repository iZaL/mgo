@extends('site.layouts._one_column')

@section('style')
    @parent
@stop

@section('content')
    <div class="col-md-12">
        <div class="tab-content">
            <div class="tab-pane active" id="profile">
                <h1>{{ trans('word.profile') }}</h1>

                <div class="col-lg-3">
                    <img class="img-circle" src="" alt=""><span class="fa-5"><i class="fa fa-user"></i></span>
                    <h2>
                        <a href="{{ action('UserController@edit',$user->id)}}"><i class="fa fa-edit"></i>&nbsp;&nbsp;  {{ trans('word.edit') }}</a>
                    </h2>
                </div>

                <div class="col-lg-8">
                    @include('site.users._detail')
                </div>

            </div>
        </div>
    </div>
@stop
