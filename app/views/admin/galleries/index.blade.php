@extends('admin.master')
{{-- Content --}}
@section('content')

<h1>Gallery</h1>

<p>{{ link_to_action('AdminGalleriesController@create', 'Add new Gallery') }}</p>

@if ($galleries->count())
<div id="wrap">
    <table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
        <thead>
            <tr>
				<th>Name</th>
				<th>Photos</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($galleries as $gallery)
				<tr>
					<td>{{ $gallery->title }}</td>
                    <td><a href="{{ URL::action('AdminPhotosController@create', ['imageable_type' => 'Gallery', 'imageable_id' => $gallery->id]) }}" class="btn btn-xs btn-success">Add Photos</a></td>
                    <td><a href="{{ URL::action('AdminGalleriesController@edit',  $gallery->id ) }}" class="iframe btn btn-xs btn-default">Edit</a>
                        {{ Form::open(array('method' => 'DELETE', 'action' => array('AdminGalleriesController@destroy', $gallery->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endif

@stop
