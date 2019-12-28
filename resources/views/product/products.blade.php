@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Product</h2>
   <a href="{{url('/product/create')}}">Create</a>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Prodct Name</th>
        <th>Quantity</th>
        <th>Action</th>
       </tr>
    </thead>
    <tbody>
      @foreach($product as $item)
      <tr>
        <td>{{$item->product_name}}</td>
        <td>{{$item->qty}}</td>
        <td><a href="{{url('/product/update')}}/{{$item->id}}">Edit</a> <a href="{{url('/product/delete')}}/{{$item->id}}">delete</a></td>
      
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

