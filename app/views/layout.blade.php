<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ URL::asset('assets/ico/favicon.ico') }}" type="image/x-icon">
    <!-- <link id="page_favicon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAByUlEQVQ4T52TWygEURjH/zPL7iIS2Wybu5LbC9tSco2QldzKvVyKsvvgUh6QlCXlzbsi3iUv8io8EV4otRLJNeS2MzszzjnbIrtt234vM3PmO7/vf/7n+ziQMCdZVzkO7fTd31AUrG3aFzu4QDa7i1AIV5tsVfyt6i3PK0AhaJ7nYSrLYnt2t47Aqzhw5Jz/gwFIPvkJksQjNi4a+RXZ0CfqIInST/7d9SP2t09wbb+Hq4ALRjywKDpDFAxJOmi0alye3+Du6gmC4ER4ZCi0IRrcXD6w5MQ0PeJT9Xh9fiegW7w8vLkAPK+CUxShClIxmZIks2d1WwF6xuvRlD7M1NFQZAUcqR6sDoLgEOHhgZPItthasDS3jrIGEwM0pA0xyW7IXx88ACKRbp1txfLCBgrNuegcMYOuOT4cGCif8TDSN6AmB32TjegrnEJOSQa6x+rQlTfBDHeHT0BRrRG95AjNmaMQvgSsHcyjv3SaKfILUEwALhNHiLESlvdmYKmaxdenEBhgZd+GwUqbb4DklGEqz8LhzikMCTEIiwjF6YEdsiwjw5iCs+MLKNJv93sdJnrXtHVph/4Neu9qTfDPEhsm+hXIRLrH+RudntxKPQ+YvgAAAABJRU5ErkJggg==" rel="icon" type="image/x-icon"> -->

    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles -->
    {{ HTML::style('css/style.css') }}

    <title>Directorio de grupos de trabajo | GeekCards </title>
    <!-- <title>Users Collection</title> -->
    
</head>
<body>
    <!-- NAVBAR
    ================================================== -->
    @include('includes.header')

    <!-- PAGE
    ================================================== -->
    @yield('content')

    <!-- FOOTER
    ================================================== -->
    @include('includes.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/docs.min.js') }}
</body>
</html>