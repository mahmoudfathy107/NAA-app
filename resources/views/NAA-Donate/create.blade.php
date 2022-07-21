@extends('layouts.app')

@section('content')
<title>NAA World</title>
<link rel="icon" href="{{ asset('assets/images/all_pages/logo.webp') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  </head>
  <body>
    <section class="home">
        <div class="channelsBanner">
            <img class="bgGlobal" src="{{ asset('assets/images/all_pages/newBgs4.webp') }}" alt="background">
            <img class="bgGlobal" src="{{ asset('assets/images/all_pages/newBgs1.webp') }}" alt="background">
            <img class="img-res" id="banner" src="{{ asset('assets/images/home_content/naa world2-01.webp') }}" alt="eng banner" data-img>
        </div>
      <div class="welcome">
        <p class="grey-text mb-2" hidden id="email">email={{$email}}</p>
        <p class="grey-text mb-2" hidden id="message">message={{$message}}</p>


        <input type="number" hidden id="donationAmount" name="donationAmount" value="{{$donationAmount}}"/>
        <p class="grey-text mb-2" hidden id="workWithUs">workWithUs={{$workWithUs}}</p>
        <p class="grey-text mb-2" hidden id="getLegalAdvice">getLegalAdvice={{$getLegalAdvice}}</p>
        <p class="grey-text mb-2" hidden id="advirtiseWithUs">advirtiseWithUs={{$advirtiseWithUs}}</p>
        <p class="grey-text mb-2" hidden id="publishWithUs">publishWithUs={{$publishWithUs}}</p>
        <p class="grey-text mb-2" hidden id="takePicture">takePicture={{$takePicture}}</p>
        <p class="grey-text mb-2" hidden id="Donate">Donate={{$Donate}}</p>
        <p class="grey-text mb-2" hidden id="WatchEpisodes">WatchEpisodes={{$WatchEpisodes}}</p>
        <p class="grey-text mb-2" hidden id="butAbook">butAbook={{$butAbook}}</p>
        <p class="grey-text mb-2" hidden id="translate">translate={{$translate}}</p>
        <p class="grey-text mb-2" hidden id="other">other={{$other}}</p>


        <div class="container">
        @if(isset($success))
        <div class="alert alert-success text-center">
            Payment completed successfully & Your Message Sent Successfully ...
        </div>
        @endif

        @if(isset($fail))
            <div class="alert alert-danger text-center">
                Payment failed & Your Message Not Sent ...
            </div>
        @endif
          <h2 class="center" data-text>To ensure commitment and seriousness in communication and not to waste time, please Donate.
          </h2>
          <div class="btns">
            <a class="specBtn" href="{{route('NAA-Donate.create', [$email,$message,$donationAmount,$workWithUs,$getLegalAdvice,$publishWithUs,$takePicture,$Donate,$WatchEpisodes,$butAbook,$translate, $other])}}" id="contactBtn" data-text="contact">Donate Now</a>
        </div>
        <div class="mt-2" id="showPayForm">

        </div>
        </div>
      </div>
    </section>


    @endsection

    @section('scripts')

        <script>
            $(document).on('click', '#contactBtn', function (e) {
                  e.preventDefault();
                 $.ajax({
                    type: 'get',
                    url: "{{route('donatePayment' )}}",
                    data: {
                        email: $('#email').text(),
                        message: $('#message').text(),
                        donationAmount: $('#donationAmount').val(),
                        workWithUs: $('#workWithUs').text(),
                        getLegalAdvice: $('#getLegalAdvice').text(),
                        advirtiseWithUs: $('#advirtiseWithUs').text(),
                        publishWithUs: $('#publishWithUs').text(),
                        takePicture: $('#takePicture').text(),
                        Donate: $('#Donate').text(),
                        WatchEpisodes: $('#WatchEpisodes').text(),
                        butAbook: $('#butAbook').text(),
                        translate: $('#translate').text(),
                        other: $('#other').text(),
                    },
                    success: function (data) {
                        if (data.status == true) {
                            $('#showPayForm').empty().html(data.content);
                        } else {
                         }
                    }, error: function (reject) {
                    }
                });
            });
        </script>
    @stop
