@extends('layouts.dashboard')

@section('content')
{{-- Content --}}
<div id="wrapper" style="width: 80%; margin-left: 400px;">


        <form class="form-horizontal" action="{{ route('addimage')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div style="height: 50px; background-color: #1C2833; width: 80%; margin-top: 70px; border-top-right-radius: 5px; border-top-left-radius:5px ">
                <img src="{{asset('img/icons8-add_user_male.png')}}" alt="" width="50px;" style="float: left; margin-left: 15px; margin-right: 15px;">
                <h1 style="color: #fff0ff; padding: 7px;">Add Products</h1>
            </div>
            <div style="height: 520px; background-color: #E5E7E9; width: 80%;">
                <div style="width: 60%; padding: 10px; margin-left: 20%">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Product Code</span>
                        <input type="text" name="productcode" class="form-control" placeholder="Product code" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Product Name</span>
                        <input type="text" name="name" class="form-control" placeholder="Product Name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Categories</span>
                        <form>
                            <select name="category" class="custom-select" style="height: 35px; width:230px;">
                                <option selected>Please Select</option>
                                <option value="Ice">Ice</option>
                                <option value="Hot">Hot</option>
                                <option value="Frape">Frape</option>
                                <option value="Other">Other</option>
                            </select>
                        </form>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Price</span>
                        <input type="text" name="price" class="form-control" placeholder="Price" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Date</span>
                        <input type="date" name="date" class="form-control" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">QTY</span>
                        <input type="text" name="qty" class="form-control" placeholder="QTY" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Cost</span>
                        <input type="text" name="cost" class="form-control" placeholder="Cost" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Unit</span>
                        <input type="text" name="unit" class="form-control" placeholder="Unit" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width:150px;">Image</span>
                        <input type="file" name="image" class="form-control-static " placeholder="Cost" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group" style="margin-left: 370px;">
                        <button type="button" class="btn btn-danger" style="width: 120px; height: 30px; padding:0px">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-success" style="width: 120px; height: 30px; padding:0px">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('sweetalert::alert')

@endsection
