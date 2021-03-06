@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Product form</h2>
  <form class="form-horizontal" action="{{url('/product/store')}}" method="post">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="product" name="product" placeholder="Enter product name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Quantity:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter qty" name="qty">
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

@endsection
