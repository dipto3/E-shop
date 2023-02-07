@extends('admin.master')

@section('content')
<div class="container">
    <div class=" text-center mt-5 ">

        <h3 style="color: royalblue;" >Add Category Form</h3>
            
        
    </div>


<div class="row ">
  <div class="col-lg-7 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">
   
        <div class = "container">
        <form id="contact-form" role="form" action="{{url('/store-category')}}" method="POST">
            @csrf

        

        <div class="controls">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Product Name</label>
                        <input id="form_name" type="text" name="product" class="form-control" placeholder="Please enter product name..." required="required" data-error="Firstname is required.">
                        
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Category Name</label>
                        <input id="form_name" type="text" name="category" class="form-control" placeholder="Please enter category name..." required="required" data-error="Firstname is required.">
                        
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Color Name</label>
                        <input id="form_name" type="text" name="color" class="form-control" placeholder="Please enter category name..." required="required" data-error="Firstname is required.">
                        
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Size Name</label>
                        <input id="form_name" type="text" name="size" class="form-control" placeholder="Please enter size name..." required="required" data-error="Firstname is required.">
                        
                    </div>
                </div>
              
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_message">Description</label>
                        <textarea id="form_message" name="description" class="form-control" placeholder="Write category description here..." rows="4" required="required" data-error="Please, leave us a message."></textarea
                            >
                        </div>

                    </div>


                <div class="col-md-12">
                    
                    <input  type="submit" class="btn btn-success btn-send  pt-2 btn-block
                        " value="Submit" >
                
            </div>
      
            </div>


    </div>
     </form>
    </div>
        </div>


</div>
    <!-- /.8 -->

</div>
<!-- /.row-->

</div>
</div>


@endsection