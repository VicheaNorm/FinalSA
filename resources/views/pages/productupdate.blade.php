@extends('layouts.dashboard')

@section('content')
{{-- Content --}}
<div id="wrapper" style="width: 80%; margin-left: 400px;">


<form class="form-horizontal" action="/updateproduct/{{ $addproducts->id}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div style="height: 50px; background-color: #1C2833; width: 80%; margin-top: 70px; border-top-right-radius: 5px; border-top-left-radius:5px ">
                <img src="{{asset('img/icons8-add_user_male.png')}}" alt="" width="50px;" style="float: left; margin-left: 15px; margin-right: 15px;">
                <h1 style="color: #fff0ff; padding: 7px;">Update Products</h1>
            </div>
            <div style="height: 520px; background-color: #E5E7E9; width: 80%;">
                <div style="width: 50%; padding: 10px; margin-left: 25%">
                    <input type="hidden" name="id" id="id" value="{{$addproducts->id}}">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Product Code</span>
                        <input type="text" name="productcode" class="form-control" placeholder="Product code" aria-describedby="basic-addon1" value="{{$addproducts->productcode}}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Product Name</span>
                        <input type="text" name="name" class="form-control" placeholder="Product Name" aria-describedby="basic-addon1" value="{{$addproducts->name}}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Categories</span>
                        <input type="text" name="category" class="form-control" placeholder="Price" aria-describedby="basic-addon1" value="{{$addproducts->category}}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Price</span>
                        <input type="text" name="price" class="form-control" placeholder="Price" aria-describedby="basic-addon1" value="{{$addproducts->price}}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Date</span>
                        <input type="date" name="date" class="form-control" aria-describedby="basic-addon1" value="{{$addproducts->date}}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">QTY</span>
                        <input type="text" name="qty" class="form-control" placeholder="QTY" aria-describedby="basic-addon1" value="{{$addproducts->qty}}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Cost</span>
                        <input type="text" name="cost" class="form-control" placeholder="Cost" aria-describedby="basic-addon1" value="{{$addproducts->cost}}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Unit</span>
                        <input type="text" name="unit" class="form-control" placeholder="Unit" aria-describedby="basic-addon1" value="{{$addproducts->unit}}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Image</span>
                        <input type="file" name="image" class="form-control-static" placeholder="Images" aria-describedby="basic-addon1" value="{{$addproducts->image}}">
                    </div>
                    <div class="input-group" style="margin-left: 270px;">
                        <a href="/product" style="text-decoration: none; color: #ffffff"> <button type="button" class="btn btn-danger" style="width: 120px; height: 30px; padding:0px"> Cancel</button></a>
                        <button type="submit" name="submit" class="btn btn-success" style="width: 120px; height: 30px; padding:0px">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('sweetalert::alert')

@endsection
