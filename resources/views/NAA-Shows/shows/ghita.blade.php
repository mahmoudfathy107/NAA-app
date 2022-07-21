@extends('layouts.app')
@section('content')
    <title>Ghita</title>
    <link rel="icon" href="../assets/images/channels/kids.webp"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/Showwing.css"/>

  <body class="ghita-page">

    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/channels/BG kids-01.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/newBgs1.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"/>
      <!-- FIXME banner img--><img class="img-res bgGlobal" src="../assets/images/longBanners/GhetiaEng.webp" data-img="banner_Ghita" alt="background"/>
    </div>
    <div class="vidShower">
      <iframe src="https://drive.google.com/file/d/1RhlQsmNN1B6jDKffl0nczC9CHMgaj1QC/preview?autoplay=1" allowfullscreen="allowfullscreen" allow="autoplay"></iframe>
    </div>
    <h1 class="center" data-text="soon">SOON!!</h1>
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
    <div class="duoBgs"></div>
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
