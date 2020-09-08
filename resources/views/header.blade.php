<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title','Blogger')
	</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{ URL::asset('js/jquery-3.5.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">Blogger</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="list">View Product</a>
	      <a class="nav-item nav-link active" href="add">Add Product<span class="sr-only">(current)</span></a>

	    </div>
	  </div>
	</nav>	

	@yield('content')
	
</body>
</html>