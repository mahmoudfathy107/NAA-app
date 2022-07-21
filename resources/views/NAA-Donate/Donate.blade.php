@extends('layouts.app')
@section('content')
<title>Donate</title><link rel="icon" href="{{ asset('assets/images/home_content/contact us icon-01.webp') }}">
<link rel="stylesheet" href="{{ asset('css/donate.css') }}">
  </head>
  <body class="donate-page">

        <div class="channelsBanner"> <img class="bgGlobal" src="assets/images/all_pages/newBgs4.webp" alt="background"><img class="bgGlobal" src="assets/images/all_pages/newBgs1.webp" alt="background">
          <div class="container">
            <div class="channelsContent"> <img src="assets/images/home_content/contact us icon-01.webp" alt="Donate icon">
              <h1 data-text="donate">Donate</h1>
            </div>
          </div>
        </div>
  </body>
</html>
<section class="donate-methods"><img class="donBG" src="../assets/images/all_pages/background2-01.webp" alt="donation background">
    <div class="container">
      <div class="main-methods">
        <div class="method">
          <h2 data-text="donate">Donate </h2>
          <p data-text="dott1">Help us to help you,</p>
          <p data-text="dott2">support us to grow,</p>
          <p data-text="dott3">share what we do, Move forward let's go.</p>
          <p data-text="ty">Thank you!</p>
        </div>
        <div class="method">
          <h2 class="withBg" data-text="donateSms">Donate By SMS: </h2>
          <p><span data-text="dottFill1">Please fill our</span><a href="#form"><span class="specBtn" data-text="ffoo">form</span></a> <span data-text="dottFil2"> below, and we will get in touch with you.</span></p>
          <p class="center" data-text="ty">Thank you!</p>
        </div>
        <div class="method">
          <h2 class="withBg" data-text="donatePhone">Donate By phone: </h2>
          <p><span data-text="dottFill1">Please fill our</span><a href="#form"><span class="specBtn" data-text="ffoo">form</span></a><span data-text="dottFil2"> below, and we will get in touch with you.</span></p>
          <p class="center" data-text="ty">Thank you!</p>
        </div>
        <div class="method center">
          <h3 data-text="donateBank">Donate with bank transfer</h3>
        </div>
      </div>
      <div class="other-methods">
        <h2 class="withBg" data-text="donateOther">Donate with other ways: </h2>
        <div class="methods">
          <div class="method">
            <h3 data-text="d7">transport donation</h3>
            <p data-text="d8">Donate a car, motorbike, or a bus pass tickets.<br>Thank you!</p>
          </div>
          <div class="method">
            <h3 data-text="d9">Fundraise</h3>
            <p data-text="d10">Have fun raising money for our vital work.<br>Thank you!</p>
          </div>
          <div class="method">
            <h3 data-text="d11">Sponsor any of our projects</h3>
            <p data-text="d12">Help us beat the hunger, blind following, child marriage... or any of our aims or projects.<br>Thank you!</p>
          </div>
          <div class="method">
            <h3 data-text="d13">Give your time</h3>
            <p data-text="d14">Got somespare time on our hands?<br>Volunteer with us!<br>Thank you!</p>
          </div>
          <div class="method">
            <h3 data-text="d15">Donate old things</h3>
            <p data-text="d16">That can be recycled such as clothes, accessories and gifts.<br>Thank you!</p>
          </div>
          <div class="method">
            <h3 data-text="d17">Advertise us</h3>
            <p data-text="d18">Marketing Tv ads, radio ads or transport ads.<br>Thank you!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="form">
    <div class="contact-form f-center"><img class="bg" src="assets/images/contact/contact us form-01.webp" alt="contact form">
        <div class="container">
          <div class="box">
            <div class="header f-center">
              <h2 class="center upper-case" data-text="contact">contact us</h2><img class="img-res" src="assets/images/all_pages/logo.webp" alt="logo">
            </div>
            <form class="form f-center" method="GET" action="{{ route('NAA-Donate.create') }}">
              <input id="inp_name" required type="text" name="name" placeholder="Name" data-text>
              <input id="inp_mail" required type="email" name="email" placeholder="Email" data-text>
              <textarea id="inp_msg" required name="message" placeholder="Message" data-text></textarea>
              <input type="number" required id="donationAmount"  name="donationAmount" placeholder="Amount" data-text>

              <div>

                <h2 data-text="mcqHeader">You need to contact us to:</h2>
                <div class="mcq">
                  <div class="item">
                    <input type="checkbox" id="workWithUs" name="workWithUs" >
                    <label for="workWithUs" data-text="workWithUs">Work with us</label>
                  </div>
                  <div class="item">
                    <input type="checkbox" id="getLegalAdvice" name="getLegalAdvice" >
                    <label for="getLegalAdvice" data-text="getLegalAdvice">Get legal advice</label>
                  </div>
                  <div class="item">
                    <input type="checkbox" id="advirtiseWithUs" name="advirtiseWithUs" >
                    <label for="advirtiseWithUs" data-text="advirtiseWithUs">Advirtise with us</label>
                  </div>
                  <div class="item">
                    <input type="checkbox" id="publishWithUs" name="publishWithUs" >
                    <label for="publishWithUs" data-text="publishWithUs">Publish with us</label>
                  </div>
                  <div class="item">
                    <input type="checkbox" id="takePicture" name="takePicture" >
                    <label for="takePicture" data-text="takePicture">Take pictures</label>
                  </div>
                  <div class="item">
                    <input type="checkbox" id="Donate" name="Donate" >
                    <label for="Donate" data-text="Donate">Donate</label>
                  </div>
                  <div class="item">
                    <input type="checkbox" id="WatchEpisodes" name="WatchEpisodes" >
                    <label for="WatchEpisodes" data-text="WatchEpisodes">Watch episodes</label>
                  </div>
                  <div class="item">
                    <input type="checkbox" id="butAbook" name="butAbook" >
                    <label for="butAbook" data-text="butAbook">Buy a book</label>
                  </div>
                  <div class="item">
                    <input type="checkbox" id="translate" name="translate" >
                    <label for="translate" data-text="translate">Translate</label>
                  </div>
                  <div class="item">
                    <input type="checkbox" id="other" name="other" >
                    <label for="other" data-text="other">Other</label>
                  </div>
                </div>
              </div>
              <input class="specBtn" id="submit" type="submit" data-text>
            </form>
          </div>
        </div>
      </div>
  </div>

  <div class="parags">
    <div class="container">
      <div class="parag">
        <h2 class="withBg" data-text="donatMsg">Donation Message:</h2>
        <p data-text="d1">Donate to refugees, victims and people with disabilities; to help them develop their talents or get a job. </p>
        <p data-text="d2">It is important for refugees and victims to re-integrate into society. </p>
        <p data-text="d3">You don't have to donate money, you can just give them the opportunity any way.</p>
      </div>
      <div class="parag">
        <h2 class="withBg" data-text="donors">Donors</h2>
        <h3 data-text="tyMsg"> My team and I would like to thank whoever supported us, even with the little things, because your support helps us keep going. </h3>
        <p data-text="d4">You help a lot of people and it means a lot to us.</p>
        <h3 data-text="ty">Thank you. </h3>
        <h3 data-text="tyall">Thanks everyone! </h3>
        <p data-text="d5">Some donors would be happy to post their pictures while donating to us, just to show how happy they are with us and our support, and also to encourage others to support us as they did. </p>
        <p data-text="d6">On the other hand, some donors prefer not to be in public performances. Whatever the way you prefer, is very meaningful to us and we really appreciate it.  </p>
      </div>
      <div class="parag2">
        <div class="donateImgs">
          <div class="container">
            <div class="cardBox">
              <div class="sweeper">
                <div class="swiper narrowSwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="img-res" src="./assets/images/donate/donate (2).webp" alt="donate/donate (2)" loading="lazy"/>
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
                      </div>
                    </div>
                    <div class="swiper-slide"><img class="img-res" src="./assets/images/donate/donate (3).webp" alt="donate/donate (3)" loading="lazy"/>
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
                      </div>
                    </div>
                    <div class="swiper-slide"><img class="img-res" src="./assets/images/donate/donate (1).webp" alt="donate/donate (1)" loading="lazy"/>
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
                      </div>
                    </div>
                    <div class="swiper-slide"><img class="img-res" src="./assets/images/donate/donate (5).webp" alt="donate/donate (5)" loading="lazy"/>
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
                      </div>
                    </div>
                    <div class="swiper-slide"><img class="img-res" src="./assets/images/donate/donate (4).webp" alt="donate/donate (4)" loading="lazy"/>
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
                      </div>
                    </div>
                    <div class="swiper-slide"><img class="img-res" src="./assets/images/donate/donate (6).webp" alt="donate/donate (6)" loading="lazy"/>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><img class="donBG" src="../assets/images/donate/background-01.webp" alt="donation background">
        <p data-text="d8">Some people donate a service, food, water, bags, clothes or money; and others donate prayers and encouragement. </p>
        <p data-text="d9">Whatever the way you support us, we appreciate it!</p>
      </div>
    </div>
  </div>
  <div class="swp"><img class="bgs img-res" src="./assets/images/all_pages/background1-01.webp" alt="bgs" loading="lazy"/><span class="bg-words">
      <p data-text="bgChoose"><span>C</span><span>h</span><span>o</span><span>o</span><span>s</span><span>e</span>
      </p>
      <p data-text="bgPress"><span>P</span><span>r</span><span>e</span><span>s</span><span>s</span>
      </p>
      <p data-text="bgCheck"><span>C</span><span>h</span><span>e</span><span>c</span><span>k</span>
      </p>
      <p data-text="bgEnjoy"><span>E</span><span>n</span><span>j</span><span>o</span><span>y</span>
      </p></span>
    <div class="container">
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
                  <button class="specBtn rct" data-text="ticket">Book your ticket</button>
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
                  <button class="specBtn rct" data-text="ticket">Book your ticket</button>
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
                  <button class="specBtn rct" data-text="ticket">Book your ticket</button>
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
                  <button class="specBtn rct" data-text="ticket">Book your ticket</button>
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
                  <button class="specBtn rct" data-text="ticket">Book your ticket</button>
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
