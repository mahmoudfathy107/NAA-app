<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <meta
      name="description"
      content="NAA World is The website is Business website, offering services in various filed of law and kids entertainment areas"
    />
    <meta
      name="keywords"
      content="NAA World, business website, website, page, landing, JavaScript"
    />
    <meta name="author" content="Fayy" />
    <meta name="publisher" content="Fayy" />
    <meta name="copyright" content="Fayy" />
    <meta name="page-topic" content="Business" />
    <meta
      name="page-type"
      content="Business, kids entertainment"
    />
    <meta
      name="audience"
      content="Kids, Lawyer, judges, Tech recruiters, Programmers, Web Designers"
    />
    <meta name="robots" content="index, follow" />
    <meta property="og:locale" content="ar_EGY" />
    <meta property="og:type" content="website" />
    <meta property="og:title" />
    <meta
      property="og:description"
      content="NAA World is The website is Business website, offering services in various filed of law and kids entertainment areas"
    />
    <meta
      property="og:NAA World"
      content="NAA World: The website is Business website, offering services in various filed of law and kids entertainment areas"
    />
    <meta
      name="twitter:card"
      content="summary_large_image"
    />
    <meta
      name="twitter:title"
      content="NAA World Is a Online Portfolio WebPage | MuhammedFayad"
    />
    <meta
      name="twitter:description"
      content="NAA World is The website is Business website, offering services in various filed of law and kids entertainment areas"
    />
    <meta name="theme-color" content="#ff6f8b" />
    <title>NAA World</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">


    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="icon" href="{{ asset('assets/images/all_pages/logo.webp') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('includes.header')
            @yield('content')
    @include('includes.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/swiper.js')}}"></script>
    <script src="{{ asset('js/welcomeGif.js')}}"></script>
    <script src="{{ asset('js/en-ar.js')}}"></script>
    <script src="{{ asset('js/reactBtns.js')}}"></script>
    <script src="{{ asset('js/localstorage.js') }}"> </script>
    <script src="{{ asset('js/contextMenu.js') }}"> </script>
    <script src="{{ asset('js/welcomeGif.js') }}"></script>
    <script src="{{ asset('js/swiper-narrow.js') }}"></script>
    @yield('scripts')
</body>
</html>
