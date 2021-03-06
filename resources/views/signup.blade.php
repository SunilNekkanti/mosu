<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mosu.IO</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ url('bower_components/normalize.css/normalize.css') }}">
	<link rel="stylesheet" href="{{ url('css/app.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/react/15.1.0/react.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/react/15.1.0/react-dom.min.js"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/6.1.19/browser.min.js"></script> -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js"></script>
</head>
<body>
	<div id="auth"></div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
	<!-- Bootstrap file for the app, not for Twitter Bootstrap -->
	<script src="{{ url('js/bootstrap.js') }}"></script>

	<!-- React Stuff -->
	<script type="text/babel" src="{{ url('js/react/Introduction.js') }}"></script>
	<script type="text/babel" src="{{ url('js/react/utils/Alert.js') }}"></script>
	<script type="text/babel" src="{{ url('js/react/auth/Navbar.js') }}"></script>
	<script type="text/babel" src="{{ url('js/react/auth/SignUp.js') }}"></script>
	<script type="text/babel" src="{{ url('js/react/auth/Login.js') }}"></script>
	<script type="text/babel" src="{{ url('js/react/auth/Form.js') }}"></script>
	<script type="text/babel" src="{{ url('js/react/auth/Auth.js') }}"></script>
	<script src="https://use.typekit.net/mqi8rfr.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
</body>
</html>