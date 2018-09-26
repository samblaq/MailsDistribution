<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Manager Login</title>
  
   {{--  <link rel="stylesheet" href="css/style.css">  --}}
   <link rel="stylesheet" href="{{ asset('css/min.css') }}">
   <link href="https://fonts.googleapis.com/css?family=Abel|Fjalla+One|PT+Sans+Narrow|Playfair+Display|Quicksand" rel="stylesheet">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
 
</head>

<body style="background:url('wallpaper.jpg') no-repeat center center fixed; background-size:cover;">
	@if(isset(Auth::user()->username))
		<script>window.location="/login";</script>
	@endif

	@if($message = Session::get('error'))
		<div class="alert alert-danger alert-block">
			<button type="button" class="close" data-dismiss="alert">x</button>
			<strong>{{ $message }}</strong>
		</div>
	@endif

	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
<form method="POST" action="{{ url('/login') }}">
	<div style="text-align:center;">
	  
	  <header style="font-family: 'Quicksand', sans-serif;"><h3>Mails & Distribution</h3><br>Admin Portal</header>
	  <label style="font-family: 'Quicksand', sans-serif;">Username <span> *</span></label>
	  <input type="text" name="username" />
	  <div class="help" style="font-family: 'Quicksand', sans-serif;">At least 6 character</div>
	  <label style="font-family: 'Quicksand', sans-serif;">Password <span> *</span></label>
	  <input name="password" type="password"  />
	  <div class="help" style="font-family: 'Quicksand', sans-serif;"> upper and lowercase lettes  well</div>
	
	  <div style="text-align:center;" style="font-family: 'Quicksand', sans-serif;">
		    <button name="Login" type="submit" value="Login" style="font-family: 'Quicksand', sans-serif;">Login</button>
		</div>
	</div>
	<br>
</form>  
</body>
</html>
