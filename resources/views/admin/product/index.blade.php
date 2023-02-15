@extends('admin.master')

@section('content')
<div class="table-responsive pt-3">
<table class="table table-dark">
    <thead>
        <tr>
          <th style="width: 5%;" scope="col">ID</th>
          <th style="width: 8%;"scope="col">Product Name</th>
          <th style="width: 9%;"scope="col">Product Price</th>
          <th style="width: 8%;"scope="col">Size</th>
          <th style="width: 10%;"scope="col">Color</th>
          <th style="width: 5%;"scope="col">Unit</th>
          <th style="width: 20%;"scope="col">Description</th>
          <th style="width: 25%;"scope="col">Image</th>
          <th style="width: 10%;"scope="col">Status</th>
          <th style="width: 10%;"scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
      @foreach ($products as $product)
          
      @php
      $product['image']=explode("|",$product->image);
      @endphp
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
           <td>{{$product->price}}</td>
           <td>{{$product->size->size}}</td>
           <td>{{$product->color->color}}</td>
           <td>{{$product->unit->name}}</td>
           <td>{{$product->description}}</td>
           <td>
            @foreach($product->image as $images)
                <img src="{{asset('/image/'.$images)}}" style="width: 70px;height:70px;">
                @endforeach
            </td>
            <td class="center">
                @if($product->status==1) 
                    <span class="btn btn-success">Active</span>

                @else
                <span class="btn btn-danger">Deactive</span>	
                @endif
                </td>
           
            <td >
                <div class="span3"></div>
                <div class="span2">
                <a href="" class="btn btn-success" >
                    <i class="las la-thumbs-up"></i>  
                </a>
                <a href="" class="btn btn-danger" >
                    <i class="las la-thumbs-down"></i>  
                </a>
                </div>
                <a href="{{url('/edit-product/'.$product->id)}}" class="btn btn-info update_productform">
                    <i class="las la-edit"></i>
                </a>
                <br>
                <form action="" method="POST">
                    @csrf
                    <button type="submit" href="" class="btn btn-danger delete_product">
                        <i class="las la-trash-alt"></i>
                    </button>
                </form>
              
            </td>
        </tr>
    
     </tbody>
     @endforeach
 </table>


@endsection