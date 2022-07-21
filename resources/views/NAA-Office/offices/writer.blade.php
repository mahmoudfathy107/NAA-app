@extends('layouts.app')
@section('content')
    <title>Writer</title>
    <link rel="icon" href="../assets/images/publish/read icon-01.webp"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/officing.css"/>
    <link rel="stylesheet" href="../css/publish.css"/>

  <body class="writer-page">

    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/all_pages/newBgs4.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"/>
      <!-- FIXME banner img-->
    </div>
    <div class="writings">
      <div class="container">
        <div class="writingSec">
          <div class="sec f-center">
            <div class="figHover"><img class="img-res" src="../assets/images/publish/read/aishaa abdelmaguid icon-01.webp" alt="aisha"></div>
            <div class="text">
              <h2 class="bold" data-text="Who_ff">Aisha Abdelmaguid</h2>
              <p data-text="WhoT_ff">The owner of NAA with all its channels and branches.</p>
              <p data-text="brief">High appeal lawyer and state council at Egyptian Bar association. High appeal lawyer and state council at Egyptian Bar association. Member of the Human Rights and Liberty Committee of the Arab Lawyers Union Member of the International Relations Committee of the Arab Lawyers Union. Writer and author of the Arab Writers Union. Author and researcher at the Arab Writers Union. Family and immigration lawyer in UK.</p><a href="{{ route('NAA-Founder.index') }}">
                <button class="specBtn" data-text="rdMore">Read More</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="posts">
      <div class="container">
        <div class="postsCont">
          <div class="post"><img class="img-res" src="../assets/images/publish/read/writer/book3-01.webp" alt="book poster" loading="lazy">
            <div class="text">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate blanditiis consequuntur pariatur itaque in debitis temporibus delectus nisi qui ad! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae cumque ab commodi earum voluptas qui distinctio aperiam quam, sequi quos!</p><a href="">
                <button class="specBtn" data-text="rdMore">Read More</button></a>
            </div>
          </div>
          <div class="post"><img class="img-res" src="../assets/images/publish/read/writer/book7-01.webp" alt="book poster" loading="lazy">
            <div class="text">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate blanditiis consequuntur pariatur itaque in debitis temporibus delectus nisi qui ad! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae cumque ab commodi earum voluptas qui distinctio aperiam quam, sequi quos!</p><a href="">
                <button class="specBtn" data-text="rdMore">Read More</button></a>
            </div>
          </div>
          <div class="post"><img class="img-res" src="../assets/images/publish/read/book5-01.webp" alt="book poster" loading="lazy">
            <div class="text">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate blanditiis consequuntur pariatur itaque in debitis temporibus delectus nisi qui ad! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae cumque ab commodi earum voluptas qui distinctio aperiam quam, sequi quos!</p><a href="">
                <button class="specBtn" data-text="rdMore">Read More</button></a>
            </div>
          </div>
        </div>
      </div>
    </section><img class="img-res globalBG" src="../assets/images/all_pages/newBgs3.webp" alt="background"/>
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
