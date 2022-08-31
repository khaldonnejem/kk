@extends('site5.master')
@section('title','About | Agency')
@section('content')
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    @foreach ($images as $photo )
                    <li>

                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('site5ssets/assets/img/about/'.$photo['image'])}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                {{-- {{ $photo['timeline-heading'] }}
                                {{ $photo['subheading'] }} --}}
                                <h4>{{ $photo['timeline-heading'] }}</h4>
                                <h4 class="subheading">{{ $photo['subheading'] }}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{ $photo['text'] }}</p></div>
                        </div>
                    </li>
                    @endforeach


                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                khaldon
                                <br />
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
@stop
