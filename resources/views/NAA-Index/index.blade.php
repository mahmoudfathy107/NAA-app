@extends('layouts.app')

@section('content')
<title>NAA World</title>
<link rel="icon" href="{{ asset('assets/images/all_pages/logo.webp') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  </head>
  <body>
    @if(isset($success))
    <div class="alert alert-success text-center">
        تم الدفع بنجاح
    </div>
    @endif

    @if(isset($fail))
        <div class="alert alert-danger text-center">
            فشلت عملية الدفع
        </div>
    @endif
    <section class="home">
      <div class="channelsBanner"> <img class="bgGlobal" src="assets/images/all_pages/newBgs4.webp" alt="background"><img class="bgGlobal" src="assets/images/all_pages/newBgs1.webp" alt="background"><img class="img-res" id="banner" src="./assets/images/home_content/naa world2-01.webp" alt="eng banner" data-img></div>
      <div class="container">
        <div class="vidShower">
          <iframe src="https://drive.google.com/file/d/1RhlQsmNN1B6jDKffl0nczC9CHMgaj1QC/preview?autoplay=1" allowfullscreen allow="autoplay"></iframe>
        </div>
        <div class="srvs">
          <h1 class="hollow center" id="srvs" data-text><span>N</span><span>A</span><span>A</span><span> </span><span>S</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span><span>s</span>
          </h1>
              <div class="srv-box f-center"> <a href="{{ Route('NAA-Channels.index') }}">
                  <div class="srv"> <img class="img-res" src="./assets/images/home_content/naa channels icon-01.webp" alt="NAA Channels icon">
                    <p id="channels" data-text>NAA Channels</p>
                  </div></a><a href="{{ Route('NAA-Shows.index') }}">
                  <div class="srv"> <img class="img-res" src="./assets/images/home_content/naa shows icon-01.webp" alt="NAA Shows icon">
                    <p id="shows" data-text>NAA Shows</p>
                  </div></a><a href="{{ Route('NAA-Office.index') }}">
                  <div class="srv"> <img class="img-res" src="./assets/images/home_content/naa offices icon-01.webp" alt="NAA Offices icon">
                    <p id="offices" data-text>NAA Offices</p>
                  </div></a><a href="{{ Route('NAA-ContactUS.index') }}">
                  <div class="srv"> <img class="img-res" src="./assets/images/home_content/contact us icon-01.webp" alt="Contact Us icon">
                    <p id="contact" data-text>Contact Us</p>
                  </div></a><a href="{{ Route('NAA-AboutUS.index') }}">
                  <div class="srv"> <img class="img-res" src="./assets/images/home_content/about us icon-01.webp" alt="About Us icon">
                    <p id="about" data-text>About Us</p>
                  </div></a><a href="{{ Route('NAA-Donate.index') }}">
                  <div class="srv"> <img class="img-res" src="./assets/images/home_content/dontae icon-01.webp" alt="Donate icon">
                    <p id="donate" data-text>Donate</p>
                  </div></a>
              </div>
        </div>
      </div>
          <div class="swp"><img class="bgs img-res" src="./assets/images/all_pages/background1-01.webp" alt="bgs" loading="lazy"><span class="bg-words">
                  <p id="bgChoose" data-text><span>C</span><span>h</span><span>o</span><span>o</span><span>s</span><span>e</span>
                  </p>
                  <p id="bgPress" data-text><span>P</span><span>r</span><span>e</span><span>s</span><span>s</span>
                  </p>
                  <p id="bgCheck" data-text><span>C</span><span>h</span><span>e</span><span>c</span><span>k</span>
                  </p>
                  <p id="bgEnjoy" data-text><span>E</span><span>n</span><span>j</span><span>o</span><span>y</span>
                  </p></span>
            <div class="container">
              <div class="cardBox">
                <div class="sweeper">
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                          <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/naa channels icon-01.webp" alt="home_content/naa channels icon-01" loading="lazy">
                            <div class="btns">
                              <div class="reacts">
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy">
                                  <p>Like</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy">
                                  <p>Love</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy">
                                  <p>Haha</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy">
                                  <p>Wow</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy">
                                  <p>Sad</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy">
                                  <p>Angry</p>
                                </div>
                              </div>
                              <button class="specBtn rct" data-text="rct">React</button>
                              <button class="specBtn rct" data-text="cmmt">Comment</button>
                            </div>
                          </div>
                          <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/naa shows icon-01.webp" alt="home_content/naa shows icon-01" loading="lazy">
                            <div class="btns">
                              <div class="reacts">
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy">
                                  <p>Like</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy">
                                  <p>Love</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy">
                                  <p>Haha</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy">
                                  <p>Wow</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy">
                                  <p>Sad</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy">
                                  <p>Angry</p>
                                </div>
                              </div>
                              <button class="specBtn rct" data-text="rct">React</button>
                              <button class="specBtn rct" data-text="cmmt">Comment</button>
                            </div>
                          </div>
                          <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/naa offices icon-01.webp" alt="home_content/naa offices icon-01" loading="lazy">
                            <div class="btns">
                              <div class="reacts">
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy">
                                  <p>Like</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy">
                                  <p>Love</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy">
                                  <p>Haha</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy">
                                  <p>Wow</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy">
                                  <p>Sad</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy">
                                  <p>Angry</p>
                                </div>
                              </div>
                              <button class="specBtn rct" data-text="rct">React</button>
                              <button class="specBtn rct" data-text="cmmt">Comment</button>
                            </div>
                          </div>
                          <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/contact us icon-01.webp" alt="home_content/contact us icon-01" loading="lazy">
                            <div class="btns">
                              <div class="reacts">
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy">
                                  <p>Like</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy">
                                  <p>Love</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy">
                                  <p>Haha</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy">
                                  <p>Wow</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy">
                                  <p>Sad</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy">
                                  <p>Angry</p>
                                </div>
                              </div>
                              <button class="specBtn rct" data-text="rct">React</button>
                              <button class="specBtn rct" data-text="cmmt">Comment</button>
                            </div>
                          </div>
                          <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/about us icon-01.webp" alt="home_content/about us icon-01" loading="lazy">
                            <div class="btns">
                              <div class="reacts">
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy">
                                  <p>Like</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy">
                                  <p>Love</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy">
                                  <p>Haha</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy">
                                  <p>Wow</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy">
                                  <p>Sad</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy">
                                  <p>Angry</p>
                                </div>
                              </div>
                              <button class="specBtn rct" data-text="rct">React</button>
                              <button class="specBtn rct" data-text="cmmt">Comment</button>
                            </div>
                          </div>
                          <div class="swiper-slide"><img class="img-res" src="./assets/images/home_content/dontae icon-01.webp" alt="home_content/dontae icon-01" loading="lazy">
                            <div class="btns">
                              <div class="reacts">
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531171/XZOPuv9_eyqlr2.png" alt="Like" loading="lazy">
                                  <p>Like</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/uIjLl6R_cmbnqb.png" alt="Love" loading="lazy">
                                  <p>Love</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/lsHmtDy_ycqnbp.png" alt="Haha" loading="lazy">
                                  <p>Haha</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531177/s475u9d_o8trbg.png" alt="Wow" loading="lazy">
                                  <p>Wow</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531172/JJuD9qb_a7gkmu.png" alt="Sad" loading="lazy">
                                  <p>Sad</p>
                                </div>
                                <div class="circle"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1492531178/VDM3zOV_qy9fqj.png" alt="Angry" loading="lazy">
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
      <div class="bgsW"><img class="img-res" src="assets/images/all_pages/newBgs1.webp" alt="background"></div>
      <div class="contact center">
        <div class="container">
          <div class="txt">
            <form method="GET" action="{{route('NAA-Index.create')}}">
                <input id="contactInp" required type="text" name="message" placeholder="Type your message here..." data-text>
                <br>
                <button class="specBtn" id="contactBtn" type="submit" data-text="contact">Contact Us</button>
            </form>


        </div>
        </div>
      </div>
      <div id="showPayForm"></div>

      <div class="bgsF"><img class="img-res" src="assets/images/all_pages/newBgs2.webp" alt="background"><img class="img-res" src="assets/images/all_pages/newBgs3.webp" alt="background"></div>
    </section>


@endsection

