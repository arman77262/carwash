@php
    $slider = DB::table('sliders')->get();
@endphp

<div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">

                    @foreach ($slider as $slide)
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset($slide->slider_image)}}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>{{$slide->small_title}}</h3>
                            <h1>{{$slide->big_title}}</h1>
                            <p>
                                {{$slide->description}}
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                    @endforeach




                </div>
            </div>
        </div>
