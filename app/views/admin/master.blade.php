<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ ! empty($title) ? $title . ' - ' : '' }} MGO Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('style')
        {{ HTML::style('assets/css/bootstrap.min.css') }}
        {{ HTML::style('css/font-awesome.min.css') }}
        {{ HTML::style('assets/css/datatables.css') }}
        {{ HTML::style('assets/css/custom.css') }}
        <style>
            .container-fluid {
                padding: 0 50px;
            }
        </style>
    @show
</head>

<body>
<div class="container-fluid ">
    @include('admin.partials.navigation')
    @include('admin.partials.confirm')

    @include('admin.partials.notification')

    @section('content')
    @show

    @include('admin.layouts.footer')
</div>

@section('script')
    {{ HTML::script('assets/js/jquery.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/nicEdit.js') }}
    {{ HTML::script('assets/js/datatables-bootstrap.js') }}
    {{ HTML::script('assets/js/datatables.js') }}
    {{ HTML::script('packages/tinymce/tinymce.min.js') }}
    <script type="text/javascript">
        $('.delete-btns').on('click', function (e) {
            var $form = $(this).closest('form');
            e.preventDefault();
            $('#confirm').modal({backdrop: 'static', keyboard: false})
                    .one('click', '#delete', function (e) {
                        $form.trigger('submit');
                    }
            );
        });
        $(document).ready(function () {
            $('.datatable').dataTable({
                "sPaginationType": "bs_four_button",
                "iDisplayLength": 100
            });
            $('.datatable').each(function () {
                var datatable = $(this);
                var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.addClass('form-control');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
                length_sel.addClass('form-control input-sm');
            });
            tinymce.init({
                selector: "textarea",
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor jbimages directionality"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages | print preview media fullpage | forecolor backcolor emoticons | ltr rtl",
                relative_urls: false

            });
        });
    </script>
@show
</body>
</html>