@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
  </head>
  <body class="about-page">
        <div class="channelsBanner"> <img class="bgGlobal" src="assets/images/all_pages/newBgs4.webp" alt="background"><img class="bgGlobal" src="assets/images/all_pages/newBgs1.webp" alt="background">
          <div class="container">
            <div class="channelsContent"> <img src="assets/images/home_content/about us icon-01.webp" alt="About Us icon">
              <h1 data-text="about">About Us</h1>
            </div>
          </div>
        </div>
  </body>
</html>
<section class="founder">
  <div class="container">
    <div class="f-boxes"><a class="box" href="{{ route('NAA-Foundation.index') }}"> <img src="assets/images/all_pages/logo.webp" alt="logo">
        <p data-text="found_about">About the foundation</p></a><a class="box" href="{{ route('NAA-Founder.index') }}"><img src="assets/images/about/FOUNDER_ICON-01.webp" alt="founder">
        <p data-text="founder_about">About the founder</p></a></div>
  </div>
</section>
<div class="contact-form f-center"><img class="bg" src="assets/images/office_content/contact_form-01.webp" alt="contact form">
  <div class="container">
    <div class="box">
      <div class="header f-center">
        <h2 class="center upper-case" data-text="contact">contact us</h2><img class="img-res" src="assets/images/all_pages/logo.webp" alt="logo">
      </div>
      <form class="form f-center" method="GET"  action="{{route('NAA-Index.create')}}">
        <input id="inp_name" type="text" name="name" placeholder="Name" data-text>
        <input id="inp_mail" type="email" name="email" placeholder="Email" data-text>
        <textarea id="inp_msg" name="message" placeholder="Message" data-text></textarea>
        <input class="specBtn" id="submit" type="submit" value="Send" data-text>
      </form>
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
                        <button class="specBtn rct" data-text="ticket">Book your ticket</button>
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
                        <button class="specBtn rct" data-text="ticket">Book your ticket</button>
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
                        <button class="specBtn rct" data-text="ticket">Book your ticket</button>
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
                        <button class="specBtn rct" data-text="ticket">Book your ticket</button>
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
                        <button class="specBtn rct" data-text="ticket">Book your ticket</button>
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
                        <button class="specBtn rct" data-text="ticket">Book your ticket</button>
                      </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 @endsection
