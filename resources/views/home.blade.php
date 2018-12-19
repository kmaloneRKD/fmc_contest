@extends('layouts.master')

@section('title', 'FMC Contest Entry Page')

@section('content')
    <div class="fmcLogo">
        <img src="{{ asset('/images/logos/fmclogo.png') }}">
    </div>

    <div class="row">
        <div class="col-12 slide--img">
            <div class="enterFlex">
                <img class="logo" src="{{ asset('/images/logos/contestlogo.png') }}">
                <a  class="enterhere" href="{{ url('/videos') }}">
                    <img src="{{ asset('/images/logos/enterhere.png') }}">
                </a>
            </div>
            <div class="enterFlex enterFlex--padfix">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            </div>
        </div>
    </div>
@stop

@section('background')
    <div class="sitebackground"></div>   
@stop
 