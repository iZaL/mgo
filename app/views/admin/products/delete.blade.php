@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
    <!-- ./ tabs -->
    {{-- Delete Post Form --}}
    {{ Form::open(array('method' => 'DELETE', 'action' => array('AdminProductsController@destroy', $post->id),'class'=>'form-horizontal')) }}



        <!-- <input type="hidden" name="_method" value="DELETE" /> -->
        <!-- ./ csrf token -->

        <!-- Form Actions -->
        <div class="control-group">
            <div class="controls">
                Delete Product{{ $post->name }}
                <br><br>
                <element class="btn-cancel close_popup">Cancel</element>
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            </div>
        </div>
        <!-- ./ form actions -->
    {{ Form::close() }}
@stop