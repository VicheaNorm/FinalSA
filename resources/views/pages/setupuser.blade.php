@extends('layouts.dashboard')

@section('content')
    <div style="height: 50px; background-color: #1C2833; width: 120%; margin-top: 70px; border-top-right-radius: 5px; border-top-left-radius:5px ">
        <img src="{{asset('img/icons8-add_user_male.png')}}" alt="" width="50px;" style="float: left; margin-left: 15px; margin-right: 15px;">
        <h1 style="color: #fff0ff; padding: 7px;">SETUP USER</h1>
    </div>
    <div style="height: 470px; background-color: #E5E7E9; width: 120%;">
        <div style="width: 50%; padding: 10px; margin-left: 25%">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width:150px;">First Name</span>
                <input type="text" class="form-control" placeholder="Firstname" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width:150px;">Last Name</span>
                <input type="text" class="form-control" placeholder="Lastname" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width:150px;">User Name</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width:150px;">Password</span>
                <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width:150px;">Confirm Password</span>
                <input type="text" class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width:150px;">Gender</span>
                <form>
                    <select name="gender" class="custom-select" style="height: 35px;">
                        <option selected>Please Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </form>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width:150px;">Email</span>
                <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width:150px;">Position</span>
                <form>
                    <select name="gender" class="custom-select" style="height: 35px;">
                        <option selected>Please Select Position</option>
                        <option value="Male">Sale</option>
                        <option value="Female">Manager</option>
                        <option value="Female">Accounting</option>
                        <option value="Female">IT</option>
                        <option value="Female">Other</option>
                    </select>
                </form>
            </div>
            <div class="input-group" style="margin-left: 470px;">
                <button type="button" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-success" style="width: 80px; margin-left: 10px">Add</button>
            </div>
        </div>
    </div>
@endsection
