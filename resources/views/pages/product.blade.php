@extends('layouts.dashboard')

@section('content')

<!--Table-->
<div class="content" style="margin-left: 270px; width: 80%">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin-top: 5px;">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>ID</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>DOB</th>
                            <th>QTY</th>
                            <th>Cost</th>
                            <th>Unit</th>
                            <th>Image</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($addproducts as $addproduct)
                            <tr>
                                <th>{{$addproduct->id}}</th>
                                <th>{{$addproduct->productcode}}</th>
                                <th>{{$addproduct->name}}</th>
                                <th>{{$addproduct->category}}</th>
                                <th>{{$addproduct->price}}</th>
                                <th>{{$addproduct->date}}</th>
                                <th>{{$addproduct->qty}}</th>
                                <th>{{$addproduct->cost}}</th>
                                <th>{{$addproduct->unit}}</th>
                                <th><img src="{{asset('uploads/addproduct/'. $addproduct->image)}}" alt="Image" width="50" height="50"></th>
                                <th>
                                    <a href="/editproduct/{{$addproduct->id}}" class="btn btn-primary" style="font-size: 12px; width: 60px; padding:3px">Update</a>
                                    <a href="/deleteproduct/{{$addproduct->id}}" class="btn btn-danger" style="font-size: 12px; width: 60px; padding:3px">Delete</a>
                                </th>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Table-->

@endsection
