@extends('layouts.pageLayout')
@section('slider')
    <section class="home-section home-full-height photography-page" id="home">
        <div class="hero-slider">
            <ul class="slides">
                <?php
                use App\Http\Models\Category;
                use App\Http\Models\Photo;
                $sliderImages = Photo::where('category', 'Slider')->get();
                foreach($sliderImages as $sliderImage){
                $path = $sliderImage->photo_path;

                ?>
                <li class="bg-dark" style="background-image:url({{URL::asset($path)}}) ">
                    {{--#################################If Caption is needed###################--}}
                    {{--<div class="container">--}}
                    {{--<div class="image-caption">--}}
                    {{--<div class="font-alt caption-text">Life in lake</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </section>
@endsection
@section('content')
    <section class="module-medium">
        <div class="container">
            <ul class="works-grid works-grid-gut works-hover-d" id="works-grid">
                <?php
                    $categories = Category::where('status','1')->get();
                    foreach($categories as $category){
                        $categoryName = $category->category_name;
                        $sliderImage = Photo::where('category', $categoryName)->first();
                        if($sliderImage){
                            $path = $sliderImage->thumbnail_path;
                    ?>
                    <li class="work-item illustration webdesign"><a href="{{route('gallery')}}">
                            <div class="work-image"><img src="{{URL::asset($path)}}" alt="Portfolio Item"/></div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title">{{$categoryName}}</h3>
                                <div class="work-descr">click here for more...</div>
                            </div></a>
                    </li>
        <?php
                        }
        }
        ?>

            </ul>
        </div>
    </section>
@endsection
