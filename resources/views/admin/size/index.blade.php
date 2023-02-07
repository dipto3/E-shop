@extends('admin.master')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
          <th style="width: 5%;" scope="col">ID</th>
          <th style="width: 20%;"scope="col">Size Name</th>
         
          <th style="width: 15%;"scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
       @foreach ($sizes as $size)
           
      
        <tr>
            <th scope="row">{{$size->id}}</th>
            <td>
                @foreach(Json_decode($size->size) as $sizes)
            <ul class="span3">
                {{$sizes}}
            </ul>
            @endforeach
            </td>
           
            <td style="text-align:center;">
                <a href="{{url('/edit-size/'.$size->id)}}" class="btn btn-info update_productform">
                    <i class="las la-edit"></i>
                </a>
                <br>
                <form action="{{url('/delete-size/'.$size->id)}}" method="POST">
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
@endsection