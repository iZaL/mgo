<div class="panel panel-default">
    <div class="panel-heading">
        {{ trans('word.search') }}
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-9">
                    {{ Form::open(['action' => 'BlogsController@index', 'method' => 'get'], ['class'=>'form']) }}
                    {{ Form::text('search', null, ['class'=>'form-control', 'placeholder'=>trans('word.search')]) }}
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">{{ trans('word.search') }}</button>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
