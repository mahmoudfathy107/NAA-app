const textFields = document.querySelectorAll("[data-text]"),
  imgFields = document.querySelectorAll("[data-img]"),
  langChangers = document.querySelectorAll("[data-lang]"),
  currentLang = localStorage.getItem("lang");

const language = {
  en: {
    welcome: "Welcome",
    soon: "Coming Soon",
    rdMore: "Read More",
    writer: "Writer",
    ticket: "Book Your Ticket",
    banner:
      "./assets/images/home_content/naa world2-01.webp",
    "banner_Alam Mwazy":
      "../assets/images/longBanners/alamMwaziEng.webp",
    banner_Khaltbeta:
      "../assets/images/longBanners/khaltbetaBannerEng.webp",
    banner_RoQeta:
      "../assets/images/longBanners/RoqtiaEng.webp",
    banner_Ghita:
      "../assets/images/longBanners/GhetiaEng.webp",
    "banner_Hakmt El Mahkma":
      "../assets/images/longBanners/hakmtElmahkmaEng.webp",
    "banner_Nazly wel mwahb":
      "../assets/images/longBanners/m3akomNazlyEng.webp",
    "banner_Crime Fantasy":
      "../assets/images/longBanners/crimeBannerEng.webp",
    "banner_El-Rawy Family":
      "../assets/images/longBanners/ElrawyEngBanner.webp",
    "banner_Kids Songs":
      "../assets/images/longBanners/kidsSongsEng.webp",
    "banner_El-Meha":
      "../assets/images/longBanners/elmahyaEngBanner.webp",
    "banner_Academy of  scientific research":
      "../assets/images/longBanners/scienceresearchEng.webp",
    "banner_Photography Studio":
      "../assets/images/longBanners/photoStudioEng.webp",
    "banner_Publishing House":
      "../assets/images/longBanners/PublishEng.webp",
    pub_poster:
      "../assets/images/publish/pub_poster/EngPoster.webp",
    pub_poster_rawy:
      "../assets/images/publish/pub_poster/rawyEng.webp",
    "banner_NAA Solicioters":
      "../assets/images/longBanners/maktbMohamahEng.webp",
    banner_Charity:
      "../assets/images/longBanners/charityEng.webp",
    alam_mwazy_poster:
      "../assets/images/shows/showsPosters/alam_mwazy/2.webp",
    crime_poster:
      "../assets/images/shows/showsPosters/crime/2.webp",
    ghita_poster:
      "../assets/images/shows/showsPosters/ghita/2.webp",
    hakmt_ElMahkma_poster:
      "../assets/images/shows/showsPosters/hakmt_ElMahkma/2.webp",
    khltbeta_poster:
      "../assets/images/shows/showsPosters/khltbeta/2.webp",
    kidSongs_poster:
      "../assets/images/shows/showsPosters/kidSongs/2.webp",
    nazly_poster:
      "../assets/images/shows/showsPosters/nazly/2.webp",
    rawy_poster:
      "../assets/images/shows/showsPosters/rawy/2.webp",
    roqeta_poster:
      "../assets/images/shows/showsPosters/roqeta/2.webp",
    pub_srv1: "publish",
    pub_srv2: "distribute",
    pub_srv3: "read",
    pub_srv4: "translate",
    pub_srv5: "prize",
    srvs: "NAA Services",
    pubsrvs: "Services",
    home: "Home Page",
    channels: "NAA Channels",
    shows: "NAA Shows",
    offices: "NAA Offices",
    contact: "Contact Us",
    contactInp: "Type your message here...",
    pleaseFill: "Please fill this form",
    about: "About Us",
    donate: "Donate",
    bgChoose: "Choose",
    bgPress: "Press",
    bgCheck: "Check",
    bgEnjoy: "Enjoy",
    fAD: "Advertise with us",
    ad1: "If you're talented or professional, either you're a doctor, engineer, lawyer or having any profession that you excel at. Rregardless of whether you're a beginner or well-known in your field, and you'd like us to advertise for you, to market your business or even if you need a sponsor.",
    ad2: "Just contact us on NAA World.",
    ad3: "We'll help you reach your target. ",
    ad4: "Don't miss our offers as we aim to support and help you reach your target and prove yourself to the whole world.",
    fWork: "Work with us",
    fJoin: "Join Us",
    fTerms: "Terms & Conditions",
    terms1:
      "By using www.naaworld.uk, you agree to these terms and conditions. In case you don't agree, you might not be able to use the site.",
    terms2:
      "We welcome all your comments as long as the site's policies and rregulations are applied.",
    terms3: "Terms of using the site: ",
    terms4:
      "You acknowledge and undertake the full responsibility about subscribing or paying to view any work on the site, or to use any particular service.",
    terms5:
      "You also undertake that you won't copy, download, repost, reproduce, adapt, or extract any part of the site's content. You also can't cut, broadcast or transmit any content on the site in any way or any means of communication without a prior authorization from us.",
    terms6:
      "violating any of our terms would be illegal as we have the intellectual property right for all the contents of the site including; dolls, works, literature, videos and all designs. Any violation for our rights will expose you to legal and criminal liability.",
    terms7:
      "We are not obligated to return any of the prepaid subscription fees as long as you used the service provided on the site.",
    terms8:
      "The whole responsibility lies on the advertiser in case they advertise or present what they don't own without a prior permission from the owner, impersonate a real or unreal person in any way, bother, cause inconvenience or promote unpleasant things.",
    terms9:
      "We have the copyright and intellectual property right for all the contents on the site.  ",
    fPolicy: "Privacy Policy",
    policy1:
      "We care about your privacy and security. We are committed to all our offers, gifts and competitions.",
    policy2: "We work hard to provide you the best. ",
    policy3: "We work hard not to bother you.",
    policy4: "We work hard to keep all your data safe. ",
    policy5:
      "We reserve the legal right to terminate your subscription in case you violate any of our terms and conditions.",
    policy6:
      "We work hard, so you could get a good service. Any problem with internet connection, that could affect the quality of the service, is out of our control and is considered to be the client's own problem.",
    policy7:
      "Your subscription to our site, allows you to view all the works on the site, besides its sub-pages, all services and all offers for a limited period of time. After that, you're not allowed to use any of these services unless you pay for it.  However, if you pay for the service, you're allowed to use it for its limited time that is set by you.",
    policy8:
      "Paying a ticket to watch one video, doesn't allow you to watch another video. Each service and each video could be purchased separately.",
    policyF: "Hope you enjoy with us!",
    wtc: "Watch now",
    rct: "React",
    cmmt: "Comment",
    ic_pubHouse: "Publishing House",
    ic_phoghyStudio: "Photography Studio",
    ic_charity: "Charity",
    ic_acdmyResearch: "Academy Of Scientific Research",
    inp_name: "Name",
    inp_name2: "Name",
    inp_mail: "Email",
    inp_mail2: "Email",
    inp_msg: "Message",
    inp_file3:
      "You want to participate in which competition",
    submit: "Send",
    cairo: "Cairo - Egypt",
    london: "London - UK",
    mcqHeader: "You need to contact us to:",
    mcq_work: "Work with us",
    mcq_advice: "Get legal advice",
    mcq_ad: "Advirtise with us",
    mcq_publish: "Publish with us",
    mcq_pics: "Take pictures",
    mcq_donate: "Donate",
    mcq_watchEp: "Watch episodes",
    mcq_book: "Buy a booy",
    mcq_translate: "Translate",
    mcq_other: "Other",
    buy: "Buy Now",
    found_about: "About the foundation",
    founder_about: "About the founder",
    ty: "Thank you",
    tyall: "Thanks everyone!",
    donateSms: "Donate By SMS:",
    donatePhone: "Donate By phone:",
    donateBank: "Donate with bank transfer",
    donateOther: "Donate with other ways:",
    donors: "Donors",
    tyMsg: "Message of thanks and appreciation",
    Who: "Who are we:",
    WhoT: "We're a complete and integrated entity that includes a group of channels for (entertainment, education, culture, news, religion), and we have a whole team that is highly specialized in advertising in an innovative and attractive way.",
    fn1: "We Promote and Announce:",
    fn1X: "Products, places, paper & online books, newspapers & magazines, talented people, new & inspiring ideas and whatever deserves to be highlighted.",
    fnGoal: "•	We aim to:",
    fn1Y: "To provide purposeful and enjoyable content away from the low quality content, we raise important and controversial issues differently, we By highlighting popular topics and discussing them in a civilized manner, we introduce ideas that build a society Simply put, we reconstruct the awareness and culture that was buried a long time ago and revive it again.",
    fn2: "Publishing and Distributing:",
    fn2X: "We have a publishing house, we publish, distribute, print and translate, publish books and distribute them locally and internationally. Lowest costs and a high level of service.",
    fn2Y: "To spread as much culture as possible, and to allow the whole world to participate and learn about other cultures, and Also, highlighting and presenting literary talents that deserve opportunities and exposing them to the whole world.",
    fn3: "Legal Consulting and Law Firm:",
    fn3X: "We have an elite of senior law professors, specializing in all branches of international law and local law, whether, in the Arab and European countries abroad, we receive all international, civil, and criminal cases and lawsuits Personal and military statuses, and the termination of all legal procedures with governmental and non-governmental agencies, And the completion of the registration procedures with the real estate registry and the real estate registry. We offer legal advice, Through a legal advisor or several advisors, to follow up on all legal issues.",
    fn3Y: "To gather lawyers at the international level, whether Arabs or foreigners. Providing access to a lawyer Online to obtain legal advice online, saves the effort and the hassle of travel. Providing services under constant monitoring and follow-up to ensure the level of service and customer satisfaction.",
    fn4: "Research Institute:",
    fn4X: "Research services are provided to researchers, postgraduate students, master's and doctoral dissertation owners, on They differ in their fields to help them complete their scientific career and overcome all the problems that may arise You face them in the various academic tasks entrusted to them, from preparing research and papers, and we have an elite of Academic researchers specializing in various fields.",
    fn4Y: "Providing the largest possible assistance to the student, by preparing scientific research and papers that can be published, whether for The promotion or a knowledge balance that supports the student's scientific career.Meeting the needs of students about preparing the scientific papers necessary to apply for seminars, conferences, and research Promotions in various disciplines, and providing them in both Arabic and English with the best quality and highest accuracy. Gathering all the student's assistance needs in one place and with the highest possible quality.",
    fn4Y1:
      "We are an entity and an institution that aims to change, build and provide services with the best quality, besides we aim to always be at the top.",

    Who_ff: "Aisha Abdelmaguid",
    WhoT_ff:
      "The owner of NAA with all its channels and branches.",
    ff_0: "High appeal lawyer and state council at Egyptian Bar association.",
    ff_1: "Member of the Human Rights and Liberty Committee of the Arab Lawyers Union",
    ff_2: "Member of the International Relations Committee of the Arab Lawyers Union.",
    ff_3: "Writer and author of the Arab Writers Union.",
    ff_4: "Author and researcher at the Arab Writers Union.",
    ff_5: "Family and immigration lawyer in UK.",
    ff_6: "Journalist in Arab newspapers and magazines.",
    ff_7: "Interested in children's literature.",
    ff_8: "Create the association (The Eraser Islamophobia) in UK to erase religious phobia and illiteracy, and help the needy people.",
    ff_9: "A lawyer and writer who writes in various fields, literature and all kinds of poetry. However, she focuses on zajal and vernacular poetry and Egyptian folklore, as well as prose poetry. She also writes in the field of Islamic and scientific research and studies, incorporating the legal, judicial and social perspectives in them.",
    ff_10:
      "As she believes that education in childhood is like engraving on a stone, she writes in children's literature, so she published an article about children literature in an opinion poll in (Aqlam Arabia) magazine in Oman. She also writes children's songs and promotes them in some monologues and cultural seminars in London to spread Arab culture in the Europe. ",
    ff_11:
      "She got a Bachelor degree in Sharia and Law from Al-Azhar University in Egypt.",
    ff_12: "She went to UCL university in London as well. ",
    ff_13:
      "She got more than 31 diplomas in various fields like physical and mental fitness, psychology, cooking, physical health, music, and more.",
    ff_14:
      "In 2018, she participated in one of the bands in England to launch her own songs with her own melodies, lyrics and singing with the band's choir and the rest of its composers, but she decided to stop suddenly due to some personal circumstances.",
    ff_15:
      "She's good at cooking, but she does not like it. So, some publishers offered her to write a book about different foods and dishes, and cooking recipes. but she is still considering it though.",
    ff_16:
      "Despite the hard times she went through, that she previously mentioned part of it in Al-Jadeed magazine in London, she excelled in her study and work.",
    ff_17:
      "She graduated in 2016 from the Faculty of Sharia and Law Al-Azhar University with honors for five years of excellence and achievement. She also got many scholarships and academic excellences;",
    ff_m: "She mentioned:",
    ff_f1:
      "The 1st year: She got an excellent grade, a financial grant, a special section, a free TOEFL and computer courses. However, she gave up these grants for personal circumstances.",
    ff_f2: "The 2nd year: financial grant",
    ff_f3:
      "The 3rd year: An excellent grade, a financial grant, and a special grade at criminal law for theory and practice as she solved the issue of killing protesters perfectly and got a certificate from Dr. Rabab Antar. Besides, she got 100% at criminal law subject and another 100% for its research.",
    ff_f4:
      "The 4th year: She got a financial grant; besides she wrote a research about finance and tax legislation, which was around 500 pages, and it got the admiration of the professor, Dr. Muhammad Abdel-Moaty. She also took the lead in being the only student to get 99% at this subject (Finance and tax legislation) . She got the admiration of the counsellor, Ahmed Mowafi for her research in Civil contracts for resolving the case of the statute of limitations.",
    ff_f5:
      "“I might remember Dr. Ahmed Mowafi's words to me”:",
    ff_f6:
      "“Is someone in your family a judge or a counsellor”?",
    ff_f7: "I answered: “No, doctor, I swear”.",
    ff_f8:
      "He said: “Iincredible! I mean, is this all your personal effort”?",
    ff_f9: "I answered: “Yes, I swear, no one helped me”",
    ff_f10:
      "He said: “God bless you, but I also can't believe anything other than that it's a judge who wrote the solution of this case.”",
    ff_f11:
      "Then he signed the case for me with (Good luck, Dr. Ahmed Moafi) and got a photocopy of it.",
    ff_f12:
      "The 5th year: got a financial grant and a grant from the International Arbitration Commission to join it as a member in America.",
    ff_f13:
      "Besides, Financial rewards, good reputation and appreciation among many university professors and counsellors.",
    ff_f14:
      "“I might remember the words of Dr. Zainab Al-Demerdash, Head of the Department of Fundamentals of Jurisprudence, to me: ",
    ff_f15:
      "“The Department of Comparative Jurisprudence is missing someone like you, Aisha. I expect you to have a prosperous future, God willing”",
    ff_fx2:
      "Moreover, she mentioned: “I used to answer the exam questions from the original law books that the professor of the subject referred to, with mentioning the number of the volume, the section, the page, the agreement, the difference, the disagreement, etc..... Blessings, I'm also grateful for something else, which is memorizing the Holy Qur'an at a young age. I used to recite and memorize it with the number of the surah, the page, the Hezb, the juz', and the Meccan, Madani, and similar arrangement. Also, in the written exams, I used to write the Qur'an in the punctuation and letters formation, the Hezb number, the page, the name of the Surah and where it is located. I was honoured to get compliments from Dr. Nadi El-Tayeb and Dr. Abdul-Ghani Mahmoud, may God have mercy on him; and the control section of all grades and the good reputation. I'm so grateful for what Allah granted me.”“ I remember the head of control section calling me, in my second year at college, saying, “Do You cheat in exams?” I replied, “No, I don't like cheating.” She said, “How could you write the Holy Qur'an editorial with the formation, page number, name of the surah, Makki and Madani, the reason for revelation, the time of revelation and other details?” I said “No, I swear, I recite it and memorize it like this. She said,” I will gather 6 of professors and heads of control now, and we will test you”. I answered like” I didn't review it, and you know it's easy to forget parts of Quran”. She said “No, it'll be now”. So, I gave up and they opened the Quran randomly to test me. I got to answer all the questions and they were They asked me why I didn't get a license in Quran, and I replied “I don't know how to get it and I'm not concerned about it. I just love to memorize Quran”. Since that day, I got closer to all professors at college and even to the dean and university's president. “Also, I'm proficient in the Quran's ten readings, Al-Jazriah text and children's masterpiece”",
    ff_f2_1:
      "In 2018, she published an article in an opinion poll in Aqlam Arabiya magazine on children's literature through the past and the present, and how it is affected by cultures and eras.",
    ff_f2_2:
      "She also published some poems for her in Oman daily newspaper.",
    ff_f2_3:
      "In 2019, she had an interview at BBC with Dr. Fouad Abdel Razek in The World of Books about her books that were published with the House of Wisdom in London; ",
    ff_f2_3_1:
      "Dhat Ash'ar w Malazzat  Poems and Pleasures (Arabic poetry collection)",
    ff_f2_3_2: "Al-Khati'a  The Sin (Novel)",
    ff_f2_3_3:
      "With Dar Al-Moataz in Jordan, (Flahdani fi Sadri)  a research book with CD.",
    ff_f2_4:
      "She published her first poetry book in 2018, then her first novel in 2019.",
    ff_f2_5:
      "She recorded her first English song from her words, melodies, music and distribution that is (I'm falling in love).",
    ff_f2_6:
      "In 2020, she established NAA for fashion that is known as Nefertitiaishaabdelmaguid, but the company's activities have temporarily suspended.",
    ff_f2_7:
      "She established an online Publishing House in 2021. ",
    ff_f2_8:
      "She established NAA institution and entity with all its branches and fields in 2022. ",
    ff_f2_9:
      "She studied business and entrepreneurship at British universities.",
    ff_f2_10:
      "She helped many associations, universities and organizations at how to build a manager, how to start a project, how to manage time and distribute effort.",
    ff_f2_11:
      "She has conducted many seminars and parties to support women and educate parents about how to raise up their children.",
    ff_f2_12:
      "She got a postgraduate studies degree in law in England. ",
    ff_f2_13:
      "She is about to get her Master degree in law in England to be promoted from being a lawyer to being a judge.",
    ff_f2_14:
      "She contacted the Queen Elizabeth to publish her research as well as to congratulate her on some occasions. She also contacted Prime Minister Boris Johnson, Prince William and his wife Kate. Although her friends said that it'd be useless and that the Queen and her family wouldn't respond, the response came from The Queen and that she was happy and proud to read the poetry that was written for her and the royal family, then other responses and letters followed, then letters from Prince William and his wife Kate and Boris Johnson. The point is that there's always a chance, you just need to pursuit.",
    ff_f2_15:
      "That was a brief summary of Aisha Abdul Majeed's academic and professional life, and as for her personal and emotional life, there is a lot in it.",
    ff_f2_16:
      "If you want to talk to the founder of the company, Aisha Abdul Majeed directly, or you want to meet her in person, just contact us. As for the lack of time and the large number of appointments, a little fee will be paid in advance for the appointment. Another fee will be determined by us according to whether the caller is a person, company or program. ",
    ff_f2_17:
      "Anyway, there is a fee of 100 pounds to be paid in advance, whether the communication is via WhatsApp, a phone call, an official interview, via e-mail, or through a television channel, in order not to disturb and to ensure seriousness and respect for appointments, and it is not refundable even the communication is approved or rejected. But in the case of approval, it will be deducted from the cost of the service later, and the cost of the service is determined after the approval of the communication from the founder of the company, Aisha Abdul Majeed, according to her time and her schedule.",
    ff_f2_18:
      "In case of the breach of the appointment from the caller's side, the cost won't be refunded and the communication will also be lost.",

    conFounder: "Connect with the founder:",
    gallery: "Gallery",
    inp_Vpost: "Post",
    PrevPosts: "Previous posts:",
    donatMsg: "Donation Message",
    d1: "Donate to refugees, victims and people with disabilities; to help them develop their talents or get a job. ",
    d2: "It is important for refugees and victims to re-integrate into society. ",
    d3: "You don't have to donate money, you can just give them the opportunity any way.",
    d4: "You help a lot of people and it means a lot to us.",
    d5: "Some donors would be happy to post their pictures while donating to us, just to show how happy they are with us and our support, and also to encourage others to support us as they did. ",
    d6: "On the other hand, some donors prefer not to be in public performances. Whatever the way you prefer, is very meaningful to us and we really appreciate it. ",
    d7: "Message of Gratitude: ",
    d8: "Some people donate a service, food, water, bags, clothes or money; and others donate prayers and encouragement. ",
    d9: "Whatever the way you support us, we appreciate it!",
    d10: "Have fun raising money for our vital work.Thank you!",
    d11: "Sponsor any of our projects",
    d12: "Help us beat the hunger, blind following, child marriage... or any of our aims or projects.Thank you!",
    d13: "Give your time",
    d14: "Got somespare time on our hands?Volunteer with us!Thank you!",
    d15: "Donate old things",
    d16: "That can be recycled such as clothes, accessories and gifts.Thank you!",
    d17: "Advertise us",
    d18: "Marketing Tv ads, radio ads or transport ads.Thank you!",
    ourPhog: "Our Photographers:",
    drama: "NAA Drama",
    fashion: "NAA Fashion",
    islamophobia: "NAA Islamophobia",
    kids: "NAA Kids",
    news: "NAA News",
    talent: "NAA Talents",
    poem: "NAA Poems",
    peomP1:
      "We do not forget that lovers of poetry, zajal and rapture, just subscribe to us with your poems or enjoy our poems, the decision is your decision",
    photog: "NAA photography",
    phogper1: "Ahmed Gomaa",
    phogper2: "Zizo Ali",
    Solici: "NAA Solicioters",
    resear: "NAA research",
    publish: "NAA publishing house",
    chanAbout: "About the channel:",
    chP1: "If you're into Drama and excitement, follow us on the blue NAA Drama and keep up with the episodes of our series; (Hakamat El-Mahkama), The law in its new form.",
    chP2: "There's also the series; (Crime fantasy), (the law doesn't justify who is right but who has the proof).",
    chP3: "You'll get to watch a realistic drama and real cases. You'll also get to know law provisions and loopholes to be more familiar with law.",
    chP4: "You'll enjoy with the play (Parallel World) soon.",
    chP5: "All of that and more will be on the blue channel, NAA Drama!",
    chP6: "If you're talented or professional at something and want to develop and take it out to the light, if you think you excel at a specific field, whatever your field, talent or profession, you can share with us at NAA Talents channel.",
    chP7: "We're going to be the link that connects you with whoever interested in your field or would like to adopt your talent for you to be a super star in your field! ",
    chP8: "Watch our program, (Nazly & Talents) on NAA Talents channel, and your dream will come true.",
    chP81: "Our Talents",
    chp822: "Abdallah Said",
    chp823: "ABDALLAH WORK,(IN COLOR).",
    chp824:
      "We helped Abdullah to join different teaching classes for helping other people how to draw and you can see this in the photos progress.",
    chp825:
      "Also, some of these photos have been shared in a painting gallery under the name of",
    chp826: "(The breakdown and the reflection).",
    chp827:
      "Again, every portrait has a story behind it and name, if you want to know more about it,  you can discuss that with the artist himself.",
    chp83: "ABDALLAH WORK, FOR KIDS (IN COLOR).",
    chp831:
      "We helped Abdullah to publish these works in a kid book with a good publisher.",
    chp832:
      "Every portrait has a story behind it and name, if you want to know more about it,  you can discuss that with the artist himself.",
    chp833: "(How to pray)",
    chp84: "BDALLAH WORK,( IN CHARCOAL & PENCIL)",
    chp843: "My grandma( old lady from the village)",
    chp85: "About Abdallah:",
    chp851:
      " am Abdullah, an artist and designer. I create beautiful graphics for websites and paint an amazing picture.",
    chp852:
      "He is an artist and designer who has experienced trauma and anxiety.",
    chp853:
      "He is a wonderful person with an inspiring life story. He is also a talented artist. Through our library, we helped him connect him with authors and publishers interested in his work.",
    chp854:
      "And we gave him the opportunity to publish his work on our website to be one of our team members, he can now teach people how to draw or help with art exhibition projects.",
    chp855:
      "Join us, like Abdullah, and share your talent.",
    chp856:
      "We helped Abdullah to publish his work with a good publisher.",
    chp857:
      "Again, every painting has a story behind it and a name, if you want to know more about it, you can discuss that with the artists himself.",

    chP9: "Our channel isn't a usual one because it combines all kinds of art…",
    chP91:
      "We're presenting you fashion, besides giving you tips for how to have a better appearance. Also, we're having a celebrity person for each episode, and we're going to get through different topics that may have your concern.",
    chP92:
      "As we care about how our fans feel, we are having a part of our episode, especially, for figuring out solutions for your problems. Besides sharing us your problems, you can also share us your products that are related to beauty, fashion or art. We're going to advertise your products and help them come out to light. ",
    chP93:
      "We also have competitions and valuable prizes that you'll like a lot.",
    chP94:
      "Follow us on the Pink NAA channel. With a new episode every week.",
    chP10:
      "NAA Kids channel isn't just for kids' entertainment and cartoon, it's also educational that aims to correct children's behaviour and base it on authentic concepts. There are adventures, exciting events and entertaining & educational songs. Whatever your age is, you're going to enjoy and learn with us.",
    chP101:
      "Follow us on the yellow NAA Kids, with Ghaita movie besides plenty of adventures and competitions.",
    chP11:
      "It's for news, entertainment, socials and awareness. We're presenting programs with a variety of segments. We'll show you news in a fun and new way in our program, (Khaltabeeta b El-Salsa). We'll also get through social cases in a new way. You'll find the solutions for all your kids' problems. ",
    chP111:
      "If you're into horror and excitement, you'll find it with our greatest horror program. If you're brave enough, follow our FM Horror program. And if you're not, you could just have dinner and go to bed!",
    chP112:
      "Follow us on the red NAA News channel to enjoy all our new works.",
    chP12:
      "Islam urges to good manners, Islam is moderate, Islam is easy not hard. Those are our slogans for NAA Islamophobia channel that has: ",
    chP121: "Al-Mahaia program:",
    chP1211:
      "It's a religious awareness program that doesn't get through the basics of religion as they are well-known basics like fasting, prayers, zakat (charity) and so.. We also don't bring up inviting people to join Islam as we believe in what's said in Quran 'لكم دينكم و لي دين'  ( For you is your religion and for me is my religion). Moreover, 'يعرفونه كما يعرفون ابنائهم' (They recognise it as they recognise their sons). So, religion is well-known to everyone, and we don't have to highlight it. We'd rather let this to Islamic clerics as they know better about it. We only discuss the doctrine of Quran and Sunnah; jurisprudence that we're being rewarded for even if we make mistakes as prophet Mohamed said that when a judge gives a ruling, having tried his best to decide correctly, and is right, he will get a double reward; and when he gives a ruling, and is wrong, he will get a single reward. ",
    chP1212:
      "They are also rulings in which research judgement are available, but for judgment in rulings there are conditions like; knowledge, reading, research, comparison and other conditions. I t has to be considered that there would be a discussion for any ruling presented. Perhaps we will be convinced of it, and perhaps we will show what is right.",
    chP1213:
      "And we rely on this in our Al-Mohaya program on NAA Islamophobia. Among the topics that we'll get through is the issue of beating women in the Holy Qur'an. Most scholars say that it is permissible, and we say that it is not permissible to beat women according to the Qur'an and Sunnah as well, based on evidence and proofs, leaving the door for discussion open, as we present many other researches.",
    chP1214:
      "First of all, we're all humans and make mistakes and our words are neither inspired nor impeccable. Abu Bakr Al-Siddiq, may God be pleased with him, says that: (Everyone is taken from his words and returned, except for the owner of this grave) referring to prophet Mohamed, peace be upon him.",
    chP1215:
      "And Allah says in Holy Quran 'و ما ينطق عن الهوى إن هو الا وحي يوحى' (He doesn't speak out of desire, for it is nothing but a revelation that is revealed). Allah also says: 'ما فرطنا في الكتاب من شيء' (We haven't neglected anything in the Book).",
    chP1216:
      "Therefore, based on all of that, we say to everyone, before anyone judges us relying on the words of any scholar, or the wise jurist, or any sheikh; I say to all those who will argue about people whose words are supposed to be taken or rejected, if you rely on their words, then our argument relies on the Book of God itself, in which God didn't neglect anything and left nothing without mentioning. We also rely on the Sunnah of prophet Mohamed who doesn't speak out of desire.",
    chP1217:
      "So, we rely on the authentic source, and you rely on the one who interpreted the source according to his opinion, that might be wrong if it's corrected or right until the opposite is proven. Therefore, I say that our only source from which we derive our research is the Holy Quran and the Sunnah of Prophet Mohamed, and that doesn't mean we don't refer to scholars or interpreters of Quran, but we have disagreed with what they interpreted, and it doesn't mean our objection to the Holy Quran. Rather, it is disagreeing to the one who interpreted the text and set aside his correctness not understanding his speech or comprehending the chapter it's mentioned in.",
    chP122:
      "This channel also includes NAA Charity which is for helping whoever is in need for clothing, food, psychological support or any kind of support.",
    chP123:
      "It also offers special help for Hajj and Umrah for the old people, orphans and the needy.",
    ad_1: "We are a research institution that provides academic research services to researchers and postgraduate students in all their fields, to help them complete their academic career and overcome all the obstacles they might face with the various academic tasks they have to do.",
    ad_2: "We also help with master and PHD papers, as we have an elite of academic researchers specialized in various fields.",
    ad_3: "We help students of different specialties with doing academic research and papers, whether for promotion purposes or as a supportive knowledge for the student's academic career. ",
    ad_4: "We also help the students with preparing the academic papers for submission to seminars, conferences and promotion researches in different fields (whether educational, psychological, or even humanitarian, engineering, scientific, medical, etc.)  in both languages; Arabic and English with the best quality and accuracy.",
    ad_5: "We seek to help students publish their scientific and academic papers in any of the scientific fields based on scientific standards that go with the interests of major universities and scientific research centres. As for publishing researches, we have to keep up with scientific fields, and also to edit and coordinate according to the common followed system, besides making sure that we publish according to the required criteria. That's the system we make sure it's applied to do our work properly.",
    ad_6: "We start with the student by preparing their scientific research step by step, starting from choosing the most appropriate title for the subject of the study to having it done completely, including the introduction, the theoretical and practical part, the results and recommendations based on the conditions and details of the preparation that go with the conditions of the organization to which the research is submitted, in any country.",
    ad_7: "Our academic research preparation service is characterized by high quality, accuracy, and excellence in achievement by specialized professors, besides considering to provide the student with research ASAP with reasonable cost.",
    ad_8: "It's up to you to choose the type of research; Bachelor's, Postgraduate, Master's or PhD. ",
    ad_9: "It's also up to you to choose whether we do the whole research or just part of it, as we do graduation projects, all over the Arab countries, in all fields of research.",
    ad_10:
      "It's up to you to decide if you want to do a research to be published as a book or as an academic material.",
    adS: "Our services are:",
    adS_1: "Education tools design",
    adS_2: "Literary and Academic Translation",
    adS_3: "Doing and publishing academic research",
    adS_4:
      "Suggesting the thesis topics for Master's and PhD's degree.",
    adS_5: "Preparing the research proposal.",
    adS_6:
      "Coordination of Master's and PHD's and other kinds of thesis.",
    adS_7:
      "Help only with references for Master's and PhD's thesis. ",
    adS_8:
      "Help only by reviewing Master's and PhD's thesis.",
    adS_9: "Proofreading and grammar check.",
    adS_10: "statistical analysis",
    adS_11: "Preparing presentations",
    adS_12:
      "Consultations on assignments and university reports",
    adS_13: "Getting university admissions.",
    adS_14:
      "Convert the Master or PhD thesis into a book for publication",
    adS_15:
      "Converting the thesis into an academic research",
    adS_16: "Preparing the general framework",
    adS_17: "Preparing the theoretical framework",
    adS_18: "Summarizing the mentioned studies",
    adS_19: "Providing references and resources",
    adS_20: "Criticism of mentioned studies",
    adS_21: "Preparing training packages",
    adS_22: "Search Plan",
    adS_23: "Research proposal",
    adS_24: "Research results",
    adS_25: "Judging the research results",
    adS_26: "Proofreading",
    adS_27: "Master's thesis",
    adS_28: "Academic translation",
    adS_29: "PhD thesis",
    adS_30: "statistical analysis",
    adS_31: "Suggesting titles for master's thesis",
    adS_32: "Suggesting titles for PhD thesis",
    adS_33: "Scientific translation",
    adS_34: "Surveys",
    adS_35: "Questionnaire Arbitration",
    adS_36: "Scientific and academic Research",
    adS_37: "Methodology",
    adX_1:
      "The price will be different if you choose some offers than if we do the whole research from A to Z.",
    adX_2:
      "You have to pay nominal fee to submit your request to guarantee commitment and seriousness, that will be deducted from the total fee later. The fee isn't refunded in case you don't cooperate with us.",
    adX_3:
      "We have done many researches in various fields in different countries, including the UAE, Sudan, Iraq, Egypt, Jordan, and other countries; besides we follow up with the client until their research is approved by the supervisor, and we commit to all modifications if needed.",
    adX_4:
      "We have offers, as we have premium and average service; each with different cost. In case you choose the average service with less cost, we're not responsible for any modification needed; but if you choose the premium service, we commit to all modifications needed.",
    phoG_0:
      "We have a selection of professional photographers in the field of photography, across the country, with high skills, including: ",
    phoG_0a:
      "reativity, artistic photography, Patience and focus, Document the details Strong communication skills ,Teamwork skills Organization, lighting, IDEAS CUSTOMER SATISFACTION. ",
    phoG_0b:
      "You'd feel comfortable with us, as well as respect.",
    phoG_0c: "We also provide you:",
    phoG_1: "Different cameras",
    phoG_2: "professional lenses",
    phoG_3: "Wedding Photography",
    phoG_4: "Pregnancy Photography",
    phoG_5: "Fashion Photoshoot",
    phoG_6: "Outdoor Photoshoot",
    phoG_7: "Indoor Photoshoot",
    phoG_8: "Engagement photoshoot",
    phoG_9: "graduation photoshoot",
    phoG_10: "Kids Photography",
    phoG_11: "Photoshoot before the wedding",
    phoG_12: "Trips photoshoot",
    phoG_13: "Product promotion photoshoot",
    phoG_14: "Real Estate Photoration",
    phoG_15: "spontaneous photoshoot",
    phoG_16: "Party Photography",
    phoG_17: "seminars and conferences photography",
    phoG_18: "family photoshoot",

    phGX_1:
      "All photographers are well-experienced in photography and editing, but if you choose a professional edit, the cost will vary. We have an elite of editors to ensure high quality.",
    phGX_2:
      "You can choose the photographer, or you can appoint us to choose the most suitable and best for you, and each photographer has his own price, provided that communication should be through us, and if you communicate directly with the photographers, the company is not responsible for fraud or the quality of work.",
    phGX_3:
      "You can also join us if you are a photographer.",
    phGX_4:
      "In the event that you choose one of our offers, a deposit of 100 pounds will be paid for commitment at the time of sending the request.",
    phGX_5:
      "In case you choose one of our offers, an agreement will be signed that both of us must not violate its terms. An annual subscription amount will be paid from you, as well as a nominal fee will be paid for submitting the request to ensure commitment, which is 50 non-refundable EGP.",
    pub_h1: "NAA publishing and Distribution ",
    pub_h2:
      "We're an integrated cultural project that connects the writer and reader. We're going to figure out the outstanding writers to distribute, publish and advertise all the good works. Also, we're going to do online publishing and printed magazines, and we're going to be the beacon through which the world will know them.",
    pub_h3:
      "For the readers, we're being the lens that monitors whatever is related to the literary or scientific works to make it easier for you to find whatever goes with your interests.  ",
    pub_h4:
      "You'll find us in every cultural event, by the side of any literary talent, monitoring, evaluating, analyzing, and answering all your questions.  ",
    pub_h5:
      "Watch our program, (El-Rawy's Family) on the purple NAA channel to enjoy and learn from the stories and information that we present. You'll also find reviews on the good works to help you choose good content to read.",
    pub_h6: "Sponsored By",
    pub_h7: "Donate Now",
    pubWithUsP1:
      "From sky to sky words can fly, free you from negative thoughts or beliefs,",
    pubWithUsP2:
      "and let you know that there are roots for foliage,",
    pubWithUsP3:
      "For the development of our society, you must know,",
    pubWithUsP4:
      "That your degree from college is never enough.",
    viewProd: "View products",
    clkHere: "Click Here",
    printPub1: "Print and publish on your own expense:",
    printPub1_1:
      "You cover the cost of publishing and printing your book, considering that the profit is all yours and all rights except for copyright.",
    printPub1_2: "We design the cover for you",
    printPub1_3:
      "We coordinate the book for you internally",
    printPub1_4: "We review the book",
    printPub1_5:
      "We correct the grammar, spelling and structure",
    printPub1_6:
      "We transcript the content for you if it is audio ",
    printPub1_7:
      "This doesn't include online or paper distribution",
    printPub1_8: "That doesn't include translation",
    printPub2:
      "Print and publish on our expense, method (1):",
    printPub2_1:
      "We cover the cost of publishing and printing your book for a certain number of copies only, and that all rights are reserved to the publishing house.",
    printPub2_7:
      "We distribute the book either paper or online or both paper and online, according to what the Publishing House decides, and the Publishing House covers the costs of distribution.",
    printPub3:
      "Print and publish on our expense, Method (2):",
    printPub3_1:
      "We cover the cost of publishing and printing your book, considering that the Publishing House is getting a percentage of the profits according to what they think is appropriate, and that all rights are reserved to the Publishing House.",
    printPub3_7:
      "We distribute the book for you either in paper or online or both paper and online, according to what the Publishing House sees more appropriate, considering that the distribution costs are on the writer.",
    transHead: "Translate with us:",
    distHead: "Distribute with us:",
    transH1: "From English to Arabic",
    transH1_1:
      "We have an elite of translators, so we select the best translator for this task. We match the translator with the content of your book, as the translator must have a large amount of knowledge in the field of the book that they translate linguistically and technically, whether it is a scientific, literary, children's book, or an educational book. The culture of the translator is considered to be one of the things that affect the quality of your book. All of what we provide you is professional, so you have to trust the translator who will translate your book a certified translation.",
    transH1_2:
      "We translate books, documents, birth certificate and other certified translations.",
    transH1_3:
      "We translate for you, whether soft, paper or audio documents. ",
    transH1_4:
      "The translation cost is an estimated value by the company according to what is required to be translated, considering that the translation expenses differ from Arabic and English.",
    transH1_5:
      "The client must pay a fee as a deposit in the case of deciding the type of translation and sending the text to be translated or part of it. This fee is 100 pounds, that will be deducted from the translation fees after agreement, and it's non-refundable in the case of disagreement that'd be due to a violation or non-compliance by the client.",
    transH2: "From Arabic to English",
    transH2_1:
      "We select the best translator for this task, as we match the translator with the content of your book, as the translator must have enough knowledge in the field of the book to translate, whether it is a scientific, literary, children's book, or an educational book. The culture of the translator and their language should be considered, as that affect the quality of your book. We provide you with a professional service, so you have to trust our certified translators.",
    transH2_2:
      "We translate books, documents, birth certificate and other kinds of texts. We translate soft, paper or audio documents. The translation cost is decided by the company according to what is required to be translated.",
    transH2_3:
      "The client has to pay a fee as a deposit once they decide the type of translation and submit what is required to be translated. This fee is 200 pounds, provided that it is deducted from the translation cost later, and it is not refunded in case of disagreement due to the client not being serious or committed.",
    dist1: "Distribute your book in paper",
    dist1_1:
      "When you choose our company for distribution, we negotiate with you about   the commission that you will get, which is usually 30% for the company and 15% for places of sale such as libraries and other places; and what's left is for you, if the distribution is only inside Egypt.",
    dist1_2:
      "If you want to distribute your book outside of Egypt, the percentage of work will increase by an additional 30%.",
    dist2: "Distribute your book online",
    dist2_1:
      "When you choose our company for distribution, the company negotiates with you the commission that you will get, which is usually 50% for the company and what remains is for you, if the distribution is on our website only.",
    dist2_2:
      "If you want to distribute your book on other sites, you will increase the percentage of work by an additional 25% for the owners of other sites.",
    dist3: "In the case of a paper distribution",
    distWays: "Distribution way",
    dist3_1:
      "We take the number of copies to be distributed from you, whether they're printed in the name of our Publishing House or in the name of another Publishing House, then we distribute them with the price set by you, and then offer them for distribution for around 10 to 15 days in the markets. In case it's being sold, we increase the time with the continuation of distribution, in all governorates all over Egypt, but if there's no demand during that period, we will stop displaying it for a similar period of 10 days and then offer it in a different way after that period, another period and this process will be repeated in case of the lack of demand three times in a row.",
    dist3_2:
      "If it's not sold, the copies are returned to their owner, and the mentioned profit percentage is just considered in the case of selling and making profit. As for before distribution and before the profit, the owner of the book is obligated to pay an amount from 25 piasters to 2 pounds on each cover intended to be distributed according to the type of book and its size, date of publication, Publishing House, author's name and title of the book, and all this, according to what the Publishing company sees.",
    dist3_3:
      "The distribution is not only in the libraries, but all over Egypt in all places of display.",
    dist3_4:
      "In the case of distribution between countries, the book's owner covers the cost of shipping the book. The Publishing House is not obligated to follow up the shipment or customs clearance. Rather, the business owner is responsible for delivering the work to the target address in the target town. The Publishing House is responsible for distribution in the target country only, and the remaining copies are considered damaged in the case that the business owner doesn't accept to pay the cost of returning them.",
    dist3_5:
      "Any kind facilitation from the Publishing House is considered as being out of kindness not as a commitment.",
    dist4: "In the case of online distribution: ",
    dist4_1:
      "Distribute through our website or through other websites or through our program, ( Al-Rawi family).",
    dist4_2:
      "We take an online copy from its owner, whether it was printed before, newly printed and written, or not seen yet, considering that it is going to be reviewed to be agreed upon, and to make sure it goes with the rules of the company. We get back to you within 25 working days, with approval or denial. In the case of approval, we will negotiate about if it'll be published through our platform or other platform. ",
    dist4_3:
      "If it's published through our platform, it'll go according the mentioned percentages, and if it's published through other platform, the mentioned percentage will increase.",
    dist4_4:
      "It'll be agreed upon the duration of the work presentation, between us and the business owner. The business owner is obligated to pay a little fee before presenting their book and after sending it, that starts from 200 pounds, decided by the company according to the book's type, size, date of publication, publishing House, author's name and the title of the book; in order to ensure the seriousness of commitment. There will be another little fee in the case of agreeing upon the way of distribution and sending the work to be reviewed, that'll start from 100 pounds, not to waste the efforts of the company for 25 days reviewing the book in vain. Besides, to guarantee the commitment of the author and not to present it to another company during the reviewing period.",
    dist4_5:
      "The owner of the book will be fined in case of violating the privacy policy when the book is exclusive to us.",
    dist4_6:
      "In the case of publishing through other platforms, the mentioned percentages increase or differ according to each platform.",
    dist4_7:
      "And if you publish through (Al-Rawi family) program, the price will be decided according to the duration of the show and the way of hosting; whether it'll be just a review for the book or the author, an interview with the author, an interview and a signing ceremony; considering that if this offer is chosen, there will be a fee starting from 500 pounds, paid once the work is sent and before the show. The paid fee will be deducted from the amount that will be agreed upon later, and this option is not related to publishing a specific number of copies, but it depends more on marketing and advertising.",
    offer1: "Offer 1",
    offer2: "Offer 2",
    offer3: "Offer 3",
    prizeHead: "Prizes:",
    prizeH1: "Preliminary conditions for competitions",
    prizeH1_1:
      "For everyone around the world who would like to have the opportunity to participate in cultural and entertainment competitions and get financial prizes, for whoever has a talent or a hobby like; designing, writing, planning, photography, etc.., you should apply for participation in one of our competitions and win financial prizes.",
    prizeH1_2:
      "The participation in competitions is not allowed for any member or employee in the company or even for any of their families and relatives. In the case of violating this rule, they'd be exposed to being fired and fined.",
    prizeH1_3:
      "One is allowed to participate only once in each competition, and in one competition only, as it's not allowed to participate in two competitions at the same time, otherwise the application will be rejected.",
    prizeH1_4:
      "If you would like to participate in any competition, you can participate via the website through the relevant competition page by filling in the form, sending your ID and what you will participate in.",
    prizeH1_5:
      "The end date of the competition will be as determined in each competition, and the Company has the right to amend the competition closing date at any time.",
    prizeH1_6:
      "If the case of winning a competition, we will notify you via phone or email.",
    prizeH1_7:
      "The jury's decision is final, and no appeals will be accepted.",
    prizeH1_8:
      "The prize can't be transferred to another person other than the participant, not even to a family member, unless the prize is donated to a charity organization.",
    prizeH1_9:
      "The prizes can't be exchanged for cash or any other prize.",
    prizeH1_10:
      "Applications filled in incorrectly or that are violating our terms and conditions will be excluded.",
    prizeH1_11:
      "We will do our best to send the prizes to their owners all over the world within a month from the end date of the competition and announcing the winners; However, we can't guarantee the delivery date.",
    prizeH1_12:
      "There are some prizes that will be received from our offices, and we will provide you with more details about that.",
    prizeH1_13:
      "The participant acknowledges that we have the right to use the submitted participation without restriction or condition. Once they participate, they declare that the submitted participation is their property and is used to participate in a competition. We only grant you the copyright, and whoever violates this, is subject to a legal action.",
    prizeH1_14:
      "The participant allows our company to use all contact information for the purpose of identity verification, announcing the results and whatever comes up.",
    prizeH1_15:
      "The participant acknowledges that our company is not responsible for the use of anything that isn't the participant's property, including data, images, audio or video recordings.",
    prizeH1_16:
      "The data used in the competition should be exclusive to the company and it isn't allowed to publish it or to be presented in any other places of presentation, in the past or in the future, considering that if this happens, the prize won't be delivered, in the case of winning; or the participation will be rejected if it's at the beginning.",
    prizeH1_17:
      "Terms are subject to change without prior notice",
    prizeH1_18:
      "Winners are individually responsible for informing the tax authority of any cash received, and for paying any applicable or other taxes, and our company has no responsibility towards that.",
    prizeH1_19:
      "Each applicant confirms that the ideas presented in the application are entirely their own.",
    prizeH1_20:
      "By applying to the competition, each applicant, if selected to be among the finalists, agrees to publish a written description of their project that will be publicly available on the website for other talented to see; as well as a short video explaining the winning project or work.",
    prizeP1: "Types of competitions",
    prizeP2:
      "best photographer competition, with a prize of 5000 EGP",
    prizeP3:
      "The best graphic designer competition, with a prize of 4000 EGP",
    prizeP4:
      "The best fashion designer competition, with a prize of 7000 EGP",
    prizeP5:
      "The best cover designer competition, with a prize of 3000 EGP",
    prizeP6:
      "The best short story competition, with a prize of 3000 EGP",
    prizeP7:
      "The best painter competition, with a prize of 4000 EGP",
    prizeP8:
      "The best montage competition, with a prize of 5000 EGP",
    prizeP9:
      "The best poet competition, with a prize of 3000 EGP",
    prizeP10:
      "The best caricature competition, with a prize of 3000 EGP",
    prizeP11:
      "The best game designer competition, with a prize of 10,000 EGP",
    prizeP12:
      "The best athlete in various fields of sports, with a prize of 6000 EGP",
    prizeP13:
      "The best novel competition, with a prize of 4000 EGP",
    prizeP14:
      "The Fighting Woman Competition, with a prize of 3000 EGP",
    prizeP15:
      "The ideal mother competition, with a prize of 6000 EGP",
    prizeP16:
      "The best interviewer competition, with a prize of 4000 EGP",
    prizeP17:
      "The best journalist competition, with a prize of 4000 EGP.",
    prizeP18:
      "The best voice in reciting the Holy Qur'an, with a prize of 4000 EGP.",
    prizeP19:
      "The best voice in singing, with the prize of 3000 EGP.",
    prizeP20:
      "The best charity organization, with a prize of 10,000 EGP.",
    prizeP21:
      "The Holy Quran Memorization Competition, with a prize of 6000 EGP.",
    prizeP22: "There are also other competitions….",
    prizeP23:
      "To get to know the terms of each competition and join, just contact us for information about the beginning and end of each. ",
    prizeP24:
      "The participant has to pay a fee of 250 EGP once they join, to guarantee commitment, seriousness, and not wasting the company's time in receiving requests. The fee isn't refundable in the case of rejection, provided that the company has to clarify the reason for rejection, and the participant doesn't have the right to appeal, however they can edit the application and resubmit. ",
    brief:
      "The owner of NAA with all its channels and branches. High appeal lawyer and state council at Egyptian Bar association. High appeal lawyer and state council at Egyptian Bar association. Member of the Human Rights and Liberty Committee of the Arab Lawyers Union Member of the International Relations Committee of the Arab Lawyers Union. Writer and author of the Arab Writers Union. Author and researcher at the Arab Writers Union. Family and immigration lawyer in UK.",
    solic1: "Welcome to-NAA Solicioters",
    solic2:
      "Aisha Abdul Majeed Foundation for Legal Consultations and law firm",
    lawD1:
      "Donate to refugees, families of victims, victims of violence or war and to those in need; to get free legal consultation and take a step forward in their legal cases.",
    lawD2:
      "You don't have to donate money at all, just donate the consultation, donate by joining us as a lawyer.",
    lawD3: "There are many ways to donate.",
    lawD4:
      "The Prophet Mohamed, peace be upon him, said that (Allah helps one as long as they help others)",
    solic3:
      "You don't have to be nervous with our free legal service.",
    solic4:
      "Evidence is a defence & violence is an offence.",
    Slct: "Select your need:",
    legalAdvice: "Legal Advice",
    bookCase: "Book Your case",
    caseType: "Case Type:",
    interCase: "International Case:",
    localCase: "Local Case:",
    lawPost1:
      "The victim is a center of strength, not a weakness,it's not a victim, it's a survivor in reality. ",
    lawPost2:
      "This is the honor of the legal loyalty,The accused is innocent until proven guilty. ",
    lawPost3:
      "Evidence on the plaintiff and the oath on the denier,Who will tell the truth and who is the liar.",
    lawPost4:
      "Not about who have muscles and who is the thinner, It's about the right will be the winner. ",
    lawPost5:
      "We have an elite of senior law professors specialized in all branches of international and local law, whether in Arab countries or Europe.",
    lawPost6:
      "We are ready to receive your cases in all international, criminal, civil, personal and military cases.",
    lawPost7:
      "We do all legal procedures with governmental and non-governmental agencies for you. ",
    lawPost8:
      "Completing the registration procedures with the real estate registry.",
    lawPost9:
      "We provide a legal consultation service through a legal consultant or several consultants to follow up on all legal issues.",
    lawPost10: " We have Arab and foreigner lawyers. ",
    lawPost11:
      "You could get an online lawyer, a general lawyer or get an online legal consultation, with the least effort, we can reach you wherever you are.",
    lawPost12:
      "Ask a lawyer for any important legal questions you want.",
    lawPost13:
      "Our team monitors the obligations of the lawyer towards the client, we guarantee the rights of both parties, as our goal is to make sure that everyone gets benefit within the institution.",
    lawPost14:
      "In the case of choosing to get a legal consultation, a fee of 50 EGP will be paid for ssubmitting the request as a guarantee of your commitment, provided that it's not refundable in case you don't comply with the appointment. It's up to you to choose the consultation to be via phone, WhatsApp, e-mail, or an in-person interview in the office; considering that each has a different fee.",
    lawPost15:
      "Also, for booking your case, you'll have to pay a nominal fee of 100 EGP for submitting the request, that will be deducted from the total fees later. The fees vary according to the country of residence.",
    lawPost16: " We're glad to receive your requests.",
    chaar1:
      "We are a British institution based the United Kingdom",
    chaar2: "The main goal of the charity is: ",
    chaar3:
      "To build a strong and peaceful society, in which no violence or terrorism.",
    chaar4:
      "It is a non-profit organization based on donations to support Islam in Western countries and to clarify Islam in a peaceful way that seems appropriate.",
    chaar5:
      "It is a foundation that supports Muslims and non-Muslims as well; besides it has Muslims and non-Muslims working in it.",
    chaarH1:
      "We are a non-profit charity foundation based on religion to educate people about the Islamic religion and to correct the mistakes that people make in the name of Islam. ",
    chaarH2:
      "Supporting religion is our goal. We aspire to develop the minds of people who justify their mistakes under the name of religion. Unfortunately, people explain religion in a way that goes with their own desires, and we aim to correct that.",
    aims: "Our Aims & principles",
    aims1: "No for terrorism ",
    aims1_1: "God Almighty said about the terrorist:",
    aims1_2:
      '"...And when he pursues, he strives in the land to spoil it and destroy the plow and the offspring, and God does not like corruption"',
    aims2: "No for violence ",
    GodSaid: "God Almighty said:",
    aims2_1:
      '"...With the mercy of God you will be kind with them And if you abused them or were rude with a hard heart, they would depart from around you  So be kind with them and forgive them"',
    aims3: "No for killing",
    aims3_1:
      '"...Whoever kills a person without life or did corruption on earth is as if he killed all people, and whoever saves it is as if he has revived all of the people"',
    aims4: "No for blind following ",
    aims4_1:
      "God said think, ponder and don't only following blindly.",
    aims4_2:
      '"...we made the Quran easy to understand, If there is anyone who ponders the verses?"',
    aims5: "No for women abuse",
    prophSaid: "Prophet Mohamed said:",
    aims5_1:
      '"..Treat women kindly, they are your supporters "',
    aims5_2: "Also, none of the prophets hit his wife.",
    aims6: "No for polygamy",
    aims6_1:
      '"...And we took a thick covenant from you" , by getting married which is that respecting women\'s feelings.',
    aims6_2: "we will talk about this subject soon.",
    also_1: "We have also:",
    honour_1: "Our charity honoured",
    mission: "What is our mission?",
    mission1: "from",
    mission1_1:
      "From Muslims & None Muslims Our service is not limited to Muslims only, but it is provided by non-Muslims and Muslims. ",
    mission1_2:
      "Anyone can get our support regardless of nationality, gender, religion, culture and colour.",
    mission2: "for",
    mission2_1:
      "Anyone can get our support regardless of nationality, gender, religion, culture and colour.",
    mission3: "to",
    mission3_1:
      "To Build a Strong Community Our service does not aim to advance an idea or supporting a team, but rather it aims to build a peaceful strong society with awareness to stop terrorism, violence and blind leading.",
    foodBox: "NAA food box",
    foodBox_1:
      "Millions of needy people get to benefit from those boxes benefit those who deserve them.",
    foodBox_2: "Food is cure",
    foodBox_3:
      "Donate to feed the needy, poor, low-income and orphans.",
    foodBox_4: "Donate with even a penny!",
    aboutCha: "About the charity:",
    aboutCha1: "Together to stop blind followers",
    aboutCha2:
      "We are a British institution based the United Kingdom",
    aboutCha3: "The main goal of the charity is: ",
    aboutCha4:
      "To build a strong and peaceful society, in which no violence or terrorism.",
    aboutCha5:
      "It is a non-profit organization based on donations to support Islam in Western countries and to cclarify Islam in a peaceful way that seems appropriate.",
    aboutCha6:
      "It is a foundation that supports Muslims and non-Muslims as well; besides it has Muslims and non-Muslims working in it.",
    aboutCha7:
      "The most important programs of the institution:",
    aboutCha8:
      "Spreading the Islamic religion in a different way that indicates it is a peaceful religion not a violent religion, through educational religious seminars about difficult matters in religion that are presented to the West in a wrong way; that led to the development of the idea of Islamophobia.",
    aboutCha9:
      "We work to correct these misconceptions, and other important topics that would support Islam and correct the mistakes made by others.",
    aboutCha10: "Our goal is to erase Islamophobia.",
    aboutCha11:
      "This is the main objective of the organization; which is the development of religious ideas, not the development of the religion itself. We aim to develop minds in a way that goes with the true religion.",
    aboutCha12:
      "you can contact us to support the feminist community because we advocate for women's freedom and rights, as well as we stand against women's abuse or violence.",
    aboutCha13:
      "We also have other programs on which the organization is based:",
    aboutCha14:
      "It offers a food program, every Friday in the cities of the United Kingdom, that is food and clothes distributed to every needy Muslim or non-Muslim, under the slogan True Islam, The Religion of Peace and Security",
    aboutCha15: "providing Hajj and Umrah trips",
    aboutCha16:
      "Providing free legal consultations to victims, immigrants, abused women and war victims in any legal case, besides translation services as well.",
    aboutCha17:
      "Free books to support education and general culture, as well as support for art of all kinds through financial aid and other facilities; and all of this is done within the framework of the spread of true and peaceful Islam and the rejection of violence, fanaticism and terrorism.",
    aboutCha18:
      "We also work to erase the idea of Islamophobia in a good way.",
    aboutCha19:
      "Together to change our aggressive attitude/thoughts.",
    aboutCha20: "Together to help each other.",
    aboutCha21: "Together to stop terrorism.",
    aboutCha22: "Together to stop hunger.",
    aboutCha23: "Together for peace.",
    aboutCha24:
      "We are a non-profit charity foundation based on religion to educate people about the Islamic religion and to correct the mistakes that people make in the name of Islam.",
    aboutCha25:
      "Supporting religion is our goal. We aspire to develop the minds of people who justify their mistakes under the name of religion. Unfortunately, people explain religion in a way that goes with their own desires, and we aim to correct that.",
    Cha_events: "Events",
    Cha_events1: "Croydon Food Event:",
    Cha_events2:
      "We're going to organize a food event on Friday 4th June, in front of West Croydon Station, to feed the needy, the homeless and whoever needs our support.",
    Cha_events3: "Together to stop hunger!",
    Cha_events4: "Together to feed the needy!",
    Cha_events5: "Stratford Food Event:",
    Cha_events6:
      "We will be organizing a food event on Friday 28th May, in front of Stratford Station, to feed the needy, the homeless and whoever needs our support.",
    Cha_events7: "Food Parking Event:",
    Cha_events8:
      "We will be organizing a food event on Friday 28th May, in front of Parking Station, to feed the needy, the homeless and whoever needs our support.",
    Cha_events9: "Food Event in London streets:",
    Cha_events10:
      "We will be organizing a food event on Friday 28th May, in different streets of London, to feed the needy, the homeless and whoever needs our support.",
    reviews: "Reviews: ",
    Julia: "Julia",
    Cha_reviews2:
      "I was hungry and found people serving food in the street, I asked for help and they helped me.",
    Cha_reviews3:
      "I am very pleased with the respect and help I got from NAA charity team.",
    Ahmed: "Ahmed",
    Cha_reviews4:
      "I received food for me and my children from NAA charity team.",
    Adam: "Adam",
    Cha_reviews5: "I got support from NAA charity team.",
    Christina: "Christina",
    Cha_reviews6:
      "I heard about this charity and referred people to them, and got support from NAA charity team.",
    donRight: "Choose the right way",
    donRight1: "Donate, Collect, Serve, Stop Hunger!",
    donRight2: "Stop hunger!",
    donRight3:
      "money is not the solution, it is just a way to solve the problem.",
    donRight4:
      "Some people use it right, while others use it wrong.",
    donRight5:
      "Together to stop hunger, together to feed the needy!",
    donRight6:
      "Choose & donate correctly; we will pick it up and serve.",
    dottFill1: "Please fill our",
    ffoo: "form",
    dottFil2: "below, and we will get in touch with you.",
    dott1: "Help us to help you,",
    dott2: "support us to grow,",
    dott3: "share what we do, Move forward let's go.",
    chars: "Characters:",
    CRchars1: "Sharifa Al-Sherif",
    CRchars1a:
      "A nervous, smart, well-educated lawyer who never accepts defeat, and would do her best to win the case at all costs.",
    CRchars2: "Hazem Al-Masiry",
    CRchars2a:
      "He is a Public Prosecutor that is looking for the truth and wants to defeat Sharifa; believing that what she presents is false and that he is right. He is calm and smart.",
    parts: " Parts",
    CRparts1: "Read the Incident!",
    CRparts1a:
      "It's about real legal crimes with a sense of fantasy.",
    CRparts2: "Judgement after Deliberation",
    CRparts2a:
      "It is the debate and pleading part in which Sharifa and Hazem plead legally with conclusive evidence. who has is right? And who will win?!",
    wtcEpos: "Watch episodes:",
    epis: "episode",
    comics: "Comics:",
    NZparts1:
      "A segment to encourage and support all talents, and give them positive energy to show and bring their talents to the light. ",
    NZparts2:
      "Another segment for interviewing a new talent and another famous one.",
    NZchars1: "Nazly",
    NZchars1a:
      "She is an ambitious, persevering, courageous person who loves adventures and discoveries. She is calm, and democratic in her speech and dealings.",
    RWYchars1: "Grandpa Madbouly",
    RWYchars1a:
      "Although he is illiterate, he inherited his love to books from his ancestors. He tries hard to spread ethics and morals, that've been gone, and bring them back to be passed down through generations.",
    RWYchars2: "Lolita Al-Rawy",
    RWYchars2a:
      "She is Madbouly's daughter who lives with her husband and daughter in her dad's house. She is a hardworking and well-educated journalist. She reports whatever is new about literature, and is always up-to-date with all cultural events.",
    RWYchars3: "Adel Al-Rawy",
    RWYchars3a:
      "A journalist; he works with his wife. He Knows all the good new books; besides he figures out talented young writers.",
    RWYchars4: "Hoor Al-Rawy",
    RWYchars4a:
      "A 9 years old child who lives with her parents in her grandpa's house. She likes books like the rest of her family, she tells children the useful stories that her grandpa tells her; so, they get to learn from them.",
    RWYparts1:
      "In the first one, we talk about an influential character, association, book, product, etc..",
    RWYparts2:
      "In the second one, we aim to spread culture, books and knowledge by going through different books.",
    RWYparts3:
      "The last one is about children literature. ",
    ROQchars1: "Rosetta",
    ROQchars1a:
      "Aristocratic personality, conservative, elegant lady and well-educated. She always seeks perfection in everything, she always disagrees with Roqaia as they belong to different social classes, however she always ends the argument quickly because of Roqaia's unexpected reactions",
    ROQchars2: "Roqaia",
    ROQchars2a:
      "A spontaneous character, fun and sarcastic. She takes life easy, however she knows well how to get to her target. She always makes fun of Rosetta trying to provoke her.",
    ROQparts1: "Shortcake",
    ROQparts1a:
      "A comedy that revolves around body, skin, health and beauty care",
    ROQparts2: "Elegance & fashion",
    ROQparts2a:
      "It presents fashion and real products; besides teaching you how to dress. ",
    ROQparts3: "Our Stories",
    ROQparts3a:
      "in which we present real problems and try to solve them with Roqaia & Rosetta ",
    ROQparts4: "Stars segment",
    ROQparts4a:
      "in which we host a celebrity person for each episode.",
    KHLTchars1: "Aisha ",
    KHLTchars1a:
      "She is educated, single, spontaneous, so interested in reading and culture, excited and always into her own views.",
    KHLTchars2: "Faten",
    KHLTchars2a:
      "She is obsessed with fashion, make-up, health and beauty. She is into men, and likes travelling.",
    KHLTchars3: "Coach Mervat ",
    KHLTchars3a:
      "She is fun, married to Alaa, into football and sports, fanatic for Al-Ahly, and always fights with her husband who is fanatic for Al-Zamalek. ",
    KHLTchars4: "Bassant",
    KHLTchars4a:
      "She is fun, married to Alaa, into football and sports, fanatic for Al-Ahly, and always fights with her husband who is fanatic for Al-Zamalek. ",
    KHLTchars5: "Latifa",
    KHLTchars5a:
      "She is an interviewer, and she presents the part of (Group of Ladies). She is arrogant and so into herself. She listens to others, but she doesn't have the sporting spirit as she always wants to show off and be on the top.",
    KHLTchars6: "Om Mos'ad",
    KHLTchars6a:
      "She is an illiterate farmer. She is smart and likes to talk too much. She is nosy and curious, so she likes to talk about news and politics. She talks too much on the phone and never considers any rules; she has her own rules and never cares about others.",
    KHLTchars7: "Badee'a",
    KHLTchars7a:
      "She has a disabled girl called, Ne'ma. She cares about disabled children and their affairs; even though she tends to be gloomy.  ",
    KHLTparts1: "Aisha w El-salam ",
    KHLTparts1a:
      "From (just opinions), presented by Aisha. It gets through real social cases like: spinsterhood, divorce, underage marriage, etc…",
    KHLTparts2: "Group of Ladies",
    KHLTparts2a:
      "It's about different kinds of news like:  politics, economy, arts, sports, advertisements; besides it presents news with new point of view.",
    KHLTparts3: "I'm Different",
    KHLTparts3a:
      "It's a family segment that discusses issues of disabled children, family issues and kindness to children, people, and even to animals.",
    KHLTparts4: "Take a Guess!",
    KHLTparts4a:
      "It's a family segment that discusses issues of disabled children, family issues and kindness to children, people, and even to animals.It's presented by Om Mos'ad. There will be a lot of competitions that you'll get a lot of prizes from. Best wishes, Om Mos'ad",
  },
  ar: {
    KHLTchars1: "عايشة",
    KHLTchars1a:
      "شخصية مثقفة عزباء طفولية مجنونه بالقراءة والثقافة، متحمسه، مولعه برأيها دوما",
    KHLTchars2: "فاتن ",
    KHLTchars2a:
      "شخصية مهووسه بالموضه والميك اب والصحة والجمال، تعشق الرجال وتحب الرحلات والتجوال",
    KHLTchars3: "كابتن ميرفت",
    KHLTchars3a:
      "شخصية لذيذة متزوجه من علاء، أهلاوية متعصبه، كثيرة الخناق مع زوجها الزملكاوي المتعصب، تعشق الكورة والرياضة",
    KHLTchars4: "بسنت",
    KHLTchars4a:
      "يوتيوبر تعشق اللايكات والفيوز والشو الإعلامي، تتحدث كثيرا، وتجادل كثيرا، مهتمه بالطقس وأخبار اليوتيوب والسوشيال ميديا، عزباء ويسميها البعض عانس لعقدتها الشديدة من الرجال",
    KHLTchars5: "لطيفة",
    KHLTchars5a:
      "مذيعة ومقدمة فقرة شلة ستات، مغرورة متكبرة، متعجرفة، تسمع للآخرين لكنها لا تحب روح المنافسة أيا كان نوعها ف دائما تحب أن تكون نمبر ون",
    KHLTchars6: "أم مسعد",
    KHLTchars6a:
      "فلاحه ذكية أميه، مثقفه، تعشق الكلام والرغي المستمر والخوض في شؤون الآخرين ولذلك تحب الحديث عن السياسة والأخبار، تتحدث كثيرا في الهاتف وليسها لهت قيود فهي من يحكم نفسها ولا تأبه للحلقة أو المشاهدين",
    KHLTchars7: "بديعه",
    KHLTchars7a:
      "أم لطفلة معاقة اسمها نعمه، تهتم بشؤون المعاقين وقضاياهم، لكنها قد تكون شخص ملول او كئيب كما يسميها البعض",
    KHLTparts1: "فقرة عايشة والسلام ",
    KHLTparts1a:
      "في آراء تقدمها عايشة وهي فقرة تناقش قضايا حقيقية واقعية اجتماعية كالعنوسة والطلاق وزواج القاصرات وغيرها",
    KHLTparts2: "فقرة شلة ستات ",
    KHLTparts2a:
      " فقرة تتحدث عن شتى أنواع الأخبار سياسية اقتصادية اجتماعية فنية رياضية دعائية، وضيوف مستمرين والأخبار بأعين جديدة",
    KHLTparts3: "فقرة أنا مختلف",
    KHLTparts3a:
      "فقرة أسرية عائلية تناقش قضايا الأطفال المعاقين وقضايا الأسرة والرفق بالطفل والإنسان بل والحيوان",
    KHLTparts4: "فقرة حزر فزر",
    KHLTparts4a:
      "مع أم مسعد ومسابقات هاتكسب فيها جوايز وفلوس كتييييييييير، مسابقة في معلومه، ويكش تنستر مع تحيات خالتكم أم مسعد",
    ROQchars1: "روزيتا ",
    ROQchars1a:
      "شخصيه ارستقراطيه , متحفظه في طريقه تعاملها , ليدي شيك , مثقفه. تسعى دائما للكمال في كل شئ , لا تتفق مع رقيه دائما بسبب االاختلاف الكبير بينهم  , لكنها دائما تنهي الجدال سريعا خوفا من ردود افعال الغير متوقعة من رقيه",
    ROQchars2: "رقيه ",
    ROQchars2a:
      "شخصيه عفويه مرحه , صاحبه روح فكاهيه ساخره , عشوائيه في طريقه. تعيش حياتها , مثيره للجدل , ذكيه , تعيش حياه بسيطه , لكنها تعرف جيدا كيف  تصل الهدافها , دائمه السخريه من روزيتا و تحاول استفزازها باستمرار",
    ROQparts1: "فقرة شورت كيك",
    ROQparts1a:
      "فقرة كوميديه بتحكي عن العناية بالجسم والبشرة والصحة والجمال",
    ROQparts2: "فقرة الأناقة والشياكة",
    ROQparts2a:
      "فقرة تعرض أزايء ومنتجات حقيقية وتعلمك كيف تلبس",
    ROQparts3: "فقرة حكاوينا",
    ROQparts3a:
      " فقرة بنعرض فيها مشاكل حقيقية وبنحاول نحلها بلسان رقية ولسان روزيتا",
    ROQparts4: "فقرة النجوم",
    ROQparts4a:
      "فقرة بنستضيف فيها فنان أو ممثل أو اعلامي, ومعانا فنانين حقيقين في كل حلقة انتظرونا",
    RWYchars1: "جدو مدبولي ",
    RWYchars1a:
      " اكبر افراد عائله الراوي , شخص مثقف و عاشق للكتب و الأدب,  بالرغم من انه امي لا يعرف القراءه او الكتابه , توارث حبه للكتب من اجداده ,  يحاول جاهدا بث االخلق و القيم التي محت من هذا الزمان و اعادتها مره اخرىلتتوارثها الاجيال من جديد.",
    RWYchars2: "لوليتا الراوي",
    RWYchars2a:
      "ابنه مدبولي الراوي , تعيش في بيت والدها هي و زوجها و ابنتها صحافيه مجتهده , و مثقفه , تنقل كل ما هو جديد في الساحه الأدبيه , و مطلعه دائما  على كل الاحداث الثقافيه .",
    RWYchars3: "عادل الراوي",
    RWYchars3a:
      "صحفي , يعمل مع زوجته لوليتا الراوي , مطلع على كل الكتب الجديده الجيده , و مستكشف للكُتاب الشباب الموهوبين .",
    RWYchars4: "حور الراوى",
    RWYchars4a:
      "طفلة صاحبة التسعة اعوام , تعيش مع والدها و والدتها في منزل جدها بالكتب و تحب مطالعتها ك سائر العائله , تروي لالطفال قصص مفيده الحكايات التي يحكيها لها جدها , لتعم الفائده على جميع الاطفال من",
    RWYparts1:
      "فقرة نحكي فيها عن شخصية مؤثرة او منظمة أو كتاب أو منتج",
    RWYparts2:
      "وفقرة أخرى نروج فيها لنشر الثقافة والكتب والمعرفة ونتصفح بين صفحات بعض الكتب",
    RWYparts3: "وفقرة عن قصص الأطفال وأدب الطفل",
    NZchars1: "ناظلي",
    NZchars1a:
      "هى شخصية طموحه مثابره جسورة تحب المغامرات والاكتشافات, متعقلة هادئة الطباع ديمقراطية في حديثها وتعاملها",
    NZparts1:
      "فقرة تشجيع وحِكم وتحميس لكل المواهب وبث الطاقة الايجابية في نفوسهم ليظهروا موهبتهم الى النور",
    NZparts2:
      "فقرة لقاء مع موهبه حقيقية صاعده و موهبه موجودة ومشهورة بالفعل",
    comics: ":ﻛﻮﻣﻴﻜﺲ",
    wtcEpos: ":شاهد الحلقات الان",
    epis: "الحلقة",
    CRparts1: "فقرة اقرا الحادثة",
    CRparts1a:
      "وتحكي فيها جرائم قانونية حقيقية واقعية مدمجة بجزء من الخيال",
    CRparts2: "فقرة الحكم بعد المداولة",
    CRparts2a:
      "وهي فقرة المناظرة والمرافعة التي يترافع فيها شريفة وحازم بشكل قانوني وأدلة قاطعه فمن معه الحق ياترى ؟  ومن سينتصر؟",
    parts: "الفقرات",
    chars: ":الشخصيات",
    CRchars1: "شريفة الشريف",
    CRchars1a:
      "محامية عصبية ذكية مثقفه لا تريد الهزيمة ولا تقبل بها وستفعل كل ما بوسعها للفوز بالقضية تحت أي مسمى",
    CRchars2: "حازم المسيري",
    CRchars2a:
      "مدعي النيابة العامة يبحث عن الحق ويريد أن ينتصر على شريفه مؤمنا أن ما تقدمه باطل وإن الحق معه وهو هاديء بطبعه ذكي.",
    dott1: "،ساعدنا لكى نساعدك",
    dott2: "،أدعمنا لكى ننمو",
    dott3: ".مشاركة ما نقوم به، المضي قدمًا ، دعنا نذهب",
    dottFill1: "من فضلك املئ تلك ",
    ffoo: "استمارة",
    dottFil2: "بالاسفل، و نحن سوف نتواصل معك.",
    donRight: "أختر الطريق الصحيح",
    donRight1: "تبرع ، أجمع ، أخدم ، أوقف الجوع!",
    donRight2: "أوقف الجوع!",
    donRight3:
      "اختر الطريقة الصحيحة ، للتبرع ، المال ليس هو الحل ، بل هو وسيلة لحل المشكلة.",
    donRight4:
      "بعض الناس يستخدمونها بشكل صحيح والبعض الآخر يستخدمها بشكل خاطئ ، لكن المشكلة تستمر.",
    donRight5: "معاً لوقف الجوع، معاً لإطعام المحتاج.",
    donRight6:
      " اختر صح ، تبرع بشكل صحيح ، نحن سنجمع وسنخدمك.",
    reviews: "الشهادات - التوصيات",
    Julia: "جوليا",
    Cha_reviews2:
      " كنت أعاني من الجوع ووجدت أشخاصًا يقدمون الطعام في الشوارع ، وطلبت المساعدة وقد ساعدوني. ",
    Cha_reviews3:
      "NAA charity أنا راضٍ جدًا عن الاحترام والمساعدة التي تلقيتها من فريق جمعية.",
    Ahmed: " أحمد",
    Cha_reviews4:
      "NAA charity لقد تلقيت  لي ولأطفالي من فريق جمعية.",
    Adam: "آدم",
    Cha_reviews5:
      " NAA charity لقد تلقيت الدعم من فريق جمعية.",
    Christina: " كريستينا",
    Cha_reviews6:
      "سمعت عن هذه المؤسسة الخيرية وقمت بإحالة الناس إليهم وحصلوا على دعم من فريق جمعية" +
      " NAA charity.",
    Cha_events: "الاحداث",
    Cha_events1: "حدث كرويدون الغذائية.",
    Cha_events2:
      " سننظم حدثًا غذائيًا يوم الجمعة 4 يونيو ، أمام محطة غرب كرويدون ، لإطعام المحتاجين والمشردين وأي شخص آخر ممن يريدون دعمنا.",
    Cha_events3: " معا لوقف الجوع.",
    Cha_events4: " معا لإطعام المحتاجين.",
    Cha_events5: "حدث ستراتفورد للأغذية.",
    Cha_events6:
      " سننظم حدثًا غذائيًا يوم الجمعة 28 مايو ، أمام محطة ستراتفورد ، لإطعام المحتاجين والمشردين وأي شخص آخر ممن يريدون دعمنا.",
    Cha_events7: " حدث باركينج الطعام.",
    Cha_events8:
      " سننظم حدثًا غذائيًا يوم الجمعة 28 مايو ، أمام محطة باركينج ، لإطعام المحتاجين والمشردين وأي شخص آخر ممن يريدون دعمنا.",
    Cha_events9: " حدث الطعام في شوارع لندن.",
    Cha_events10:
      " سننظم حدثًا غذائيًا يوم الجمعة 28 مايو ، في شوارع مختلفة من لندن ، لإطعام المحتاجين والمشردين وأي شخص آخر ممن يريدون دعمنا.",

    aboutCha: ": عن الجمعية الخيرية",
    aboutCha1: " معا لوقف الاتباع الأعمى ",
    aboutCha2:
      " نحن مؤسسة بريطانية مقرها في المملكة المتحدة",
    aboutCha3:
      " الهدف / السبب الرئيسي وراء المؤسسة الخيرية هو",
    aboutCha4:
      " لبناء مجتمع قوي يسوده السلام ، يتوقف فيه العنف وتختفي فكرة ما يسمى بالإرهاب.",
    aboutCha5:
      " هي مؤسسة غير ربحية تقوم على التبرعات لدعم الإسلام في الدول الغربية وإيصال الإسلام بطريقة سلمية تليق به.",
    aboutCha6:
      " إنها مؤسسة تدعم المسلمين وغير المسلمين أيضًا.  وكذلك المسلمين وغير المسلمين يعملون فيها.",
    aboutCha7: "من أهم برامج المؤسسة",
    aboutCha8:
      " إن نشر الدين الإسلامي بشكل مختلف يدل على أنه دين سلام وليس دين حرب ، من خلال الندوات الدينية التربوية حول الأمور الصعبة في الدين والتي صدرت للغرب بطريقة خاطئة ، مما أدى إلى تطوير فكرة  الإسلاموفوبيا. ",
    aboutCha9:
      " نحن نعمل على تعديل هذه الأفكار الخاطئة ، وغيرها من المواضيع الهامة التي من شأنها نصرة الإسلام وتصحيح الأخطاء التي ارتكبها البعض حيال ذلك.",
    aboutCha10: " هدفنا هو القضاء على الإسلاموفوبيا.  ",
    aboutCha11:
      " هذا هو الهدف الرئيسي للمنظمة ، وهو تنمية الأفكار الدينية ، وليس تطوير الدين نفسه ، بل تنمية العقول بما يتماشى مع الدين الحقيقي.",
    aboutCha12:
      " ولكن أيضًا ، يمكنك الاتصال بنا بدعم المجتمع النسوي لأننا ندعو من خلاله بحرية المرأة وحقوقها ، بالإضافة إلى وقوفنا ضد إساءة معاملة المرأة أو العنف.",
    aboutCha13: " ثم كبرامج أخرى تستند إليها المنظمة",
    aboutCha14:
      "  يقدم برنامج طعام كل يوم جمعة في مدن المملكة المتحدة (طعام وملابس) يتم توزيعه على كل محتاج مسلم أو غير مسلم ، تحت شعار الإسلام الحقيقي ، دين السلام والأمن.",
    aboutCha15: " وكذلك توفير رحلات الحج والعمرة ",
    aboutCha16:
      " وتقديم الاستشارات القانونية المجانية للضحايا والمهاجرين والنساء من العنف وضحايا الحروب في أي قضية قانونية ، وخدمات الترجمة أيضًا.  ",
    aboutCha17:
      " وكذلك الكتب المجانية لدعم التعليم والثقافة العامة ، وكذلك دعم الفن بجميع أنواعه من خلال المساعدات المالية وغيرها من التسهيلات ، وهذا كله يندرج في إطار انتشار الإسلام الصحيح والسلمي ونبذ العنف والتعصب والإرهاب.",
    aboutCha18:
      "ومحو  فكرة الإسلام كرهاب من الإسلام ومن يعتنقه بطريقة جيدة.",
    aboutCha19: " معًا لتغيير طرقنا / أفكارنا العدوانية.",
    aboutCha20: " معا لمساعدة بعضنا البعض.",
    aboutCha21: " معا لوقف الارهاب.",
    aboutCha22: " معا لوقف الجوع.",
    aboutCha23: " معا من أجل السلام.",
    aboutCha24:
      "نحن مؤسسة خيرية لا تهدف للربح تقوم على أساس الدين لتثقيف الناس حول الدين الإسلامي وتصحيح الأخطاء التي يرتكبها الناس باسم الإسلام.",
    aboutCha25:
      " النهوض بالدين هدفنا ، ولكن ليس بما يزيده أو يقلله ، نحن نتطلع إلى تنمية عقول البشر الذين يخفون أخطائهم تحت اسم الدين.  للأسف الناس يشرحون الدين بما يتماشى مع رغباتهم فقط ، ويبررون الأخطاء باسم الدين ، ونحن نهدف إلى تصحيح ذلك.",
    foodBox: "صندوق الطعام NAA",
    foodBox_1:
      "تستفيد الملايين من الصناديق الكرتونية من أولئك الذين يستحقونها.",
    foodBox_2: "الغذاء دواء.",
    foodBox_3:
      "تبرع لإطعام المحتاجين والفقراء ومحدودي الدخل والأيتام.",
    foodBox_4: "تبرع حتى ببنس واحد.",
    mission: "ما هى مهمتنا؟",
    mission1: "من",
    mission1_1:
      "من المسلمين وغير المسلمين خدمتنا لا تقتصر على المسلمين فقط ، بل يتم تقديمها من قبل غير المسلمين والمسلمين.",
    mission1_2:
      "يمكن لأي شخص العمل أو التطوع معنا بغض النظر عن الجنسية والجنس والدين والثقافة واللون",
    mission2: "الى",
    mission2_1:
      "يمكن لأي شخص الحصول على دعمنا بغض النظر عن الجنسية والجنس والدين والثقافة واللون.",
    mission3: "حتى",
    mission3_1:
      "لبناء مجتمع قوي لا تهدف خدمتنا إلى تطوير فكرة أو دعم فريق ، بل تهدف إلى بناء مجتمع سلمي قوي مع الوعي بوقف الإرهاب والعنف والقيادة العمياء.",
    honour_1: "تكريم جمعيتنا الخيرية",
    also_1: "نحن نمتلك أيضا:",
    aims: "أهدافنا و مبادئنا",
    aims1: "لا للارهاب",
    aims1_1: "قال الله تعالى عن الإرهابي:",
    aims1_2:
      '"... ومتى تطارد يجتهد في الأرض في إفسادها وإتلاف الحرث والنسل ، والله لا يحب الفساد".',
    aims2: "لا للعنف",
    GodSaid: "قال الله تعالى:",
    aims2_1:
      '"... برحمة الله تكونوا لطفاء معهم ، وإذا أساءت إليهم أو وقحتم بقلب قاس ، فإنهم يبتعدون عنك ، فكن طيبًا معهم واغفر لهم".',
    aims3: "لا للقتل",
    aims3_1:
      '"... من قتل نفسا بغير حياة أو فعل فساد في الأرض فكأنما قتل الناس جميعا ، ومن أحياها فكأنما أحيا الناس جميعا".',
    aims4: "لا للاتباع الأعمى",
    aims4_1: "قال الله فكر ، تأمل ولا تتبع بشكل أعمى.",
    aims4_2:
      '"... جعلنا القرآن سهل الفهم ، إذا كان هناك من يتأمل الآيات؟"',
    aims5: "لا لإساءة معاملة النساء",
    prophSaid: "قال النبي محمد:",
    aims5_1: '"..عاملي النساء بلطف ، فهن داعماتك".',
    aims5_2: "ولم يضرب أي من الأنبياء زوجته.",
    aims6: "لا لتعدد الزوجات",
    aims6_1:
      '"... وأخذنا منك عهدا ثقيلا" بالزواج وهو ذلك احتراماً لمشاعر المرأة.',
    aims6_2: "سنتحدث عن هذا الموضوع قريبا.",
    chaarH1:
      "نحن مؤسسة خيرية غير ربحية تقوم على الدين لتثقيف الناس حول الدين الإسلامي وتصحيح الأخطاء التي يرتكبها الناس باسم الإسلام.",
    chaarH2:
      "دعم الدين هو هدفنا. نطمح إلى تنمية عقول الناس الذين يبررون أخطائهم باسم الدين. لسوء الحظ ، يشرح الناس الدين بطريقة تتماشى مع رغباتهم الخاصة ، ونهدف إلى تصحيح ذلك.",
    chaar1: "نحن مؤسسة بريطانية مقرها المملكة المتحدة",
    chaar2: "الهدف الرئيسي للمؤسسة الخيرية هو:",
    chaar3: "بناء مجتمع قوي ومسالم لا عنف ولا إرهاب.",
    chaar4:
      "هي منظمة غير ربحية تقوم على التبرعات لدعم الإسلام في الدول الغربية ولتوضيح الإسلام بطريقة سلمية تبدو مناسبة.",
    chaar5:
      " مؤسسة تدعم المسلمين وغير المسلمين أيضًا. إلى جانب أنه يعمل فيها مسلمون وغير مسلمين.",
    lawPost1:
      "الضحية مركز قوة وليس نقطة ضعف ، إنها ليست ضحية ، إنها ناجية في الواقع.",
    lawPost2:
      "وهذا شرف الولاء القانوني المتهم بريء حتى تثبت إدانته.",
    lawPost3:
      "الدليل على المدعي وقسم الكاذب: من يقول الحق ومن هو الكذاب.",
    lawPost4:
      "ليس حول من لديه عضلات ومن هو أنحف ، بل على اليمين سيكون الفائز.",
    lawPost5:
      "نخبة من كبار أساتذة القانون متخصصون في جميع فروع القانون الدولي والقانون المحلي سواء في القطر العربي أو الأوروبي الخارجي ومستعدون لاستقبال قضاياكم في كافة الدعاوي الدولية والجنائية والمدنية والأحوال الشخصية والعسكرية",
    lawPost6:
      "وإنهاء كافة الإجراءات القانونية لدي الجهات الحكومية وغير الحكومية",
    lawPost7:
      "وإنهاء إجراءات التسجيل لدي الشهر العقاري والسجل العيني",
    lawPost8:
      "نقدم خدمة استشارات قانونية من خلال مستشار قانوني أو عدة مستشارين لمتابعة كافة القضايا القانونية .",
    lawPost9: "نجمع المحامين العرب و غير العرب.",
    lawPost10:
      "يمكن توكيل محامي إلكتروني أو محام عام أو الحصول على استشارات قانونية أونلاين ، دون جهد أو عناء أو سفر يمكننا الوصول إليك أينما كنت.",
    lawPost11:
      " اسأل محامي أو اطرح أية أسئلة قانونية مهمة تريدها.",
    lawPost12:
      "فريقنا يراقب التزامات المحامي تجاه الموكل ،",
    lawPost13:
      "فنحن نضمن حقوق الطرفين و بذات الوقت هدفنا أن تعم الفائدة على الجميع داخل المؤسسة.",
    lawPost14:
      "في حالة إختيار استشارة قانونية فسيتم دفع مبلغ ٥٠ جنية وقت إرسال الطلب ضمانا منك بالالتزام، على أنها لا تسترجع في حالة عدم التزامك بالموعد، ولك حرية إختيار ان تكون الاستشاره عبر الهاتف او الواتس أو الإيميل او مقابلة بالمكتب ولكل سعر مختلف عن الأخرى.",
    lawPost15:
      "وكذلك في حال حجز قضيتك سيتم دفع مبلغ رمزي وقت إرسال الطلب وهو ١٠٠ جنية يتم خصمه من الأتعاب فيما بعد، وتختلف الأتعاب حسب البلد فلنا في كل دولة باع ويد ومكتب للقانون.",
    lawPost16: "يسعدنا تواصلكم معنا",
    Slct: "أختار ما تحتاجه",
    solic3: "لا داعي للقلق مع خدمتنا القانونية المجانية.",
    solic4: "الدليل هو دفاع والعنف جريمة.",
    legalAdvice: "استشارة قانونية",
    bookCase: "احجز قضيتك",
    caseType: "نوع القضية:",
    interCase: "قضية دولية:",
    localCase: "قضية محلية:",
    lawD1:
      "التبرع للاجئين وعائلات الضحايا وضحايا العنف أو الحرب وللمحتاجين ؛ للحصول على استشارة قانونية مجانية واتخاذ خطوة إلى الأمام في قضاياهم القانونية.",
    lawD2:
      "ليس عليك التبرع بالمال على الإطلاق ، فقط تبرع بالاستشارة ، تبرع بالانضمام إلينا كمحامي.",
    lawD3: "هناك طرق عديدة للتبرع.",
    lawD4:
      "قال النبي محمد صلى الله عليه وسلم: (الله يعين المرء على أن ينصر غيره).",
    solic1: "مرحبا بك فى مكتب المحاماة",
    solic2:
      "مؤسسه عائشة عبدالمجيد للمحاماة والاستشارات القانونية",
    brief:
      "محامي استئناف عالي ومجلس دولة بنقابة المحامين المصرية. عضو ب لجنة حقوق الإنسان والحريات باتحاد المحامين العرب. عضو ب لجنة العلاقات الدولية باتحاد المحامين العرب. كاتب ومؤلف باتحاد الأدباء والكتاب. مؤلف وباحث باتحاد الأدباء العرب. محامي أسرة وهجرة بدولة بريطانيا.",
    prizeHead: "مسابقات",
    prizeH1: "الشروط المبدئية للمسابقات ",
    prizeH1_1:
      "لكل الأشخاص حول العالم الراغبين بالحصول على فرصة  المشاركة في  الفرص الثقافية والترفيهية و جوائز مالية ممن لديهم مواهب وهوايات متنوعة ابتداءاً من مسابقة التصميم و الكتابة والتخطيط والتفكير والتصوير، التقدم بالمشاركة في إحدى مسابقاتنا وربح جوائز ماليه.",
    prizeH1_2:
      "المسابقات غير مفتوحة لأي عضو من الموظفين في الشركة (أو أعضاء من أسرهم المباشرين أو غير المباشرين وإذا ثبت ذلك تم الفصل وفرض الغرامات.",
    prizeH1_3:
      "يسمح للشخص بالمشاركة في كل مسابقة مرة واحدة فقط، وفي مسابقة واحده فقط فلا يشارك في مسابقتين في نفس الوقت وإلا كان طلبه مرفوض.",
    prizeH1_4:
      "إذا كانت لديك الرغبة بالمشاركة في أي مسابقة فإنه يمكنك المشاركة عبر الموقع الإلكتروني عن طريق الصفحة التابعة للمسابقة ذات الصلة وذلك بملء الفورم وإرسال مايثبت أهليتك وما ستشارك به.",
    prizeH1_5:
      "يكون تاريخ إغلاق المسابقة كما هو محدد في كل مسابقة، وتحتفظ الشركة بحق تعديل تاريخ إنهاء المسابقة في أي وقت.",
    prizeH1_6:
      "في حال تم الفوز في المسابقة، فسنقوم بإخطارك عن طريق الهاتف و/أو البريد الإلكتروني. على أن قرار الحكام نهائي، ولن يتم قبول أي طعون.",
    prizeH1_7:
      " لا يمكن إستبدال أي جزء من الجوائز بالنقد أو بجائزة آخرى.",
    prizeH1_8:
      "على أن قرار الحكام نهائي، ولن يتم قبول أي طعون.",
    prizeH1_9:
      "ولن تحول الجائزة لشخص آخر غير المشارك وإن كان من ذويه وأقاربه إلا في حالة التبرع بالجائزة لجمعية خيرية.",
    prizeH1_10:
      " لا يمكن إستبدال أي جزء من الجوائز بالنقد أو بجائزة آخرى.",
    prizeH1_11:
      "سيتم إستبعاد الطلبات المعبأة بطريقة غير صحيحة أو المخلة بالشروط.",
    prizeH1_12:
      "ستبذل الشركة كل جهودها لإرسال الجوائز لأصحابها في جميع أنحاء الدول في غضون شهر من تاريخ إنتهاء المسابقة وإعلان الفائزين؛ إلا أنها لا تستطيع ضمان موعد التسليم.",
    prizeH1_13:
      " هناك بعض الجوائز التي سيتم إستلامها من مكاتبنا، وسيتم توفير المعلومات الخاصه بذلك.",
    prizeH1_14:
      "يقر المشترك بمنح شركتنا الحق في إستخدام المشاركة المقدمة دون قيد أو شرط بمجرد مشاركته",
    prizeH1_15:
      "يعلن المشترك أن المشاركة المقدمة منه هي من ضمن ممتلكاته وقد قام بصنعها للمشاركة في احدى المسابقات وله فقط حقوق الطبع ومن يخالف ذلك يخضع للإجراءات القانونية.",
    prizeH1_16:
      "يسمح المشترك لشركتنا بإستخدام كافة معلومات الإتصال بغرض التحري عنه وغرض إعلان النتيجة وأي جديد يجد.",
    prizeH1_17:
      "يقر المشترك بإخلاء مسؤلية شركتنا عن استخدام اي شيء لا يتمتع بملكيته من معلومات أو صور أو تسجيل صوتي أو فيديو خاص.",
    prizeH1_18:
      "تكون الداتا المستخدمه في المسابقه حصريه للشركة ولا يحق نشرها أو تواجدها في اي اماكن عرض اخرى في السابق او اللاحق على انه في حالة ثبوت ذلك سيتم عدم تسليم الجائزة ان تم الفوز او عدم قبول المشاركة ان كان الأمر مازال في بدايته.",
    prizeH1_19:
      "تخضع الشروط للتغيير دون إشعار مسبق... يكون كل فائز مسؤولاً بصورة فردية عن تبليغ مصلحة الضرائب التي يخضع لها بأي مبالغ نقدية يتلقاها، وعن تسديد أي ضرائب سارية و/أو غيرها وليس للشركة مسؤلية حيال ذلك.",
    prizeH1_20:
      "يؤكّد كل مُتقدِم بأنّ الأفكار المعروضة في طلب اشتراكه هي من أفكاره بالكامل.  ومن خلال التقدُّم للمسابقة، يوافق كل متقدِّم، في حال اختياره ليكون بين المرشَّحين النهائيين، على نشر وصفٍ مكتوب بمشروعه يُتاح للعموم في الموقع الإلكتروني للأبطال أو المواهب اللذين نتبناهم، بالإضافة إلى نشر مقطع فيديو قصير يشرح فيه عن المشروع أو العمل الذي فاز فيه.",
    prizeP1: "أنواع المسابقات",
    prizeP2: "مسابقة افضل مصور وجائزتها ٥٠٠٠ جنية.",
    prizeP3: "مسابقة افضل مصمم جرافيك وجائزتها ٤٠٠٠ جنية",
    prizeP4: "مسابقة افضل مصمم أزياء وجائزتها ٧٠٠٠ جنية",
    prizeP5: "مسابقة افضل مصمم اغلفة وجائزتها ٣٠٠٠ جنية",
    prizeP6: "مسابقة افضل قصة قصيرة وجائزتها ٣٠٠٠ جنية",
    prizeP7: "مسابقة افضل رسام وجائزتها ٤٠٠٠ جنية",
    prizeP8: "مسابقة افضل مونتاج وجائزتها ٥٠٠٠ جنية",
    prizeP9: "مسابقة افضل شاعر وجائزتها ٣٠٠٠ جنية",
    prizeP10: "مسابقة افضل كاريكاتير وجائزتها ٣٠٠٠ جنية ",
    prizeP11: "مسابقة افضل مصمم ألعاب وجائزتها ١٠٠٠٠ جنية",
    prizeP12:
      "مسابقة افضل رياضي في مختلف مجالات الرياضة وجائزتها ٦٠٠٠ جنية",
    prizeP13: "مسابقة افضل رواية وجائزتها ٤٠٠٠ جنية ",
    prizeP14: "مسابقة المرأة المناضلة وجائزتها ٣٠٠٠ جنية",
    prizeP15: "مسابقة الأم المثالية وجائزتها ٦٠٠٠ جنية ",
    prizeP16: "مسابقة افضل اعلامي وجائزتها ٤٠٠٠ جنية ",
    prizeP17: "مسابقة افضل صحفي وجائزتها ٤٠٠٠ جنية.",
    prizeP18:
      "مسابقة افضل صوت في القرآن الكريم وجائزتها ٤٠٠٠ جنية.",
    prizeP19:
      "مسابقة افضل صوت في الغناء وجائزتها ٣٠٠٠ جنية",
    prizeP20:
      "مسابقة أفضل جمعية خيرية وجائزتها ١٠٠٠٠ جنية ",
    prizeP21: "مسابقة حفظ القرآن الكريم وجائزتها ٦٠٠٠ جنية",
    prizeP22:
      "وغير ذلك من المسابقات الدورية لمعرفة شروط كل مسابقة والانضمام راسلنا ولمعرفة باب التقديم والاغلاق.",
    prizeP23:
      "على أنه يلتزم المشترك بدفع مبلغ ٢٥٠ جنية وقت الإنضمام ضمانا لالتزامه وجديته وعدم ضياع وقت الشركة في تلقي وفرز كم من الطلبات غير المرغوب فيها",
    prizeP24:
      "لا يتم إرجاع المبلغ في حالة رفض الطلب على أن تلتزم الشركة بإرسال سبب الرفض للمتسابق وليس له حق الطعن والمماطله، لكن له حق التعديل والتقديم من جديد",
    offer1: "العرض الأول",
    offer2: "العرض الثانى",
    offer3: "العرض الثالث",
    dist1: "وزع كتابك ورقيا",
    dist1_1:
      "عند اختيارك شركتنا للتوزيع تقوم الشركة بالتفاوض معك على العمولة التي ستحصل عليها والتي تكون عادة 30٪ للشركة و 15٪ لأماكن البيع مثل المكتبات وغيرها وما يتبقى لك، هذا إن كان التوزيع داخل مصر فقط",
    dist1_2:
      "إذا كنت ترغب في توزيع كتابك خارج مصر، فستزيد نسبة العمل بنسبة 30٪ إضافية.",
    dist2: "وزع كتابك إلكترونيا",
    dist2_1:
      "عند اختيارك شركتنا للتوزيع تقوم الشركة بالتفاوض معك على العمولة التي ستحصل عليها والتي تكون عادة 50٪ للشركة وما يتبقى لك، هذا إن كان التوزيع على موقعنا فقط",
    dist2_2:
      "إذا كنت ترغب في توزيع كتابك بمواقع أخرى فستزيد نسبة العمل بنسبة 25٪ إضافية لأصحاب المواقع الأخرى.",
    distWays: "طريقة التوزيع",
    dist3: "في حالة التوزيع الورقي",
    dist3_1:
      "نقوم بأخذ عدد النسخ المراد توزيعها منك سواء كانت مطبوعه باسم دارنا او باسم دار نشر أخرى، ثم نقوم بتوزيعها بالسعر الذي تم وضعه من قبلك، ثم بعرضها للتوزيع مدة تتراوح مابين ١٠ إلى ١٥ يوم في الأسواق، ففي حال تم بيعها والاقبال عليها نقوم بزيادة المدة مع الاستمرار في التوزيع وهذا في جميع المحافظات على مستوى الجمهورية،",
    dist3_2:
      "وأما إذا لم يتم الإقبال عليها في غضون تلك المدة فسنقوم بمنعها من العرض مدة ١٠ ايام مماثلة ثم طرحها بطريقة أخرى بعد تلك المدة، مدة أخرى وسيتم تكرار تلك العملية في حالة عدم الإقبال ثلاث مرات متتالية، فإن لم يتم البيع عادت النسخ الى صاحبها ولا تعتبر النسب المذكورة هي نسب الشركة وفقط بل هي نسب بعد تحقق البيع ووجود الربح، وأما قبل التوزيع وقبل الربح يلتزم صاحب الكتاب بدفع مبلغ من ٢٥ قرش الى ٢ جنية على كل غلاف مراد توزيعه على حسب نوع الكتاب وحجمه وتاريخ نشره ودار النشر واسم المؤلف وعنوان الكتاب، وكل هذا حسبما ترى شركة النشر ذلك.",
    dist3_3:
      "ولا يكون التوزيع في المكتبات وفقط بل على مستوى المحافظات بكل أماكن العرض.",
    dist3_4:
      "وفي حالة التوزيع من وإلى البلاد يتحمل صاحب الكتاب تكاليف شحن الكتاب ولا تلتزم دار النشر بمتابعة الشحنه أو التخليص الجمركي بل على صاحب العمل المسؤولية بتسليم العمل الى العنوان المختار بال البلدة المختارة، وتتحمل دار النشر مسؤولية التوزيع في البلد المراد فقط لاغير، ويعتبر النسخ المتبقية تالفه في حالة عدم قبول صاحب العمل دفع تكاليف ارجاعه واستردادها.",
    dist3_5:
      "ويعتبر اي تسهيل من الدار هو من قبيل الود لا من قبيل الإلتزام.",
    dist4: "في حالة التوزيع الإلكتروني",
    dist4_1:
      "وزع عبر موقعنا أو عبر مواقع أخرى أو عبر برنامج عيلة الراوي.",
    dist4_2:
      "نقوم بأخد النسخة إلكترونيا من صاحبها سواء كانت مطبوعة قبل كذلك أو كانت حديثة الطبع والكتابه أو لم ترى النور بعد، على أن تتم مراجعتها ليتم الإتفاق عليها ومدى تماشيها مع مبادئ الشركة من عدمه، في غضون ٢٥ يوم عمل يتم الرد بالموافقه من عدمه، على أنه ان تمت الموافقه، يتم الإتفاق على كون التوزيع سيكون عبر منصتنا أو منصات أخرى،",
    dist4_3:
      "فإن تم عبر منصتنا كان التوزيع بالنسب المذكورة وإن كان عبر منصات أخرى زادت النسبة المذكورة أيضا،",
    dist4_4:
      " ويتم الإتفاق على مدة العرض بيننا وبين صاحب العمل، ويلتزم صاحب العمل بدفع مبلغ رمزي قبل عرض كتابه وبعد إرساله وهو مبلغ تقديري يبدأ من ٢٠٠ جنية تقدره الشركة حسب نوع الكتاب وحجمه وتاريخ نشره ودار النشر واسم المؤلف وعنوان الكتاب، وذلك ضمانا لجدية الإلتزام، كما يتم دفع مبلغ تقديري آخر في حالة اختيار طريقة التوزيع وإرسال العمل للمراجعه وهو مبلغ تقديري أيضا يبدأ من ١٠٠ جنية وذلك حتى لايضيع وقت ومجهود الشركة طيلة ٢٥ يوما مراجعة دون جدوى أو فائده وكذلك ضمانا للالتزام من قبل صاحب الكتاب وعدم عرضه على جهة أخرى أثناء فترة المراجعة.",
    dist4_5:
      "كما يتعرض صاحب الكتاب لغرامة مالية تقديرية في حالة الإخلال بسياسية الخصوصية إن كان الكتاب حصري لدينا.",
    dist4_6:
      "وفي حالة التوزيع عبر منصات أخرى تزيد النسب المذكورة أو تختلف حسب كل منصه.",
    dist4_7:
      "وإن تم التوزيع عن طريق برنامج عيلة الراوي فسيكون السعر حسب مدة العرض وطريقة الاستضافة فهل هي فقط ريفيو للكتاب أو للكتاب أو الكاتب أو مقابله مع الكاتب أو مقابله وحفل توقيع، على أنه إن تم إختيار هذا العرض يتم دفع مبلغ تقديري يبدأ من ٥٠٠ جنية تدفع وقت الإرسال وقبل العرض على أن يتم خصمها من المبلغ الذي سيتم الإتفاق عليه فيما بعد، ويعتبر هذا الإختيار لا علاقه له بتوزيع عدد نسخ معين ولكن يعتمد اكثر  على تسويقها والإعلان عنها",
    transH1: "من الانجليزي إلى العربية ",
    transH1_1:
      "نترجم لك مع نخبة من متخصصين الترجمه فنقوم بانتقاء المترجم الأمثل لهذه المهمة حيث نقوم بمطابقة المترجم مع محتوى كتابك، حيث لا بدّ من أن يكون المترجم لدية كمية كبير من المعرفة في مجال الكتاب الذي يقوم بترجمته لغويّاً وفنّياً سواء كان كتاب علمي، أدبي، أطفال، أو كتاب تعليمي.  وتعتبر ثقافة المترجم ولكنته من أكثر الأشياء التي تؤثر على جودة كتابك، لذلك نحن نوفر لك كل ماهو احترافي فعليك أن تثق بالمترجم الذي سيقوم بترجمة كتابك ترجمة معتمده.",
    transH1_2:
      "نترجم لك كتاب، وثيقة، شهادة ميلاد وغير ذلك من الترجمات المعتمده والموثقه.",
    transH1_3:
      "فنحن نترجم لك سواء كانت الأوراق الكترونية او ورقية او صوتيه.",
    transH1_4:
      "وتعتبر تكاليف الترجمه تقديريه تقدرها الشركة حسب المطلوب ترجمته، على أن تختلف نفقات الترجمه من العربية والإنجليزية فليس بالضرورة أن تكون بنفس السعر.",
    transH1_5:
      "وعلى طالب الترجمه الإلتزام بدفع مبلغ نقدي ك عربون في حال اختيار نوع الترجمه وإرسال المطلوب ترجمته او جزء منه، هذا المبلغ هو ١٠٠ جنية على أن يتم خصمها من تكاليف الترجمه بعد الإتفاق، ولا يتم ارجاعها في حالة عدم الإتفاق نظرا لوجود إخلال وعدم التزام او جدية من قبل العميل.",
    transH2: "من العربية إلى الانجليزي ",
    transH2_1:
      "نقوم بانتقاء المترجم الأمثل لهذه المهمة حيث نقوم بمطابقة المترجم مع محتوى كتابك، حيث لا بدّ من أن يكون المترجم لدية كمية كبير من المعرفة في مجال الكتاب الذي يقوم بترجمته لغويّاً وفنّياً سواء كان كتاب علمي، أدبي، أطفال، أو كتاب تعليمي.  وتعتبر ثقافة المترجم ولكنته من أكثر الأشياء التي تؤثر على جودة كتابك، لذلك نحن نوفر لك كل ماهو احترافي فعليك أن تثق بالمترجم الذي سيقوم بترجمة كتابك ترجمة معتمده.",
    transH2_2:
      "نترجم لك كتاب، وثيقة، شهادة ميلاد وغير ذلك من الترجمات المعتمده والموثقه. فنحن نترجم لك سواء كانت الأوراق الكترونية او ورقية او صوتيه. وتعتبر تكاليف الترجمه تقديريه تقدرها الشركة حسب المطلوب ترجمته.",
    transH2_3:
      "وعلى طالب الترجمه الإلتزام بدفع مبلغ نقدي ك عربون في حال اختيار نوع الترجمه وإرسال المطلوب ترجمته او جزء منه هذا المبلغ هو ٢٠٠ جنية على أن يتم خصمها من تكاليف الترجمه بعد الإتفاق، ولا يتم ارجاعها في حالة عدم الإتفاق نظرا لوجود إخلال وعدم التزام او جدية من قبل العميل",
    transHead: "ترجم لدينا",
    distHead: "وزع",
    printPub1: "اطبع وانشر على نفقتك",
    printPub1_1:
      "تحمل تكاليف نشر وطباعة كتابك على أن تكون الأرباح لك وجميع",
    printPub1_2: "الحقوق ما عدا حق الطبع والنشر.",
    printPub1_3: "نصمم لك الغلاف",
    printPub1_4: "ننسق لك الكتاب داخلياً",
    printPub1_5: "نراجع لك الكتاب",
    printPub1_6: "نصحح لك نحوياً, إملائياً, لغوياً.",
    printPub1_7: "نكتب لك المحتوى إن كان صوتياً",
    printPub1_8:
      "هذا لا يشمل التوزيع اللإلكتروني أو الورقي. كما لا يشمل الترجمة",
    printPub2: "اطبع وانشر على نفقتنا طريقة (1)",
    printPub2_1:
      "نتحمل نحن تكاليف نشر وطباعة كتابك مقابل عدد معين من النسخ فقط وأن تكون جميع الحقوق محفوظة لدار النشر..",
    printPub2_7:
      "نوزع لك الكتاب ورقياً أو إلكترونياً أو ورقياً وإلكترونياً معاً حسبما يترآى لدار النشر وتتحمل الدار تكاليف التوزيع.",
    printPub2_8: "لا يشمل الترجمة",
    printPub3: "اطبع وانشر على نفقتنا طريقة (2)",
    printPub3_1:
      "نتحمل نحن تكاليف نشر وطباعة كتابك على أن تكون الأرباح بالنسبة حسبما يترآى لدار  النشر وأن تكون جميع الحقوق محفوظة لدار النشر..",
    printPub3_7:
      "نوزع لك الكتاب ورقياً أو إلكترونياً أو ورقياً وإلكترونياً معاً حسبما يترآى  لدار النشر على أن تكون تكاليف التوزي على الكاتب..",
    viewProd: "أظهر العروض",
    clkHere: "اضغط هنا",
    pubWithUsP1:
      "يمكن للكلمات من السماء إلى السماء أن تطير ، وتحررك من الأفكار أو المعتقدات السلبية ، وتخبرك أن هناك جذورًا لأوراق الشجر.",
    pubWithUsP2:
      "من أجل تنمية مجتمعنا ، يجب أن تعرف ؛ أن شهادتك الجامعية لا تكفي أبدًا.",
    pub_h1:
      "احنا مشروع ثقافي متكامل بيربط بين الكاتب و القارئ",
    pub_h2:
      "هنستكشف الكتاب المتميزين و هنقوم بالتوزيع و النشر و الدعايا لكل الاعمال الجيده   , و كمان هنقوم بالنشر الالكتروني و المجلات المطبوعه, و هنكون المناره اللي بيعرفهم العالم من خلالها.",
    pub_h3:
      "اما بقا بالنسبه للقراء , ف احنا هنكون معاكوا ك ميكريسكوب بيرصد كل كبيره و صغيره في الاعمال الادبيه و العلميه الموجوده ع الساحه الثقافيه , علشان نسهلكوا الوصول للمحتويات اللي بتناسب اهتمامتكوا .",
    pub_h4:
      "و كمان هتلاقونا ف كل ايفنت ثقافي و بجانب كل المواهب الادبيه , هنرصد و نقيم و نحلل , و هنجاوب على كل استفساراتكو.",
    pub_h5:
      "	الموف.NAAتابعونا ف عيلة الراوي ع قناه  علشان تستفيدو و تستمتعوا بالحكايات و المعلومات اللي هنقدمهالكوا , و كمان هتلاقوا ريفيوهات ع الكتب الجيده , علشان متحتاروش ف اسم الكتاب اللي هتقرأوه",
    pub_h6: "برعاية",
    pub_h7: "تبرع",
    phoG_0:
      "لدينا نخبة من المصورين المحترفين في مجال التصوير، عبر أنحاء الجمهورية، يتمعتون بمهارات عاليه منها:",
    phoG_0a:
      "الإبداع التصوير الفني الصبر والتركيز توثيق التفاصيل مهارات تواصل قوية مهارات العمل الجماعي التنظيم الإضاءة  الايديت إرضاء العميل. ",
    phoG_0b: "نوفر لك الراحه كما نوفر لك الاحترام.",
    phoG_0c: "ونوفر لك أيضا :",
    phoG_1: "كاميرات مختلفه ",
    phoG_2: "عدسات احترافيه",
    phoG_3: "فوتوسيشن حفل زفاف ",
    phoG_4: "فوتوسيشن حمل",
    phoG_5: "فوتوسيشن أزياء ",
    phoG_6: "فوتوسيشن خارجي ",
    phoG_7: "فوتوسيشن داخلي ",
    phoG_8: "فوتوسيشن خطوبة ",
    phoG_9: "فوتوسيشن تخرج ",
    phoG_10: "فوتوسيشن أطفال ",
    phoG_11: "فوتوسيشن قبل الزفاف",
    phoG_12: "فوتوسيشن رحلات",
    phoG_13: "فوتوسيشن ترويج منتجات ",
    phoG_14: "فوتوسيشن عقارات ",
    phoG_15: "فوتوسيشن عفوي ",
    phoG_16: "فوتوسيشن حفلات",
    phoG_17: "فوتوسيشن ندوات ومؤتمرات",
    phoG_18: "فوتوسيشن عائلي ",
    phGX_1:
      "وكل المصورين متدربين على التصوير والايديت الا أنه في حالة إختيارك عمل ايديت احترافي فسيختلف السعر، فلدينا نخبة من الايديتور أيضا لضمان جودة عاليه.",
    phGX_2:
      "بإمكانك إختيار المصور، أو بإمكان توكلينا في إختيار الأنسب والأفضل لك ولكل مصور سعره الخاص، على أن التواصل عن طريقنا فإذا تم التواصل مباشرة مع المصورين فالشركة غير مسؤوله عن الغش أو جودة العمل.",
    phGX_3: "كما بإمكانك الإنضمام إلينا إن كنت مصور.",
    phGX_4:
      "في حالة إختيارك أحد عروضنا سيتم دفع عربون للالتزام وقت إرسال الطلب وهو ١٠٠ جنية.",
    phGX_5:
      "وفي حالة الإنضمام إلينا ك مصور أو ايديتور سيتم توقيع اتفاقية يجب على كلينا عدم الإخلال بشروطها كم سيتم دفع مبلغ اشتراك سنوي منك وكذلك سيتم دفع مبلغ رمزي وقت إرسال الطلب ضمانا للالتزام وهو ٥٠ جنية غير قابلة للاسترداد.",
    ourPhog: "المصورين لدينا:",
    adS_1: "تصميم أدوات الدراسة",
    adS_2: "الترجمة الأدبية والأكاديمية",
    adS_3: "إعداد الأبحاث العلمية و نشرها",
    adS_4: "اقتراح عناوين الرسائل",
    adS_5: "إعداد المقترح البحثي خطة البحث",
    adS_6:
      "تنسيق رسائل الماجستير والدكتوراة وغيرهما من الرسائل ",
    adS_7:
      "المساعدة فقط بالمراجع في رسائل الماجستير و الدكتوراة",
    adS_8:
      "المساعدة فقط بالمراجعه في رسائل الماجستير و الدكتوراة",
    adS_9: "التدقيق اللغوي و النحوي",
    adS_10: "التحليل الإحصائي",
    adS_11: "إعداد العروض التقديمية",
    adS_12: "استشارات في الواجبات والتقارير الجامعية",
    adS_13: "تحصيل القبولات الجامعية",
    adS_14: "تحويل الرسالة الى كتاب للنشر",
    adS_15: "تحويل الرسالة إلى بحث علمي",
    adS_16: "إعداد الاطار العام",
    adS_17: "إعداد الاطار النظري",
    adS_18: "تلخيص الدراسات السابقة",
    adS_19: "توفير المراجع والمصادر",
    adS_20: "نقد الدراسات السابقة",
    adS_21: "إعداد الحقائب التدريبية",
    adS_22: "خطة البحث ",
    adS_23: "مقترح البحث ",
    adS_24: "نتائج البحث ",
    adS_25: "فصل النتائج",
    adS_26: "فصل النتائج",
    adS_27: " رسائل الماجستير",
    adS_28: " الترجمة الاكاديمية",
    adS_29: " رسائل الدكتوراه",
    adS_30: " التحليل الاحصائي",
    adS_31: " اقتراح عناوين رسائل الماجستير",
    adS_32: " اقتراح عناوين رسائل الدكتوراه",
    adS_33: " الترجمة العلمية",
    adS_34: " الاستبانة",
    adS_35: "تحكيم الاستبانة",
    adS_36: " البحث العلمي",
    adS_37: "المنهجية",
    adX_1:
      "سيختلف السعر في حال اختيارك بعض العروض عن ما إذا تولينا كتابة البحث من الألف إلى الياء.",
    adX_2:
      "على أنه يتم دفع مبلغ رمزي وقت الإرسال ك عربون ضمانا لجدية الإلتزام وهو مبلغ ٥٠٠ جنية يتم خصمها من التكلفة الفعليه فيما بعد، ولا يتم استرجاعها في حالة عدم الإتفاق على التعاون من قبلكم.",
    adX_3:
      "قمنا بإنجاز العديد من الأبحاث في مختلف المجالات والدول منها دولة الإمارات، السودان، العراق، مصر، الأردن، وغيرها من الدول على أن كل شيء لدينا يتمتع بسرية تامه والتزام تام، ولا نترك العميل بعد إرسال الرسالة إلا بعد موافقة المشرف على ما تم إرسالة وفي حال وجدت تعديل فسنلتزم بكافة التعديلات.",
    adX_4:
      "كما أنه لدينا عروض فهناك المتميز في الكتابه البحثية من فريق العمل لدينا وهناك العادي وكل بتكلفه مختلفة، ففي حالة اختيارك التكلفة الأقل والشخص العادي فلسنا مسؤولين عن أية تعديلات أو أية أخطاء قد توجد، أما في حالة اختيارك الخدمة المتميزة فعلينا كامل المسؤولية",
    adS: "خدماتنا التي قد تختار منها أو تختارها كلها.",
    ad_1: "نحن مؤسسة بحثية تُقدّم خدمات البحث العلمي للباحثين وطلبة الدراسات العليا على اختلاف مجالاتهم لمساعدتهم في إكمال مسيرتهم العلمية وتجاوز كافة المشاكل التي قد تواجههم في مختلف المهام الأكاديمية الموكلة لهم من إعداد الأبحاث والأوراق.",
    ad_2: "وكذلك رسائل الماجستير والدكتوراه فريق العمل يتكون من نخبة من الباحثين الأكاديمين المتخصصين في مختلف المجالات.",
    ad_3: "نعمل على مساعدة الطلبة على اختلاف تخصصاتهم بإعداد الابحاث العلمية والأوراق القابلة للنشر سواء أكان لأغراض الترقية أو كرصيد معرفي داعم لمسيرة الطالب العلمية وباعتماد مناهج علمية مختلفة بحسب التخصص وموضوع البحث.",
    ad_4: "كما نعمل على تلبية احتياجات الطلبة فيما يخص إعداد الأوراق العلمية اللازمة للتقديم للندوات و المؤتمرات و بحوث الترقيات في مختلف التخصصات (سواء أكانت التربوية أو النفسية أو حتى الانسانية والهندسية والعلمية والطبيه وغيرها ) و باللغتين العربية و الانجليزية بأفضل جودة وأعلى دقه.",
    ad_5: "ونسعى الى مساعدة الطلبة في نشر أوراقهم العلمية في أحد المجلات العلمية المُحكمة والمبنية على معايير علمية رصينة تتوافق مع اهتمامات كبرى الجامعات ومراكز البحوث العلمية إذ تحتاج عملية نشر الابحاث العلمية الى تواصل مستمر مع المجلات العلمية والتنسيق والتعديل حسب نظامها المتبع والمتابعة المستمرة للتأكد من نشرها وفقاً للمعايير المطلوبة وهو ما نحرص في شكرتنا للدراسات والإستشارات الاكاديمية على إعداده بالصورة العلمية المُثلى.",
    ad_6: "نبدأ مع الطالب بإعداد بحثه العلمي خطوة بخطوة بدءاً من اختيار العنوان الأنسب لموضوع الدراسة حتى تجهيزها كاملة من المقدمة والجزء النظري والعملي وصولا الى النتائج والتوصيات بالاعتماد على شروط الإعداد وتفاصيله وفقاً لشروط الجهة المنظمة التي تقدّم لها الأبحاث في أي دولة كانت.",
    ad_7: "تمتاز خدمة إعداد الأبحاث العلمية لدينا بالجودة والدقة والتميز في الانجاز من قبل اساتذة متخصصين مع الحرص على تزويد الطالب بالأبحاث بأقل مدة ممكنة وبتكلفة مناسبه.",
    ad_8: "ولك حرية اختيار نوع البحث، بكالوريوس/ ليسانس،دراسات عليا، ماجستير، دكتوراه.",
    ad_9: "كما أن لك حرية إختيار تولينا كامل البحث أو جزء منه فقط، كما نكتب مشاريع التخرج، وذلك عبر كل دول العالم العربي، وفي كل مجالات البحث وفروعه وكل التخصصات.",
    ad_10:
      "كما لك حرية إختيار إن كنت تريد كتابة بحث للنشر والتوزيع ك كتاب أو كمادة علمية.",
    chP12:
      "الدين المعاملة، الدين الوسطية، الدين يسر وليس عسر، هذا هو شعارنا على قناة  NAA Islamophobia حيث تضم:",
    chP121: "برنامج المحيا",
    chP1211:
      " وهو برنامج ديني توعوي لا يتحدث في أصول الدين فهي من الثوابت الثابته والمعلومه من الدين بالضرورة والتي هي الصيام والصلاة والزكاة وغيرهم من أصول الدين، كما لا نتكلم عن الدعوه إلى الدين فنحن نقتدي بقوله تعالى لكم دينكم ولي دين، وقوله تعالى يعرفونه كما يعرفون أبنائهم فالدين ثابت محفوظ يعرفه الكبير والصغير، البادي والحاضر،العربي والأعجمي، المتدين وغير المتدين، فلسنا بحاجه الى الدعوة إليه، تاركين أمر الدعوه إلى أصحاب الدعوة والعقيدة، بل نحن نتكلم فقط في فقه القرآن والسنة، فقه الأحكام والتي آجر النبي صلى الله عليه وسلم المجتهد فيها ولو أخطأ، حيث قال' من اجتهد فاخطأ فله أجر ومن اجتهد فأصاب فله أجرين أجر الإجتهاد وأجر الإصابه'، كما أنها أحكام فيها باب الإجتهاد والبحث مفتوح، ولكن للاجتهاد في الأحكام شروط وضوابط منها الإطلاع والمعرفه والقراءة والبحث والمقارنة وغيرها من شروط الإجتهاد حتي يتم طرحه، وكل اجتهاد هو ليس معصوم من الخطأ ولا معصوم من الطرح للمناقشة، بل لابد وأن يضع المجتهد في حسبانه أن هناك مناقشة سيتم طرحها، فربما اقنعنا بما وصل إليه في اجتهاده وربما بينّا له صوابه، ونحن نعتمد على هذا في برنامجنا المحيا على قناة NAA Islamophobia ",
    chP1212:
      "ومن الموضوعات التي سيتم طرحها قضية ضرب النساب في القرآن الكريم يقول اغلب العلماء بجوازها ونقول نحن بعدم جواز ضرب النساء طبقا للقرآن والسنة أيضا محتجين بالأدلة والبراهين تاركين باب النقاش مفتوح، كما نطرح العديد من الأبحاث الشائكة الأخرى.",
    chP1213:
      "فبداية أقول جميعنا بشر نخطيء ونصيب وكلامنا ليس بوحي ولا هو منزه عن الخطأفيقول أبو بكر الصديق رضي الله عنه : (كل يؤخذ من كلامه ويرد إلا صاحب هذا القبر  ) يقصد رسول الله صلى الله عليه وسلم.ويقول الله تعالى في كتابه الكريم :( ما ينطق عن الهوى إن هو إلا وحي يوحى  )كما يقول تعالى أيضا :( ما فرطنا في الكتاب من شيء  )",
    chP1214:
      "لذلك فإنه وبناء على كل ذلك أقول للجميع قبل أن يرفع أحد  في وجهنا أسلحة  الإعتراض أو يشير إلينا بأصابع الإتهام محتجين بقول العلامة العالم أو الفقيه الهمام أو الشيخ الفلاني ابن فلان كذا وكذا فكيف تعارضونه وهو العالم الفقيه.",
    chP1215:
      "أقول لكل هؤلاء الذين سيحتجون بهؤلاء الناس الذين يؤخذ من كلامهم ويرد إن كنتم قد احتججتم بهؤلاء فنحن قد كانت حجتنا كتاب الله ذاته الذي ما فرط الله فيه من شيء ولا ترك شيء فيه إلا ذكره كما احتججنا بسنة رسوله الكريم الذي ما ينطق عن الهوى.",
    chP1216:
      "فاحتججنا نحن  بالأصل واحتججتم أنتم بمن فسر الأصل على هواه وبرئيه الذي اجتهد فيه مشكورا وقد يكون اجتهاده خطأ عندما يأتي ما يصححه أو صواب حتى يثبت العكس.",
    chP1217:
      "لذلك أقول مصدرنا الوحيد الذي استقينا منه أبحاثنا هو كتاب الله وسنة نبيه ومصطفاه وهذا لا ينفي رجوعنا لمن يتصفون بالعلماء أو المفسرين لكننا قد إختلفنا مع ما فسروه واعترضنا معهم وإن كان هذا منا قد حدث فهو ليس معارضة للنص القرآني أو نفيه لا والله....بل هو معارضة لمن فسر النص فجانب صوابه ولم يعي خطابه أو يفقه بابه المذكور فيه.",
    chP122:
      "  لمساعدة المحتاجين من كسوة وغذاء ودعم نفسي وغيره من شتى طرق الدعم وأنواعه كما أنها تضم جمعية خيرية وهي NAA charity",
    chP123:
      "كما نضم مساعدة خاصة للحج والعمرة لكبار السن واليتامى والمحتاجين",
    chP11:
      "قناتنا هي قناه اخباريه , ترفيهيه , اجتماعيه , توعويه ......... هنقدملكوا فيها برامج بفقرات مختلفه و متنوعه , هتشوفوا معانا الاخبار بشكل ممتع و جديد في برنامج خلطبيطه بالصلصه , و كمان هنناقش قضايا مجتمعيه بشكل مختلف , و هتلاقوا معانا كل الحلول لمشاكل و سلوكيات اطفالكوا .",
    chP111:
      "و لو من محبين الرعب و الاثاره , وفرنالكو دا في افضل و اقوى برنامج رعب .لو قلبك جامد و حديد تابعنا على برنامج اف ام رعب , و لو قلبك ضعيف اتعشى و نام خفيف",
    chP112:
      "الحمراء , علشان تستمتعوا و تشوفوا كل ما هو جديد و مختلف NAA News تابعونا على قناه ",
    chP10:
      "  مش بس قناه ترفيهيه بتعرض كارتون للاطفال , دي قناه تعليميه  NAA kids و هدفها تقويم سلوك الطفل و تأسيسه على المبادئ السليمه , هتلاقو عندنا مغامرات و احداث مشوقه دايما , واغاني تعليميه و ترفيهيه , اي ان كان عمرك او سنك هتستمتع معانا و هتستفيد",
    chP101:
      " الصفراء في فيلم غايتا ,NAA kids تابعونا على قناه و مغامرات و مسابقات مبتخلصش",
    chP9: " قناتنا مش قناه تقليديه, لانها بتجمع بين كل انواع الفن ",
    chP91:
      "هنعرضلكو موضه و ازياء , و كمان هنديكو نصايح علشان تهتموا بمظهركوا الخارجي و جمالكوا , دا غير اننا هنستضيف فنانيين هنتناقش معاهم ف حاجات كتير و اسئله كتير تهمكوا.",
    chP92:
      "و علشان احنا بنهتم بنفسيه متابعينا , عندنا فقره مخصوص هنحللكو فيها كل مشاكلكو .",
    chP93:
      "و غير انكو تقدروا تشاركونا بمشاكلكو , تقدرو كمان تشاركونا لو عندكو منتجات ليها علاقه ب الجمال او الفاشون او الفن , و احنا هنساعدكو انكو تروجوا لمنتجاتكو و تطلعو بيها للنور , و كمان عندنا مسابقات و جوايز قيمه هتحبوها جدا و هتستفيدوا منها  .    ",
    chP94:
      " البينك , و حلقه جديده كل اسبوع NAA Fasion تابعونا في برنامج روقيتا على قناه",

    chp85:
      "أنا عبد الله - فنان ومصمم ابتكر رسومات جميلة لمواقع الويب وأرسم صورة مذهلة.",
    chp851: "إنه فنان ومصمم عانى من الصدمة والقلق.",
    chp852: " إنه شخص رائع لديه قصة حياة ملهمة.",
    chp853: " وهو أيضا فنان موهوب.",
    chp854:
      " وساعدناه من خلال مكتبتنا في ربطه بالمؤلفين والناشرين المهتمين بعمله.",
    chp855:
      " وقد منحناه الفرصة لنشر عمله على موقعنا ليكون أحد أفراد فريق العمل لدينا ، يمكنه الآن تعليم الناس كيفية الرسم أو المساعدة في رسم مشاريع المعارض. انضم إلينا كما فعل عبدالله وشارك موهبتك",
    chp84: "أعمال عبدالله بالفحم والرصاص",
    chp843: "جدتى (ست كبيرة فى السن من القرية)",
    chp83: "أعمال عبدالله للأطفال",
    chp831:
      "ساعدنا عبد الله على نشر هذه الأعمال في كتاب أطفال مع ناشر جيد.",
    chp832:
      " كل لوحة لها قصة واسم وراءها ، إذا كنت تريد معرفة المزيد عنها ، يمكنك مناقشة ذلك مع الفنان نفسه.",
    chp833: "(كيف تصلى)",
    chp826: "(الانهيار والانعكاس).",
    chp827:
      " مرة أخرى ، كل لوحة لها قصة وراءها واسم ، إذا كنت تريد معرفة المزيد عنها ، يمكنك مناقشة ذلك مع الفنان نفسه.",
    chp823: "أعمال عبدالله بالألوان",
    chp824:
      "لقد ساعدنا عبد الله في الانضمام إلى فصول تعليمية مختلفة لمساعدة الآخرين في كيفية الرسم ويمكنك أن ترى هذا في  الصور المعروضة",
    chp825:
      " أيضًا ، تمت مشاركة بعض هذه الصور في معرض للرسم تحت اسم",
    chp822: "عبدالله سعيد",
    chP81: "مواهبنا",
    chP6: "لو عندك موهبه او حرفه في حاجه معينه  و متميز فيها , و نفسك تكبرها و تنميها و تطلعها للنور.",
    chP7: "لو شايف نفسك مميز ف مجال معين , اي ان كان نوع مجالك او موهبتك او تميزك.NAA Talents تقدر تشارك معانا في قناه",
    chP8: " احنا هنكون حلقه الوصل اللي بتوصلك بالناس المهتمه بمجالك و اللي كمان حابين يتبنوا موهبتك , علشان تكبر و تكون من السوبر ستار في مجالك .(NAA Talents)تابعونا في برنامج معطم  ناظلي و المواهب على قناه  و هتوصل لحلمك اكيد",
    chP1: "لو ليك ف الدراما و من محبين الاحداث المشوقه و الاثاره , تابعنا على قناه",
    chP2: "  الزرقاء , و تابع حلقات مسلسل حكمه المحكمه ,NAA Drama( القانون في شكله الجديد )",
    chP3: "و مسلسل فانتازيا الجريمه ( القانون لا ينصف اصحاب الحق , بل اصحاب الدليل ) ",
    chP4: "اللي هتشوفوا فيهم دراما بشكل حقيقي و واقعي , وهتتابعوا معانا قضايا حقيقيه و هتعرفوا احكام و ثغرات القانون فيها , علشان تكونوا مطلعين على القانون بشكل اكبر و اشمل .",
    chP5: "و كمان هتستمتعوا مع مسرحيه عالم موازي , اللي هتعرض قريبا ان شاء الله .الزرقاء. NAA Dramaكل دا و اكتر هتلاقوه على شاشه قناه",
    chanAbout: ":عن القناة",
    photog: "استوديو تصوير",
    phogper1: "أحمد جمعه",
    phogper2: "زيزو على",
    Solici: "مكتب محاماه",
    resear: "أكاديمية أبحاث",
    publish: "دار نشر",
    talent: "مواهب",
    kids: "أطفال",
    news: "أخبار",
    poem: "أشعار",
    peomP1:
      "لا ننسى أن عشاق الشعر والغزال و الطرب، فقط اشتركوا معنا بقصائدكم أو استمتعوا بقصائدنا ، القرار قراركم",
    islamophobia: "دين",
    fashion: "فن و موضه",
    drama: "دراما و مسلسلات",
    inp_Vpost: "أنشر",
    donatMsg: "رسالة تبرع",
    d1: " تبرع للاجئين والضحايا والمعوقين لمساعدتهم على تنمية مواهبهم أو الحصول على وظيفة.",
    d2: ' لا يزال من المهم للاجئين والضحايا الانخراط مرة أخرى في المجتمع."',
    d3: ' لا يتعين عليك التبرع بالمال ، يمكنك فقط منحهم الفرصة بطريقة أو بأخرى."',
    d4: " تساعد المزيد من الناس وهذا يعني الكثير بالنسبة لنا.",
    d5: "يسعد بعض المتبرعين بنشر صورهم أثناء التبرع لنا ، فقط لإظهار مدى سعادتهم بوجودنا وبدعمنا وأيضًا لتشجيعك على دعمنا كما فعلوا",
    d6: " ويفضل الآخرون ألا يكونوا في العروض العامة.  لكن مهما يكن الطريقة التي تختارها لها مغزى كبير بالنسبة لنا ونحن نقدر ذلك حقًا.",
    d7: " رسالة شكر وتقدير",
    d8: ".يتبرع بعض الناس بخدمة ، تطوعية ، طعام ، ماء ، أكياس ، ملابس والمال والآخرون يتبرعون بالدعاء والتشجيع",
    d9: " مهما كانت الطريقة التي تختارها ، فنحن نقدرها",

    d10: "!استمتع بجمع الأموال من أجل عملنا الحيوي. شكرًا لك",
    d11: "رعاية أي من مشاريعنا",
    d12: "!ساعدونا في التغلب على الجوع والمتابعة العمياء وزواج الأطفال ... أو أي من أهدافنا أو مشاريعنا شكرا لك",
    d13: "تبرع بوقتك",
    d14: "!هل لديك بعض الوقت بين أيدينا؟ تطوع معنا! شكرًا لك",
    d15: "تبرع بالأشياء القديمة",
    d16: "!يمكن إعادة تدويرها مثل الملابس والاكسسوارات والهدايا شكرا لك",
    d17: "أعلن عنا",
    d18: "!تسويق اعلانات تليفزيونية او راديو او نقل اعلانات شكرا لك",
    PrevPosts: ":المنشورات السابقة",
    welcome: "مرحبا",
    soon: "قريبا",
    rdMore: "اقرأ المزيد",
    writer: "الكاتب",
    ticket: "احجز تذكرتك",
    banner:
      "./assets/images/home_content/naa world-01.webp",
    "banner_Alam Mwazy":
      "../assets/images/longBanners/AlamMwazy.webp",
    banner_Khaltbeta:
      "../assets/images/longBanners/khalsbesaBelSalsa.webp",
    banner_RoQeta:
      "../assets/images/longBanners/Routia.webp",
    banner_Ghita:
      "../assets/images/longBanners/Gjetia.webp",
    "banner_Hakmt El Mahkma":
      "../assets/images/longBanners/hakmtElMahkma.webp",
    "banner_Crime Fantasy":
      "../assets/images/longBanners/crimeFantz.webp",
    "banner_Nazly wel mwahb":
      "../assets/images/longBanners/m3akomNazliWmwahb.webp",
    "banner_El-Rawy Family":
      "../assets/images/longBanners/ElrawyFam.webp",
    "banner_Kids Songs":
      "../assets/images/longBanners/kidsSongs.webp",
    "banner_El-Meha":
      "../assets/images/longBanners/elmeha.webp",
    "banner_Academy of  scientific research":
      "../assets/images/longBanners/scienceAcademy.webp",
    "banner_Photography Studio":
      "../assets/images/longBanners/photoStodio.webp",
    "banner_Publishing House":
      "../assets/images/longBanners/publishDar.webp",
    pub_poster:
      "../assets/images/publish/pub_poster/arPoster.webp",
    pub_poster_rawy:
      "../assets/images/publish/pub_poster/rawyAr.webp",
    "banner_NAA Solicioters":
      "../assets/images/longBanners/maktbMohamah.webp",
    banner_Charity:
      "../assets/images/longBanners/charityOrg.webp",
    alam_mwazy_poster:
      "../assets/images/shows/showsPosters/alam_mwazy/1.webp",
    crime_poster:
      "../assets/images/shows/showsPosters/crime/1.webp",
    ghita_poster:
      "../assets/images/shows/showsPosters/ghita/1.webp",
    hakmt_ElMahkma_poster:
      "../assets/images/shows/showsPosters/hakmt_ElMahkma/1.webp",
    khltbeta_poster:
      "../assets/images/shows/showsPosters/khltbeta/1.webp",
    kidSongs_poster:
      "../assets/images/shows/showsPosters/kidSongs/1.webp",
    nazly_poster:
      "../assets/images/shows/showsPosters/nazly/1.webp",
    rawy_poster:
      "../assets/images/shows/showsPosters/rawy/1.webp",
    roqeta_poster:
      "../assets/images/shows/showsPosters/roqeta/1.webp",
    pub_srv1: "انشر كتابك",
    pub_srv2: "وزع كتابك",
    pub_srv3: "اقرأ",
    pub_srv4: "ترجم",
    pub_srv5: "جوائز",
    srvs: "NAA خدمات",
    pubsrvs: "الخدمات",
    home: "الصفحة الرئيسية",
    channels: "NAA قنوات",
    shows: "NAA برامج",
    offices: "NAA مكاتب",
    contact: "تواصل معنا",
    contactInp: "...أكتب رسالتك هنا",
    pleaseFill: "من فضلك املئ تلك النموذج",
    about: "عنا",
    donate: "تبرع",
    bgChoose: "أختر",
    bgPress: "أضغط",
    bgCheck: "تحقق",
    bgEnjoy: "استمتع",
    fAD: "أعلن معنا",
    ad1: "و انت من اصحاب المواهب او الحرف , او كنت متميز ف مهنتك , سواء ان كنت دكتور او مهندس او محامي او صاحب مهنه و ناجح فيها .بغض النظر ان كنت مبتدأ او حتى معروف في مجالك , و حابب تظهر معانا او تعمل دعايا و اعلان و تسوق لشغلك ,او حتى حابب رعايه ",
    ad2: "NAA world تواصل معانا على مجموعه قنوات",
    ad3: "و هنساعدك تنجح و توصل لهدفك في اسرع وقت",
    ad4: "و كمان هتلاقوا عندنا عروض حلوه جدا بلاش تفوتوها .احنا هدفنا الاساسي اننا ندعمك و نساعدك توصل لكل اهدافك و تثبت تميزك و نوصله للعالم كله",
    fWork: "أعمل معنا",
    fJoin: "أنضم لنا",
    fTerms: "الشروط و الاحكام",
    terms1: "www.naaworld.uk باستخدام موقع",
    terms2:
      "فأنت توافق على هذه الشروط والأحكام وفي حالة عدم موافقتك يتعين عليك عدم استخدام الموقع ونحن نرحب بكل تعليقاتك مادامت تطبق السياسات والقواعد التي يتبعها الموقع",
    terms3: "شروط استخدامك للموقع",
    terms4:
      "أنك تقر وتتعهد بكامل المسؤولية  فيما يتعلق بالاشتراك او الدفع لمشاهدة اي عمل على الموقع سواء فيديو او التمتع بنوع خدمة معينه",
    terms5:
      "وتتعهد بأنك لن تقوم بنسخ او تحميل او اعادة نشر او اعادة انتاج او اقتباس العمل او اشتقاقه لأي جزء من محتوي الموقع او قص او بث او إرسال اي محتوي على الموقع بأي شكل من الأشكال علي اي وسيله من وسائل التواصل اي كان نوعها بدون علمنا او إذن مسبق منا علي إن أي فعل من هذا القبيل يكون فعل غير مشروع قانونا نظراً لتمتعنا لحق الملكيه الفكريه لمحتويات الموقع كامله من عرائس واعمال ومؤلفات وفيديوهات وجميع التصميمات وتمتعنا بكافة الحقوق وأي مخالفة لذلك سوف تضع صاحبها تحت المسؤلية القانونية والمسائله الجنائية",
    terms6:
      "علي أننا غير ملتزمون بإعادة اي أموال من قيمه الاشتراك المدفوعه مسبقاً مادمت قد تمتعت بالخدمه المقدمه منا",
    terms7:
      "وتقع المسؤولية كاملة علي المعلن في حاله الاعلان إن قدم مالم يمتلكه دون إذن صريح ومسبق من المالك او انتحل صفة شخص حقيقي او اعتباري بأي شكل من الأشكال",
    terms8:
      "او تسبب في إزعاج أو مضايقة الأخرين او روج لأشياء غير مرغوب فيها",
    terms9:
      "ونحن نتمتع بحقوق النشر كامله وحق الملكيه الفكريه لمحتويات الموقع كامله",
    fPolicy: "سياسة الخصوصية",
    policy1:
      "نهتم بخصوصيتك وأمنك بشكل كبير ونعمل على الإلتزام بكافة ما قدمناه من عروض أو هدايا أو مسابقات",
    policy2:
      "نعمل على إيصال هدف سامي للمتفرج او متلقي الخدمه",
    policy3: "نعمل على عدم ازعاج الاخرين",
    policy4: "نعمل على أن تكون كافه البيانات سريه",
    policy5:
      "ونحتفظ بحقنا القانوني في إنهاء اشتراكك في استخدام الموقع في حالة قيامك لأي خرق او مخالفه للبنود وفقاً للشروط والأحكام",
    policy6:
      "نعمل على إيصال الخدمة بشكل جيد ولكن لا يعد العطل أو ضعف شبكة الإنترنت من قبيل المستفيد والتي من دورها أن تؤثر على الحصول على الخدمة بشكل جيد سبب من الأسباب التي يتحملها الموقع لأن ذلك لا يكون لسبب عطل فني وهي خارج إرادة الموقع وترجع للعميل",
    policy7:
      "اشتراكك في الموقع يتيح لك فقط مشاهده كل الأعمال الموجودة على الموقع بصفحاته الفرعيه كاملة وكافة الخدمات وكافة العروض لفترة زمنية معينة تحددها لكنه لا يتيح لك التمتع بما رأيته من خدمات و لا يتيح لك مشاهده الفيديوهات او تلقي اي خدمة من الخدمات إلا إذا تم دفع مقابل تلك الخدمه ",
    policy8:
      "علي انه اذا تم الدفع مقابل الخدمه فإنها متاحه فقط لفترة استخدامها المحددة من قبلك ولا يعد دفع تذكرة لمشاهده فيديو حق لمشاهدة فيديو آخر بل إن شراء كل خدمة على حدى واشتراك كل فيديو على حدى ",
    policyF: "نتمني لكم مشاهده طيبه	وخدمة شامله",
    wtc: "شاهد الان",
    rct: "تفاعل",
    cmmt: "تعليق",
    ic_pubHouse: "بيت النشر",
    ic_law: "مكتب المحاماة",
    ic_phoghyStudio: "استوديو التصوير الفوتوغرافى",
    ic_charity: "الاعمال الخيرية",
    ic_acdmyResearch: "أكاديمية الابحاث العلمية",
    inp_name: "الاسم",
    inp_name2: "الاسم",
    inp_mail: "الأيميل",
    inp_mail2: "الأيميل",
    inp_msg: "أكتب لنا رسالة",
    inp_file3: "تريد ان تشترك فى اى مسابقة",
    submit: "ابعت",
    cairo: "القاهرة - مصر",
    london: "لندن - المملكة المتحدة",
    mcqHeader: ":انت تتواصل معنا بسبب",
    mcq_work: "أعمل معنا",
    mcq_advice: "احصل على استشارة قانونية",
    mcq_ad: "اعلن معنا",
    mcq_publish: "انشر معنا",
    mcq_pics: "أخذ صور",
    mcq_donate: "اتبرع",
    mcq_watchEp: "اشاهد حلقات",
    mcq_book: "اشترى كتاب",
    mcq_translate: "ترجمة",
    mcq_other: "شئ اخر",
    buy: "أشترى الأن",
    found_about: "عن المؤسسة",
    founder_about: "عن المؤسس",
    ty: "شكرا لك",
    tyall: "!شكرا للجميع",
    donateSms: "تبرع عن طريق الرسائل النصية:",
    donatePhone: "تبرع عن طريق المكالمات الهاتفية:",
    donateBank: "تبرع عن طريق التحويلات البنكية",
    donateOther: "تبرع بطرق اخرى:",
    donors: "المتبرعون",
    tyMsg:
      " أنا وفريقي أود أن نشكر كل من دعمنا.  حتى مع الأشياء الصغيرة ، لأن دعمك يساعدنا على الاستمرار",
    Who: "من نحن:",
    WhoT: "نحن مؤسسه و كيان متكامل يشمل ....  الاعلام : لدينا مجموعه قنوات متنوعه ( ترفيهيه , تعليميه , ثقافيه , اخباريه , دينيه ) و لدينا فريق كامل متخصص في الدعايا و الاعلان على اعلى المستويات , بطريقه مبتكره و جذابه .",
    fn1: "نروج و نعلن عن :",
    fn1X: "المنتجات , الاماكن , الكتب الورقيه و الالكترونيه , المجلات و الصحف , الاشخاص و المواهب , الافكار الجديده و الملهمه و كل ما يستحق ان يخرج الى العلن",
    fnGoal: "اهدافنا:",
    fn1Y: "ان نقدم محتوى هادف و ممتع بعيدا عن الاسفاف , نطرح قضايا مهمه و جداليه بشكل مختلف , نقوم بتسليط الضوء على الموضوعات الرائجه و نناقشها بشكل متحضر , ندخل افكار بناءه على المجتمع بشكل مبسط , نعيد بناء الوعي و الثقافه التي دفنت منذ زمن و نحييها مره اخرى",
    fn2: "النشر و التوزيع:",
    fn2X: "لدينا دار للنشر , نقوم بالنشر و التوزيع و الطباعه و الترجمه , و نشر الكتب و توزيعها محليا و عالميا بأقل التكاليف و بمستوى عالي من الخدمه .",
    fn2Y: "ان ننشر اكبر قدر من الثقافه , و نتيح من خلالنا لكل العالم المشاركه و التعرف على الثقافات الاخرى , و ايضا ابراز و تقديم المواهب الادبيه التي تستحق الفرص و اخراجها للعالم اجمع . ",
    fn3: "مؤسسه للاستشارات القانونيه و المحاماه :",
    fn3X: "لدينا نخبه من كبار اساتذه القانون , متخصصون في جميع فروع القانون الدولي و القانون المحلي , سواء في القطر العربي او الاوروبي الخارجي , نستقبل كافه القضايا و الدعاوي الدوليه و المدنيه و الجنائيه و الاحوال الشخصيه و العسكريه , و انهاء كافه الاجراءات القانونيه لدى الجهات الحكوميه و غير الحكوميه , و انهاء اجراءات التسجيل لدى الشهر العقاري و السجل العيني . و نقدم خدمه استشارات قانونيه , من خلال مستشار قانوني او عده مستشارين , لمتابعه كافه القضايا القانونيه .",
    fn3Y: "ان نجمع محامين على المستوى الدولي , سواء العرب او الاجانب .توفير امكانيه الحصول على محامي الكتروني للحصول على الاستشارات القانونيه اونلاين , لتوفير الجهد و عناء السفر .توفير الخدمات تحت مراقبه و متابعه دائمه لضمان مستوى الخدمه و ارضاء العميل",
    fn4: "مؤسسه بحثية:",
    fn4X: "تقدم خدمات البحث للباحثين و طلبه الدراسات العليا و اصحاب رسائل الماجستير و الدكتوراه , على اختلاف مجالاتهم لمساعدتهم على اكمال مسيرتهم العلميه , و تجاوز كافه المشاكل التي قد تواجههم في مختلف المهام الاكاديميه الموكله لهم , من اعداد الابحاث و الاوراق , و لدينا نخبه من الباحثين الاكاديميين المتخصصين في مختلف المجالات .",
    fn4Y: "تقديم اكبر مساعده ممكنه للطلاب , باعداد الابحاث العلميه و الاوراق القابله للنشر , سواء كان بغرض الترقيه او رصيد معرفي داعم لمسيره الطالب العلميه . تلبيه احتياجات الطلبه فيما يخص اعداد الاوراق العلميه اللازمه للتقديم للندوات و المؤتمرات و بحوث الترقيات في مختلف التخصصات , و توفيرها باللغتين العربيه و الانجليزيه بأفضل جوده و اعلى دقه .تجميع كل ما يحتاجه الطلاب من مساعده في مكان واحد و بأعلى جوده ممكنه .",
    fn4Y1:
      "نحن كيان و مؤسسه نهدف الى التغيير و البناء و تقديم الخدمات بأعلى المستويات , نهدف ان نكون في القمه دائما",
    Who_ff: "عائشة عبدالمجيد ",
    WhoT_ff:
      ".بكل قنواتها وفروعها والمسجلة قانونا NAA صاحبة مؤسسة",
    ff_0: "محامي استئناف عالي ومجلس دولة بنقابة المحامين المصرية.",
    ff_1: "عضو ب لجنة حقوق الإنسان والحريات باتحاد المحامين العرب.",
    ff_2: "عضو ب لجنة العلاقات الدولية باتحاد المحامين العرب.",
    ff_3: "كاتب ومؤلف باتحاد الأدباء والكتاب.",
    ff_4: "مؤلف وباحث باتحاد الأدباء العرب.",
    ff_5: "محامي أسرة وهجرة بدولة بريطانيا.",
    ff_6: "صحفي بالصحف والمجلات العربية.",
    ff_7: "مهتم بمجال أدب الطفل.",
    ff_8: " أنشأ جمعية the Eraser Islamophobia ببريطانيا لمحو أمية الدين ورهابه ومساعدة المحتاجين ",
    ff_9: "محامية وكاتبة تكتب في مختلف المجالات، الأدب والشعر بشتى أنواعه، إلا أنها تركز على الزجل والشعر العامي ذو الفلكلور المصري وكذلك الشعر المنثور، كما تكتب في مجال الأبحاث والدراسات الإسلامية والعلمية مدمجةً فيها اللمحة القانونية والنظرة القضائية والإجتماعية والثقافية، كما أن لها باعاً في بعض الفنون كالرسم، ولعب الجيتار، وكتابة كلمات الأغاني باللغتين العربية والإنجليزية.",
    ff_10:
      "ولأنها مؤمنة بأن التعليم في الصغر كالنقش على الحجر أخذت مسارها في الكتابة عن أدب الطفل فنشرت لها مقالة في استطلاع رأي في مجلة أقلام عربية بسلطنة عمان عن أدب الطفل، كما تعمل على كتابة أغاني الأطفال وترويجها في بعض المونولوجات والندوات الثقافية في لندن لتنشر للغرب الفكر العربي وثقافته.",
    ff_11:
      "حصلت على ليسانس شريعة وقانون من جامعة الأزهر بمصر. ",
    ff_12: "كما درست التعليم العالي في جامعة UCL في لندن.",
    ff_13:
      "كما حصلت على ما يزيد عن ٣١ دبلوما في مختلف المجالات من مجالات اللياقة البدنية والعقلية وعلم النفس والطهي والصحة البدنية والموسيقى، وغير ذلك.",
    ff_14:
      "اشتركت عام ٢٠١٨ في إحدى الفرق الموسيقية في بريطانيا لتدشين أغانيها الخاصة من ألحانها وكلماتها وغنائها بالإشتراك مع كورال الفرقة وباقي ملحنيها، لكنها قررت التوقف المفاجئ نظراً لبعض الظروف الخاصة.",
    ff_15:
      "تجيد فن الطهي، لكنها لا تحبه لذلك عرض عليها بعض الناشرين عمل كتاب عن المأكولات والأطباق المتنوعة، وطرق الطهي لكنه مازالت تفكر في الأمر.",
    ff_16:
      "بالرغم من المعاناه والحياة الصعبة التي عاشتها، وقد سبق وأن تحدثت عن حزء منها في مجلة الجديد ب لندن، إلا أنها تفوقت في مجال درستها وعملها.",
    ff_17:
      "فتخرجت عام ٢٠١٦ من كلية الشريعة والقانون بجامعة الأزهر الشريف مع مرتبة الشرف عن خمس سنواتٍ من التميز و الرقي، تمكنت فيها من الحصول على العديد من المنح والإمتيازات الدراسية،",
    ff_m: "حيث جاء على لسانها:",
    ff_f1:
      "السنة الأولى: إمتياز ومنحة مالية وشعبة خاصة ومنحة تويفل وكمبيوتر مجانية، لكنها تنازلت عن تلك المنح لظروفٍ خاصة. ",
    ff_f2: "السنة الثانية: منحة مالية.",
    ff_f3:
      "السنة الثالثة: إمتياز، منحة مالية، وتقدير خاص في مادة القانون الجنائي من الناحية النظرية و التطبيقة عن حل قضية قتل المتظاهرين بجدارة وشهادة من الدكتورة الفاضلة رباب عنتر، فضلا عن أخذها 100% في القانون الجنائي كمادة و100% أخرى عنه كقاعة بحث وتطبيق .",
    ff_f4:
      "السنة الرابعة: منحه مالية، كما كتبت بحث في هذا العام عن المالية والتشريع الضريبي والذي وصل إلى ما لايقل عن 500 صفحة وقد نالت به إعجاب دكتور المادة الدكتور محمد عبدالمعطي وكذلك قد كان لها السبق أيضا في أن تكون الطالبة الوحيدة التي تحصل في هذا العام على 99%في تلك المادة  (المالية والتشريع الضريبي )، فضلا عن إشادة المستشار أحمد موافي بها وببحثها في مادة قاعة بحث عقود مدنية عن حل قضية عن تقادم الأحكام.",
    ff_f5: "ولعلي أتذكر كلماته الدكتور أحمد موافي لي:",
    ff_f6: "أنتِ حد في عيلتك قاضي أو مستشار؟",
    ff_f7: "لأ يا دكتور والله. ",
    ff_f8: "مستحيل!!!، يعني دا مجهودك الشخصي؟",
    ff_f9: "ايوا والله محدش ساعدني.",
    ff_f10:
      "ما شاء الله لا قوة إلا بالله العلي العظيم، بس أنا بردو مش قادر أصدق غير إن قاضي هو ال كاتب الحل بتاع القضية.))",
    ff_f11:
      "ثم وقع لي على القضية وأخذ منها نسخة مصورة،“تبارك الله بالتوفيق، دكتور أحمد موافي”.",
    ff_f12:
      "السنة الخامسة: منحة مالية، ومنحة من هيئة التحكيم الدولي للإنضمام لها كعضو في أمريكا.",
    ff_f13:
      "فضلا عن المكافآت المادية والسمعة الطيبة والتقدير بين العديد من الأساتذة الجامعين والمستشارين.",
    ff_f14:
      " ولعلي أذكر منها قول الدكتورة الفاضلة زينب الدمرداش، رئيسة قسم أصول الفقه، مرجئةً الباقي تفصيلاً عندما أكتب قصة حياتي إن شاء الله تعالى:",
    ff_f15:
      "“قسم الأصول والفقه المقارن ينقصه مثلك يا عائشة، أتوقع لكِ مستقبل مزدهر إن شاء الله”.",
    ff_fx2:
      "وليس هذا فحسب حيث جاء على لسانها:' كنت أجيب عن أسئلة الإمتحان من أصول أمهات كتب القانون التي رجع اليها دكتور المادة نفسه مع ذكر رقم المجلد والباب والصفحة والترجيح والاختلاف والخلاف إن وجد......وغير ذلك الكثير وكذلك ما شاء الله لا قوة الا بالله العلي العظيم وأحمد الله على تلك النعم قد كنت حاملة لكتاب الله تعالى وهو القرآن الكريم في سن صغير وكنت أتلوه غيابا برقم السورة والصفحة والحزب والجزء والترتيب المكي والمدني والمتشابه وكذلك الامتحان التحريري كنت اكتب فيه القرآن بالتشكيل ورقم الحزب والصفحة واسم الصورة واين تقع، وقد كان ليا الشرف بإشادة الدكتور نادي الطيب والدكتور عبدالغني محمود رحمه الله وكنترول جميع الدفعات والسمعة الطيبة عند جميع الأساتذة بلا إستثناء وغير ذلك الكثير والكثير أحمد الله على فضله ونعمه، ولعلي أتذكر استدعاء رئيسية كنترول دفعة السنة الثانية لي، قائلة انتي بتغشي ولا ايه، فرديت لأ مش بحب اغش ولا اغشش، قالت إزاي كاتبه القرآن الكريم التحريري بالتشكيل ورقم الصفحة واسم السورة ومكي ولا مدني وسبب النزول، ووقت النزول وغيرها من التفاصيل، قلت لأ والله أنا اتلوه واحفظه هكذا  فقالت سنجتمع ٦ أساتذة ودكاترة ورؤساء الكنترول الآن ونمتحنك امتحان مفاجئ، فكان ردي مرجعتش يا دكتورة والقرآن يتفلت، قالت لا، الآن، قلت على بركة الله، لتفتح هي وغيرها من المجتمعين لامتحاني المصحف بطريقة عشوائية على اي صفحة تقع ايديهم عليها، ثم يسألوني فأجيب والحمدلله كان الجميع مزهول لاجابتي وقال لما لا تأخذي الإجازة فقلت لا أعرف كيف ولا أريدها فأنا احفظ حبا وليس للإجازة، ومنذ هذا اليوم تم تقريبي اكثر فأكثر من الدكاترة وعميدة الكلية بل ورئيس الجامعة كلها، كما أنني أجيد قراءة القرآن بالقراءات العشر ومتن الجزرية ومتن تحفة الأطفال والحمدلله'",
    ff_f2_1:
      "عام ٢٠١٨ نشرت لها مقالة في إستطلاع رأي في مجلة أقلام عربية عن أدب الطفل بين الماضي والحاضر ومدى تأثره بالثقافات والعصور.",
    ff_f2_2:
      "كما نشرت لها بعض القصائد في جريدة عمان اليومية. ",
    ff_f2_3:
      "عام ٢٠١٩ أُجريَّ معها حواراً في ال BBC عربية مع الدكتور فؤاد عبدالرازق في عالم الكتب عن كتبها التي تم نشرها مع دار الحكمة لندن، ",
    ff_f2_3_1: "ذات أشعار وملذات.(ديوان شعر عربي).",
    ff_f2_3_2: "الخطيئة.(رواية).",
    ff_f2_3_3:
      "وكذلك مع دار المعتز الأردن، فلهدني في صدري.(كتاب بحث مرفق ب سي دي).",
    ff_f2_4:
      "نشرت أول ديوان شعر لها عام ٢٠١٨، ثم أول رواية عام ٢٠١٩.",
    ff_f2_5:
      "سجلت أول أغنية أجنبية لها من كلماتها وألحانها وعزفها وتوزيعها بعنوان I'm falling in love/ eni aqa'a fi al hobe. ",
    ff_f2_6:
      "أنشأت عام ٢٠٢٠ شركة Nefertitiaishaabdelmaguid والتي تعرف باسم NAA للأزياء والفاشون، ثم توقف نشاط الشركة مؤقتاً.",
    ff_f2_7: "أنشأت دار نشر إلكتروني عام ٢٠٢١.",
    ff_f2_8:
      "عام ٢٠٢٢ أنشأت مؤسسة وكيان NAA بكل فروعه وقنواته ومجالاته.",
    ff_f2_9:
      "درست البيزنيس وريادة الأعمال في جامعات بريطانيا.",
    ff_f2_10:
      "ساعدت الكثير من الجمعيات والجامعات والمنظمات في كيفية بناء مدير وكيفية بدء مشروع، وكيفية إدارة الوقت وتوزيع الجهد.",
    ff_f2_11:
      "أجرت العديد من الندوات والحفلات لدعم المرأة وتوعية الآباء في بناء الأبناء.",
    ff_f2_12:
      "حصلت على الدراسات العليا في القانون بدولة بريطانيا. ",
    ff_f2_13:
      "الآن بصدد حصولها على درجة الماجستير في القانون بدولة بريطانيا لتتحول من كونها محامي إلى أن تكون قاضي.",
    ff_f2_14:
      "تواصلت مع الملكة إليزابيث لنشر ابحاثها وكذلك لتهنئتها ببعض المناسبات، كما تواصلت مع رئيس الوزراء بوريس جونسون، والأمير وليام وزوحته كيت، وقد كان كلام أصدقائي ومعارفي أن هذا التواصل لا طائل منه وان الملكة واسرتها لن يردوا، ولكن على العكس من ذلك جاء الرد من الملكة وأنها سعيده وكانت تقرأ الشعر الذي كتبته لها هي وأسرتها وفخورين بي، ثم توالت ردود وخطابات أخرى ثم خطابات من الأمير وليام وزوجته كيت ثم بوريس جونسون. غاية الحديث أن الباب دوما مفتوح فقط السعي مطلوب.",
    ff_f2_15:
      "وكل هذا نبذة مختصره عن حياة عائشة عبدالمجيد العلمية والمهنية، وأما عن حياتها الشخصية والعاطفية فيوجد بها الكثير.",
    ff_f2_16:
      "إذا كنت تريد أن تحجز لتتحدث مع مؤسس الشركة عائشة عبدالمجيد مباشرة، أو تريد مقابلتها شخصيا فقط راسلنا، على أنه نظرا لضيق الوقت وكثرة المواعيد فالمدة التي سيتم حجزها من قبلك سيكون لها مبلغ رمزي يتم دفعه مقدما حسب نوع الوسيله، وسيتم تحديد مبلغ اخر حسب نوع الوسيلة المراده يتم تقديره من قبلنا وذلك بناء على ما إذا كان المتصل شخص أو شركة أو برنامج.",
    ff_f2_17:
      "ففي كل الأحوال هناك رسوم ١٠٠ جنبة يتم دفعها مقدما سواء كان التواصل عن طريق واتس أو إتصال هاتفي أو مقابله رسمية أو عبر الإيميل أو عبر قناة تلفزيونية، وذلك لعدم الإزعاج وضمانا للجدية واحتراما للمواعيد، وهي غير قابلة للاسترجاع تمت الموافقه على التواصل او تم الرفض، لكن في حالة الموافقه يتم خصمها من تكلفة الخدمة فيما بعد، وتحدد تكلفة الخدمه بعد الموافقه على التواصل من مؤسس الشركة عائشة عبدالمجيد حسبما يتاح وقته ووفقا لجدول مواعيده الزمنية.",
    ff_f2_18:
      "على أنه في حالة الإخلال بمواعيد الإتصال من قبل المتصل فسيضيع عليه كامل التكلفه ويضيع عليه التواصل أيضا.",

    conFounder: "ﺗﻮاﺻﻞ ﻣﻊ اﻟﻤﺆﺳﺲ:",
    gallery: "معرض الصور",
  },
};

