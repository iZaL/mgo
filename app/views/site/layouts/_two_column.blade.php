<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    @section('content')
    @show
</div>
<!-- Show only in big Screen -->

<div class="col-md-4 col-xs-12">
    @section('sidebar')
        @include('site.blog._latest')
        @include('site.partials.login')
        @include('site.partials.newsletter')
    @show
</div>
<div class="col-md-4 col-sm-10 visible-lg visible-md visible-sm">

</div>
