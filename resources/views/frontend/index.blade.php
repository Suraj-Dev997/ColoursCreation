@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div id="intro" class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>We are specializ in</h4>
                    <h2>All type of photography</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>We are specializ in</h4>
                    <h2>All type of photography</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>We are specializ in</h4>
                    <h2>All type of photography</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest Work</h2>
                        <a href="{{ url('/gallery') }}">View all Images <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="wrapper">


                        <figure>
                            <div class="post-image"><img src="https://unsplash.it/400/300/?random" /></div>
                            <div class="post-image"><img src="https://unsplash.it/800/600/?random" /></div>
                        </figure>
                        <figure>
                            <div class="post-image"><img src="https://unsplash.it/900/400/?random" /></div>
                        </figure>

                        <figure>
                            <div class="post-image"><img src="https://unsplash.it/375/250/?random" /></div>
                            <div class="post-image"><img src="https://unsplash.it/396/264/?random" /></div>
                            <div class="post-image"><img src="https://unsplash.it/399/266/?random" /></div>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About Photography Studio</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Which Equipment we use?</h4>

                        <ul class="featured-list">
                            <li><a href="#">Canon Eos 51g Mark IV 24-105mrn</a></li>
                            <li><a href="#">Manfrotto Compact Tripod</a></li>
                            <li><a href="#">Canon EF100-4001AM Lens</a></li>
                            <li><a href="#"> Nikon DS 24-70mm</a></li>
                            <li><a href="#">Canon EF100-4001AM Lens</a></li>
                        </ul>
                        <a href="{{ url('/about') }}" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{ url('frontend/assets/images/feature-image.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#intro").owlCarousel({

                // Most important owl features

                //Autoplay
                autoplay: 5000,
                stopOnHover: false
            )
        }
    </script>
@endsection
