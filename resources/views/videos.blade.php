@extends('layouts.master')

@section('title', 'FMC Contest Entry Page')

@section('content')
    <div class="fmcPeppers">
        <img src="{{ asset('/images/logos/fmcPeppers.png') }}">
    </div>

    <div class="row">
        <div class="col col-lg-10 col-md-12 mx-auto">
            <div class="gatorGrid">
                <div class="topSection">
                    <div class="bayou_logoback">
                        <img src="{{ asset('/images/logos/bayou_contest_logo.png') }}">
                    </div>
                    <div class="clearfix"></div>
                    <div class="bayou_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                
                <div class="videoSection">
                    <div class="videoBlock">
                        <a href="{{ url('/burnoff') }}?videoId=0Bmhjf0rKe8">
                            <img src="{{ asset('/images/assets/videoPlayer.png') }}">
                        </a>
                        <p class="video__subtext">Watch an adorable cat.</p>
                    </div>
                    <div class="videoBlock">
                        <a href="{{ url('/burnoff') }}?videoId=CaNqtD0MDvE">
                            <img src="{{ asset('/images/assets/videoPlayer.png') }}">
                        </a>
                        <p class="video__subtext">Watch FMC's herbicide virtual tour.</p>
                    </div>
                    <div class="videoBlock">
                        <a href="{{ url('/burnoff') }}?videoId=HYWUWg47WII">
                            <img src="{{ asset('/images/assets/videoPlayer.png') }}">
                        </a>
                        <p class="video__subtext">Learn how to floss.</p>
                    </div>
                    <div class="videoBlock">
                        <a href="{{ url('/burnoff') }}?videoId=NrI-UBIB8Jk">
                            <img src="{{ asset('/images/assets/videoPlayer.png') }}">
                        </a>
                        <p class="video__subtext">Listen to 'Hooked on a Feeling'.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('background')
    <div class="gatorking"></div>   
@stop
 