@extends('site5.master')
@section('title','Portfolio | Agency')
@section('content')
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    @foreach( $portfolios as $portfolio)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('site5ssets/assets/img/portfolio/'. $portfolio['image'])}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $portfolio['caption-heading'] }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $portfolio['caption-subheading'] }}</div>
                            </div>
                        </div>

                </div>
                     @endforeach
            </div>
        </section>
@stop