/*
	main functionality
*/

langChangers.forEach((lang) => {
  lang.addEventListener("click", () => {
    switchColors(langChangers, lang);

    Changer(lang.id);
  });
});

const Changer = (lang) => {
  langWords(lang);

  langBtns(lang);
  langInputs(lang);

  if (lang === "ar") {
    arCss();
    document.body.classList.add("arabic");
  } else {
    enCss();
    document.body.classList.remove("arabic");
  }

  if (document.querySelector("span.bg-words"))
    bgWords(lang);

  if (document.getElementById("welcome")) welcomeFont(lang);

  if (imgFields) imgSrcs(lang);

  // toggle ar class

  toggleArClass(
    "section.donate-methods",
    "div.parags",
    ".writings",
    ".channelsBanner .container .channelsContent",
    '[data-text="conFounder"]',
    ".connect",
    '[data-text="gallery"]',
    '[data-text="inp_msg"]',
    '[data-text="inp_Vpost]"',
    '[data-text="PrevPosts"]',
    ".swp",
    ".para"
  );
};

/*
	change language
*/

const langWords = (lang) => {
  textFields.forEach((text) => {
    text.textContent = language[lang][text.id];
  });
};

const langBtns = (lang) => {
  textFields.forEach((btn) => {
    const id = btn.dataset.text;

    if (id) btn.textContent = language[lang][id];
  });

  if (document.querySelector('[data-text="inp_Vpost"]'))
    document.querySelector(
      '[data-text="inp_Vpost"]'
    ).value =
      language[lang][
        document.querySelector(
          '[data-text="inp_Vpost"]'
        ).dataset.text
      ];
};

