@extends('admin.master')

@section('content')
<div class="table-responsive pt-3">
<table class="table table-dark table-hover">
    <thead>
        <tr>
          <th style="width: 5%;" scope="col">ID</th>
          <th style="width: 20%;"scope="col">Heading</th>
          <th style="width: 40%;"scope="col">Description</th>
          <th style="width: 20%;"scope="col">Image</th>
          <th style="width: 15%;"scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
      @foreach ($banners as $banner)
          
     
        <tr>
            <th scope="row">{{$banner->id}}</th>
            <td>{{$banner->heading}}</td>
            <td>{{$banner->description}}</td>
            <td><img style="height:120px; width:120px;"src="{{asset('/storage/bannerimg/'.$banner->image)}}" alt=""></td>
            <td  style="text-align:center;">
                <a href="{{url('/banner-edit/'.$banner->id)}}" class="btn btn-info update_productform">
                    <i class="las la-edit"></i>


                </a>
                <br>
               
                    
              
                <form action="{{url('/banner-remove/'.$banner->id)}}" method="POST">
                    @csrf
                    {{-- @if ($category->id != '1') --}}
                    <button type="submit" href="" class="btn btn-danger delete_product">
                        <i class="las la-trash-alt"></i>
                    </button>
                    {{-- @endif --}}
                </form>
              
            </td>
        </tr>
    
        @endforeach
     </tbody>
 </table>
 </div>
@endsection