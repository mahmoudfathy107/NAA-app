@extends('layouts.app')
@section('content')

    <title>Publishing House</title>
    <link rel="icon" href="../assets/images/office_content/publish house icon-01.webp"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/officing.css"/>
    <link rel="stylesheet" href="../css/publish.css"/>
  </head>
  <body class="publish-page">

    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/publish/publish-H-bg.webp" alt="background"/><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"/>
      <!-- FIXME banner img--><img class="img-res bgGlobal" src="../assets/images/longBanners/PublishEng.webp" data-img="banner_Publishing House" alt="background"/>
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
    </div>
    <div class="pubSrvs">
      <div class="container">
        <h2 class="center" data-text="pubsrvs">services</h2>
        <div class="srvs">
          <div class="srv" data-section="publish"><img class="img-res" src="../assets/images/publish/publish icon-01.webp" alt="service icon" loading="lazy">
            <h3 class="capitalize" data-text="pub_srv1">publish</h3>
          </div>
          <div class="srv" data-section="distribute"><img class="img-res" src="../assets/images/publish/distribute icon-01.webp" alt="service icon" loading="lazy">
            <h3 class="capitalize" data-text="pub_srv2">distribute</h3>
          </div><a href="{{ route('NAA-read.index') }}">
            <div class="srv"><img class="img-res" src="../assets/images/publish/read icon-01.webp" alt="service icon" loading="lazy">
              <h3 class="capitalize" data-text="pub_srv3">read</h3>
            </div></a>
          <div class="srv" data-section="translate"><img class="img-res" src="../assets/images/publish/translate icon-01.webp" alt="service icon" loading="lazy">
            <h3 class="capitalize" data-text="pub_srv4">translate</h3>
          </div>
          <div class="srv" data-section="prize"><img class="img-res" src="../assets/images/publish/prize icon-01.webp" alt="service icon" loading="lazy">
            <h3 class="capitalize" data-text="pub_srv5">prize</h3>
          </div>
        </div>
      </div>
    </div>
    <section class="togglerContent" data-section="publish">
      <div class="container">
        <div class="pub-with-us">
          <div class="head"><img class="icon img-res" src="../assets/images/publish/publish icon-01.webp" alt="service icon" loading="lazy">
            <h2 class="bold" data-text="mcq_publish">Publish with us</h2>
          </div>
          <p data-text="pubWithUsP1">From sky to sky words can fly, free you from negative thoughts or beliefs,</p>
          <p data-text="pubWithUsP2">and let you know that there are roots for foliage,</p>
          <p data-text="pubWithUsP3">For the development of our society, you must know,</p>
          <p data-text="pubWithUsP4">That your degree from college is never enough.</p>
        </div>
        <div class="products">
          <button class="specBtn" data-text="viewProd">View products</button>
          <div class="productBoxes">
            <div class="box">
              <h3 data-text="printPub1">Print and publish on your own expense:</h3>
              <ul>
                <li>
                  <p data-text="printPub1_1">You cover the cost of publishing and printing your book, considering that the profit is all yours and all rights except for copyright.</p>
                </li>
                <li>
                  <p data-text="printPub1_2">We design the cover for you</p>
                </li>
                <li>
                  <p data-text="printPub1_3">We coordinate the book for you internally</p>
                </li>
                <li>
                  <p data-text="printPub1_4">We review the book</p>
                </li>
                <li>
                  <p data-text="printPub1_5">We correct the grammar, spelling and structure</p>
                </li>
                <li>
                  <p data-text="printPub1_6">We transcript the content for you if it is audio </p>
                </li>
                <li>
                  <p data-text="printPub1_7">This doesn't include online or paper distribution</p>
                </li>
                <li>
                  <p data-text="printPub1_8">That doesn't include translation</p>
                </li>
              </ul>
              <button class="specBtn clk" data-text="clkHere">Click Here</button>
            </div>
            <div class="box">
              <h3 data-text="printPub2">Print and publish on our expense, method (1):</h3>
              <ul>
                <li>
                  <p data-text="printPub2_1">We cover the cost of publishing and printing your book for a certain number of copies only, and that all rights are reserved to the publishing house.</p>
                </li>
                <li>
                  <p data-text="printPub1_2">We design the cover for you</p>
                </li>
                <li>
                  <p data-text="printPub1_3">We coordinate the book for you internally</p>
                </li>
                <li>
                  <p data-text="printPub1_4">We review the book</p>
                </li>
                <li>
                  <p data-text="printPub1_5">We correct the grammar, spelling and structure.</p>
                </li>
                <li>
                  <p data-text="printPub1_6">We transcript the content for you if it is audio</p>
                </li>
                <li>
                  <p data-text="printPub2_7">We distribute the book either paper or online or both paper and online, according to what the Publishing House decides, and the Publishing House covers the costs of distribution.</p>
                </li>
                <li>
                  <p data-text="printPub1_8">That doesn't include translation.</p>
                </li>
              </ul>
              <button class="specBtn clk" data-text="clkHere">Click Here</button>
            </div>
            <div class="box">
              <h3 data-text="printPub3">Print and publish on our expense, Method (2):</h3>
              <ul>
                <li>
                  <p data-text="printPub3_1">We cover the cost of publishing and printing your book, considering that the Publishing House is getting a percentage of the profits according to what they think is appropriate, and that all rights are reserved to the Publishing House.</p>
                </li>
                <li>
                  <p data-text="printPub1_2">We design the cover for you</p>
                </li>
                <li>
                  <p data-text="printPub1_3">We coordinate the book for you internally</p>
                </li>
                <li>
                  <p data-text="printPub1_4">We review the book</p>
                </li>
                <li>
                  <p data-text="printPub1_5">We correct the grammar, spelling and structure.</p>
                </li>
                <li>
                  <p data-text="printPub1_6">We transcript the content for you if it is audio</p>
                </li>
                <li>
                  <p data-text="printPub3_7">We distribute the book for you either in paper or online or both paper and online, according to what the Publishing House sees more appropriate, considering that the distribution costs are on the writer.</p>
                </li>
                <li>
                  <p data-text="printPub1_8">That doesn't include translation.</p>
                </li>
              </ul>
              <button class="specBtn clk" data-text="clkHere">Click Here</button>
            </div>
          </div>
        </div>
        <div class="contact-form alt-form f-center">
          <div class="container">
            <div class="box">
              <div class="header f-center">
                <h2 class="center upper-case" data-text="pleaseFill">Please fill this form</h2>
              </div>
              <form class="form f-center" action="">
                <input id="inp_name2" type="text" name="name" placeholder="Name" data-text="inp_name"/>
                <input id="inp_mail2" type="email" name="mail" placeholder="Email" data-text="inp_mail"/>
                <textarea id="inp_msg2" name="msg" placeholder="Message" data-text="inp_msg"></textarea>
                <div class="radios">
                  <p data-text="whichOffer">which offer did you prefer?</p>
                  <div class="rad">
                    <input type="radio" id="offer1" name="offer" value="offer1"/>
                    <label for="offer1" data-text="offer1">Offer 1</label>
                  </div>
                  <div class="rad">
                    <input type="radio" id="offer2" name="offer" value="offer2"/>
                    <label for="offer2" data-text="offer2">Offer 2</label>
                  </div>
                  <div class="rad">
                    <input type="radio" id="offer3" name="offer" value="offer3"/>
                    <label for="offer3" data-text="offer3">Offer 3</label>
                  </div>
                </div>
                <input class="specBtn" id="submit2" type="submit" value="Send" data-text="submit"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="togglerContent invisible" data-section="distribute">
      <div class="container">
        <div class="head"><img class="icon img-res" src="../assets/images/publish/distribute icon-01.webp" alt="service icon" loading="lazy">
          <h2 class="bold" data-text="distHead">Distribute with us</h2>
        </div>
        <p data-text="pubWithUsP1">From sky to sky words can fly, free you from negative thoughts or beliefs, and let you know that there are roots for foliage.</p>
        <p data-text="pubWithUsP2">For the development of our society, you must know; that your degree from college is never enough.</p>
        <div class="products">
          <button class="specBtn" data-text="viewProd">View products</button>
          <div class="productBoxes">
            <div class="box">
              <h3 class="bold" data-text="dist1">Distribute your book in paper</h3>
              <p data-text="dist1_1">When you choose our company for distribution, we negotiate with you about   the commission that you will get, which is usually 30% for the company and 15% for places of sale such as libraries and other places; and what's left is for you, if the distribution is only inside Egypt.</p>
              <p data-text="dist1_2">If you want to distribute your book outside of Egypt, the percentage of work will increase by an additional 30%.</p>
              <button class="specBtn clk" data-text="clkHere">Click Here</button>
            </div>
            <div class="box">
              <h3 class="bold" data-text="dist2">Distribute your book online</h3>
              <p data-text="dist2_1">When you choose our company for distribution, the company negotiates with you the commission that you will get, which is usually 50% for the company and what remains is for you, if the distribution is on our website only.</p>
              <p data-text="dist2_2">If you want to distribute your book on other sites, you will increase the percentage of work by an additional 25% for the owners of other sites.</p>
              <button class="specBtn clk" data-text="clkHere">Click Here</button>
            </div>
            <div class="head">
              <h2 class="withBg" data-text="distWays">Distribution ways</h2>
            </div>
            <div class="box">
              <h3 class="bold" data-text="dist3">In the case of a paper distribution</h3>
              <p data-text="dist3_1">We take the number of copies to be distributed from you, whether they're printed in the name of our Publishing House or in the name of another Publishing House, then we distribute them with the price set by you, and then offer them for distribution for around 10 to 15 days in the markets. In case it's being sold, we increase the time with the continuation of distribution, in all governorates all over Egypt, but if there's no demand during that period, we will stop displaying it for a similar period of 10 days and then offer it in a different way after that period, another period and this process will be repeated in case of the lack of demand three times in a row.</p>
              <p data-text="dist3_2">If it's not sold, the copies are returned to their owner, and the mentioned profit percentage is just considered in the case of selling and making profit. As for before distribution and before the profit, the owner of the book is obligated to pay an amount from 25 piasters to 2 pounds on each cover intended to be distributed according to the type of book and its size, date of publication, Publishing House, author's name and title of the book, and all this, according to what the Publishing company sees.</p>
              <p data-text="dist3_3">The distribution is not only in the libraries, but all over Egypt in all places of display.</p>
              <p data-text="dist3_4">In the case of distribution between countries, the book's owner covers the cost of shipping the book. The Publishing House is not obligated to follow up the shipment or customs clearance. Rather, the business owner is responsible for delivering the work to the target address in the target town. The Publishing House is responsible for distribution in the target country only, and the remaining copies are considered damaged in the case that the business owner doesn't accept to pay the cost of returning them.</p>
              <p data-text="dist3_5">Any kind facilitation from the Publishing House is considered as being out of kindness not as a commitment.</p>
              <button class="specBtn clk" data-text="clkHere">Click Here</button>
            </div>
            <div class="box">
              <h3 class="bold" data-text="dist4">In the case of online distribution: </h3>
              <p data-text="dist4_1">Distribute through our website or through other websites or through our program, ( Al-Rawi family).</p>
              <p data-text="dist4_2">We take an online copy from its owner, whether it was printed before, newly printed and written, or not seen yet, considering that it is going to be reviewed to be agreed upon, and to make sure it goes with the rules of the company. We get back to you within 25 working days, with approval or denial. In the case of approval, we will negotiate about if it'll be published through our platform or other platform. </p>
              <p data-text="dist4_3">If it's published through our platform, it'll go according the mentioned percentages, and if it's published through other platform, the mentioned percentage will increase.</p>
              <p data-text="dist4_4"> It'll be agreed upon the duration of the work presentation, between us and the business owner. The business owner is obligated to pay a little fee before presenting their book and after sending it, that starts from 200 pounds, decided by the company according to the book's type, size, date of publication, publishing House, author's name and the title of the book; in order to ensure the seriousness of commitment. There will be another little fee in the case of agreeing upon the way of distribution and sending the work to be reviewed, that'll start from 100 pounds, not to waste the efforts of the company for 25 days reviewing the book in vain. Besides, to guarantee the commitment of the author and not to present it to another company during the reviewing period.</p>
              <p data-text="dist4_5">The owner of the book will be fined in case of violating the privacy policy when the book is exclusive to us.</p>
              <p data-text="dist4_6">In the case of publishing through other platforms, the mentioned percentages increase or differ according to each platform.</p>
              <p data-text="dist4_7">And if you publish through (Al-Rawi family) program, the price will be decided according to the duration of the show and the way of hosting; whether it'll be just a review for the book or the author, an interview with the author, an interview and a signing ceremony; considering that if this offer is chosen, there will be a fee starting from 500 pounds, paid once the work is sent and before the show. The paid fee will be deducted from the amount that will be agreed upon later, and this option is not related to publishing a specific number of copies, but it depends more on marketing and advertising.</p>
              <button class="specBtn clk" data-text="clkHere">Click Here</button>
            </div>
          </div>
        </div>
        <div class="contact-form alt-form f-center">
          <div class="container">
            <div class="box">
              <div class="header f-center">
                <h2 class="center upper-case" data-text="pleaseFill">Please fill this form</h2>
              </div>
              <form class="form f-center" action="">
                <input id="inp_name2" type="text" name="name" placeholder="Name" data-text="inp_name"/>
                <input id="inp_mail2" type="email" name="mail" placeholder="Email" data-text="inp_mail"/>
                <textarea id="inp_msg2" name="msg" placeholder="Message" data-text="inp_msg"></textarea>
                <div class="fileInp">
                  <label for="formFile" data-text="whichOffer">which offer did you prefer?</label>
                  <input type="file" id="formFile"/>
                </div>
                <input class="specBtn" id="submit2" type="submit" value="Send" data-text="submit"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="togglerContent invisible" data-section="translate">
      <div class="container">
        <div class="head"><img class="icon img-res" src="../assets/images/publish/translate icon-01.webp" alt="service icon" loading="lazy">
          <h2 class="bold" data-text="transHead">Translate with us:</h2>
        </div>
        <div class="parags">
          <div class="para">
            <h3 data-text="transH1">From English to Arabic</h3>
            <p data-text="transH1_1">We have an elite of translators, so we select the best translator for this task. We match the translator with the content of your book, as the translator must have a large amount of knowledge in the field of the book that they translate linguistically and technically, whether it is a scientific, literary, children's book, or an educational book. The culture of the translator is considered to be one of the things that affect the quality of your book. All of what we provide you is professional, so you have to trust the translator who will translate your book a certified translation.</p>
            <p data-text="transH1_2">We translate books, documents, birth certificate and other certified translations.</p>
            <p data-text="transH1_3">We translate for you, whether soft, paper or audio documents. </p>
            <p data-text="transH1_4">The translation cost is an estimated value by the company according to what is required to be translated, considering that the translation expenses differ from Arabic and English.</p>
            <p data-text="transH1_5">The client must pay a fee as a deposit in the case of deciding the type of translation and sending the text to be translated or part of it. This fee is 100 pounds, that will be deducted from the translation fees after agreement, and it's non-refundable in the case of disagreement that'd be due to a violation or non-compliance by the client.</p>
            <button class="specBtn clk" data-text="clkHere">Click Here</button>
          </div>
          <div class="para">
            <h3 data-text="transH2">From Arabic to English</h3>
            <p data-text="transH2_1">We select the best translator for this task, as we match the translator with the content of your book, as the translator must have enough knowledge in the field of the book to translate, whether it is a scientific, literary, children's book, or an educational book. The culture of the translator and their language should be considered, as that affect the quality of your book. We provide you with a professional service, so you have to trust our certified translators.</p>
            <p data-text="transH2_2">We translate books, documents, birth certificate and other kinds of texts. We translate soft, paper or audio documents. The translation cost is decided by the company according to what is required to be translated.</p>
            <p data-text="transH2_3">The client has to pay a fee as a deposit once they decide the type of translation and submit what is required to be translated. This fee is 200 pounds, provided that it is deducted from the translation cost later, and it is not refunded in case of disagreement due to the client not being serious or committed.</p>
            <button class="specBtn clk" data-text="clkHere">Click Here</button>
          </div>
        </div>
        <div class="contact-form alt-form f-center">
          <div class="container">
            <div class="box">
              <div class="header f-center">
                <h2 class="center upper-case" data-text="pleaseFill">Please fill this form</h2>
              </div>
              <form class="form f-center" action="">
                <input id="inp_name2" type="text" name="name" placeholder="Name" data-text="inp_name"/>
                <input id="inp_mail2" type="email" name="mail" placeholder="Email" data-text="inp_mail"/>
                <textarea id="inp_msg2" name="msg" placeholder="Message" data-text="inp_msg"></textarea>
                <div class="fileInp">
                  <label for="formFile" data-text="whichOffer">which offer did you prefer?</label>
                  <input type="file" id="formFile"/>
                </div>
                <input class="specBtn" id="submit2" type="submit" value="Send" data-text="submit"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="togglerContent invisible" data-section="prize">
      <div class="container">
        <div class="head"><img class="icon img-res" src="../assets/images/publish/prize icon-01.webp" alt="service icon" loading="lazy">
          <h2 class="bold" data-text="prizeHead">Prizes:</h2>
        </div>
        <div class="parags">
          <div class="para">
            <h3 data-text="prizeH1">Preliminary conditions for competitions</h3>
            <p data-text="prizeH1_1">For everyone around the world who would like to have the opportunity to participate in cultural and entertainment competitions and get financial prizes, for whoever has a talent or a hobby like; designing, writing, planning, photography, etc.., you should apply for participation in one of our competitions and win financial prizes.</p>
            <p data-text="prizeH1_2">The participation in competitions is not allowed for any member or employee in the company or even for any of their families and relatives. In the case of violating this rule, they'd be exposed to being fired and fined. </p>
            <p data-text="prizeH1_3">One is allowed to participate only once in each competition, and in one competition only, as it's not allowed to participate in two competitions at the same time, otherwise the application will be rejected.</p>
            <p data-text="prizeH1_4">If you would like to participate in any competition, you can participate via the website through the relevant competition page by filling in the form, sending your ID and what you will participate in.</p>
            <p data-text="prizeH1_5">The end date of the competition will be as determined in each competition, and the Company has the right to amend the competition closing date at any time.</p>
            <p data-text="prizeH1_6">If the case of winning a competition, we will notify you via phone or email.</p>
            <p data-text="prizeH1_7">The jury's decision is final, and no appeals will be accepted.</p>
            <p data-text="prizeH1_8">The prize can't be transferred to another person other than the participant, not even to a family member, unless the prize is donated to a charity organization.</p>
            <p data-text="prizeH1_9"> The prizes can't be exchanged for cash or any other prize.</p>
            <p data-text="prizeH1_10">Applications filled in incorrectly or that are violating our terms and conditions will be excluded.</p>
            <p data-text="prizeH1_11">We will do our best to send the prizes to their owners all over the world within a month from the end date of the competition and announcing the winners; However, we can't guarantee the delivery date.</p>
            <p data-text="prizeH1_12"> There are some prizes that will be received from our offices, and we will provide you with more details about that.</p>
            <p data-text="prizeH1_13">The participant acknowledges that we have the right to use the submitted participation without restriction or condition. Once they participate, they declare that the submitted participation is their property and is used to participate in a competition. We only grant you the copyright, and whoever violates this, is subject to a legal action.</p>
            <p data-text="prizeH1_14">The participant allows our company to use all contact information for the purpose of identity verification, announcing the results and whatever comes up.</p>
            <p data-text="prizeH1_15">The participant acknowledges that our company is not responsible for the use of anything that isn't the participant's property, including data, images, audio or video recordings.</p>
            <p data-text="prizeH1_16">The data used in the competition should be exclusive to the company and it isn't allowed to publish it or to be presented in any other places of presentation, in the past or in the future, considering that if this happens, the prize won't be delivered, in the case of winning; or the participation will be rejected if it's at the beginning.</p>
            <p data-text="prizeH1_17">Terms are subject to change without prior notice</p>
            <p data-text="prizeH1_18"> Winners are individually responsible for informing the tax authority of any cash received, and for paying any applicable or other taxes, and our company has no responsibility towards that.</p>
            <p data-text="prizeH1_19">Each applicant confirms that the ideas presented in the application are entirely their own.</p>
            <p data-text="prizeH1_20">By applying to the competition, each applicant, if selected to be among the finalists, agrees to publish a written description of their project that will be publicly available on the website for other talented to see; as well as a short video explaining the winning project or work.</p>
            <button class="specBtn clk" data-text="clkHere">Click Here</button>
          </div>
          <div class="prices">
            <p class="bold" data-text="prizeP1">Types of competitions</p>
            <p data-text="prizeP2">best photographer competition, with a prize of 5000 EGP</p>
            <p data-text="prizeP3">The best graphic designer competition, with a prize of 4000 EGP</p>
            <p data-text="prizeP4">The best fashion designer competition, with a prize of 7000 EGP</p>
            <p data-text="prizeP5">The best cover designer competition, with a prize of 3000 EGP</p>
            <p data-text="prizeP6">The best short story competition, with a prize of 3000 EGP</p>
            <p data-text="prizeP7">The best painter competition, with a prize of 4000 EGP</p>
            <p data-text="prizeP8">The best montage competition, with a prize of 5000 EGP</p>
            <p data-text="prizeP9">The best poet competition, with a prize of 3000 EGP</p>
            <p data-text="prizeP10">The best caricature competition, with a prize of 3000 EGP</p>
            <p data-text="prizeP11">The best game designer competition, with a prize of 10,000 EGP</p>
            <p data-text="prizeP12">The best athlete in various fields of sports, with a prize of 6000 EGP</p>
            <p data-text="prizeP13">The best novel competition, with a prize of 4000 EGP</p>
            <p data-text="prizeP14">The Fighting Woman Competition, with a prize of 3000 EGP</p>
            <p data-text="prizeP15">The ideal mother competition, with a prize of 6000 EGP</p>
            <p data-text="prizeP16">The best interviewer competition, with a prize of 4000 EGP</p>
            <p data-text="prizeP17">The best journalist competition, with a prize of 4000 EGP.</p>
            <p data-text="prizeP18">The best voice in reciting the Holy Qur'an, with a prize of 4000 EGP.</p>
            <p data-text="prizeP19">The best voice in singing, with the prize of 3000 EGP.</p>
            <p data-text="prizeP20">The best charity organization, with a prize of 10,000 EGP.</p>
            <p data-text="prizeP21">The Holy Quran Memorization Competition, with a prize of 6000 EGP.</p>
            <p data-text="prizeP22">There are also other competitions….</p>
            <p data-text="prizeP23">To get to know the terms of each competition and join, just contact us for information about the beginning and end of each. </p>
            <p data-text="prizeP24">The participant has to pay a fee of 250 EGP once they join, to guarantee commitment, seriousness, and not wasting the company's time in receiving requests. The fee isn't refundable in the case of rejection, provided that the company has to clarify the reason for rejection, and the participant doesn't have the right to appeal, however they can edit the application and resubmit.  </p>
          </div>
        </div>
      </div>
      <div class="contact-form alt-form f-center">
        <div class="container">
          <div class="box">
            <div class="header f-center">
              <h2 class="center upper-case" data-text="pleaseFill">Please fill this form</h2>
            </div>
            <form class="form f-center" action="">
              <input id="inp_name2" type="text" name="name" placeholder="Name" data-text="inp_name"/>
              <input id="inp_mail2" type="email" name="mail" placeholder="Email" data-text="inp_mail"/>
              <textarea id="inp_msg2" name="msg" placeholder="Message" data-text="inp_msg"></textarea>
              <div class="fileInp">
                <label for="formFile" data-text="inp_file3">You want to participate in which competition</label>
                <input type="file" id="formFile"/>
              </div>
              <input class="specBtn" id="submit2" type="submit" value="Send" data-text="submit"/>
            </form>
          </div>
        </div>
      </div>
    </section>
    <div class="contact-form f-center"><img class="bg" src="../assets/images/publish/publish-form.webp" alt="contact form"/>
      <div class="container">
        <div class="box">
          <div class="header f-center">
            <h2 class="center upper-case" data-text="contact">contact us</h2><img src="../assets/images/all_pages/logo.webp" alt="logo"/>
          </div>
          <form class="form f-center" method="GET" action="{{route('NAA-Index.create')}}">
            <input id="inp_name" required type="text" name="name" placeholder="Name" data-text="data-text"/>
            <input id="inp_mail" required type="email" name="email" placeholder="Email" data-text="data-text"/>
            <textarea id="inp_msg" required name="message" placeholder="Message" data-text="data-text"></textarea>
            <input class="specBtn"  id="submit" type="submit" value="Send" data-text="data-text"/>
          </form>
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