const langInputs = (lang) => {
  document
    .querySelectorAll("input[data-text]")
    .forEach((text) => {
      text.placeholder = language[lang][text.id];
    });

  if (document.getElementById("submit"))
    document.getElementById("submit").value =
      language[lang][document.getElementById("submit").id];

  document
    .querySelectorAll("textarea[data-text]")
    .forEach((text) => {
      text.placeholder = language[lang][text.id];
    });
};

/*
	css changers
*/
const arCss = () => {
  // header dir
  changeDir("header", "rtl");

  // banner dir
  if (
    document.querySelector(
      ".channelsBanner .container .channelsContent"
    )
  ) {
    document
      .querySelectorAll(".channelsBanner img.bgGlobal")
      .forEach((img) => img.classList.add("ar"));
  }

  // contact placeholder
  if (document.getElementById("contactInp")) {
    document
      .getElementById("contactInp")
      .setAttribute("placeholder", "أكتب شيئا هنا...");
  }
  if (
    document.querySelector('textarea[data-text="inp_msg"]')
  )
    document
      .querySelector('textarea[data-text="inp_msg"]')
      .setAttribute("placeholder", "أكتب شيئا هنا...");

  //change input dir
  changeDir("contactInp", "rtl");

  //change body font
  document
    .querySelector(":root")
    .style.setProperty(
      "--fo-family",
      'GESS, -apple-system, BlinkMacSystemFont,cursive, "Courier New", Courier, monospace'
    );
};

