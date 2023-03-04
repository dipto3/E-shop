@extends('admin.master')

@section('content')
<div class="table-responsive pt-3">
<table class="table table-dark table-hover">
    <thead>
        <tr>
          <th style="width: 5%;" scope="col">ID</th>
          <th style="width: 20%;"scope="col">Unit Name</th>
          <th style="width: 60%;"scope="col">Description</th>
          <th style="width: 15%;"scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
        @foreach ($units as $unit)
        <tr>
            <th scope="row">{{$unit->id}}</th>
            <td>{{$unit->name}}</td>
            <td>{{$unit->description}}</td>
            <td style="text-align:center;">
                <a href="{{url('/edit-unit/'.$unit->id)}}" class="btn btn-info update_productform">
                    <i class="las la-edit"></i>
                </a>
                <br>
                <form action="{{url('/delete-unit/'.$unit->id)}}" method="POST">
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