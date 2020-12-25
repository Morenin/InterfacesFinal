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

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				Bootstrap Admin Template				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							Cuenta
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Opciones</a></li>
						</ul>						
					</li>
			
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							EGrappler.com
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Perfil</a></li>
							<li><a href="javascript:;">Salir</a></li>
						</ul>						
					</li>
				</ul>
			
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    



    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
			
				<li>
                <a href="TrabajoBackEnd">
						<i class="icon-dashboard"></i>
						<span>Dashboard</span>
					</a>	    				
				</li>
				
				
				
				<li class="active">
                    <a href="{{route('usuario')}}" class="nav-link">
						<i class="icon-list-alt"></i>
						<span>Usuarios</span>
					</a>    				
				</li>
				
				<li>					
					<a href="guidely.html">
						<i class="icon-facetime-video"></i>
						<span>App Tour</span>
					</a>  									
				</li>
                
                
                <li>					
					<a href="charts.html">
						<i class="icon-bar-chart"></i>
						<span>Charts</span>
					</a>  									
				</li>
				
				
			
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    

    
@yield('content')

    




</body>

</html>
