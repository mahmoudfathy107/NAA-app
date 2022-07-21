@extends('layouts.app')
@section('content')
    <title>Read</title>
    <link rel="icon" href="../assets/images/publish/read icon-01.webp"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/officing.css"/>
    <link rel="stylesheet" href="../css/publish.css"/>

  <body class="read-page">

    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/all_pages/newBgs4.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"/>
      <!-- FIXME banner img-->
    </div>
    <div class="defIcon">
      <div class="container">
        <div class="def f-center"> <img src="../assets/images/publish/read icon-01.webp" alt="channel icon"/>
          <h2 data-text="pub_srv3">Read</h2>
        </div>
      </div>
    </div>
    <div class="bookShower"><img class="img-res bg" src="../assets/images/publish/read/shelf-01.webp" alt="shalt background">
      <div class="swp">
        <div class="cardBox">
          <div class="sweeper">
            <div class="swiper narrowSwiper2 swiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="bookCover img-res" src="../assets/images/publish/read/book1-01.webp" alt="book1-01" loading="lazy" data-book="https://exploringjs.com/impatient-js/downloads/impatient-js-preview-book.pdf">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-slide"><img class="bookCover img-res" src="../assets/images/publish/read/book2-01.webp" alt="book2-01" loading="lazy" data-book="https://exploringjs.com/impatient-js/downloads/impatient-js-preview-book.pdf">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-slide"><img class="bookCover img-res" src="../assets/images/publish/read/book 3-01.webp" alt="book 3-01" loading="lazy" data-book="https://exploringjs.com/impatient-js/downloads/impatient-js-preview-book.pdf">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-slide"><img class="bookCover img-res" src="../assets/images/publish/read/book4-01.webp" alt="book4-01" loading="lazy" data-book="https://exploringjs.com/impatient-js/downloads/impatient-js-preview-book.pdf">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-slide"><img class="bookCover img-res" src="../assets/images/publish/read/book5-01.webp" alt="book5-01" loading="lazy" data-book="https://exploringjs.com/impatient-js/downloads/impatient-js-preview-book.pdf">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-slide"><img class="bookCover img-res" src="../assets/images/publish/read/book6-01.webp" alt="book6-01" loading="lazy" data-book="https://exploringjs.com/impatient-js/downloads/impatient-js-preview-book.pdf">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fisP">
      <div class="container">
        <p class="withBg" data-text="pubWithUsP1">From sky to sky words can fly, to release you from bad thoughts or beliefs,</p><br>
        <p data-text="pubWithUsP2">To let you know without roots you can't get tree leaves</p><br>
        <p data-text="pubWithUsP3">To grow our community you should have knowledge,</p><br>
        <p data-text="pubWithUsP4">It is not an excuse that you have been in the college.</p>
      </div>
    </div>
    <div class="writings">
      <div class="container">
        <div class="writingSec">
          <div class="sec f-center"><img class="img-res" src="../assets/images/publish/read/coming soon icon-01.webp" alt="aisha">
            <div class="text">
              <h2 data-text="ic_pubHouse">Publishing House</h2>
              <p class="soon" data-text="soon">Coming Soon</p>
            </div>
          </div>
          <div class="sec f-center"><img class="img-res" src="../assets/images/publish/read/aishaa abdelmaguid icon-01.webp" alt="aisha">
            <div class="text">
              <h2 class="bold" data-text="Who_ff">Aisha Abdelmaguid</h2>
              <p data-text="WhoT_ff">The owner of NAA with all its channels and branches.</p>
              <p data-text="brief">High appeal lawyer and state council at Egyptian Bar association. High appeal lawyer and state council at Egyptian Bar association. Member of the Human Rights and Liberty Committee of the Arab Lawyers Union Member of the International Relations Committee of the Arab Lawyers Union. Writer and author of the Arab Writers Union. Author and researcher at the Arab Writers Union. Family and immigration lawyer in UK.</p><a href="{{ route('NAA-writer.index') }}">
                <button class="specBtn" data-text="rdMore">Read More</button></a>
            </div>
          </div>
          <div class="sec f-center"><img class="img-res" src="../assets/images/publish/read/coming soon icon-01.webp" alt="aisha">
            <div class="text">
              <h2 data-text="ic_pubHouse">Publishing House</h2>
              <p class="soon" data-text="soon">Coming Soon</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pubHead">
      <div class="container">
        <div class="cardBox">
          <div class="sweeper">
            <div class="swiper pubSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="content">
                    <div class="text">
                      <h2 class="bold" data-text="pub_h1">NAA publishing and Distribution </h2>
                      <p data-text="pub_h2">We're an integrated cultural project that connects the writer and reader. We're going to figure out the outstanding writers to distribute, publish and advertise all the good works. Also, we're going to do online publishing and printed magazines, and we're going to be the beacon through which the world will know them. </p>
                      <p data-text="pub_h3">For the readers, we're being the lens that monitors whatever is related to the literary or scientific works to make it easier for you to find whatever goes with your interests.  </p>
                      <p data-text="pub_h4">You'll find us in every cultural event, by the side of any literary talent, monitoring, evaluating, analyzing, and answering all your questions.  </p>
                      <p data-text="pub_h5">Watch our program, (El-Rawy's Family) on the purple NAA channel to enjoy and learn from the stories and information that we present. You'll also find reviews on the good works to help you choose good content to read.</p>
                    </div>
                    <div class="poster">
                      <div class="swiper-button-next-unique"></div><img class="img-res" src="../assets/images/publish/pub_poster/EngPoster.webp" alt="publish poster" data-img="pub_poster">
                      <div class="swiper-button-prev-unique"></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="content">
                    <div class="text">
                      <h2 class="bold center" data-text="pub_h6">Sponsored By</h2>
                    </div>
                    <div class="poster">
                      <div class="swiper-button-next-unique"></div><img class="img-res" src="../assets/images/publish/pub_poster/rawyEng.webp" alt="publish poster" data-img="pub_poster_rawy" loading="lazy">
                      <div class="swiper-button-prev-unique"></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="content">
                    <div class="text">
                      <!-- FIXME-->
                      <h2 class="bold center" data-text="pub_h7">Donate Now</h2>
                    </div>
                    <div class="poster">
                      <div class="swiper-button-next-unique"></div><img class="img-res" src="../assets/images/publish/pub_poster/donate pic-01.webp" alt="publish poster" loading="lazy">
                      <div class="swiper-button-prev-unique"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><img class="img-res globalBG" src="../assets/images/all_pages/newBgs3.webp" alt="background"/>
    <div class="swp"><img class="bgs img-res" src="../assets/images/all_pages/background1-01.webp" alt="bgs" loading="lazy"/><span class="bg-words">
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
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy"/>
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
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy"/>
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
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy"/>
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
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/aisha wel salam poster-01.webp" alt="shows/aisha wel salam poster-01" loading="lazy"/>
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
