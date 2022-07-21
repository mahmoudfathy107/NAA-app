@extends('layouts.app')
@section('content')
    <title>About the foundation</title>
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
  <body class="foundation-page">
        <div class="channelsBanner"> <img class="bgGlobal" src="assets/images/all_pages/newBgs4.webp" alt="background"><img class="bgGlobal" src="assets/images/all_pages/newBgs1.webp" alt="background">
          <div class="container">
            <div class="channelsContent"> <img src="assets/images/all_pages/logo.webp" alt="About the foundation icon">
              <h1 data-text="found_about">About the foundation</h1>
            </div>
          </div>
        </div>
  </body>
</html>
<div class="parags">
  <div class="container">
    <div class="parag">
      <h2 data-text="Who">Who are we:</h2>
      <p data-text="WhoT">We are a foundation and a fully integrated entity that covers the world: we have a group of diverse channels (entertainment, educational, cultural, news, religious) and we have a full team specialized in advertising and media at the highest level in a creative and attractive way.</p>
    </div>
  </div>
</div>
<div class="writings">
  <div class="container">
    <h2 data-text="fn1">We Promote and Announce:</h2>
    <p data-text="fn1X">Products, places, paper and electronic books, newspapers, people and talents, New and inspiring ideas, and everything that deserves to come out to the public.</p>
    <h2 data-text="fnGoal">Our Goals:</h2>
    <p data-text="fn1Y">To provide purposeful and enjoyable content away from the low quality content, we raise important and controversial issues differently, we By highlighting popular topics and discussing them in a civilized manner, we introduce ideas that build a society Simply put, we reconstruct the awareness and culture that was buried a long time ago and revive it again.</p>
    <h2 data-text="fn2">Publishing and Distributing:</h2>
    <p data-text="fn2X">We have a publishing house, we publish, distribute, print and translate, publish books and distribute them locally and internationally. Lowest costs and a high level of service.</p>
    <h2 data-text="fnGoal">Our Goals:</h2>
    <p data-text="fn2Y">To spread as much culture as possible, and to allow the whole world to participate and learn about other cultures, and Also, highlighting and presenting literary talents that deserve opportunities and exposing them to the whole world.</p>
    <h2 data-text="fn3">Legal Consulting and Law Firm:</h2>
    <p data-text="fn3X">We have an elite of senior law professors, specializing in all branches of international law and local law, whether, in the Arab and European countries abroad, we receive all international, civil, and criminal cases and lawsuits Personal and military statuses, and the termination of all legal procedures with governmental and non-governmental agencies, And the completion of the registration procedures with the real estate registry and the real estate registry. We offer legal advice, Through a legal advisor or several advisors, to follow up on all legal issues.</p>
    <h2 data-text="fnGoal">Our Goals:</h2>
    <p data-text="fn3Y">To gather lawyers at the international level, whether Arabs or foreigners. Providing access to a lawyer Online to obtain legal advice online, saves the effort and the hassle of travel. Providing services under constant monitoring and follow-up to ensure the level of service and customer satisfaction.</p>
    <h2 data-text="fn4">Research Institute:</h2>
    <p data-text="fn4X">Research services are provided to researchers, postgraduate students, master's and doctoral dissertation owners, on They differ in their fields to help them complete their scientific career and overcome all the problems that may arise You face them in the various academic tasks entrusted to them, from preparing research and papers, and we have an elite of Academic researchers specializing in various fields.</p>
    <h2 data-text="fnGoal">Our Goals:</h2>
    <p data-text="fn4Y">Providing the largest possible assistance to the student, by preparing scientific research and papers that can be published, whether for The promotion or a knowledge balance that supports the student's scientific career.<br>Meeting the needs of students about preparing the scientific papers necessary to apply for seminars, conferences, and research Promotions in various disciplines, and providing them in both Arabic and English with the best quality and highest accuracy. Gathering all the student's assistance needs in one place and with the highest possible quality.<br>We are an entity and an institution that aims to change, build and provide services at the highest levels. We aim to be Always at the top.</p>
  </div><img src="assets/images/all_pages/newBgs3.webp" alt="background"><img src="assets/images/all_pages/newBgs2.webp" alt="background">
</div>
<div class="contact-form f-center"><img class="bg" src="assets/images/office_content/contact_form-01.webp" alt="contact form">
  <div class="container">
    <div class="box">
      <div class="header f-center">
        <h2 class="center upper-case" data-text="contact">contact us</h2><img class="img-res" src="./assets/images/all_pages/logo.webp" alt="logo">
      </div>
      <form class="form f-center" method="GET"  action="{{route('NAA-Index.create')}}">
        <input id="inp_name" required type="text" name="name" placeholder="Name" data-text>
        <input id="inp_mail" required type="email" name="email" placeholder="Email" data-text>
        <textarea id="inp_msg" required name="message" placeholder="Message" data-text></textarea>
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
