@extends('layouts.app')
@section('content')
<title>Shows Channel</title>
    <link rel="icon" href="assets/images/home_content/naa shows icon-01.webp"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/shows.css') }}">
  </head>
  <body>
    <div class="channelsBanner"> <img class="bgGlobal" src="assets/images/all_pages/newBgs4.webp" alt="background"/><img class="bgGlobal" src="assets/images/all_pages/newBgs1.webp" alt="background"/>
        <div class="container">
          <div class="channelsContent"> <img src="assets/images/home_content/naa shows icon-01.webp" alt="NAA Shows icon"/>
            <h1 data-text="shows">NAA Shows</h1>
          </div>
        </div>
      </div>
      <div class="vidShower">
        <iframe class="img-res" src="https://drive.google.com/file/d/1RhlQsmNN1B6jDKffl0nczC9CHMgaj1QC/preview" autoplay></iframe>
      </div>
      <div class="swp">
        <div class="cardBox">
          <div class="sweeper">
            <div class="swiper narrowSwiper3 swiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="img-res" src="assets/images/shows/showsPosters/alam_mwazy/2.webp" alt="alam_mwazy/2" loading="lazy" data-img="alam_mwazy_poster">
                  <div class="btns"> <a href="{{ route('NAA-alammwazy.index') }}">
                      <button class="specBtn" data-text="wtc">Watch Now</button></a></div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="assets/images/shows/showsPosters/crime/2.webp" alt="crime/2" loading="lazy" data-img="crime_poster">
                  <div class="btns"> <a href="{{ route('NAA-crime.index') }}">
                      <button class="specBtn" data-text="wtc">Watch Now</button></a></div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="assets/images/shows/showsPosters/ghita/2.webp" alt="ghita/2" loading="lazy" data-img="ghita_poster">
                  <div class="btns"> <a href="{{ route('NAA-ghita.index') }}">
                      <button class="specBtn" data-text="wtc">Watch Now</button></a></div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="assets/images/shows/showsPosters/hakmt_ElMahkma/2.webp" alt="hakmt_ElMahkma/2" loading="lazy" data-img="hakmt_ElMahkma_poster">
                  <div class="btns"> <a href="{{ route('NAA-hakmtElMahkma.index') }}">
                      <button class="specBtn" data-text="wtc">Watch Now</button></a></div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="assets/images/shows/showsPosters/khltbeta/2.webp" alt="khltbeta/2" loading="lazy" data-img="khltbeta_poster">
                  <div class="btns"> <a href="{{ route('NAA-khltbeta.index') }}">
                      <button class="specBtn" data-text="wtc">Watch Now</button></a></div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="assets/images/shows/showsPosters/kidSongs/2.webp" alt="kidSongs/2" loading="lazy" data-img="kidSongs_poster">
                  <div class="btns"> <a href="{{ route('NAA-kidSongs.index') }}">
                      <button class="specBtn" data-text="wtc">Watch Now</button></a></div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="assets/images/shows/showsPosters/nazly/2.webp" alt="nazly/2" loading="lazy" data-img="nazly_poster">
                  <div class="btns"> <a href="{{ route('NAA-nazly.index') }}">
                      <button class="specBtn" data-text="wtc">Watch Now</button></a></div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="assets/images/shows/showsPosters/rawy/2.webp" alt="rawy/2" loading="lazy" data-img="rawy_poster">
                  <div class="btns"> <a href="{{ route('NAA-rawy.index') }}">
                      <button class="specBtn" data-text="wtc">Watch Now</button></a></div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="assets/images/shows/showsPosters/roqeta/2.webp" alt="roqeta/2" loading="lazy" data-img="roqeta_poster">
                  <div class="btns"> <a href="{{ route('NAA-roqeta.index') }}">
                      <button class="specBtn" data-text="wtc">Watch Now</button></a></div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="globalBgShow"> <img src="assets/images/all_pages/newBgs1.webp" alt="background" loading="lazy"><img src="assets/images/all_pages/newBgs2.webp" alt="background" loading="lazy"></div>
<div class="globalBgShow"> <img src="assets/images/all_pages/newBgs1.webp" alt="background" loading="lazy"><img src="assets/images/all_pages/newBgs2.webp" alt="background" loading="lazy"></div>
<div class="welcome">
  <div class="container">
    <video class="img-res" id="gif" src="./assets/images/welcomePoster.mp4" alt="eng banner" loading="lazy" autoplay></video>
    <h2 class="center" id="welcome" data-text><span>W</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span>
    </h2>
    <div class="btns">
      <button class="specBtn" id="ticket" data-text>Book Your Ticket</button>
    </div>
  </div>
</div>
<div class="contact center">
  <div class="container">
    <div class="txt">
        <form method="GET" action="{{route('NAA-Index.create')}}">
            <input id="contactInp" required type="text" name="message" placeholder="Type your message here..." data-text>
            <button class="specBtn" id="contactBtn" type="submit" data-text="contact">Contact Us</button>
        </form>
    </div>
  </div>
</div>
@endsection
