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
	
	{!! Form::open(array('route' => 'sessions.store', 'class'=>'form-horizontal' )) !!}
	
		<div style="text-align:center">
			<header style="font-family: 'Quicksand', sans-serif"><h3>Mails & Distribution</h3><br>Admin Portal</header>
		</div>
		<div style="text-align:center">
				@if(count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach 
						</ul>
					</div>
				@endif
			</div>
		<div class="form-group" style="text-align:center">
			{!! Form::label("username", "Username") !!}
			
			{!! Form::text("username", null) !!}
		</div>

		<div class="form-group" style="text-align:center">
			{!! Form::label("password", "Password") !!}
			
			{!! Form::password("password", null) !!}
		</div>
		<br>
		<div class="form-group">
			{!! Form::submit("submit" , ['class' => 'btn btn-info']) !!}
		</div>
	{!! Form::close() !!}
	
	
</body>
</html>
