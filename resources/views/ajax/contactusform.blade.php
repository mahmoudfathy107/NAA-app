
@section('content')
<style>
    body {background-color:#f7f7f7;}
</style>
<script>
    var wpwlOptions = {style:"plain"}
</script>
        {{-- <p class="grey-text mb-2"   id="email">email={{$email}}</p>
        <p class="grey-text mb-2"  id="message">message={{$message}}</p>
        <p class="grey-text mb-2"  id="workWithUs">workWithUs={{$workWithUs}}</p>
        <p class="grey-text mb-2"  id="getLegalAdvice">getLegalAdvice={{$getLegalAdvice}}</p>
        <p class="grey-text mb-2"  id="advirtiseWithUs">advirtiseWithUs={{$advirtiseWithUs}}</p>
        <p class="grey-text mb-2"  id="publishWithUs">publishWithUs={{$publishWithUs}}</p>
        <p class="grey-text mb-2"  id="takePicture">takePicture={{$takePicture}}</p>
        <p class="grey-text mb-2"  id="Donate">Donate={{$Donate}}</p>
        <p class="grey-text mb-2"  id="WatchEpisodes">WatchEpisodes={{$WatchEpisodes}}</p>
        <p class="grey-text mb-2"  id="butAbook">butAbook={{$butAbook}}</p>
        <p class="grey-text mb-2"  id="translate">translate={{$translate}}</p>
        <p class="grey-text mb-2"  id="other">other={{$other}}</p> --}}
<script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$responseData['id']}}"></script>
<form action="{{route('NAA-ContactUS.create', [$email,$message,$workWithUs,$getLegalAdvice,$advirtiseWithUs,$publishWithUs,$takePicture,$Donate,$WatchEpisodes,$butAbook,$translate, $other] )}}" class="paymentWidgets" data-brands="VISA MASTER MADA APPLEPAY GOOGLEPAY HIPERCARD MEEZA UNIONPAY"></form>
@endsection

