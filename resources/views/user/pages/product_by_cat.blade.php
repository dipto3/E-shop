@extends('user.master')

@section('content')

     <!-- inner page section -->
     <section class="inner_page_head">
        <div class="container_fuild">
           <div class="row">
              <div class="col-md-12">
                 <div class="full">
                    <h3>Product Grid</h3>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
        <div class="container">
           <div class="heading_container heading_center">
              <h2>
                 Our <span>products</span>
              </h2>
           </div>
         
               
         
           <div class="row">
            
            @foreach($products as $product)
            @php 
                $product['image'] = explode('|',$product->image);
                    $images = $product->image[0];
            @endphp
              <div class="col-sm-6 col-md-4 col-lg-3">
               
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                       {{$product->name}}
                          </a>
                          <a href="" class="option2">
                          Add To Cart
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                     <a href="{{url('/view-details'.$product->id)}}">
                        <img src="{{asset('/image/'.$images)}}" style="width:260px; height:200px;">
                    </div>
                    <div class="detail-box">
                       <h5>
                        {{$product->name}}
                       </h5>
                       <h6>
                        {{$product->price}}
                       </h6>
                    </div>
                 </div>
               
              </div>
             
             
              
             
        
              @endforeach
        
           </div>
         
           {{-- <div class="btn-box">
              <a href="">
              View All products
              </a>
           </div> --}}
        </div>
     </section>
     <!-- end product section -->

@endsection