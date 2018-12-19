@extends('layouts.master')

@section('title', 'FMC Contest Entry Page')

@section('content')
    <div class="fmcLogo thanks--fmc">
        <img src="{{ asset('/images/logos/fmclogo.png') }}">
    </div>

    <div class="row">
        <div class="col col-lg-10 col-md-12 mx-auto">
            <div class="gatorGrid gatorGrid--burnFix gatorGrid--thanksFix">
                <div class="topSection">
                    <div class="bayou_logoback">
                        <img src="{{ asset('/images/logos/bayou_contest_logo.png') }}">
                    </div>
                    <div class="clearfix"></div>
                    <div class="thanks_text">
                        <p>Thank You!</p>
                    </div>
                    <div class="thanks_subtext">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="thanks__logos">
        <div class="container container--wfix">
            <div class="row">
                <div class="col-12 logoFlex">
                    <img src="{{ asset('/images/logos/express1.png') }}">
                    <img src="{{ asset('/images/logos/express2.png') }}">
                    <img src="{{ asset('/images/logos/express3.png') }}">
                    <img src="{{ asset('/images/logos/express4.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

<div class="container thanks__btm">
    <div class="row">
        <div class="col-12">
            <p class="please__share">
                Please Share
            </p>

            <div class="social">
                <img src="{{ asset('/images/logos/instagram.png') }}">
                <img src="{{ asset('/images/logos/facebook.png') }}">
                <img src="{{ asset('/images/logos/twitter.png') }}">
            </div>

            <div class="low__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>

@stop

@section('background')
    <div class="grayburn"></div>   
@stop
 