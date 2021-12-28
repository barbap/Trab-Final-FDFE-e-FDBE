<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('modal')
    </div>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    const mp = new MercadoPago('PUBLIC_KEY', {
        locale: 'pt-BR'
    });

     const cardForm = mp.cardForm({
         amount: '20',
         autoMount: true,
         processingMode: 'aggregator',
         form: {
             id: 'form-checkout',
             cardholderName: {
                 id: 'form-checkout__cardholderName',
                 placeholder: 'Nome no Cartão',
             },
             cardholderEmail: {
                 id: 'form-checkout__cardholderEmail',
                 placeholder: 'Email',
             },
             cardNumber: {
                 id: 'form-checkout__cardNumber',
                 placeholder: 'Número do Cartão',
             },
              cardExpirationMonth: {
                 id: 'form-checkout__cardExpirationMonth',
                 placeholder: 'Validade Mês'
             },
             cardExpirationYear: {
                 id: 'form-checkout__cardExpirationYear',
                 placeholder: 'Validade Ano'
             },
             securityCode: {
                 id: 'form-checkout__securityCode',
                 placeholder: 'CVV',
             },
             installments: {
                 id: 'form-checkout__installments',
                 placeholder: 'Tempo da assinatura'
             },
             identificationType: {
                 id: 'form-checkout__identificationType',
                 placeholder: 'Tipo do Documento'
             },
             identificationNumber: {
                 id: 'form-checkout__identificationNumber',
                 placeholder: 'Número do Documento'
             },
             issuer: {
                 id: 'form-checkout__issuer',
                 placeholder: 'Emissor'
             }
         },
         callbacks: {
            onFormMounted: error => {
                if (error) return console.log('Form Mounted handling error: ', error)
                console.log('Form mounted')
            },
            onFormUnmounted: error => {
                if (error) return console.log('Form Unmounted handling error: ', error)
                console.log('Form unmounted')
            },
            onIdentificationTypesReceived: (error, identificationTypes) => {
                if (error) return console.log('identificationTypes handling error: ', error)
                console.log('Identification types available: ', identificationTypes)
            },
            onPaymentMethodsReceived: (error, paymentMethods) => {
                if (error) return console.log('paymentMethods handling error: ', error)
                console.log('Payment Methods available: ', paymentMethods)
            },
            onIssuersReceived: (error, issuers) => {
                if (error) return console.log('issuers handling error: ', error)
                console.log('Issuers available: ', issuers)
            },
            onInstallmentsReceived: (error, installments) => {
                if (error) return console.log('installments handling error: ', error)
                console.log('Installments available: ', installments)
            },
            onCardTokenReceived: (error, token) => {
                if (error) return console.log('Token handling error: ', error)
                console.log('Token available: ', token)
            },
            onSubmit: (event) => {
                event.preventDefault();
                const cardData = cardForm.getCardFormData();
                console.log('CardForm data available: ', cardData)
            },
            onFetching:(resource) => {
                console.log('Fetching resource: ', resource)

                // Animate progress bar
                const progressBar = document.querySelector('.progress-bar')
                progressBar.removeAttribute('value')

                return () => {
                    progressBar.setAttribute('value', '0')
                }
            },
        }
     })
 </script>
</body>
</html>
