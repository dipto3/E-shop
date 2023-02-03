@extends('admin.master')

@section('content')
<div class="container">
    <div class=" text-center mt-5 ">

        <h3 style="color: royalblue;" >Edit Size Form</h3>
            
        
    </div>


<div class="row ">
  <div class="col-lg-7 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">
   
        <div class = "container">
        <form id="contact-form" role="form" action="" method="POST">
            @csrf

        

        <div class="controls">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Category Name</label>
                        <input id="form_name" type="text" name="name" class="form-control" value=""  >
                        
                    </div>
                </div>
              
            </div>
            
            <div class="row">
           


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