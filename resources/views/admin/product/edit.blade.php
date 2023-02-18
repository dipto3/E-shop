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
        <form id="contact-form" role="form" action="{{url('/update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

        <div class="controls">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Product Name</label>
                        <input id="form_name" type="text" name="product" class="form-control" value="{{$product->name}}">
                        
                    </div>
                </div>
              
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Product price</label>
                        <input id="form_name" type="text" name="price" class="form-control"  value="{{$product->price}}">
                        
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Color Name</label>
                        <select class="form-control" name="color" value="">

                            <option >{{implode(',',Json_decode($product->color))}}</option>
                         @foreach ($colors as $color)
                    
                            <option value="{{$color->color}}">{{implode(',',Json_decode($color->color))}} </option>
                            @endforeach
                           </select>
                        
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Category Name</label>
                        <select class="form-control" name="category" value="">

                            <option>{{$product->category}}</option>
                        @foreach ($categories as $category)
                    
                            <option value="{{$category->name}}"> {{$category->name}}</option>
                            @endforeach
                           </select>
                        
                    </div>
                </div>
              
            </div>
       
       
           

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Size Name</label>
                        <select class="form-control" name="size" id="">
                         
                       <option >{{implode(',',Json_decode($product->size))}}</option> 
                           @foreach ( $sizes as $size)
                             
                            <option value="{{$size->size}}" >{{implode(',',Json_decode($size->size))}}</option>
                            @endforeach
                           </select>
                        
                    </div>
                </div>
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Unit Name</label>
                        <select class="form-control" name="unit" id="">
                          <option>{{$product->unit}}</option>
                        @foreach ($units as $unit)
                        
                            <option value="{{$unit->name}}" >{{$unit->name}} </option>
                            @endforeach
                           </select>
                        
                    </div>
                </div>
              
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_name">Image</label>
                        <input name="file[]" type="file" class="form-control"  multiple >
                        
                    </div>
                </div>
              
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="color: rgb(57, 114, 219);" for="form_message">Description</label>
                        <textarea id="form_message" name="description" class="form-control"  rows="4">{{$product->description}}</textarea>
                        </div>

                    </div>


                <div class="col-md-12">
                    
                    <button  type="submit" class="btn btn-success btn-send  pt-2 btn-block
                        " value="Submit" >Submit</button>
                
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