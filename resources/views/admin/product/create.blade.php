@extends('admin.master')
@section('admin.content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="color:rgb(0, 138, 202);font-size:25px; text-align:center;">Create Product</h4>
                <form class="forms-sample" action="{{ url('/store-product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Product Name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Category</label>
                        <select class="form-control" name="category">
                            <option>Choose Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                        @if ($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Size</label>
                        <select class="form-control" name="size">
                            <option>Choose Size</option>
                            @foreach ($sizes as $size)
                                <option value="{{ $size->name }}" @selected(old('size') == $size->name)>{{ $size->name }}
                                </option>
                            @endforeach
                        </select>
                        {{-- @if ($errors->has('size'))
                            <span class="text-danger">{{ $errors->first('size') }}</span>
                        @endif --}}


                    </div>
                    <div class="form-group">
                        <label for="color">Product Color</label>
                        <select class="form-control" name="color">
                            <option>Choose Color</option>
                            @foreach ($colors as $color)
                                <option value="{{ $color->color }}" @selected(old('color') == $color->color)>{{ $color->color }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('color'))
                            <span class="text-danger">{{ $errors->first('color') }}</span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Product price"value="{{ old('price') }}">
                        @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Discount Price</label>
                        <input type="text" class="form-control" name="discountprice" placeholder="Product price"
                            value="{{ old('discountprice') }}">
                        @if ($errors->has('discountprice'))
                            <span class="text-danger">{{ $errors->first('discountprice') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="4" value="{{ old('description') }}"></textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input name="image[]" type="file" class="form-control" multiple>
                        @if ($errors->has('image.*'))
                            <span class="text-danger">{{ $errors->first('image.*') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
