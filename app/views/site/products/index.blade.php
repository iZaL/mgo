@extends('site.layouts._two_column')

@section('sidebar')
    @include('site.blog._category')
    @include('site.blog._tags')
    @parent
@stop

@section('style')
    @parent
    <style>
        .product-name {
            font-weight: 700;
            text-transform: uppercase;
        }

        .col-item {
            border: 1px solid #E1E1E1;
            border-radius: 5px;
            background: #FFF;
        }

        .col-item .photo img {
            margin: 0 auto;
            width: 100%;
        }

        .col-item .info {
            padding: 10px;
            border-radius: 0 0 5px 5px;
            margin-top: 1px;
        }

        .col-item:hover .info {
            background-color: #F5F5DC;
        }

        .col-item .price {
            /*width: 50%;*/
            float: left;
            margin-top: 5px;
        }

        .col-item .price h5 {
            line-height: 20px;
            margin: 0;
        }

        .price-text-color {
            color: #219FD1;
        }

        .col-item .info .rating {
            color: #777;
        }

        .col-item .rating {
            /*width: 50%;*/
            float: left;
            font-size: 17px;
            text-align: right;
            line-height: 52px;
            margin-bottom: 10px;
            height: 52px;
        }

        .col-item .separator {
            border-top: 1px solid #E1E1E1;
        }

        .clear-left {
            clear: left;
        }

        .col-item .separator p {
            line-height: 20px;
            margin-bottom: 0;
            margin-top: 10px;
            text-align: center;
        }

        .col-item .separator p i {
            margin-right: 5px;
        }

        .col-item .btn-add {
            width: 50%;
            float: left;
        }

        .col-item .btn-add {
            border-right: 1px solid #E1E1E1;
        }

        .col-item .btn-details {
            width: 50%;
            float: left;
            padding-left: 10px;
        }

        .controls {
            margin-top: 20px;
        }

        [data-slide="prev"] {
            margin-right: 10px;
        }
    </style>
@stop

@section('content')
    @foreach ($posts as $post)
        @include('site.products._results')
    @endforeach
    {{ $posts->links() }}
@stop
