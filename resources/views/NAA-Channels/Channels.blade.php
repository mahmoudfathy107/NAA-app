@extends('layouts.app')
@section('content')
<title>NAA Channels</title>
<link rel="icon" href="assets/images/home_content/naa channels icon-01.webp">
<link rel="stylesheet" href="{{ asset('css/channels.css') }}">
  </head>
  <body>

        <div class="channelsBanner"> <img class="bgGlobal" src="assets/images/all_pages/newBgs4.webp" alt="background"><img class="bgGlobal" src="assets/images/all_pages/newBgs1.webp" alt="background">
          <div class="container">
            <div class="channelsContent"> <img src="assets/images/home_content/naa channels icon-01.webp" alt="NAA Channels icon">
              <h1 data-text="channels">NAA Channels</h1>
            </div>
          </div>
        </div>
  </body>
</html>
<div class="channelSlider">
  <div class="container">
    <div class="sliderItems f-center">
         <a href="{{ route('NAA-Drama.index') }}">
            <img class="img-res" id="ch_drama" src="assets/images/channels/drama.webp" alt="drama channel" data-text="قناة الدراما"></a>
            <a href="{{ route('NAA-Fashion.index') }}"><img class="img-res" id="ch_fashion" src="assets/images/channels/fashion.webp" alt="fashion channel" data-text="قناة الموضة"></a><a href="{{ route('NAA-Islamophobia.index') }}"><img class="img-res" id="ch_islam" src="assets/images/channels/islamophobia.webp" alt="islamophobia channel" data-text="قناة الاسلاموفوبيا"></a><a href="{{ route('NAA-Kids.index') }}"><img class="img-res" id="ch_kids" src="assets/images/channels/kids.webp" alt="kids channel" data-text="قناة الاطفال"></a><a href="{{ route('NAA-News.index') }}"><img class="img-res" id="ch_news" src="assets/images/channels/news.webp" alt="news channel" data-text="قناة الأخبار"></a><a href="{{ route('NAA-Poams.index') }}"><img class="img-res" id="ch_poem" src="assets/images/channels/kids.webp" alt="news channel" data-text="قناة الأخبار"></a><a href="channels/_photography.html"><img class="img-res" id="ch_photog" src="assets/images/channels/photography.webp" alt="photography channel" data-text="قناة التصوير"></a><a href="channels/_publishing_house.html"><img class="img-res" id="ch_publish" src="assets/images/channels/publishing_house.webp" alt="publishing_house channel" data-text="قناة النشر"></a><a href="channels/_researches.html"><img class="img-res" id="ch_research" src="assets/images/channels/researches.webp" alt="researches channel" data-text="قناة الابحاث"></a><a href="channels/_solicitors.html"><img class="img-res" id="ch_solicitor" src="assets/images/channels/solicitors.webp" alt="solicitors channel" data-text="قناة المحامون"></a><a href="{{ route('NAA-Talents.index') }}"><img class="img-res" id="ch_talents" src="assets/images/channels/talents.webp" alt="talents channel" data-text="قناة المواهب"></a>
    <div class="content">
        <h2 class="center" data-text="">Channel Name</h2>
        <div class="cardBox">
          <div class="sweeper">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/naa channels icon-01.webp" alt="home_content/naa channels icon-01" loading="lazy"/>
                  <div class="btns">
                    <div class="reacts">
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy"/>
                        <p>Like</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy"/>
                        <p>Love</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy"/>
                        <p>Haha</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy"/>
                        <p>Wow</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy"/>
                        <p>Sad</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy"/>
                        <p>Angry</p>
                      </div>
                    </div>
                    <button class="specBtn rct" data-text="rct">React</button>
                    <button class="specBtn rct" data-text="cmmt">Comment</button>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/naa shows icon-01.webp" alt="home_content/naa shows icon-01" loading="lazy"/>
                  <div class="btns">
                    <div class="reacts">
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy"/>
                        <p>Like</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy"/>
                        <p>Love</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy"/>
                        <p>Haha</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy"/>
                        <p>Wow</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy"/>
                        <p>Sad</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy"/>
                        <p>Angry</p>
                      </div>
                    </div>
                    <button class="specBtn rct" data-text="rct">React</button>
                    <button class="specBtn rct" data-text="cmmt">Comment</button>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/naa offices icon-01.webp" alt="home_content/naa offices icon-01" loading="lazy"/>
                  <div class="btns">
                    <div class="reacts">
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy"/>
                        <p>Like</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy"/>
                        <p>Love</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy"/>
                        <p>Haha</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy"/>
                        <p>Wow</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy"/>
                        <p>Sad</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy"/>
                        <p>Angry</p>
                      </div>
                    </div>
                    <button class="specBtn rct" data-text="rct">React</button>
                    <button class="specBtn rct" data-text="cmmt">Comment</button>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/contact us icon-01.webp" alt="home_content/contact us icon-01" loading="lazy"/>
                  <div class="btns">
                    <div class="reacts">
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy"/>
                        <p>Like</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy"/>
                        <p>Love</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy"/>
                        <p>Haha</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy"/>
                        <p>Wow</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy"/>
                        <p>Sad</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy"/>
                        <p>Angry</p>
                      </div>
                    </div>
                    <button class="specBtn rct" data-text="rct">React</button>
                    <button class="specBtn rct" data-text="cmmt">Comment</button>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/about us icon-01.webp" alt="home_content/about us icon-01" loading="lazy"/>
                  <div class="btns">
                    <div class="reacts">
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy"/>
                        <p>Like</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy"/>
                        <p>Love</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy"/>
                        <p>Haha</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy"/>
                        <p>Wow</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy"/>
                        <p>Sad</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy"/>
                        <p>Angry</p>
                      </div>
                    </div>
                    <button class="specBtn rct" data-text="rct">React</button>
                    <button class="specBtn rct" data-text="cmmt">Comment</button>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/dontae icon-01.webp" alt="home_content/dontae icon-01" loading="lazy"/>
                  <div class="btns">
                    <div class="reacts">
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy"/>
                        <p>Like</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy"/>
                        <p>Love</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy"/>
                        <p>Haha</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy"/>
                        <p>Wow</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy"/>
                        <p>Sad</p>
                      </div>
                      <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy"/>
                        <p>Angry</p>
                      </div>
                    </div>
                    <button class="specBtn rct" data-text="rct">React</button>
                    <button class="specBtn rct" data-text="cmmt">Comment</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="welcome">
  <div class="container">
    <video class="img-res" id="gif" src="./assets/images/welcomePoster.mp4" alt="eng banner" loading="lazy" autoplay></video>
    <h2 class="center" data-text="welcome"><span>W</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span>
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

<script src="{{ asset('js/channels.js') }}"></script>

@endsection
