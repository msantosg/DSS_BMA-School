<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">  
</head>
<body>
<div id="login">
        <h3 class="text-center text-danger pt-5" style="text-shadow: 0.2em 0.2em 0.3em black">BMA-School Sistema Escolar</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <br> 
                        <form id="login-form" class="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field()}}
							<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
								<label for="username" class="text-info">Usuario:</label>
								<input class="form-control" placeholder="Usuario..." 
								type="text" name="username" >
							{!! $errors->first('username', '<span class="text-danger">:message</span>')!!}
							</div>
							<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
								<label for="password" class="text-info">Contraseña:</label>
								<input class="form-control" placeholder="Contraseña..."
								type="password" name="password" >
								{!! $errors->first('password', '<span class="text-danger">:message</span>')!!}
							</div>
							<button class="btn btn-info">Acceder</button>
						</form>
						<br>
						@if(session('error'))
			              	<div class="alert alert-danger alert-dismissable">
			                    <button type="button" class="close" data-dismiss="alert">&times;</button>
			                    <strong>¡Error!</strong> {{session('error')}}
			                </div>
			            @elseif(session('info'))
			            	<div class="alert alert-success alert-dismissable">
			                    <button type="button" class="close" data-dismiss="alert">&times;</button>
			                    <strong>¡Información!</strong> {{session('info')}}
			                </div>
			        	@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.4.1.js')}}"></script>
    <script src="{{ asset('js/bootstrap.js')}}"></script>
	<script src="{{ asset('js/npm.js')}}"></script>
	<script>
		$(document).ready(function() {
			setTimeout(function() {
				$(".alert").fadeOut(1500);
			},3000);	
		});
	</script>
</body>
</html>