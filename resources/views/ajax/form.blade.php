
@section('content')
<style>
    body {background-color:#f7f7f7;}
</style>
<script>
    var wpwlOptions = {style:"plain"}
</script>
<script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$responseData['id']}}"></script>
<form action="{{route('NAA-Index.create', $message)}}" class="paymentWidgets" data-brands="VISA MASTER MADA APPLEPAY GOOGLEPAY HIPERCARD MEEZA UNIONPAY"></form>
@endsection

