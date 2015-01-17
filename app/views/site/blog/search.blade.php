<div class="panel panel-default">
    <div class="panel-heading">
        {{ trans('word.search') }}
    </div>
    <div class="panel-body">
        {{ Form::open(['action' => 'BlogsController@index', 'method' => 'get'], ['class'=>'form']) }}
            {{ Form::text('search', null, ['class'=>'form-control', 'placeholder'=>trans('word.search')]) }}
            <button type="submit" class="btn btn-default">{{ trans('word.search') }}</button>
        {{Form::close()}}
    </div>
</div>
