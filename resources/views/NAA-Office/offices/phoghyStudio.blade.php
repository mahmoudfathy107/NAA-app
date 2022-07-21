@extends('layouts.app')
@section('content')
    <title>Photography Studio</title>
    <link rel="icon" href="../assets/images/office_content/photography studio icon-01.webp"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/officing.css"/>

  <body class="phoghyStudio-page">

    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/all_pages/newBgs4.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"/>
      <!-- FIXME banner img--><img class="img-res bgGlobal" src="../assets/images/longBanners/photoStudioEng.webp" data-img="banner_Photography Studio" alt="background"/>
    </div>
    <div class="defIcon">
      <div class="container">
        <div class="def f-center"> <img src="../assets/images/office_content/photography studio icon-01.webp" alt="channel icon"/>
          <h2 data-text="ic_phoghyStudio">Photography Studio</h2>
        </div>
      </div>
    </div>
    <div class="services">
      <div class="container">
        <div class="phog">
          <p class="bold" data-text="phoG_0">We have an elite of professional photographers, all over Egypt, with high skills including:</p>
          <p data-text="phoG_0a">creativity, artistic photography, Patience and focus, Document the details Strong communication skills ,Teamwork skills Organization, lighting, IDEAS CUSTOMER SATISFACTION. </p>
          <p class="bold" data-text="phoG_0b">You'd feel comfortable with us, as well as respect.</p>
          <p class="bold" data-text="phoG_0c">We also provide you:</p>
        </div>
        <div class="srvs f-center">
          <p data-text="phoG_1">Different cameras</p>
          <p data-text="phoG_2">professional lenses</p>
          <p data-text="phoG_3">Wedding Photography</p>
          <p data-text="phoG_4">Pregnancy photoshoot</p>
          <p data-text="phoG_5">Fashion Photography</p>
          <p data-text="phoG_6">outdoor photoshoot</p>
          <p data-text="phoG_7">Indoor photoshoot</p>
          <p data-text="phoG_8">Engagement Photography</p>
          <p data-text="phoG_9">graduation photoshoot</p>
          <p data-text="phoG_10">Kids Photography</p>
          <p data-text="phoG_11">Photoshoot before the wedding</p>
          <p data-text="phoG_12">Trips photoshoot</p>
          <p data-text="phoG_13">Product promotion photoshoot</p>
          <p data-text="phoG_14">Real Estate Photoration</p>
          <p data-text="phoG_15">spontaneous photoshoot</p>
          <p data-text="phoG_16">Party Photography</p>
          <p data-text="phoG_17">seminars and conferences photography.</p>
          <p data-text="phoG_18">family photoshoot</p>
        </div>
        <p data-text="phGX_1"><span class="bold">All photographers</span> are well-experienced in photography and editing, but if you choose a professional edit, the cost will vary. We have an elite of editors to ensure high quality. </p>
        <p data-text="phGX_2">You can choose the photographer, or you can appoint us to choose the most suitable and best for you, and each photographer has his own price, provided that communication should be through us, and if you communicate directly with the photographers, the company is not responsible for fraud or the quality of work.</p>
        <p data-text="phGX_3">You can also join us if you are a photographer. </p>
        <p data-text="phGX_4">In the event that you choose one of our offers, a deposit of 100 pounds will be paid for commitment at the time of sending the request.</p>
        <p data-text="phGX_5">In case you choose one of our offers, an agreement will be signed that both of us must not violate its terms. An annual subscription amount will be paid from you, as well as a nominal fee will be paid for submitting the request to ensure commitment, which is 50 non-refundable EGP.</p>
      </div>
    </div>
    <div class="graphers">
      <div class="container">
        <h2 data-text="ourPhog">Our Photographers:</h2>
        <div class="Phogers f-center">
          <div class="phooo figHover" data-grapher="Gomaa"><img class="img-res" src="../assets/images/office_content/photography/photographer1-01.webp" alt="photograper-1">
            <p data-text="phogper1">Ahmed Gomaa</p>
          </div>
          <div class="phooo figHover" data-grapher="zizo"><img class="img-res" src="../assets/images/office_content/photography/photographer 2-01.webp" alt="photograper-2">
            <p data-text="phogper2">Zizo Ali</p>
          </div>
        </div>
        <div class="imgGallery" data-grapher="Gomaa">
          <div class="sweeper">
            <div class="swiper wideSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="../assets/images/publish/read/book4-01.webp" alt=""></div>
                <div class="swiper-slide"><img src="../assets/images/publish/read/book6-01.webp" alt=""></div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
        <div class="imgGallery invisible" data-grapher="zizo">
          <div class="sweeper">
            <div class="swiper wideSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="../assets/images/publish/read/book1-01.webp" alt=""></div>
                <div class="swiper-slide"><img src="../assets/images/publish/read/book2-01.webp" alt=""></div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-form f-center"><img class="bg" src="../assets/images/office_content/contact_form-01.webp" alt="contact form">
      <div class="container">
        <div class="box">
          <div class="header f-center">
            <h2 class="center upper-case" data-text="pleaseFill">Please fill this form</h2><img class="img-res" src="../assets/images/all_pages/logo.webp" alt="logo">
          </div>
          <form class="form f-center" action="">
            <input id="inp_name" type="text" name="name" placeholder="Name" data-text>
            <input id="inp_mail" type="email" name="mail" placeholder="Email" data-text>
            <div class="fileInp newcho">
              <div class="choicess">
                <select id="browsers" name="caseType">
                  <option value="" selected data-text="phoG_1">Different cameras</option>
                  <option value="" data-text="phoG_2">professional lenses </option>
                  <option value="" data-text="phoG_3">Wedding Photography </option>
                  <option value="" data-text="phoG_4">Pregnancy photoshoot  </option>
                  <option value="" data-text="phoG_5">Fashion Photography </option>
                  <option value="" data-text="phoG_6">outdoor photoshoot</option>
                  <option value="" data-text="phoG_7">Indoor photoshoot </option>
                  <option value="" data-text="phoG_8">Engagement Photography </option>
                  <option value="" data-text="phoG_9">graduation photoshoot </option>
                  <option value="" data-text="phoG_10">Kids Photography </option>
                  <option value="" data-text="phoG_11">Photoshoot before the wedding</option>
                  <option value="" data-text="phoG_12">Trips photoshoot </option>
                  <option value="" data-text="phoG_13">Product promotion photoshoot </option>
                  <option value="" data-text="phoG_14">Real Estate Photoration  </option>
                  <option value="" data-text="phoG_15">spontaneous photoshoot </option>
                  <option value="" data-text="phoG_16">Party Photography</option>
                  <option value="" data-text="phoG_17">seminars and conferences photography. </option>
                  <option value="" data-text="phoG_18">family photoshoot </option>
                  <option value="" data-text="mcq_other">Other</option>
                </select>
              </div>
            </div>
            <textarea id="inp_msg" name="msg" placeholder="Message" data-text></textarea>
            <input class="specBtn" id="submit" type="submit" value="Send" data-text>
          </form>
        </div>
      </div>
    </div><img class="img-res globalBG" src="../assets/images/all_pages/newBgs3.webp" alt="background">
    <div class="swp"><img class="bgs img-res" src="../assets/images/all_pages/background1-01.webp" alt="bgs" loading="lazy"><span class="bg-words">
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
            <div class="swiper narrowSwiper swiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy">
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
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy">
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
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy">
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
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy">
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

    <script src="{{asset('js/toggleGraphers.js')}}"> </script>

    @endsection
