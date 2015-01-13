@extends('admin.master')
{{-- Content --}}
@section('content')

{{ HTML::style('css/dropzone.css') }}
{{ HTML::script('js/dropzone.js') }}
<h1 >Edit Gallery</h1>

{{ Form::model($gallery, array('method' => 'PATCH', 'role'=>'form', 'action' => array('AdminGalleriesController@update', $gallery->id))) }}

<div class="form-group">
    {{ Form::label('category_id', 'Category:') }}
    {{ Form::select('category_id',$categories ,$gallery->category_id,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('arabic_name', 'Title Arabic:') }}
    {{ Form::text('title_ar', null,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('arabic_name', 'Title English:') }}
    {{ Form::text('title_en', null,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('arabic_name', 'Description Arabic:') }}
    {{ Form::textarea('description_ar', null,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('arabic_name', 'Description English:') }}
    {{ Form::textarea('description_en', null,array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
</div>
{{ Form::close() }}

@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

<h1>Delete Photos </h1>

<div class="row ">
    <div class="col-md-12">
        <table class="table table-striped custab well">
            <thead>
            <tr>
                <th>Image </th>
            </tr>
            @foreach($gallery->photos as $photo)
            <tr>
                <td> {{ HTML::image('uploads/thumbnail/'.$photo->name.'','image1',array('class'=>'img-responsive img-thumbnail')) }} </td>
                <td>
                    {{ Form::open(array('method' => 'DELETE', 'action' => array('AdminPhotosController@destroy', $photo->id))) }}
                    {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}

                    {{ Form::close() }}
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</div>

@stop


