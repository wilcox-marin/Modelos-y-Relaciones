<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title-page')</title>
	<link rel="stylesheet" href="{{asset('/css/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{asset('/css/bootstrap-reboot.css')}}">
	<link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
</head>
<body>
	<div id="logo" style="width: 50%;" class="m-r m-l m-auto">
		<img src="{{asset('/image/logo.jpg')}}" alt="">
	</div>
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <ul class="navbar-nav m-r m-l m-auto">
		      <li class="nav-item ">
		        <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Inicio <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> Tutotriales</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><i class="fa fa-book" aria-hidden="true"></i> Libros</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><i class="fa fa-address-card" aria-hidden="true"></i> Registrarse</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><i class="fa fa-users" aria-hidden="true"></i> Login</a>
		      </li>
		    </ul>
		  </div>
	</nav>

	<div class="container-fluid" style="background: #E1DFDF;">
	  <div class="row">


	 	<!--post-->
	 	<div class="col-lg-8 mt-2" >
	 		@yield('posts')	
	 	</div>
	

	 	</div>
	 	<!-- end post-->

	 	<!--sidebar-->
	 	<div class="col-lg-4 mt-2">
	 		<div style="background: #fff;">
		 		<div class="pt-4 text-center">
		 				<h5 class="pb-1">Tutoriales más visto</h5>
		 				<hr>
		 			<div class="card mb-3" style="border: none;">
					  <a href="#"><img class="card-img-top" src="https://udemy-images.udemy.com/course/750x422/450908_41c3_12.jpg" alt="Card image cap" height="200"></a>
					  <div class="card-body">
					    <a href="#" style="text-decoration: none;"><h4 class="card-title">Curso de Laravel</h4></a>
					  </div>
					</div>
					<div class="card mb-3" style="border: none;">
					  <a href="#"><img class="card-img-top" src="http://blog.saidur.me/wp-content/uploads/2015/03/PHP-Logo-Wallpaper.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					     <a href="#" style="text-decoration: none;"><h4 class="card-title">Curso de Php</h4></a>
					  </div>
					</div>
					<div class="card mb-3" style="border: none;">
					  <a href="#"><img class="card-img-top" src="https://www.python.org/static/community_logos/python-logo-master-v3-TM.png" alt="Card image cap"></a>
					  <div class="card-body">
					     <a href="#" style="text-decoration: none;"><h4 class="card-title">Curso de Python</h4></a>
					  </div>
					</div>
					<div class="card mb-3" style="border: none; ">
					  <a href="#"><img class="card-img-top" src="http://thatcsharpguy.com/postimages//tv/xamarin/featured.png" alt="Card image cap"></a>
					  <div class="card-body">
					     <a href="#" style="text-decoration: none;"><h4 class="card-title">Curso de Xamarin</h4></a>
					  </div>
					</div>
					
		 		</div>
		 		<div class="text-center pt-4">
		 			<h5 class="pb-2">Ultimos Libros tutoriales</h5>
		 			<hr>
		 			<div class="card mb-3" style="border: none;">
					  <a href="#"><img class="card-img-top" src="http://www.micro-tex.com/wp-content/uploads/2015/04/redes-lan.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					    <a><h4 class="card-title">Redes</h4></a>
					    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					  </div>
					</div>
					<div class="card mb-3" style="border: none;">
					  <a href="#"><img class="card-img-top" src="http://1156853783.rsc.cdn77.org/wp-content/uploads/2017/02/5-sencillas-maneras-de-mejorar-el-SEO-de-tu-sitio-web.png" alt="Card image cap"></a>
					  <div class="card-body">
					    <a><h4 class="card-title">SEO</h4></a>
					    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					  </div>
					</div>
					<div class="card mb-3" style="border: none;">
					  <a href="#"><img class="card-img-top" src="https://images.locanto.us/1500335376/MANTENIMIENTO-BASICO-DE-PC_1.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					    <a><h4 class="card-title">Mantenimiento Pc</h4></a>
					    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					  </div>
					</div>
					<div class="card mb-3" style="border: none;">
					  <a><img class="card-img-top" src="https://udemy-images.udemy.com/course/750x422/17503_7fa8_9.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					    <a href="#"><h4 class="card-title">C++</h4></a>
					    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					  </div>
					</div>
					<div class="card mb-3" style="border: none;">
					  <a><img class="card-img-top" src="https://1.bp.blogspot.com/-XLan_fHLysw/V4jGGZUTqDI/AAAAAAAAHyk/5qFImljEiSED6MBZ8-DY7JpgtLrkhurjwCLcB/s1600/seguridad_informatica.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					    <a href="#"><h4 class="card-title">Seguridad Informatica</h4></a>
					    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					  </div>
					</div>
				</div>
	 		</div>	
	 	</div>
	 	<!--end sidebar-->
	 </div>
	</div>
<footer style="height: 100px;" class="pt-5">
	<p class="text-center">Tutoriales y Blog-<i class="fa fa-copyright" aria-hidden="true"></i>2017</p>
</footer>	
</body>
<script src="https://use.fontawesome.com/36acc64f75.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="{{asset('/js/bootstrap.js')}}"></script>
<script src="{{asset('/js/bootstrap.bundle.js')}}"></script>
</html>