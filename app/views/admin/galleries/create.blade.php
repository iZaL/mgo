@extends('admin.master')
{{-- Content --}}
@section('content')

{{ HTML::style('css/dropzone.css') }}
{{ HTML::script('js/dropzone.js') }}
<h1>Create Gallery</h1>
{{ Form::open(array('method' => 'POST', 'action' => array('AdminGalleriesController@store'))) }}

<div class="form-group">
    {{ Form::label('category_id', 'Category:') }}
    {{ Form::select('category_id',$categories ,NULL,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('arabic_name', 'Title Arabic:') }}
    {{ Form::text('title_ar', NULL,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('arabic_name', 'Title English:') }}
    {{ Form::text('title_en', NULL,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('arabic_name', 'Description Arabic:') }}
    {{ Form::textarea('description_ar', NULL,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('arabic_name', 'Description English:') }}
    {{ Form::textarea('description_en', NULL,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
</div>
{{ Form::close() }}

@stop


