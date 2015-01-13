@extends('admin.master')
{{-- Content --}}
@section('content')
{{ HTML::style('css/dropzone.css') }}
{{ HTML::script('js/dropzone.js') }}
<h1>Add Edit Photos</h1>
<!--{{ Form::open(array('url' => 'admin/upload', 'class'=>'dropzone', 'id'=>'my-dropzone')) }}-->
{{ Form::open(array('method' => 'POST', 'action' => array('AdminGalleriesController@postPhotos',$gallery->id), 'class'=>'dropzone', 'id'=>'my-dropzone')) }}

<!-- Single file upload
<div class="dz-default dz-message"><span>Drop files here to upload</span></div>
-->
<!-- Multiple file upload-->
<div class="fallback">
    <input name="file" type="file" multiple />
</div>

{{ Form::close() }}
<br><br>
<h1>Add Video</h1>
<div class="col-md-12 well">
    <div class="form-group">
        {{ Form::open(array('method' => 'POST', 'action' => array('AdminGalleriesController@postVideos',$gallery->id))) }}

        {{ Form::label('url', 'Youtube URL:') }}
        <div class="input-group">
            {{ Form::text('url', NULL,array('class'=>'form-control')) }}
            <span class="input-group-btn">
                {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
            </span>

        </div>
        {{ Form::close() }}
    </div>

    <div id="result">

    </div>
</div>
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
<div style="margin-top: 20px;">

</div>
<script language="javascript">


    // myDropzone is the configuration for the element that has an id attribute
    // with the value my-dropzone (or myDropzone)
    Dropzone.options.myDropzone = {
        init: function() {
            this.on("addedfile", function(file) {

                var removeButton = Dropzone.createElement('<a class="dz-remove">Remove file</a>');
                var _this = this;

                removeButton.addEventListener("click", function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    var fileInfo = new Array();
                    fileInfo['name']=file.name;

                    $.ajax({
                        type: "POST",
                        url: "{{ url('/delete-image') }}",
                        data: {file: file.name},
                        beforeSend: function () {
                            // before send
                        },
                        success: function (response) {

                            if (response == 'success')
                                alert('deleted');
                        },
                        error: function () {
                            alert("error");
                        }
                    });


                    _this.removeFile(file);

                    // If you want to the delete the file on the server as well,
                    // you can do the AJAX request here.
                });


                // Add the button to the file preview element.
                file.previewElement.appendChild(removeButton);
            });
        }
    };
    $(document).ready(function()
    {
        $(".search_input").focus();
        $(".search_input").keyup(function()
        {

            var search_input = $(this).val();
            var keyword= encodeURIComponent(search_input);

            var yt_url='http://gdata.youtube.com/feeds/api/videos?q='+keyword+'&format=5&max-results=1&v=2&alt=jsonc';


            $.ajax({
                type: "GET",
                url: yt_url,
                dataType:"jsonp",
                success: function(response)
                {
                    if(response.data.items)
                    {
                        var vid_id = null;
                        $.each(response.data.items, function(i,data)
                        {
                            var video_id=data.id;
                            var video_title=data.title;
                            var video_viewCount=data.viewCount;
                            var video_frame="<iframe width='640' height='385' src='http://www.youtube.com/embed/"+video_id+"' frameborder='0' type='text/html'></iframe>";
                            var final="<div id='title'></div><div>"+video_frame+"</div><div id='count'>"+video_viewCount+" Views</div>";
                            $("#result").html(final);
                            vid_id = video_id;

                        });
                        var id = '{{ $gallery->id }}';
//                        attachVideo(id,vid_id);
                    }
                    else
                    {
                        $("#result").html("<div id='no'>No Video</div>");
                    }
                }

            });

        });
    });

    function attachVideo(id,name){
        $.ajax({
            url: '/admin/video/attach?id='+ id + '&name='+name,
            type: 'GET',
            cache : true,
            dataType: "json",
            error: function(xhr, textStatus, errorThrown) {
                //
            },
            success: function(data) {
//                if(data.success) {
//                    $('.favorite').toggleClass('active');
//                }
                //alert(data.message);
            }
        });
    }

</script>
@stop
