@extends('user.master')
@section('content')

<!------ Include the above in your HEAD tag ---------->


	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                            <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/400/252" /></a></li>
						</ul>
						
					</div>
					<form action="{{url('/add-cart/'.$products->id)}}" method="POST">
						@csrf
					<div class="details col-md-12">
						
						<h3 class="product-title">{{$products->name}}</h3>
					
						<p class="product-description">{{$products->description}}</p>
						<h4 class="price">current price: <span>${{$products->price}}</span></h4>
						
						<div class="product-options">
							<label>
								Size
								<select name="size" class="input-select">

								@foreach(Json_decode($products->size) as $value)
									<option value="{{$value}}">{{$value}}</option>
								 @endforeach
								</select>
							</label>
							<label>
								Color
								<select name="color" class="input-select">

								@foreach(Json_decode($products->color) as $value)
									<option  value="{{$value}}">{{$value}}</option>
								 @endforeach
								</select>
							</label>
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number" name="qty" value="0" min="1">
                                    
                                </div>
                            </div>
                        </div><br>
						<div class="action">
							<button type="submit" class="btn btn-outline-danger" style="color:rgb(236, 230, 230); background-color:#f7444e" >Add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>


@endsection
