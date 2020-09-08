@extends('header')

@section('content')
  <div class="container">
    <div class="row">
      @if($message=Session::get('success'))

       <br><div class="col-md-12 alret alert-success">
          <p>{{ $message }}</p>
        </div>
        <br>
      @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <div class="col-md-1"><th scope="col">#</th></div>
            <div class="col-md-3"><th scope="col">Product</th></div>
            <div class="col-md-3"><th scope="col">Description</th></div>
            <div class="col-md-5"><th scope="col">Actions</th></div>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)          
          <tr>
            <th scope="row">{{ ++$i }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
            	  <form method="POST" action="{{ route('products.destroy',$product->id) }}">
                  <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">Show</a>
                  <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $products->links() }}
    </div>
  </div>
@endsection