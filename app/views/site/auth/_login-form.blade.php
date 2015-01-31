{{ Form::open(['action' => 'AuthController@postLogin', 'method' => 'post'], ['class'=>'form']) }}
<div class="form-group">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon  glyphicon-user"></i></span>
        {{ Form::text('email',null,['class'=>'form-control', 'placeholder'=> trans('word.email')]) }}
    </div>
</div>
<div class="form-group">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon  glyphicon-lock"></i></span>
        {{ Form::password('password',['class'=>'form-control', 'placeholder'=> trans('word.password')]) }}
    </div>
</div>
<div class="row pull-left">
    <div class="col-md-12">
        {{ Form::checkbox('remember', '1', true,  ['id' => 'remember']) }}
        {{ trans('word.remember')}}
        <button type="submit" class="btn btn-primary">{{ trans('word.login') }}</button>
        <a href="{{ action('AuthController@getSignup') }}" type="submit" class="btn btn-primary">{{ trans('word.register') }}</a>
    </div>
</div>
{{ Form::close() }}