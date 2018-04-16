@extends('layouts.pageLayout')
@section('content')
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h4 class="font-alt mb-0">Contact Us</h4>
                    <hr class="divider-w mt-10 mb-20">
                    <div class="row multi-columns-row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-phone"></span></div>
                                <h3 class="features-title font-alt">{{DB::table('user')->value('contact_no')}}</h3>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-envelope"></span></div>
                                <h5>{{DB::table('user')->value('email')}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-map-pin"></span></div>
                                <h3 class="features-title font-alt">{{DB::table('user')->value('address')}}</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection