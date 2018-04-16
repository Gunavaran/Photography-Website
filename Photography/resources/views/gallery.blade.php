@extends('layouts.pageLayout')
@section('content')
    <section class="module bg-dark-60 portfolio-page-header"
             data-background="{{URL::asset('storage/gallery.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Welcome To Our Gallery</h2>
                    <div class="module-subtitle font-serif">"To me, photography is an art of observation. It’s about
                        finding something interesting in an ordinary place…
                        I’ve found it has little to do with the things you see and everything to do with the way you see
                        them."
                        [Elliott Erwitt]
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="filter font-alt" id="filters">

                        <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
                        <?php
                        use App\Http\Models\Category;
                        use App\Http\Models\Photo;
                        use Intervention\Image\Facades\Image;
                        $categories = Category::where('status', '1')->get();
                        foreach($categories as $category){
                        ?>
                        <li><a class="wow fadeInUp" href="#" data-filter=".{{$category->category_name}}"
                               data-wow-delay="0.2s">{{$category->category_name}}</a>
                        </li>

                        <?php

                        }
                        ?>
                    </ul>
                </div>
            </div>

            <ul class="works-grid works-grid-gut works-hover-w" id="works-grid">
                <?php
                $categories = Category::where('status', '1')->get();
                foreach($categories as $category){
                    $photos = Photo::where('category',$category->category_name)->get();
                    foreach ($photos as $photo) {
                        $galleryPath = $photo->gallerythumb_path;
                ?>
                <li class="work-item &nbsp; {{$category->category_name}}">
                        <div class="work-image"><img src="{{URL::asset($galleryPath)}}"
                                                     alt="Portfolio Item"/></div>
                        {{--###############If caption is needed######################--}}
                    <div class="work-caption font-alt">
                            <h3 class="work-title">{{$category->category_name}}</h3>
                            {{--<div class="work-descr">Illustration</div>--}}
                        </div>

                </li>

                <?php
                    }
                }
                ?>

            </ul>
        </div>
    </section>

@endsection