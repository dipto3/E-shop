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
                <span class="label label-success">Active</span>

              @else
              <span class="label label-danger">Deactive</span>	
              @endif
              </td>
            <td style="text-align:center;">
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
        @endforeach
     </tbody>
 </table>
</div>
@endsection