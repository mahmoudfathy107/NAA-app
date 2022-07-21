@extends('layouts.app')
@section('content')
<title>Contact Us</title>
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

<body class="contact-page">

        <div class="channelsBanner"> <img class="bgGlobal" src="assets/images/all_pages/newBgs4.webp" alt="background"><img class="bgGlobal" src="assets/images/all_pages/newBgs1.webp" alt="background">
          <div class="container">
            <div class="channelsContent"> <img src="assets/images/home_content/contact us icon-01.webp" alt="Contact Us icon">
              <h1 data-text="contact">Contact Us</h1>
            </div>
          </div>
        </div>
  </body>
</html>
<div class="info">
  <div class="container">
    <div class="icons">
      <div class="box f-center"><img src="assets/images/contact/number icon-01.webp" alt="phone icon" loading="lazy">
        <div class="text">
          <p>+021010571215</p>
          <p>+447707195705</p>
        </div>
      </div>
      <div class="box f-center"><img src="assets/images/contact/location icon-01.webp" alt="phone icon" loading="lazy">
        <div class="text">
          <p data-text="cairo">Cairo - Egypt</p>
          <p data-text="london">London - UK</p>
        </div>
      </div>
      <div class="box f-center"><img src="assets/images/contact/email icon-01.webp" alt="phone icon" loading="lazy">
        <div class="text">
          <p>aishaabdelmaguid@naaworld.uk</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="contact-form f-center"><img class="bg" src="assets/images/contact/contact us form-01.webp" alt="contact form">
  <div class="container">
    <div class="box">
      <div class="header f-center">
        <h2 class="center upper-case" data-text="contact">contact us</h2><img class="img-res" src="assets/images/all_pages/logo.webp" alt="logo">
      </div>
      <form class="form f-center" method="GET" action="{{ route('NAA-ContactUS.create') }}">
        <input id="inp_name" required type="text" name="name" placeholder="Name" data-text>
        <input id="inp_mail" required type="email" name="email" placeholder="Email" data-text>
        <textarea id="inp_msg" required name="message" placeholder="Message" data-text></textarea>
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
<div class="parags">
  <div class="container">
    <div class="parag">
      <h2 data-text="fTerms">Terms & Conditions: </h2>
      <p>By using www.naaworld.uk, you agree to these terms and conditions. In case you don't agree, you might not be able to use the site. <br> We welcome all your comments as long as the site's policies and rregulations are applied.</p>
      <h3>Terms of using the site: </h3>
      <p>You acknowledge and undertake the full responsibility about subscribing or paying to view any work on the site, or to use any particular service.<br> You also undertake that you won't copy, download, repost, reproduce, adapt, or extract any part of the site's content. You also can't cut, broadcast or transmit any content on the site in any way or any means of communication without a prior authorization from us.<br> violating any of our terms would be illegal as we have the intellectual property right for all the contents of the site including; dolls, works, literature, videos and all designs. Any violation for our rights will expose you to legal and criminal liability.<br> We are not obligated to return any of the prepaid subscription fees as long as you used the service provided on the site.</p>
      <p>The whole responsibility lies on the advertiser in case they advertise or present what they don't own without a prior permission from the owner, impersonate a real or unreal person in any way, bother, cause inconvenience or promote unpleasant things.</p>
      <p>We have the copyright and intellectual property right for all the contents on the site.  </p>
    </div>
    <div class="parag">
      <h2 data-text="fPolicy">Privacy policy:</h2>
      <p>You take great care of your privacy and security.<br>We are committed to all our offers, gifts or competitions<br>We are working to deliver a lofty goal to the spectator or the recipient of the service<br>We work not to disturb others<br>We work to keep all data confidential </p>
      <p>We reserve the legal right to terminate your participation in the use of the site in the event of any breach or violation of the terms in accordance with the terms and provisions<br>We are working to deliver the service well, but the failure or the weakness of the Internet is not considered by the beneficiary, which in turn affects the access to the service well, one of the reasons that the site bears because this is not due to a technical malfunction and it is outside the control of the site and returns to the customerYour subscription to the site only allows you to view all the works on the site with its complete sub-pages and all services and all offers for a certain period of time that you specify, but it does not allow you to enjoy the services you saw It does not allow you to watch videos or receive any of the services unless you have paid for that serviceHowever, if the service is paid for, it is only available for the period of use specified by you Paying a ticket to watch a video is not a right to watch another video, but the purchase of each service separately and the .subscription of each video separately.</p>
      <p>We wish you a good viewing<br>And comprehensive service</p>
    </div>
    <div class="parag">
      <h2 data-text="fAD">Advertise with us:</h2>
      <h3>(This ad is very important to you)</h3>
      <p>If you have a talent or a doctor or a lawyer<br>If you are an engineer, chef, actor..or the owner of an idea of any kind, a restaurant, a shop, an atelier, a dress, an artist, a poet, or anything you love<br>Or the owner of a factory or a company if you are distinguished in any field Would you like to appear on our program talking about your field Or do an advertisement for your job or be a sponsor Also, if you would like to show a video about you, your work, or anything, or photos, if you are an actor or talented beginner or celebrity. We welcome you to our programs.<br>On our website and channels.</p>
      <p>And in very sweet offers to program guests.</p>
      <h3>((Lets go don't wait ..don't miss the opportunity))</h3>
      <p>In your hands, you remain famous, achieve your success, and prove yourself<br>Those who like to make an advertisement contact us and there are very nice offers.</p>
    </div>
  </div>
</div><img class="bgcontF" src="assets/images/all_pages/newBgs1.webp" alt="background">
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
