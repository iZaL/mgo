<div class="col-md-12">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header pull-right">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{ (Request::is('en') || Request::is('ar') || Request::is('/')) ? 'active' : '' }}" ><a href="{{ route('home') }}">{{ trans('word.home')}}</a></li>
                    <li class="{{ (Request::segment('1') == 'blog' ? 'active' :  false ) }}"><a href="{{ action('BlogsController@index') }}">{{ trans('word.blog') }}</a></li>
                    <li class="{{ (Request::segment('1') == 'products' ? 'active' :  false ) }}"><a href="{{ action('ProductsController@index') }}">{{ trans('word.products') }}</a></li>
                    <li class="{{ (Request::segment('1') == 'gallery' ? 'active' :  false ) }}"><a href="{{ action('GalleriesController@index') }}">{{ trans('word.gallery') }}</a></li>
                    <li class="{{ (Request::segment('1') == 'about' ? 'active' :  false ) }}"><a href="{{ action('BlogsController@getAbout') }}">{{ trans('word.about_us') }}</a></li>
                    <li class="{{ (Request::segment('1') == 'contact' ? 'active' :  false ) }}"><a href="{{ action('ContactsController@index') }}">{{ trans('word.contact_us') }}</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>