@extends('admin.master')

@section('content')
<div class="table-responsive pt-3">
<table class="table table-dark">
    <thead>
        <tr>
          <th style="width: 5%;" scope="col">ID</th>
          <th style="width: 20%;"scope="col">Category Name</th>
          <th style="width: 60%;"scope="col">Description</th>
          <th style="width: 15%;"scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td style="text-align:center;">
                <a href="{{url('/edit-category/'.$category->id)}}" class="btn btn-info update_productform">
                    <i class="las la-edit"></i>
                </a>
                <br>
               
                    
              
                <form action="{{url('/delete-category/'.$category->id)}}" method="POST">
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