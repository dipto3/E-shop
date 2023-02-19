@extends('admin.master')

@section('content')
<div class="table-responsive pt-3">
    <table class="table table-dark">
    <thead>
        <tr>
          <th style="width: 5%;" scope="col">ID</th>
          <th style="width: 10%;"scope="col">Product Name</th>
          <th style="width: 5%;"scope="col">Price</th>
          <th style="width: 5%;"scope="col">Unit</th>
          <th style="width: 10%;"scope="col">Size</th>
          <th style="width: 10%;"scope="col">Color</th>
          <th style="width: 5%;" scope="col">Category</th>
          <th style="width: 15%;"scope="col">Description</th>
          <th style="width: 15%;"scope="col">Image</th>
          <th style="width: 15%;"scope="col">Status</th>
          <th style="width: 15%;"scope="col">Action</th>
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
           <td>{{$product->unit}}</td>
           <td>{{$product->size}}</td>
           <td>{{$product->color}}</td>
           <td>{{$product->category}}</td>
           <td>{{$product->description}}</td>
           <td class=>
            @foreach($product->image as $images)
                <img src="{{asset('/image/'.$images)}}" style="width: 60px;height:60px ;">
                @endforeach
            </td>
            <td class="center">
              @if($product->status==1) 
                <span class="btn btn-success">Active</span>

              @else
              <span class="btn btn-danger">Deactive</span>	
              @endif
              </td>
            <td style="text-align:center;">

              <div class="span">
                @if($product->status==1) 
                <a href="{{url('/product-status'.$product->id)}}" class="btn btn-danger" >
                  <i class="fa-solid fa-thumbs-down"></i>
                </a>
                @else
                <a href="{{url('/product-status'.$product->id)}}" class="btn btn-success" >
              
                  <i class="fa-solid fa-thumbs-up"></i>
                </a>
                @endif

                </div>
                <a href="{{url('/edit-product/'.$product->id)}}" class="btn btn-info update_productform">
                    <i class="las la-edit"></i>
                </a>
                <br>
                <form action="{{url('/delete-product/'.$product->id)}}" method="POST">
                    @csrf
                    <button type="submit" href="" class="btn btn-warning delete_product">
                      <i class="fa-sharp fa-solid fa-trash"></i>
                    </button>
                </form>
              
            </td>
        </tr>
        @endforeach
     </tbody>
 </table>
</div>
@endsection