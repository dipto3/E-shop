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
        <form id="contact-form" role="form" action="{{url('/store-product')}}" method="POST" enctype="multipart/form-data">
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
                        <label style="color: rgb(57, 114, 219);" for="form_name">Product price</label>
                        <input id="form_name" type="text" name="price" class="form-control" placeholder="Please enter product name..." required="required" data-error="Firstname is required.">
                        
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Category Name</label>
                       <select class="form-control" name="category_id" id="">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category )
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                       </select>
                        
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Color Name</label>
                        <select class="form-control" name="color_id" id="">
                            <option value="">Select Color</option>
                            @foreach ($colors as $color )
                            <option value="{{$color->id}}">{{$color->color}}</option>
                            @endforeach
                           </select>
                        
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Size Name</label>
                        <select class="form-control" name="size_id" id="">
                            <option value="">Select Size</option>
                            @foreach ($sizes as $size )
                            <option value="{{$size->id}}">{{$size->size}}</option>
                            @endforeach
                           </select>
                        
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Unit Name</label>
                        <select class="form-control" name="unit_id" id="">
                            <option value="">Select Unit</option>
                            @foreach ($units as $unit )
                            <option value="{{$unit->id}}">{{$unit->name}}</option>
                            @endforeach
                           </select>
                        
                    </div>
                </div>
              
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Image</label>
                        <input name="file[]" type="file" class="form-control"  multiple required>
                        
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