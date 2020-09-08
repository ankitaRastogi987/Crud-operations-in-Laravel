@extends('header')

@section('content')
	<section class="login"><br>
	  <div class="container">
	   <div class="banner-content">
		  <div class="pull-6">
		  	<h2>Show Product</h2>
		  	<h4>Name: {{ $product->name}}<br>
		  Details: {{ $product->detail}}</h4>
		  </div>
		  
	   </div>
	  </div>
	</section>
@endsection