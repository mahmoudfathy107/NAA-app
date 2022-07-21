@extends('layouts.app')
@section('content')
    <title>News</title>
    <link rel="icon" href="../assets/images/channels/news.webp">
    <link rel="stylesheet" href="../css/chans.css">
    <link rel="stylesheet" href="../css/Chan-news.css">
  </head>
  <body class="news-page">
    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/channels/BG news-01.webp" alt="background"><img class="bgGlobal" src="../assets/images/all_pages/newBgs1.webp" alt="background"><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background">
      <div class="container">
        <div class="channelsContent"> <img src="../assets/images/channels/news.webp" alt="news icon">
          <h1 data-text="news">news</h1>
        </div>
      </div>
    </div>
    <div class="swp"><img class="bgs img-res" src="../assets/images/all_pages/background1-01.svg" alt="bgs" loading="lazy"/><span class="bg-words">
        <p data-text="bgChoose">Choose</p>
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
                    <button class="specBtn rct" data-text="wtc" style="background-color: #d4151d">Watch</button>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa shows icon-01.webp" alt="home_content/naa shows icon-01" loading="lazy"/>
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
                    <button class="specBtn rct" data-text="wtc" style="background-color: #d4151d">Watch</button>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/naa offices icon-01.webp" alt="home_content/naa offices icon-01" loading="lazy"/>
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
                    <button class="specBtn rct" data-text="wtc" style="background-color: #d4151d">Watch</button>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/contact us icon-01.webp" alt="home_content/contact us icon-01" loading="lazy"/>
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
                    <button class="specBtn rct" data-text="wtc" style="background-color: #d4151d">Watch</button>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/about us icon-01.webp" alt="home_content/about us icon-01" loading="lazy"/>
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
                    <button class="specBtn rct" data-text="wtc" style="background-color: #d4151d">Watch</button>
                  </div>
                </div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/home_content/dontae icon-01.webp" alt="home_content/dontae icon-01" loading="lazy"/>
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
                    <button class="specBtn rct" data-text="wtc" style="background-color: #d4151d">Watch</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<div class="para">
  <div class="container">
    <h2 data-text="chanAbout">About the channel:</h2>
    <p>If you are a follower of the news, interested in children's behavior and passionate about guess and filter competitions, and you love terror day or night, then follow us on the channel </p>
    <p>NAA NEWS for news, </p>
    <p>NAA News </p>
    <p>Or you can call it NAA Al-Hamra, Iowa Al-Hamra, because its logo is all red stripes  </p>
    <h2>NAA NEWS </h2>
    <p>A social news, showing you a program of batter with sauce, a program consisting of four paragraphs, The first paragraph is the paragraph of Aisha and Peace in Opinions. It discusses a social situation such as underage marriage, spinsterhood and other cases.</p>
    <p>And the second paragraph is a group of women By showing you all the news, goodbye to life and the event and also the day, With Shellat Sitat, you have all kinds of news, sports, art and fashion, politics, YouTube, weather, all news that you can refer to the family group on WhatsApp,</p>
    <p>And the third paragraph, I am different, discussing the behavior of our children and trying to treat their condition and ours. And the fourth paragraph, guess, falsify with Umm Massad, and competitions for you and her guardian, you can win from her and learn new information. All this is on the program "Mixing with Sauce" on NAA news channel, Hamra from a group of channels </p>
    <h2>NAA Network</h2>
    <p>And we don't forget you, ask about fear and love horror, we will present it to you on a plate of Dahab with the FM Horror program</p>
    <p>On the NAA news channel, Hamra, and real terrifying stories that won't make you or she sleep, if your heart is frozen, follow Fm Horror on NAA news </p>
    <p>If your heart is weak, sleep lightly</p>
  </div>
</div>
<div class="contact-form f-center"><img class="bg" src="../assets/images/channels/news contact us-01.webp" alt="contact form">
  <div class="container">
    <div class="box">
      <div class="header f-center">
        <h2 class="center upper-case" data-text="contact">contact us</h2><img class="img-res" src="../assets/images/channels/news.webp" alt="logo">
      </div>
      <form class="form f-center" method="Get" action="{{ route('NAA-Index.create') }}">
        @csrf
        <input id="inp_name" required type="text" name="name" placeholder="Name" data-text="inp_name">
        <input id="inp_mail" required type="email" name="email" placeholder="Email" data-text="inp_mail">
        <textarea id="inp_msg" required name="message" placeholder="Message" data-text="inp_msg"></textarea>
        <input class="specBtn" id="submit" type="submit" value="Send" data-text>
      </form>
    </div>
  </div>
</div>
@endsection
