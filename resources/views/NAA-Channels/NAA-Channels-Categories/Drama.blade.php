@extends('layouts.app')
@section('content')
<title>NAA Drama</title>
<link rel="icon" href="../assets/images/channels/drama.webp"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<link rel="stylesheet" href="../css/chans.css"/>

<body class="drama-page">

<div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/channels/BG drama-01.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/newBgs1.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"/>
  <div class="container">
    <div class="channelsContent"> <img src="../assets/images/channels/drama.webp" alt="drama icon"/>
      <h1 data-text="drama">NAA Drama</h1>
    </div>
  </div>
</div>
<div class="swp"><img class="bgs img-res" src="../../assets/images/all_pages/background1-01.webp" alt="bgs" loading="lazy"/><span class="bg-words">
    <p data-text="bgChoose">Chooseee</p>
    <p data-text="bgPress">Press</p>
    <p data-text="bgCheck">Check</p>
    <p data-text="bgEnjoy">Enjoy</p></span>
  <div class="container">
    <div class="cardBox">
      <div class="sweeper">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa channels icon-01.webp" alt="home_content/naa channels icon-01" loading="lazy"/>
              <div class="btns">
                <button class="specBtn" data-text="wtc" style="background-color: #1557a6">watch</button>
              </div>
            </div>
            <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa shows icon-01.webp" alt="home_content/naa shows icon-01" loading="lazy"/>
              <div class="btns">
                <button class="specBtn" data-text="wtc" style="background-color: #1557a6">watch</button>
              </div>
            </div>
            <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa offices icon-01.webp" alt="home_content/naa offices icon-01" loading="lazy"/>
              <div class="btns">
                <button class="specBtn" data-text="wtc" style="background-color: #1557a6">watch</button>
              </div>
            </div>
            <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/contact us icon-01.webp" alt="home_content/contact us icon-01" loading="lazy"/>
              <div class="btns">
                <button class="specBtn" data-text="wtc" style="background-color: #1557a6">watch</button>
              </div>
            </div>
            <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/about us icon-01.webp" alt="home_content/about us icon-01" loading="lazy"/>
              <div class="btns">
                <button class="specBtn" data-text="wtc" style="background-color: #1557a6">watch</button>
              </div>
            </div>
            <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/dontae icon-01.webp" alt="home_content/dontae icon-01" loading="lazy"/>
              <div class="btns">
                <button class="specBtn" data-text="wtc" style="background-color: #1557a6">watch</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="para">
  <div class="container">
    <h2 data-text="chanAbout">About the channel:</h2>
    <p data-text="chP1">If you're into Drama and excitement, follow us on the blue NAA Drama and keep up with the episodes of our series; (Hakamat El-Mahkama), The law in its new form. </p>
    <p data-text="chP2">There's also the series; (Crime fantasy), (the law doesn't justify who is right but who has the proof).</p>
    <p data-text="chP3">You'll get to watch a realistic drama and real cases. You'll also get to know law provisions and loopholes to be more familiar with law.</p>
    <p data-text="chP4">You'll enjoy with the play (Parallel World) soon. </p>
    <p data-text="chP5">All of that and more will be on the blue channel, NAA Drama! </p>
  </div>
</div>
<div class="contact-form f-center"><img class="bg" src="../assets/images/channels/drama contact-01-01.webp" alt="contact form"/>
  <div class="container">
    <div class="box">
      <div class="header f-center">
        <h2 class="center upper-case" data-text="contact">contact us</h2><img class="img-res" src="../assets/images/channels/drama.webp" alt="logo"/>
      </div>
      <form class="form f-center" method="GET" action="{{ route('NAA-Index.create') }}">
        <input id="inp_name" required type="text" name="name" placeholder="Name" data-text="inp_name"/>
        <input id="inp_mail" required type="email" name="email" placeholder="Email" data-text="inp_mail"/>
        <textarea id="inp_msg" required name="message" placeholder="Message" data-text="inp_msg"></textarea>
        <input class="specBtn" id="submit" type="submit" value="Send" data-text="data-text"/>
      </form>
    </div>
  </div>
</div>
@endsection

