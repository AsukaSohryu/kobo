@extends('layout.layout')

@section('content')
<style>
    .card {
        position: relative;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        display: flex;
        align-items: start;
        justify-content: start;
    }

    .sticker-top-right{
        position: absolute;
        top: 0;
        right: 0;
        width: 88px;
        height: 66px;
        text-align: center;
        line-height: 80px;
        font-weight: bold;
        border-radius: 50%;
        transform: translate(30%, -30%); /* Make it appear as a rotated sticker */
    }
    .sticker-top-left{
        position: absolute;
        top: 0;
        right: 0;
        width: 88px;
        height: 66px;
        text-align: center;
        line-height: 80px;
        font-weight: bold;
        border-radius: 50%;
        transform: translate(-380%, -30%); /* Make it appear as a rotated sticker */
    }
    .sticker-mid-right{
        position: absolute;
        top: 0;
        right: 0;
        width: 88px;
        height: 66px;
        text-align: center;
        line-height: 80px;
        font-weight: bold;
        border-radius: 50%;
        transform: translate(30%, 125%); /* Make it appear as a rotated sticker */
    }
</style>

<section id="section1">
    <div class="container">
        <div class="row" style="margin-top: 100px">
            <div class="col d-flex justify-content-center flex-column align-items-center">
                {{-- <img src="{{url('/')}}/assets/img/balon-removebg.png" alt="" style="height: 346px; width: 600px; z-index: 10"> --}}
                <img src="{{url('/')}}/assets/img/coms/kobo-main-full.png" alt="" style="height: 500px ;width: 675.75px ;z-index: 5; ">
                {{-- <img src="{{url('/')}}/assets/img/habede-nobg.png" alt="" style="height: 250px; width: 350px; margin-top: -55px; z-index: 1;"> --}}
            </div>
            <div class="col d-flex align-items-center">
                <div class="text-center" style="background-color: #5F94B6; border-radius: 16px; padding: 16px; opacity:85%; font-family: 'Caveat Brush', cursive; font-weight: 500; font-style: normal; font-size: 20px;">
                    <p class="text-white">
                        Happy 4th Birthday Mori Calliope! This website was created
                        to encapsulate your fans' love for their Mori.
                        <br class="newline" />
                        Over 200 Dead Beats have come together to wish you the
                        happiest of birthdays!
                        <br class="newline" />
                        Please enjoy everyone's heartfelt words, art, sounds, &
                        videos at your leisure. We also hope you enjoy the GIFT for
                        you!!!
                        <br class="newline" />
                        Also, a small group of Dead Beats have booked a special
                        surprise for you on a certain billboard in Shinjuku, Tokyo!
                        Have fun checking it all out below!
                        <br />
                        <br />

                        Thank you for everything! We will never forget Our Mori!
                        <br class="newline" />
                        Site Project Managers: @ArkahnX & @JPRSNSR
                        <br class="newline" />
                        Banner Art: OtoriP (@4thdeviljoker)
                    </p>
                </div>
            </div>
        </div>
        {{-- <div id="audio-player">
            <audio id="audio-player-element" autoplay controls>
                <source src="{{url('/')}}/assets/music/song1.mp3" type="audio/mp3">a
                Your browser does not support the audio element.
            </audio>

            <button id="next-song">Next Song</button>
            <button id="prev-song">Previous Song</button>
        </div> --}}
        <div class="row" style="margin-top: 50px">
            @foreach($form as $f)
                <div class="col-sm-12 col-md-4 col-xl-4 p-4">
                    @if($f->image != null)
                    <div class="card">
                        <img src="{{url('/')}}/assets/img/coms/top-left-sticker.PNG" class="sticker-top-left" alt="top left image">
                        <img src="{{url('/')}}/assets/img/coms/mid-right-sticker.PNG" class="sticker-top-right" alt="top right image">
                        <img src="{{ asset('storage/image/' . $f->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $f->name }}</h5>
                            <p class="card-text">{{ $f->message }}</p>
                        </div>
                    </div>
                    @else
                    <div class="card">
                        <img src="{{url('/')}}/assets/img/coms/top-left-sticker.PNG" class="sticker-top-left" alt="top left image">
                        <img src="{{url('/')}}/assets/img/coms/mid-right-sticker.PNG" class="sticker-top-right" alt="top right image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $f->name }}</h5>
                            <p class="card-text">{{ $f->message }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>

    // List of songs to play
    const songs = [
        'song1.mp3',
        'song2.mp3',
        'song3.mp3',
    ];

    let currentSongIndex = 0;
    const audioPlayer = document.getElementById('audio-player-element');
    const nextButton = document.getElementById('next-song');
    const prevButton = document.getElementById('prev-song');

    // Function to update the song
    function updateSong() {
        audioPlayer.src = `{{url('/')}}/assets/music/${songs[currentSongIndex]}`;
        audioPlayer.play();
    }

    // Play next song
    nextButton.addEventListener('click', () => {
        currentSongIndex = (currentSongIndex + 1) % songs.length;
        updateSong();
    });

    // Play previous song
    prevButton.addEventListener('click', () => {
        currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
        updateSong();
    });

    audioPlayer.addEventListener('ended', () => {
        currentSongIndex = (currentSongIndex + 1) % songs.length;
        updateSong();
    });

    // Initial song load
    updateSong();

</script>
@endsection