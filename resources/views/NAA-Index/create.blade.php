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

        <p class="grey-text mb-2" hidden id="message">message={{$message}}</p>
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
          <h2 class="center" data-text>To ensure commitment and seriousness in communication and not to waste time, please pay $3 for the message costs.
          </h2>
          <div class="btns">
            <a class="specBtn" href="{{route('NAA-Index.create', $message)}}" id="contactBtn" data-text="contact">Pay Now</a>
        </div>
        <div class="mt-2" id="showPayForm"></div>
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
                    url: "{{route('payment')}}",
                    data: {
                        message: $('#message').text(),
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