const enCss = () => {
  // header dir
  changeDir("header", "ltr");

  // banner dir
  if (
    document.querySelector(
      ".channelsBanner .container .channelsContent"
    )
  ) {
    document
      .querySelectorAll(".channelsBanner img.bgGlobal")
      .forEach((img) => img.classList.remove("ar"));
  }

  // contact placeholder
  if (document.getElementById("contactInp"))
    document
      .getElementById("contactInp")
      .setAttribute(
        "placeholder",
        "Type your message here..."
      );

  if (
    document.querySelector('textarea[data-text="inp_msg"]')
  )
    document
      .querySelector('textarea[data-text="inp_msg"]')
      .setAttribute(
        "placeholder",
        "Type your message here..."
      );

  //change input dir
  changeDir("contactInp", "ltr");

  //change body font
  document
    .querySelector(":root")
    .style.setProperty(
      "--fo-family",
      'mmrtext, -apple-system, BlinkMacSystemFont,cursive, "Courier New", Courier, monospace'
    );
};

const bgWords = (lang) => {
  let font = "";
  if (lang === "ar") font = "hacen";
  if (lang === "en") font = "euroLight";

  document.querySelector(
    "span.bg-words"
  ).style = `font-family: ${font}, sans-serif; font-size: 52px`;
};

