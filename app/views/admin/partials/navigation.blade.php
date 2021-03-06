<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li{{ (Request::is('admin/event*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/') }}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li{{ (Request::is('admin/products*') ? ' class="active"' : '') }}><a href="{{{ URL::action('AdminProductsController@index') }}}"><span class="glyphicon glyphicon-list-alt"></span> Products</a></li>
                <li{{ (Request::is('admin/gallery*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/gallery') }}}"><span class="glyphicon glyphicon-film"></span> Gallery</a></li>
                <li{{ (Request::is('admin/blogs*') ? ' class="active"' : '') }}><a href="{{{ URL::action('AdminBlogsController@index') }}}"><span class="glyphicon glyphicon-list-alt"></span> Blog</a></li>
                <li{{ (Request::is('admin/category*') ? ' class="active"' : '') }}><a href="{{{ URL::action('AdminCategoriesController@index') }}}"><span class="glyphicon glyphicon-tag"></span> Category</a></li>
                <li class="dropdown{{ (Request::is('admin/users*|admin/roles*') ? ' active' : '') }}">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/users') }}}">
                        <span class="glyphicon glyphicon-user"></span> Users <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/users') }}}"><span class="glyphicon glyphicon-user"></span> Users</a></li>
                        <li{{ (Request::is('admin/roles*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/roles') }}}"><span class="glyphicon glyphicon-user"></span> Roles</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-asterisk"></span> Settings <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li{{ (Request::is('admin/comments*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/comments') }}}"><span class="glyphicon glyphicon-comment"></span> Edit Comments</a></li>
                        <li{{ (Request::is('admin/tags*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/tags') }}}"><span class="glyphicon glyphicon-tag"></span> Add/Edit Tags</a></li>
                        <li{{ (Request::is('admin/contact-us*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/contact-us') }}}"><span class="glyphicon glyphicon-envelope"></span> Edit Contact Details</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li><a href="{{{ URL::to('/') }}}"><span class="glyphicon glyphicon-upload"></span> View Homepage</a></li>
                <li class="divider-vertical"></li>
                <li class="dropdown">
                    <ul class="dropdown-menu">
                        <li><a href="{{{ URL::to('user/'.Auth::user()->id.'/profile') }}}"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('user/logout') }}}"><span class="glyphicon glyphicon-share"></span> Logout</a></li>
                    </ul>

                </li>

            </ul>
        </div>
    </div>
</div>