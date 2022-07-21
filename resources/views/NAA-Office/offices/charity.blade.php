@extends('layouts.app')
@section('content')
    <title>Charity</title>
    <link rel="icon" href="../assets/images/office_content/charity icon-01.webp"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/officing.css"/>
    <link rel="stylesheet" href="../css/charity.css"/>
  </head>
  <body class="charity-page">
    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/channels/BG islamophopia-01.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"/>
      <!-- FIXME banner img--><img class="img-res bgGlobal" src="../assets/images/longBanners/charityEng.webp" data-img="banner_Charity" alt="background"/>
    </div>
    <div class="defIcon">
      <div class="container">
        <div class="def f-center"> <img src="../assets/images/office_content/charity icon-01.webp" alt="channel icon"/>
          <h2 data-text="ic_charity">Charity</h2>
        </div>
      </div>
    </div>
    <div class="char_head">
      <div class="container">
        <div class="txt">
          <h2 data-text="islamophobia">NAA Islamophobia</h2>
          <p data-text="chaarH1">We are a non-profit charity foundation based on religion to educate people about the Islamic religion and to correct the mistakes that people make in the name of Islam. </p>
          <p data-text="chaarH2">Supporting religion is our goal. We aspire to develop the minds of people who justify their mistakes under the name of religion. Unfortunately, people explain religion in a way that goes with their own desires, and we aim to correct that.</p>
          <a href="{{ route('NAA-Donate.index') }}">
            <button class="specBtn" data-text="donate">
              <p>Donate </p>
            </button></a>
        </div>
      </div>
    </div>
    <!-- FIXDONE  trans-->
    <section class="aims">
      <div class="container">
        <h2 class="center withBg pos2" data-text="aims">Our Aims & principles</h2>
        <div class="reviewsCont">
          <div class="review coloredTxtBox">
            <p class="bold" data-text="aims1">No for terrorism </p>
            <p data-text="aims1_1">God Almighty said about the terrorist:</p>
            <p data-text="aims1_2">"...And when he pursues, he strives in the land to spoil it and destroy the plow and the offspring, and God does not like corruption"</p>
          </div>
          <div class="review coloredTxtBox">
            <p class="bold" data-text="aims2">No for violence </p>
            <p data-text="GodSaid">God Almighty said:</p>
            <p data-text="aims2_1">"...With the mercy of God you will be kind with them And if you abused them or were rude with a hard heart, they would depart from around you  So be kind with them and forgive them"</p>
          </div>
          <div class="review coloredTxtBox">
            <p class="bold" data-text="aims3">No for killing  </p>
            <p data-text="GodSaid">God Almighty said:</p>
            <p data-text="aims3_1">"...Whoever kills a person without life or did corruption on earth is as if he killed all people, and whoever saves it is as if he has revived all of the people"</p>
          </div>
          <div class="review coloredTxtBox">
            <p class="bold" data-text="aims4">No for blind following </p>
            <p data-text="aims4_1">God said think, ponder and don't only following blindly.</p>
            <p data-text="aims4_2">"...we made the Quran easy to understand, If there is anyone who ponders the verses?"</p>
          </div>
          <div class="review coloredTxtBox">
            <p class="bold" data-text="aims5">No for women abuse</p>
            <p data-text="prophSaid">Prophet Mohamed said:</p>
            <p data-text="aims5_1">"..Treat women kindly, they are your supporters " </p>
            <p data-text="aims5_2">Also, none of the prophets hit his wife.</p>
          </div>
          <div class="review coloredTxtBox">
            <p class="bold" data-text="aims6">No for polygamy</p>
            <p data-text="GodSaid">God Almighty said:</p>
            <p data-text="aims6_1">"...And we took a thick covenant from you" , by getting married which is that respecting women's feelings.</p>
            <p data-text="aims6_2">we will talk about this subject soon.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- FIXDONE images only-->
    <section class="also">
      <div class="container">
        <h2 class="withBg" data-text="also_1">We have also:</h2>
        <div class="swp">
          <div class="sweeper">
            <div class="swiper narrowSwiper swiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/hajj.webp" alt="office_content/charity/hajj" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/shows/showsPosters/elMeha/1.webp" alt="shows/showsPosters/elMeha/1" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/foodBox.webp" alt="office_content/charity/foodBox" loading="lazy"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FIXDONE  trans-->
    <section class="mission">
      <div class="container">
        <h2 class="withBg" data-text="mission">What is our mission is?</h2>
        <div class="missions">
          <div class="msn coloredTxtBox">
            <h2 class="capitalize" data-text="mission1">from</h2>
            <p data-text="mission1_1">From Muslims & None Muslims Our service is not limited to Muslims only, but it is provided by non-Muslims and Muslims. </p><br>
            <p data-text="mission1_2">Anyone can work or volunteer with us regardless of nationality, gender, religion, culture and colour.</p><a href="{{ route('NAA-Donate.index') }}">
              <button class="specBtn" data-text="donate">
                <p data-text="donate">Donate </p>
              </button></a>
          </div>
          <div class="msn coloredTxtBox">
            <h2 class="capitalize" data-text="mission2">for</h2>
            <p data-text="mission1_1">From Muslims & None Muslims Our service is not limited to Muslims only, but it is provided by non-Muslims and Muslims. </p><br>
            <p data-text="mission2_1">Anyone can get our support regardless of nationality, gender, religion, culture and colour.</p><a href="{{ route('NAA-ContactUS.index') }}">
              <button class="specBtn" data-text="contact">
                <p data-text="contact">Contact us </p>
              </button></a>
          </div>
          <div class="msn coloredTxtBox">
            <h2 class="capitalize" data-text="mission3">to</h2>
            <p data-text="mission3_1">To Build a Strong Community Our service does not aim to advance an idea or supporting a team, but rather it aims to build a peaceful strong society with awareness to stop terrorism, violence and blind leading.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- FIXDONE images -->
    <section class="honour">
      <div class="container">
        <h2 class="withBg center" data-text="honour_1">Our charity honoured</h2>
        <div class="swp">
          <div class="cardBox">
            <div class="sweeper">
              <div class="swiper narrowSwiper swiper2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/honour/IMG_20210611_233846_063.webp" alt="IMG_20210611_233846_063" loading="lazy"></div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/honour/IMG_20210611_233952_364.webp" alt="IMG_20210611_233952_364" loading="lazy"></div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/honour/IMG_20210611_234612_987.webp" alt="IMG_20210611_234612_987" loading="lazy"></div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/honour/WhatsApp Image 2022-06-17 at 8.19.38 PM (1).webp" alt="WhatsApp Image 2022-06-17 at 8.19.38 PM (1)" loading="lazy"></div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/honour/WhatsApp Image 2022-06-17 at 10.35.30 PM (2).webp" alt="WhatsApp Image 2022-06-17 at 10.35.30 PM (2)" loading="lazy"></div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/honour/WhatsApp Image 2022-06-17 at 10.35.30 PM (1).webp" alt="WhatsApp Image 2022-06-17 at 10.35.30 PM (1)" loading="lazy"></div>
                  <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/honour/IMG_20210611_233911_524.webp" alt="IMG_20210611_233911_524" loading="lazy"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FIXDONE images behind foodbox-->
    <section class="foodBox">
      <div class="container">
        <h2 class="withBg pos2" data-text="foodBox">NAA food box</h2>
        <div class="pubHead">
          <div class="sweeper">
            <div class="swiper pubSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="content">
                    <div class="poster">
                      <div class="swiper-button-next-unique"></div><img class="img-res" src="../assets/images/office_content/charity/foodBox.webp" alt="foodBox poster">
                      <div class="swiper-button-prev-unique"></div>
                    </div>
                    <div class="text">
                      <h2 class="bold" data-text="foodBox_1">Millions of needy people get to benefit from those boxes benefit those who deserve them.</h2>
                      <p data-text="foodBox_2">Food is cure</p>
                      <p data-text="foodBox_3">Donate to feed the needy, poor, low-income and orphans.</p>
                      <p data-text="foodBox_4">Donate with even a penny!</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="content">
                    <div class="poster">
                      <div class="swiper-button-next-unique"></div>
                      <a href="{{ route('NAA-elmeha.index') }}"><img class="img-res" src="../assets/images/shows/showsPosters/elMeha/1.webp" alt="elMeha poster"></a>
                      <div class="swiper-button-prev-unique"></div>
                    </div>
                    <div class="text">
                      <h2 class="bold center" data-text="pub_h6">Sponsored By</h2>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="content">
                    <div class="poster">
                      <div class="swiper-button-next-unique"></div><img class="img-res" src="../assets/images/office_content/charity/hajj.webp" alt="hajj pic">
                      <div class="swiper-button-prev-unique"></div>
                    </div>
                    <div class="text">
                      <h2 class="bold center" data-text="aboutCha15">Hajj and Umrah trips</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="aboutCha">
      <div class="container">
        <h2 class="withBg" data-text="aboutCha">About the charity:</h2>
        <p class="bold" data-text="aboutCha1">Together to stop blind followers</p><br><br>
        <p data-text="aboutCha2">We are a British institution based the United Kingdom</p><br>
        <p class="bold" data-text="aboutCha3">The main goal of the charity is: </p>
        <p data-text="aboutCha4">To build a strong and peaceful society, in which no violence or terrorism.</p>
        <p data-text="aboutCha5">It is a non-profit organization based on donations to support Islam in Western countries and to cclarify Islam in a peaceful way that seems appropriate.</p>
        <p data-text="aboutCha6">It is a foundation that supports Muslims and non-Muslims as well; besides it has Muslims and non-Muslims working in it.</p><br>
        <h2 data-text="aboutCha7">The most important programs of the institution:</h2>
        <p data-text="aboutCha8">Spreading the Islamic religion in a different way that indicates it is a peaceful religion not a violent religion, through educational religious seminars about difficult matters in religion that are presented to the West in a wrong way; that led to the development of the idea of Islamophobia.</p>
        <p data-text="aboutCha9">We work to correct these misconceptions, and other important topics that would support Islam and correct the mistakes made by others.</p>
        <p data-text="aboutCha10">Our goal is to erase Islamophobia.</p>
        <p data-text="aboutCha11">This is the main objective of the organization; which is the development of religious ideas, not the development of the religion itself. We aim to develop minds in a way that goes with the true religion.</p>
        <p data-text="aboutCha12">you can contact us to support the feminist community because we advocate for women's freedom and rights, as well as we stand against women's abuse or violence.</p><br>
        <h2 data-text="aboutCha13">We also have other programs on which the organization is based:</h2>
        <p data-text="aboutCha14">It offers a food program, every Friday in the cities of the United Kingdom, that is food and clothes distributed to every needy Muslim or non-Muslim, under the slogan True Islam, The Religion of Peace and Security</p>
        <p data-text="aboutCha15">providing Hajj and Umrah trips</p>
        <p data-text="aboutCha16">Providing free legal consultations to victims, immigrants, abused women and war victims in any legal case, besides translation services as well.</p>
        <p data-text="aboutCha17">Free books to support education and general culture, as well as support for art of all kinds through financial aid and other facilities; and all of this is done within the framework of the spread of true and peaceful Islam and the rejection of violence, fanaticism and terrorism.</p>
        <h2 data-text="aboutCha18">We also work to erase the idea of Islamophobia in a good way.</h2>
        <ul>
          <li>
            <p data-text="aboutCha19">Together to change our aggressive attitude/thoughts.</p>
          </li>
          <li>
            <p data-text="aboutCha20">Together to help each other.</p>
          </li>
          <li>
            <p data-text="aboutCha21">Together to stop terrorism.</p>
          </li>
          <li>
            <p data-text="aboutCha22">Together to stop hunger.</p>
          </li>
          <li>
            <p data-text="aboutCha23">Together for peace.</p>
          </li>
        </ul>
        <p data-text="aboutCha24">We are a non-profit charity foundation based on religion to educate people about the Islamic religion and to correct the mistakes that people make in the name of Islam.</p>
        <p data-text="aboutCha25">Supporting religion is our goal. We aspire to develop the minds of people who justify their mistakes under the name of religion. Unfortunately, people explain religion in a way that goes with their own desires, and we aim to correct that.</p>
      </div>
    </section>
    <section class="events">
      <div class="container">
        <h2 class="withBg pos2" data-text="Cha_events">Events</h2>
        <div class="eventsCont">
          <div class="event f-center">
            <div class="coloredTxtBox">
              <p class="bold" data-text="Cha_events1">Croydon Food Event:</p>
              <p data-text="Cha_events2">We're going to organize a food event on Friday 4th June, in front of West Croydon Station, to feed the needy, the homeless and whoever needs our support.</p>
              <p data-text="Cha_events3">Together to stop hunger!</p>
              <p data-text="Cha_events4">Together to feed the needy!</p><a href="{{ route('NAA-Donate.index') }}">
                <button class="specBtn" data-text="donate">
                  <p>Donate </p>
                </button></a>
            </div>
            <div class="vid"> <img src="//via.placeholder.com/150/000000/000000"></div>
          </div>
          <div class="event f-center">
            <div class="coloredTxtBox">
              <p class="bold" data-text="Cha_events5">Stratford Food Event:</p>
              <p data-text="Cha_events6">We will be organizing a food event on Friday 28th May, in front of Stratford Station, to feed the needy, the homeless and whoever needs our support.</p>
              <p data-text="Cha_events3">Together to stop hunger!</p>
              <p data-text="Cha_events4">Together to feed the needy!</p><a href="{{ route('NAA-Donate.index') }}">
                <button class="specBtn" data-text="donate">
                  <p>Donate </p>
                </button></a>
            </div>
            <div class="vid"> <img src="//via.placeholder.com/150/000000/000000"></div>
          </div>
          <div class="event f-center">
            <div class="coloredTxtBox">
              <p class="bold" data-text="Cha_events7">Food Parking Event:</p>
              <p data-text="Cha_events8">We will be organizing a food event on Friday 28th May, in front of Parking Station, to feed the needy, the homeless and whoever needs our support.</p>
              <p data-text="Cha_events3">Together to stop hunger!</p>
              <p data-text="Cha_events4">Together to feed the needy!</p><a href="{{ route('NAA-Donate.index') }}">
                <button class="specBtn" data-text="donate">
                  <p>Donate </p>
                </button></a>
            </div>
            <div class="vid"> <img src="//via.placeholder.com/150/000000/000000"></div>
          </div>
          <div class="event f-center">
            <div class="coloredTxtBox">
              <p class="bold" data-text="Cha_events9">Food Event in London streets:</p>
              <p data-text="Cha_events10">We will be organizing a food event on Friday 28th May, in different streets of London, to feed the needy, the homeless and whoever needs our support.</p>
              <p data-text="Cha_events3">Together to stop hunger!</p>
              <p data-text="Cha_events4">Together to feed the needy!</p><a href="{{ route('NAA-Donate.index') }}">
                <button class="specBtn" data-text="donate">
                  <p>Donate </p>
                </button></a>
            </div>
            <div class="vid"> <img src="//via.placeholder.com/150/000000/000000"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- FIXDONE review images-->
    <section class="reviews">
      <div class="container">
        <h2 data-text="reviews">Reviews: </h2>
        <div class="reviewsCont">
          <div class="review coloredTxtBox">
            <p class="bold" data-text="Julia">Julia</p>
            <p data-text="Cha_reviews2">I was hungry and found people serving food in the street, I asked for help and they helped me.</p>
            <p data-text="Cha_reviews3">I am very pleased with the respect and help I got from NAA charity team.</p>
          </div>
          <div class="review coloredTxtBox">
            <p class="bold" data-text="Ahmed">Ahmed</p>
            <p data-text="Cha_reviews4">I received food for me and my children from NAA charity team.</p>
          </div>
          <div class="review coloredTxtBox">
            <p class="bold" data-text="Adam">Adam</p>
            <p data-text="Cha_reviews5">I got support from NAA charity team.</p>
          </div>
          <div class="review coloredTxtBox">
            <p class="bold" data-text="Christina">Christina</p>
            <p data-text="Cha_reviews6">I heard about this charity and referred people to them, and got support from NAA charity team.</p>
          </div>
        </div>
        <div class="swp">
          <div class="sweeper">
            <div class="swiper narrowSwiper narrowSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/help/help (1).webp" alt="help (1)" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/help/help (4).webp" alt="help (4)" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/help/help (2).webp" alt="help (2)" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/help/help (3).webp" alt="help (3)" loading="lazy"></div>
                <div class="swiper-slide"><img class="img-res" src="../assets/images/office_content/charity/help/help (5).webp" alt="help (5)" loading="lazy"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="dontMsgs">
      <div class="container">
        <div class="msgs">
          <div class="donors">
            <h2 class="withBg pos2" data-text="donors">Donors</h2>
            <p class="bold" data-text="tyMsg"> My team and I would like to thank whoever supported us, even with the little things, because your support helps us keep going. </p>
            <p data-text="d4">You help a lot of people and it means a lot to us.</p>
            <p class="bold" data-text="ty">Thank you. </p>
            <p class="bold" data-text="tyall">Thanks everyone! </p>
            <p data-text="d5">Some donors would be happy to post their pictures while donating to us, just to show how happy they are with us and our support, and also to encourage others to support us as they did. </p>
            <p data-text="d6">On the other hand, some donors prefer not to be in public performances. Whatever the way you prefer, is very meaningful to us and we really appreciate it. </p>
            <div class="swp">
              <div class="sweeper">
                <div class="swiper narrowSwiper narrowSwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="img-res" src="../assets/images/donate/donate (1).webp" alt="donate/donate (1)" loading="lazy"></div>
                    <div class="swiper-slide"><img class="img-res" src="../assets/images/donate/donate (4).webp" alt="donate/donate (4)" loading="lazy"></div>
                    <div class="swiper-slide"><img class="img-res" src="../assets/images/donate/donate (2).webp" alt="donate/donate (2)" loading="lazy"></div>
                    <div class="swiper-slide"><img class="img-res" src="../assets/images/donate/donate (5).webp" alt="donate/donate (5)" loading="lazy"></div>
                    <div class="swiper-slide"><img class="img-res" src="../assets/images/donate/donate (3).webp" alt="donate/donate (3)" loading="lazy"></div>
                    <div class="swiper-slide"><img class="img-res" src="../assets/images/donate/donate (6).webp" alt="donate/donate (6)" loading="lazy"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="msgOfGrat">
            <h2 data-text="d7">Message of Gratitude:</h2>
            <p data-text="d8">Some people donate a service, food, water, bags, clothes or money; and others donate prayers and encouragement.</p>
            <p data-text="d9">Whatever the way you support us, we appreciate it!</p>
          </div>
        </div>
        <div class="rightWay">
          <h2 data-text="donRight">Choose the right way</h2>
          <p data-text="donRight1">Donate, Collect, Serve, Stop Hunger!</p><br>
          <p class="bold" data-text="donRight2">Stop hunger!</p>
          <p data-text="donRight3">money is not the solution, it is just a way to solve the problem.</p>
          <p data-text="donRight4">Some people use it right, while others use it wrong.</p>
          <p data-text="donRight5">Together to stop hunger, together to feed the needy!</p>
          <p data-text="donRight6">Choose & donate correctly; we will pick it up and serve.</p>
        </div>
      </div>
    </section>
    <div class="festiv">
      <div class="container"> </div>
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
