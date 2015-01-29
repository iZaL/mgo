
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="col-item">
            <div class="photo">
                @if(count($post->photos))
                    {{ HTML::image('uploads/medium/'.$post->photos[0]->name.'','image1',array('class'=>'img-responsive img-thumbnail')) }}
                @else
                    <a href="{{action('BlogsController@show',$post->id) }}">
                        @if($post->category)
                            <img src="http://placehold.it/100x100/2980b9/ffffff&text={{ $post->category->name }}" class="img-responsive img-thumbnail"/>
                        @endif
                    </a>
                @endif
            </div>
            <div class="info">
                <div class="row">
                    <div class="price col-md-6">
                        <span class="product-name">{{$post->name}}</span>
                    </div>
                    <div class="price col-md-6">
                        <span class="price-text-color">{{ $post->price }} KD</span>
                    </div>
                </div>
                <div class="separator clear-left ">
                    <p class="btn-details">
                        <i class="fa fa-list"></i><a href="{{action('ProductsController@show',$post->id)}}" class="hidden-sm">More details</a>
                    </p>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>