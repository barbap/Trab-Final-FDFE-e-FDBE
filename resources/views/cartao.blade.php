@extends('layouts.modalcartao')

@section('modal')
<modal>
    <form id="form-checkout">
        <input type="text" name="cardNumber" id="form-checkout__cardNumber" class="form-control my-2" />
        <input type="text" name="cardExpirationMonth" id="form-checkout__cardExpirationMonth" class="form-control my-2" />
        <input type="text" name="cardExpirationYear" id="form-checkout__cardExpirationYear" class="form-control my-2" />
        <input type="text" name="cardholderName" id="form-checkout__cardholderName" class="form-control my-2" />
        <input type="email" name="cardholderEmail" id="form-checkout__cardholderEmail" class="form-control my-2" />
        <input type="text" name="securityCode" id="form-checkout__securityCode" class="form-control my-2" />
        <select name="issuer" id="form-checkout__issuer" class="form-control my-2"></select>
        <select name="identificationType" id="form-checkout__identificationType" class="form-control my-2"></select>
        <input type="text" name="identificationNumber" id="form-checkout__identificationNumber" class="form-control my-2" />
        <select name="installments" id="form-checkout__installments" class="form-control my-2" ></select>
        <button type="submit" id="form-checkout__submit" class="btn btn-block bg-main">Cadastrar</button>
        <progress value="0" class="progress-bar d-none">loading...</progress>
    </form>
</modal>
@endsection