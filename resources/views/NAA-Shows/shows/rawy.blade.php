@extends('layouts.app')
@section('content')
    <title>ElRawy-Family</title>
    <link rel="icon" href="../assets/images/channels/publishing_house.webp"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/Showwing.css"/>
    <link rel="stylesheet" href="../css/Showwing2.css"/>
  </head>
  <body class="rawy-page">

    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/channels/Rawy Family Bg-01.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/newBgs1.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"/>
      <!-- FIXME banner img--><img class="img-res bgGlobal" src="../assets/images/longBanners/ElrawyEngBanner.webp" data-img="banner_ElRawy-Family" alt="background"/>
    </div>
    <div class="vidShower">
      <iframe src="https://drive.google.com/file/d/1RhlQsmNN1B6jDKffl0nczC9CHMgaj1QC/preview?autoplay=1" allowfullscreen="allowfullscreen" allow="autoplay"></iframe>
    </div>
    <div class="box">
      <div class="container">
        <h2 data-text="chars">El-Rawy Family Characters:</h2>
        <div class="cardBox">
          <div class="sweeper">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa channels icon-01.webp" alt="character" loading="lazy">
                  <div class="btns pp">
                    <p class="center bold" data-text="RWYchars1">Grandpa Madbouly</p>
                    <p class="center" data-text="RWYchars1a">Although he is illiterate, he inherited his love to books from his ancestors. He tries hard to spread ethics and morals, that've been gone, and bring them back to be passed down through generations.</p>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa channels icon-01.webp" alt="character" loading="lazy">
                  <div class="btns pp">
                    <p class="center bold" data-text="RWYchars2">Lolita Al-Rawy</p>
                    <p class="center" data-text="RWYchars2a">She is Madbouly's daughter who lives with her husband and daughter in her dad's house. She is a hardworking and well-educated journalist. She reports whatever is new about literature, and is always up-to-date with all cultural events.</p>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa channels icon-01.webp" alt="character" loading="lazy">
                  <div class="btns pp">
                    <p class="center bold" data-text="RWYchars3">Adel Al-Rawy</p>
                    <p class="center" data-text="RWYchars3a">A journalist; he works with his wife. He Knows all the good new books; besides he figures out talented young writers.</p>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa channels icon-01.webp" alt="character" loading="lazy">
                  <div class="btns pp">
                    <p class="center bold" data-text="RWYchars4">Hoor Al-Rawy</p>
                    <p class="center" data-text="RWYchars4a">A 9 years old child who lives with her parents in her grandpa's house. She likes books like the rest of her family, she tells children the useful stories that her grandpa tells her; so, they get to learn from them.</p>
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
        <h2 data-text="parts">El-Rawy Family Parts:</h2>
        <div class="teasers">
          <div class="tea f-center"> <img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="teaser">
            <div class="txt">
              <h3 class="center" data-text="RWYparts1">In the first one, we talk about an influential character, association, book, product, etc..</h3>
            </div>
          </div>
          <div class="tea f-center">
            <div class="shelt-imgs"><img class="img-res" src="../assets/images/shows/shelt stat poster-01.webp" alt="teaser"></div>
            <div class="txt">
              <h3 class="center t2" data-text="RWYparts2">In the second one, we aim to spread culture, books and knowledge by going through different books. </h3>
            </div>
          </div>
          <div class="tea f-center"> <img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="teaser">
            <div class="txt">
              <h3 class="center" data-text="RWYparts3">The last one is about children literature. </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="container">
        <h2 data-text="wtcEpos">Watch El-Rawy Family episodes:</h2>
        <div class="episodes">
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=ElRawy-Family&amp;ep=1"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 1</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=ElRawy-Family&amp;ep=2"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 2</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=ElRawy-Family&amp;ep=3"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 3</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=ElRawy-Family&amp;ep=4"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 4</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=ElRawy-Family&amp;ep=5"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
            <p><span data-text="epis">episode</span> 5</p>
            <div class="btns">
              <button class="specBtn" data-text="buy">Buy Now</button>
            </div>
          </div>
          <div class="ep"><a class="imgCover" href="../watch/watch.html?progName=ElRawy-Family&amp;ep=6"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="episode"><img class="img-res" src="../assets/images/shows/video box-01.webp" alt="episode"></a>
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
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy"></div>
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
