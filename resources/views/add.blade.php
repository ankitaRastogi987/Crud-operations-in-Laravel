@extends('header')

@section('title','Add Item Here')

@section('content')
	<section class="login"><br>
	  <div class="container">
	   <div class="banner-content">
		  <!-- <h1><i class="fa fa-smile"></i> Blogger</h1> -->

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
		  <form method="post" class="form-signin" action="productsStore">
		  	@csrf
		   <h3 class="form-signin-heading">Please Add Product</h3>
		   <div class="form-group">
		    <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Title">
		   </div>
		   <div class="form-group">
		    <textarea name="detail"  value="{{ old('detail') }}" id="exampleFormControlTextarea1" class="form-control" placeholder="Description" rows="8"></textarea>
		   </div>

		   <button class="kafe-btn kafe-btn-mint btn-block btn-primary">Add</button>
		   <br/>
		  </form>
	   </div>
	  </div>
	</section>
@endsection