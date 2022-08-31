@extends('site5.master')
@section('title','Team | Agency')
@section('content')
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    @foreach ($members as $employee)
                    <div class="col-lg-4">

                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{  asset('site5ssets/assets/img/team/'. $employee['image'])}}" alt="..." />
                            <h4>{{ $employee['name'] }}</h4>
                            <p class="text-muted">{{ $employee['major'] }}</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
         <!-- Clients-->

         <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    @foreach ($clients as $company)
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('site5ssets/assets/img/logos/'.$company['svg']) }}" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
@stop
