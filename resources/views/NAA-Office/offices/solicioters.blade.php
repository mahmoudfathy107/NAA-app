@extends('layouts.app')
@section('content')
    <title>NAA Solicioters</title>
    <link rel="icon" href="../assets/images/office_content/law office icon-01.webp"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/officing.css"/>
    <link rel="stylesheet" href="../css/solicioters.css"/>

  <body class="law-page">

    <div class="channelsBanner"> <img class="bgGlobal" src="../assets/images/channels/law/law bg-01.webp" alt="background"><img class="bgGlobal" src="../assets/images/all_pages/background2-01.webp" alt="background"><img class="img-res bgGlobal" src="../assets/images/longBanners/maktbMohamahEng.webp" data-img="banner_NAA Solicioters" alt="background">
    </div>
    <div class="defIcon">
      <div class="container">
        <div class="def f-center"> <img src="../assets/images/office_content/law office icon-01.webp" alt="channel icon">
          <div class="txt">
            <h2 data-text="solic1">Welcome to-<span class="bold">NAA</span> Solicioters </h2>
            <h2 class="bold" data-text="solic2">Aisha Abdul Majeed Foundation for Legal Consultations and law firm</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="welcomingSect">
      <div class="container">
        <div class="figHover f-center"><img class="img-res" src="../assets/images/channels/law/picture-01.webp" alt="ashia with high lawer"><img class="img-res" src="../assets/images/channels/law/right is right-01.webp" alt="background">
          <div class="txt">
            <p class="center" data-text="solic3">You don't have to be nervous with our free legal service.</p>
            <p class="center" data-text="solic4">Evidence is a defence & violence is an offence.</p>
          </div>
        </div>
      </div>
    </div>
    <section class="lawPosts">
      <div class="container">
        <div class="posts">
          <div class="post figHover"><img class="img-res" src="../assets/images/channels/law/law pic png-011-01.webp" alt="aisha1">
            <div class="txt">
              <p data-text="lawPost1">The victim is a center of strength, not a weakness,it's not a victim, it's a survivor in reality. </p>
              <p data-text="lawPost2">This is the honor of the legal loyalty,The accused is innocent until proven guilty. </p>
              <p data-text="lawPost3">Evidence on the plaintiff and the oath on the denier,Who will tell the truth and who is the liar. </p>
              <p data-text="lawPost4">Not about who have muscles and who is the thinner, It's about the right will be the winner. </p>
            </div>
          </div>
          <div class="post figHover"><img class="img-res" src="../assets/images/channels/law/law pic png-01.webp" alt="aisha2">
            <div class="txt">
              <p data-text="lawPost5">We have an elite of senior law professors specialized in all branches of international and local law, whether in Arab countries or Europe.</p>
              <p data-text="lawPost6">We are ready to receive your cases in all international, criminal, civil, personal and military cases.</p>
              <p data-text="lawPost7">We do all legal procedures with governmental and non-governmental agencies for you. </p>
              <p data-text="lawPost8">Completing the registration procedures with the real estate registry.</p>
              <p data-text="lawPost9">We provide a legal consultation service through a legal consultant or several consultants to follow up on all legal issues. </p>
              <p data-text="lawPost10">We have Arab and foreigner lawyers. </p>
              <p data-text="lawPost11">You could get an online lawyer, a general lawyer or get an online legal consultation, with the least effort, we can reach you wherever you are.</p>
              <p data-text="lawPost12">Ask a lawyer for any important legal questions you want.</p>
              <p data-text="lawPost13">Our team monitors the obligations of the lawyer towards the client, we guarantee the rights of both parties, as our goal is to make sure that everyone gets benefit within the institution.</p>
              <p data-text="lawPost14">In the case of choosing to get a legal consultation, a fee of 50 EGP will be paid for ssubmitting the request as a guarantee of your commitment, provided that it's not refundable in case you don't comply with the appointment. It's up to you to choose the consultation to be via phone, WhatsApp, e-mail, or an in-person interview in the office; considering that each has a different fee. </p>
              <p data-text="lawPost15">Also, for booking your case, you'll have to pay a nominal fee of 100 EGP for submitting the request, that will be deducted from the total fees later. The fees vary according to the country of residence.</p>
              <p data-text="lawPost16">We're glad to receive your requests.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="pagesListings">
      <div class="container">
        <div class="icons">
          <div class="box"> <img src="../assets/images/office_content/law office icon-01.webp" alt="law icon">
            <p data-text="legalAdvice">Legal advice</p>
          </div>
          <div class="box"> <img src="../assets/images/channels/law/book your case icon-01.webp" alt="cases icon">
            <p data-text="bookCase">Book Your case</p>
          </div>
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
            <input id="inp_name2" type="text" name="name" placeholder="Name" data-text="inp_name">
            <input id="inp_mail2" type="email" name="mail" placeholder="Email" data-text="inp_mail">
            <input id="inp_mail2" type="phone" name="phone" placeholder="Phone" data-text="inp_phone">
            <div class="radios">
              <p data-text="Slct">Select your need:</p>
              <div class="rad">
                <input type="radio" id="legalAdvice" name="legalAdvice" value="legalAdvice">
                <label for="legalAdvice" data-text="legalAdvice">Legal advice</label>
              </div>
              <div class="rad">
                <input type="radio" id="bookCase" name="bookCase" value="bookCase">
                <label for="bookCase" data-text="bookCase">Book Your case</label>
              </div>
              <div class="rad">
                <input type="radio" id="other" name="other" value="other">
                <label for="other" data-text="mcq_other">Other</label>
              </div>
            </div>
            <div class="fileInp newcho">
              <div class="choicess">
                <label for="formFile"><span data-text="caseType">Case Type</span> :</label>
                <select id="browsers" name="caseType">
                  <option value="Local" selected data-text="localCase">Local Case</option>
                  <option value="International" data-text="interCase">International Case</option>
                </select>
              </div>
              <div class="choicess">
                <label for="formFile"><span data-text="localCase">Local Case</span> :</label>
                <select id="browsers" name="caseLocal">
                  <option class="capitalize" value="civil" selected data-text="loCase1">Criminal</option>
                  <option class="capitalize" value="personal" data-text="loCase2">Civil and Compensation </option>
                  <option class="capitalize" value="goven" data-text="loCase3">Personal status and family cases </option>
                  <option class="capitalize" value="military" data-text="loCase4">Governmental</option>
                  <option class="capitalize" value="" data-text="loCase5">Military courts</option>
                  <option class="capitalize" value="" data-text="loCase6">Non-government</option>
                  <option class="capitalize" value="" data-text="loCase7">Notary office</option>
                  <option class="capitalize" value="" data-text="loCase8">Land registry</option>
                  <option class="capitalize" value="" data-text="mcq_other">Other</option>
                </select>
              </div>
              <div class="choicess">
                <label for="formFile"><span data-text="interCase">International Case</span> :</label>
                <select id="browsers" name="caseInter">
                  <option class="capitalize" value="" data-text="interCase1">Conflicts of laws</option>
                  <option class="capitalize" value="" data-text="interCase2">Nationality and immigration cases </option>
                  <option class="capitalize" value="" data-text="interCase3">Family reunion</option>
                  <option class="capitalize" value="" data-text="interCase4">Asylum cases </option>
                  <option class="capitalize" value="" data-text="interCase5">Residence</option>
                  <option class="capitalize" value="" data-text="interCase6">Defamation </option>
                  <option class="capitalize" value="" data-text="interCase7">Family cases </option>
                  <option class="capitalize" value="" data-text="interCase8">Criminal </option>
                  <option class="capitalize" value="" data-text="interCase9">Civil and Compensation </option>
                  <option class="capitalize" value="" data-text="interCase10">Properties </option>
                  <option class="capitalize" value="" data-text="mcq_other">Other</option>
                </select>
              </div>
            </div>
            <textarea id="inp_msg2" name="msg" placeholder="Message" data-text="inp_msg"></textarea>
            <input class="specBtn" id="submit2" type="submit" value="Send" data-text="submit">
          </form>
        </div>
      </div>
    </div>
    <div class="donaMsg">
      <div class="container">
        <h2 class="withBg" data-text="donatMsg">Donation Message:</h2>
        <div class="txt">
          <p data-text="lawD1">Donate to refugees, families of victims, victims of violence or war and to those in need; to get free legal consultation and take a step forward in their legal cases.</p>
          <p data-text="lawD2">You don't have to donate money at all, just donate the consultation, donate by joining us as a lawyer.	</p>
          <p data-text="lawD3">There are many ways to donate.</p>
          <p data-text="lawD4">The Prophet Mohamed, peace be upon him, said that (Allah helps one as long as they help others)</p><a href="{{ route('NAA-Donate.index') }}">
            <button class="specBtn" data-text="mcq_donate">Donate</button></a>
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
