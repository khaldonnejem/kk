@extends('site5.master')
@section('title','Home | Agency')
@section('content')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{ route('site5.services') }}">Tell Me More</a>
            </div>
        </header>
@stop
