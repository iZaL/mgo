<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; ">
    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
        </div>
        <div style="position: absolute; display: block; background: url(/packages/jssor-slider/img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
        </div>
    </div>

    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
        <div>
            {{--@foreach($galleries as $gallery)--}}
            {{--@if(count($gallery->photos))--}}
            <!-- Slides Container -->
            {{--@foreach($gallery->photos as $photo)--}}
            {{--<div><img u="image" src="/uploads/large/{{$photo->name}}"/></div>--}}
            {{----}}
            {{--@endforeach--}}
            <div>
                <img u="image" src="/packages/jssor-slider/img/landscape/02.jpg"/>
            </div>
            <div>
                <img u="image" src="/packages/jssor-slider/img/landscape/03.jpg"/>
            </div>
            <div>
                <img u="image" src="/packages/jssor-slider/img/landscape/04.jpg"/>
            </div>
            <div>
                <img u="image" src="/packages/jssor-slider/img/landscape/05.jpg"/>
            </div>
            <div>
                <img u="image" src="/packages/jssor-slider/img/landscape/06.jpg"/>
            </div>
            {{--@endif--}}
            {{--@endforeach--}}
        </div>
    </div>
    <!-- bullet navigator container -->
    <div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
        <!-- bullet navigator item prototype -->
        <div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
    </div>
    <!-- Bullet Navigator Skin End -->
    <!-- Arrow Navigator Skin Begin -->

    <!-- Arrow Left -->
        <span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 123px; left: 0px;">
        </span>
    <!-- Arrow Right -->
        <span u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 123px; right: 0px">
        </span>
    <!-- Arrow Navigator Skin End -->
    <a style="display: none" href="http://www.jssor.com">Image Slider</a>
</div>
