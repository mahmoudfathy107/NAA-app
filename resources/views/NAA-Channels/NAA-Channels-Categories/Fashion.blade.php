@extends('layouts.app')
@section('content')
    <title>Fashion</title>
    <link rel="icon" href="../assets/images/channels/fashion.webp">
    <link rel="stylesheet" href="../css/chans.css">
    <link rel="stylesheet" href="../css/Chan-Fashion.css">
  </head>
  <body class="fashion-page">
    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/channels/BG Fashion-01.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/newBgs1.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"/>
        <div class="container">
          <div class="channelsContent"> <img src="../assets/images/channels/fashion.webp" alt="fashion icon"/>
            <h1 data-text="fashion">NAA Fashion</h1>
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
                      <button class="specBtn" data-text="wtc" style="background-color: #e80089">watch</button>
                    </div>
                  </div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa shows icon-01.webp" alt="home_content/naa shows icon-01" loading="lazy"/>
                    <div class="btns">
                      <button class="specBtn" data-text="wtc" style="background-color: #e80089">watch</button>
                    </div>
                  </div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa offices icon-01.webp" alt="home_content/naa offices icon-01" loading="lazy"/>
                    <div class="btns">
                      <button class="specBtn" data-text="wtc" style="background-color: #e80089">watch</button>
                    </div>
                  </div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/contact us icon-01.webp" alt="home_content/contact us icon-01" loading="lazy"/>
                    <div class="btns">
                      <button class="specBtn" data-text="wtc" style="background-color: #e80089">watch</button>
                    </div>
                  </div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/about us icon-01.webp" alt="home_content/about us icon-01" loading="lazy"/>
                    <div class="btns">
                      <button class="specBtn" data-text="wtc" style="background-color: #e80089">watch</button>
                    </div>
                  </div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/dontae icon-01.webp" alt="home_content/dontae icon-01" loading="lazy"/>
                    <div class="btns">
                      <button class="specBtn" data-text="wtc" style="background-color: #e80089">watch</button>
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
          <p data-text="chP9">Our channel isn't a usual one because it combines all kinds of art…</p>
          <p data-text="chP91">We're presenting you fashion, besides giving you tips for how to have a better appearance. Also, we're having a celebrity person for each episode, and we're going to get through different topics that may have your concern.  </p>
          <p data-text="chP92">As we care about how our fans feel, we are having a part of our episode, especially, for figuring out solutions for your problems. Besides sharing us your problems, you can also share us your products that are related to beauty, fashion or art. We're going to advertise your products and help them come out to light. </p>
          <p data-text="chP93">We also have competitions and valuable prizes that you'll like a lot.</p>
          <p data-text="chP94">Follow us on the Pink NAA channel. With a new episode every week.</p>
        </div>
      </div>
      <div class="contact-form f-center"><img class="bg" src="../assets/images/channels/fashion contact us-01.webp" alt="contact form"/>
        <div class="container">
          <div class="box">
            <div class="header f-center">
              <h2 class="center upper-case" data-text="contact">contact us</h2><img class="img-res" src="../assets/images/channels/fashion.webp" alt="logo"/>
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
