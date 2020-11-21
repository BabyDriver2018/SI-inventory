<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Restaurant La Sazón del Pato</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico" type="image/x-icon')}}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="{{ asset('images/logo.png')}}" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{url('/home')}}">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/menu')}}">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/contactenos')}}">Contáctenos</a></li>
						
						<li class="nav-item"><a class="nav-link" href="#">Siguenos en Facebook</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="{{ asset('images/slider-01.jpg')}}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Bienvenido a <br> Restaurant La Sazón del Pato</strong></h1>
							
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservar</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Bienvenido a<br>  Restaurant La Sazón del Pato</strong></h1>
							
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			
		</ul>
		
	</div>
	<!-- End slides -->
	

	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" CONCRETAR UNA VENTA ES IMPORTANTE,PERO LOGRAR LA FIDELIDAD DE LOS CLIENTES ES VITAL. "
					</p>
					<span class="lead"> Restaurant La Sazón del Pato</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
                        
                        <h2>Nuestras Frases Deliciosas</h2>
						<p>
                            
                            
                            El secreto del éxito en la vida es comer lo que te gusta y dejar que la comida combata dentro
                            
                            Una comida bien preparada tienes sabores delicados que hay que retener en la boca para apreciarlos. 
                        </p>
                        <hr>
                        <hr>
                        <br>
                        <h2>NUESTRA DELICIA</h2>
					</div>
				</div>
			</div>
			
			<!-- Start About -->
                <div class="about-section-box">
                    <div class="container">
                        <div class="row">
                            @foreach ( $prod as $pro)
                            <div class="col-lg-6 col-md-6 text-center">
                                <div class="inner-column">
                                    <h1>Bienvenido a <h1> Restaurant La Sazón del Pato</h1></h1>
                                    <h1>Nombre del Especial <span>{{ $pro->descripcion}}</span></h1>
                                    <h1>Precio S/<span>{{ $pro->precio_venta}}</span></h1>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6">
                                <img src="../../../poss/<?= $pro->imagen?>" alt="" class="img-fluid">
                            </div>
                            
                            @endforeach        
                        </div>
                    </div>
                </div>
            <br>
            <hr>
            <div class="heading-title text-center">
                <h2>Nuestras Frases Deliciosas</h2>
                <p>
                    
                    El secreto del éxito en la vida es comer lo que te gusta y dejar que la comida combata dentro
                </p>
                <p>
                    Una comida bien preparada tienes sabores delicados que hay que retener en la boca para apreciarlos.
                </p>
            </div>
			
		</div>
	</div>
	<!-- End Menu -->
	

	


	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		
		<div class="container">
			<div class="row" style="text-align: center">
				
				<div class="col-lg-3 col-md-6" >
					<h3 >Informacion de Contacto</h3>
					<p class="lead">Tingo Maria - Leoncio Prado - Huanuco</p>
					<p class="lead"><a href="#">+51 987 654 321</a></p>
					<p><a href="#"> laurente@gmail.com</a></p>
				</div>
				
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">Todos los derechos reservados. &copy; 2020 <a href="#">Restaurant El PAto</a> Diseñado por : 
					<a href="https://html.design/">html design</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	

	<!-- ALL JS FILES -->
	<script type="text/javascript" src=" {{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('js/popper.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
	<script type="text/javascript" src=" {{ asset('js/jquery.superslides.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('js/images-loded.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('js/isotope.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('js/baguetteBox.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('js/form-validator.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('js/contact-form-script.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('js/custom.js') }}"></script>
</body>
</html>