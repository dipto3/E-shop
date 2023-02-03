@extends('admin.master')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
          <th style="width: 5%;" scope="col">ID</th>
          <th style="width: 20%;"scope="col">Unit Name</th>
          <th style="width: 60%;"scope="col">Description</th>
          <th style="width: 15%;"scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
       
        <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td style="text-align:center;">
                <a href="" class="btn btn-info update_productform">
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
 </table>
@endsection