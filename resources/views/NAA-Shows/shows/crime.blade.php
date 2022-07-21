@extends('layouts.app')
@section('content')
    <title>Crime-Fantasy</title>
    <link rel="icon" href="../assets/images/channels/drama.webp"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/Showwing.css"/>
    <link rel="stylesheet" href="../css/Showwing2.css"/>

  <body class="crime-page">

    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/channels/BG drama-01.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/newBgs1.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"/>
      <!-- FIXME banner img--><img class="img-res bgGlobal" src="../assets/images/longBanners/crimeBannerEng.webp" data-img="banner_Crime-Fantasy" alt="background"/>
    </div>
    <div class="vidShower">
      <iframe src="https://drive.google.com/file/d/1RhlQsmNN1B6jDKffl0nczC9CHMgaj1QC/preview?autoplay=1" allowfullscreen="allowfullscreen" allow="autoplay"></iframe>
    </div>
    <div class="box">
      <div class="container">
        <h2 data-text="chars">Crime Fantasy Characters:</h2>
        <div class="cardBox">
          <div class="sweeper">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa channels icon-01.webp" alt="character" loading="lazy">
                  <div class="btns pp">
                    <p class="center bold" data-text="CRchars1">Sharifa Al-Sherif</p>
                    <p class="center" data-text="CRchars1a">A nervous, smart, well-educated lawyer who never accepts defeat, and would do her best to win the case at all costs.</p>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa shows icon-01.webp" alt="character" loading="lazy">
                  <div class="btns pp">
                    <p class="center bold" data-text="CRchars2">Hazem Al-Masiry</p>
                    <p class="center" data-text="CRchars2a">He is a Public Prosecutor that is looking for the truth and wants to defeat Sharifa; believing that what she presents is false and that he is right. He is calm and smart.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="duoBgs"></div>
    <div class="box">
      <div class="container">
        <h2 data-text="parts">Crime Fantasy Parts:</h2>
        <div class="teasers">
          <div class="tea f-center"> <img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="teaser">
            <div class="txt">
              <h3 class="center" data-text="CRparts1">Read the Incident!</h3>
              <p class="center" data-text="CRparts1a">It's about real legal crimes with a sense of fantasy.</p>
            </div>
          </div>
          <div class="tea f-center">
            <div class="shelt-imgs"><img class="img-res" src="../assets/images/shows/shelt stat poster-01.webp" alt="teaser"></div>
            <div class="txt t2">
              <h3 class="center" data-text="CRparts2">Judgement after Deliberation</h3>
              <p data-text="CRparts2a">It is the debate and pleading part in which Sharifa and Hazem plead legally with conclusive evidence. who has is right? And who will win?!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="container">
        <h2 data-text="wtcEpos">Watch Crime Fantasy episodes:</h2>
        <div class="episodes">
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=Crime-Fantasy&amp;ep=1"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 1</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=Crime-Fantasy&amp;ep=2"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 2</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=Crime-Fantasy&amp;ep=3"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 3</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=Crime-Fantasy&amp;ep=4"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 4</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=Crime-Fantasy&amp;ep=5"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 5</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=Crime-Fantasy&amp;ep=6"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 6</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg2"> <img class="bgGlobal" src="../assets/images/all_pages/newBgs3.webp" alt="background"></div>
    <div class="box">
      <div class="container">
        <h2 data-text="comics">Comics:</h2>
        <div class="cardBox comccs">
          <div class="sweeper">
            <div class="swiper narrowSwiper swiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="character" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="character" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="character" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="character" loading="lazy"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg1"> <img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"></div>
    <div class="welcome">
      <div class="container">
        <video class="img-res" id="gif" src="../assets/images/welcomePoster.mp4" alt="eng banner" loading="lazy" autoplay="autoplay"></video>
        <h2 class="center" data-text="welcome"><span>W</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span>
        </h2>
        <div class="btns">
          <button class="specBtn" data-text="ticket">Book Your Ticket</button>
        </div>
      </div>
    </div>
    <div class="contact center">
      <div class="container">
        <div class="txt">
            <form method="GET" action="{{ route('NAA-Index.create') }}">
                <input id="contactInp" required type="text" name="message" placeholder="Type your message here..." data-text="data-text"/>
                <button class="specBtn" type="submit" id="contactBtn" data-text="contact">Contact Us</button>
              </form>
        </div>
      </div>
    </div>
@endsection
