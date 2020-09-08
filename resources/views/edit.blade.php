@extends('header')

@section('title')
	Edit Item Here
@endsection

@section('content')
	<section class="login"><br>
	  <div class="container">
	   <div class="banner-content">
	   		@if($errors->any())
		   		<div class="alert alert-danger">
		   			<strong>Whoops!</strong>There were some problems with your inputs.<br><br>
		   			<ul>
		   				@foreach($errors->all() as $error)
		   					<li>{{ $error }}</li>
		   				@endforeach
		   			</ul>
		   		</div>
		   	@endif
		  <form method="post" class="form-signin" action="{{ route('products.update',$product->id) }}">
		  	@csrf
		  	@method('PUT')
		   <h3 class="form-signin-heading">Please Edit Product</h3>
		   <div class="form-group">
		    <input name="name" value="{{$product->name}}" type="text" class="form-control" placeholder="Title">
		   </div>
		   <div class="form-group">
		    <textarea name="detail" placeholder="Detail" id="exampleFormControlTextarea1" class="form-control" rows="8">{{$product->detail}}</textarea>
		   </div>

		   <button type="submit" class="kafe-btn kafe-btn-mint btn-block btn-primary">Update</button>
		   <br/>
		  </form>
		 
	   </div>
	  </div>
	</section>
@endsection