const welcomeFont = (lang) => {
  let font = "";
  if (lang === "ar") font = "bustan";
  if (lang === "en") font = "harrington";

  document.getElementById(
    "welcome"
  ).style = `font-family: ${font}, sans-serif; font-size: 50px`;
};

const imgSrcs = (lang) => {
  imgFields.forEach((img) => {
    img.src =
      language[lang][img.id] ||
      language[lang][img.dataset.img];
  });
};

const toggleArClass = (...classes) => {
  classes.forEach((c) => {
    if (document.querySelector(c)) {
      if (document.body.classList.contains("arabic"))
        document.querySelector(c).classList.add("ar");
      else document.querySelector(c).classList.remove("ar");
    }
  });
};

/*
	general utilies
*/

const switchColors = (langs, lang) => {
  const txtClr = getComputedStyle(
      document.querySelector(":root")
    ).getPropertyValue("--txt-clr"),
    themeClr = getComputedStyle(
      document.querySelector(":root")
    ).getPropertyValue("--theme-clr");

  langs.forEach((l) => {
    l.style.color = txtClr;
  });

  lang.style.color = themeClr;
};

/*
	helper functions
*/
const changeDir = (elementId, dir) => {
  if (document.getElementById(elementId))
    document.getElementById(
      elementId
    ).style = `direction: ${dir}`;
};
//# sourceMappingURL=en-ar.js.map
