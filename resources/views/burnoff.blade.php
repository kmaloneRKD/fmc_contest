@extends('layouts.master')

@section('title', 'FMC Contest Entry Page')

@section('content')
    <div class="row">
        <div class="col col-lg-10 col-md-12 mx-auto">
            <div class="gatorGrid gatorGrid--burnFix">
                <div class="topSection">
                    <div class="bayou_logoback">
                        <img src="{{ asset('/images/logos/bayou_contest_logo.png') }}">
                    </div>
                    <div class="burnoff_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="fieldSection">
                    <div id="player"></div>
                </div>
            </div>
        </div>
    </div>


        
<script src="http://www.youtube.com/player_api"></script>

<script>

    // create youtube player
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
          width: '640',
          height: '390',
          videoId: '{{ $videoId }}',
          events: {
            onReady: onPlayerReady,
            onStateChange: onPlayerStateChange
          },
          playerVars: { 
        'controls': 0,
        'showinfo': 0
        }
        });
    }

    // autoplay video
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // when video ends
    function onPlayerStateChange(event) {        
        if(event.data === 0) {          
            window.location = BASE_URL + 'form';
        }
    }

</script>
@stop

@section('background')
    <div class="burnoff"></div>   
@stop
 