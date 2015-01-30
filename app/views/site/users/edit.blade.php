@extends('site.layouts._two_column')
@section('content')

    {{ Form::model($user,array('method' => 'PATCH', 'action'=>array('UserController@update', $user->id),'class'=>'form')) }}

        <div class="col-md-12">

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label>{{ trans('auth.signup.name_ar')  }}</label>
                        {{ Form::text('name_ar',NULL,array('class'=>'form-control input-lg','placeholder'=> trans('auth.signup.name_ar'))) }}
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label>{{ trans('auth.signup.name_en')  }}</label>

                        {{ Form::text('name_en',NULL,array('class'=>'form-control input-lg','placeholder'=> trans('auth.signup.name_en'))) }}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label>{{ trans('word.password')  }}</label>
                        {{ Form::password('password',array('class' => 'form-control input-lg','placeholder' => trans('word.password'))) }}
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label>{{ trans('word.password_confirmation')  }}</label>
                        {{ Form::password('password_confirmation',array('class' => 'form-control input-lg','placeholder' => trans('word.password_confirmation'))) }}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label>{{ trans('word.telelphone')  }}</label>
                        {{ Form::text('phone',NULL,array('class'=>'form-control input-lg','placeholder'=> trans('word.telelphone'))) }}
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label>{{ trans('word.mobile')  }}</label>
                        {{ Form::text('mobile',NULL,array('id'=> 'mobile','class'=>'form-control input-lg','placeholder'=> trans('word.mobile'))) }}
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label>{{ trans('word.select_country')  }}</label>
                        {{ Form::select('country_id', $countries, NULL ,['class' => 'form-control']) }}
                    </div>
                    <div class="col-sm-12 col-md-6">

                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ trans('word.gender') }}</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="radio-inline">
                                {{ Form::radio('gender', 'Male', null,  ['id' => 'male']) }}
                                {{ trans('word.male') }}
                            </label>
                            <label class="radio-inline">
                                {{ Form::radio('gender', 'Female', null,  ['id' => 'female']) }}
                                {{ trans('word.female') }}
                            </label>
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                    {{ trans('word.save') }}
                </button>
            </div>

        </div>

    {{ Form::close() }}
@stop

@section('script')
    @parent
@stop