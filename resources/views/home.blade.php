<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Reports - Bootstrap Admin Template</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    
    <link href="css/pages/reports.css" rel="stylesheet">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="../public/adminlte/plugins/fontawesome-free/css/all.min.css">

	 


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<div class="navbar navbar-fixed-top">
<div class="col-12">
	<div class="navbar-inner">
		
		<div class="container">
			
			
			<a class="brand" href="index.html">
				Gestion De Ofertas de Empleo				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							Cuenta
							<b class="caret"></b>
						</a>
						
						<!-- <ul class="dropdown-menu">
							<li><a href="javascript:;">Opciones</a></li>
						</ul>						 -->
					</li>
			
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
									Salir
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
												
					</li>
				</ul>
			
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
		
	</div> <!-- /navbar-inner -->
	</div>
	
</div> <!-- /navbar -->
    



    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
			
				<li>
                <a href="{{route('home')}}" class="nav-link">
						<i class="icon-dashboard"></i>
						<span>Dashboard</span>
					</a>	    				
				</li>
				
				
				
				<li>
                    <a href="{{route('usuario')}}" class="nav-link">
						<i class="icon-list-alt"></i>
						<span>Usuarios</span>
					</a>    				
				</li>
				
				<li>					
					<a href="{{route('email.index')}}" class="nav-link">
						<i class="icon-facetime-video"></i>
						<span>Email</span>
					</a>  									
				</li>
                
                
                <li class="dropdown">					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						<i class="icon-bar-chart"></i>
						<span>Crear Pdf</span>
					</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('pdfAlumnos') }}">Alumnos</a>
							</li>
							
							<li>
								<a href="{{route('PDF.index')}}">Ofertas</a>
							</li>
						</ul>
														
				</li>
				
				
			
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    

    
@yield('content')

    




</body>


<!-- jQuery -->
<script src="../public/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/adminlte/js/adminlte.min.js"></script>

<!-- bs-custom-file-input -->
<script src="../public/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> 
<!-- DataTables -->

<!-- AdminLTE for demo purposes -->
<script src="../public/adminlte/js/demo.js"></script>
<script type="text/javascript">
</script>
<!-- page script -->

</html>
