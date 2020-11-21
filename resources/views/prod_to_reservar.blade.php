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
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
	integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	@if (!empty($message))
	<div class="modal fade in" id="myModal" role="dialog" style="display: block; padding-right: 17px; ">
		<div class="modal-dialog" style="position: relative ; margin: 10% auto;padding: 20px;">
			<!-- Modal content-->
			<div class="modal-content" >
				<div class="modal-header"><button class="close" data-dismiss="modal" type="button"></button>
					<h4 class="modal-title">NOVEDADES</h4>
				</div>

				<div class="modal-body">{{ $message }}
				</div>

				<div class="modal-footer"><button class="btn btn-default" data-dismiss="modal"
						type="button">Close</button>
				</div>
			</div>
		</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
		</script>
		<script type="text/javascript">
			$(function() {
				$("#myModal").modal();
			});
		</script>
	@endif
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="{{url('/home')}}">Inicio</a></li>
						<li class="nav-item active"><a class="nav-link" href="{{url('/menu')}}">Menu</a></li>
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
				<img src="{{asset('images/slider-01.jpg')}}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Bienvenido a <br> Restaurant La Sazón del Pato</strong></h1>
							
							
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
                        <h2>Menu Especiales</h2>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-title text-center">
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <form action="{{url('/reservasmenu')}}" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
									{{ method_field('POST') }}
									
  
										<div class="form-group">
									  
										  <div class="form-group">
									  
											  <!--=====================================
											  CABEZA DEL MODAL
											  ======================================-->
									  
											  <div class="modal-header" style="background:#3c8dbc; color:white">
									  
												<h4 class="modal-title">Agregar cliente</h4>
									  
											  </div>
									  
											  <!--=====================================
											  CUERPO DEL MODAL
											  ======================================-->
									  
											  <div class="modal-body">
									  
												<div class="box-body">
									  
												  <!-- ENTRADA PARA EL NOMBRE -->
												  
												  <div class="form-group">
													
													<div class="input-group">
													
													  <span class="input-group-addon"><i class="fa fa-user"></i></span> 
									  
													  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>
									  
													</div>
									  
												  </div>
									  
												  <!-- ENTRADA PARA EL DOCUMENTO ID -->
												  
												  <div class="form-group">
													
													<div class="input-group">
													
													  <span class="input-group-addon"><i class="fa fa-key"></i></span> 
									  
													  <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>
									  
													</div>
									  
												  </div>
									  
												  <!-- ENTRADA PARA EL EMAIL -->
												  
												  <div class="form-group">
													
													<div class="input-group">
													
													  <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 
									  
													  <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>
									  
													</div>
									  
												  </div>
									  
												  <!-- ENTRADA PARA EL TELÉFONO -->
												  
												  <div class="form-group">
													
													<div class="input-group">
													
													  <span class="input-group-addon"><i class="fa fa-phone"></i></span> 
									  
													  <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-999'" data-mask required>
									  
													</div>
									  
												  </div>
									  
												  <!-- ENTRADA PARA LA DIRECCIÓN -->
												  
												  <div class="form-group">
													
													<div class="input-group">
													
													  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 
									  
													  <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>
									  
													</div>
									  
												  </div>
									  
												   <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
												  
												  <div class="form-group">
													
													<div class="input-group">
													
													  <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
									  
													  <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>
									  
													</div>
									  
												  </div>
										
												</div>
									  
											  </div>
									  
										  </div>
									  
										</div>
									  
									
                                    <table class="table">
                                        <thead>
                                        <tr>
											<th scope="col">ID</th>
                                            <th scope="col">Nombre del Plato</th>
                                            <th scope="col">Imagen de Referencia</th>
											<th scope="col">Precio</th>
											<th scope="col">Platos Disponibles</th>
                                            <th scope="col">Cantidad de Platos</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                                @for ( $i=0 ;  $i<count($produ) ; $i++)
                                                    <tr>
													<th scope="row"><input  name="reservas[]" id="reser" type="checkbox"   value="{{ $produ[$i][0]->id}}" checked/></th>
                                                    <td>{{ $produ[$i][0]->descripcion}}</td>
                                                    <td><img src="../../../poss/<?= $produ[$i][0]->imagen?>" alt="80" height="100"></td>
													<td>S/ {{ $produ[$i][0]->precio_venta}}</td>
													<td> {{ $produ[$i][0]->stock}}</td>
                                                    <td><input type="number"  min="1" max="{{ $produ[$i][0]->stock }}" pattern="[0-9]{1,2}" name="cantidad[]"  placeholder="Cantidad de platos" required></td>
                                                @endfor
                                        </tbody>
                                    </table>
                          <div class="form-group mt-3">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit"   class="btn btn-primary">Realizar Pedido</button>
                            </div>
                        </div>
                    </form>
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
    
    <script>
         
    </script>
</body>
</html>