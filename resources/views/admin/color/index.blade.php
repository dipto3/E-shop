@extends('admin.master')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
          <th style="width: 5%;" scope="col">ID</th>
          <th style="width: 20%;"scope="col">Color Name</th>
         
          <th style="width: 15%;"scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
       @foreach ($colors as $color)
           
      
        <tr>
            <th scope="row">{{$color->id}}</th>
            <td>
                @foreach(Json_decode($color->color) as $colors)
            <ul class="span3">
                {{$colors}}
            </ul>
            @endforeach
            </td>
           
            <td style="text-align:center;">
                <a href="{{url('/edit-color/'.$color->id)}}" class="btn btn-info update_productform">
                    <i class="las la-edit"></i>
                </a>
                <br>
                <form action="{{url('/delete-color/'.$color->id)}}" method="POST">
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