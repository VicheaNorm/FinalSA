@extends('layouts.app')

@section('content')

<div id="wrapper" style="margin-left: 100px;">
{{-- Bar Button group --}}
<div class="btn-group btn-group-justified" role="group" aria-label="Basic example" style="margin-left: 5px;">
  <div class="btn-group" role="group" style="width: 120px;">
    <button type="button" class="btn btn-default" style="background-color: #5AA8FC; color: #ffffff;">Waiter</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default" style="background-color: #5AA8FC; color: #ffffff">Order Detail</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default" style="background-color: #5AA8FC; color: #ffffff">Customer</button>
  </div>
  <div class="btn-group" role="group" style="width: 120px;">
    <button type="button" class="btn btn-default" style="background-color: #5AA8FC; color: #ffffff">Table</button>
  </div><div class="btn-group" role="group">
    <button type="button" class="btn btn-default" style="background-color: #5AA8FC; color: #ffffff">Order List</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default" style="background-color: #5AA8FC; color: #ffffff">Print KOT</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default" style="background-color: #5AA8FC; color: #ffffff">Modifly Order</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default" style="background-color: #5AA8FC; color: #ffffff">Cancel Order</button>
  </div>
</div>
<div class="left-side" style="border: 1px solid gray; border-radius:5px; float: left; height: 802px; margin-top: 10px;">
  <table style="width: 500px;">
    <tr>
      <th colspan="4" style="text-align: center; font-weight: bold;height: 40px;">Order List</th>
    </tr>
    <tr style="width: 180px; text-align: center; background-color: darkgray; height: 35px">
      <span><th style="width: 200px; padding-left: 15px;">Item</th></span>
      <th style="text-align: center;">QTY</th>
      <th >Price</th>
      <th >Amount</th>
    </tr>
    <tr style="text-align: center;">
      <td style="text-align: left; padding-left: 10px;"> Iced Latte</td>
      <td>1</td>
      <td>2.50$</td>
      <td>2.50$</td>
    </tr>
  </table>
  <div class="payment-grib" style="border-top: 1px solid grey; width: 100%;  margin-top: 550px; font-family: 'Courier New', Courier, monospace;">
    <div>
      <div class="left-box" style="width: 30%; float: left">
          <p>Total Item : 01</p>
      </div>
      <div class="" style="width: 50%; float: left; font-weight: bold">
        <p style=" text-align: right">Sub Total :</p>
      </div>
      <div class="right-box" style="width: 20%; float: right">
        <p style="padding-left: 15px">$2.50</p>
      </div>
    </div>


    <div class="btn-process" style="float: left; font-weight: bold; margin-top: 60px; margin-left: 15px;">
      <button type="button" class="btn btn-danger" style="width: 150px; height: 30px; padding: 0px;">Cancel</button>
      <button type="button" class="btn btn-success" style="width: 150px; height: 30px; padding: 0px; ">Hold</button>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter" style="width: 150px; height: 30px; padding: 0px; ">Place Order</button>
    </div>
  </div>

</div>

<div class="right-side" style="border: 1px solid dimgrey; border-radius:5px; width: 960px; height: 750px; float: left; margin: 5px; background-color: #fff;">
  <div id="btn-catgaory" style="padding: 3px; margin-top: 5px; margin-left: 10px;">
    <button type="button" class="btn btn-primary active" style="width: 220px; height: 35px; margin-left: 15px;"><h5>ICE Drink</h5></button>
    <button type="button" class="btn btn-primary" style="width: 220px; height: 35px;"><h5>Hot Drink</h5></button>
    <button type="button" class="btn btn-primary" style="width: 220px; height: 35px;"><h5>Frappe</h5></button>
    <button type="button" class="btn btn-primary" style="width: 220px; height: 35px;"><h5>Bakery</h5></button>
  </div>
  <div id="image-box">
    <div class="btn-cafe" style="margin-top: 5px; margin-left: 8px;" >
      <button type="button" style="padding: 0px;margin-left: 17px; border: none; background-color: #fff;">
          <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
          <br>ICE LATTE
      </button>
      <button type="button" style="padding: 0px;margin-left: 1px; border: none; background-color: #fff;">
        <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
        <br>ICE LATTE
    </button>
    <button type="button" style="padding: 0px;margin-left: 1px; border: none; background-color: #fff;">
        <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
        <br>ICE LATTE
    </button>
    <button type="button" style="padding: 0px;margin-left: 1px; border: none; background-color: #fff;">
        <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
        <br>ICE LATTE
    </button>
    </div>
    <div id="image-box">
        <div class="btn-cafe" style="margin-top: 5px; margin-left: 8px;" >
          <button type="button" style="padding: 0px;margin-left: 17px; border: none; background-color: #fff;">
              <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
              <br>ICE LATTE
          </button>
          <button type="button" style="padding: 0px;margin-left: 1px; border: none; background-color: #fff;">
            <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
            <br>ICE LATTE
        </button>
        <button type="button" style="padding: 0px;margin-left: 1px; border: none; background-color: #fff;">
            <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
            <br>ICE LATTE
        </button>
        <button type="button" style="padding: 0px;margin-left: 1px; border: none; background-color: #fff;">
            <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
            <br>ICE LATTE
        </button>
        </div>
        <div id="image-box">
            <div class="btn-cafe" style="margin-top: 5px; margin-left: 8px;" >
              <button type="button" style="padding: 0px;margin-left: 17px; border: none; background-color: #fff;">
                  <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
                  <br>ICE LATTE
              </button>
              <button type="button" style="padding: 0px;margin-left: 1px; border: none; background-color: #fff;">
                <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
                <br>ICE LATTE
            </button>
            <button type="button" style="padding: 0px;margin-left: 1px; border: none; background-color: #fff;">
                <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
                <br>ICE LATTE
            </button>
            <button type="button" style="padding: 0px;margin-left: 1px; border: none; background-color: #fff;">
                <img src="{{asset('images/icedlatte.jpg')}}" style="width:220px;height: 180px; border: 1px solid black">
                <br>ICE LATTE
            </button>
            </div>
  </div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="height: 50px; background-color: #5DADE2">
        <h4 class="modal-title" id="exampleModalLongTitle"​ style="font-family: Khmer OS Siemreap; color: #fff">ទូទាត់ប្រាក់</h4>
      </div>
        <div class="modal-body" class="popup-font" style="height: 350px;">
          <div class="popup-font">
            <label for="usr">សរុបប្រាក់ដែលត្រូវបង់ (TOTAL)</label>
              <div>
                <input type="text" class="btn-input" id="txtus" placeholder="ប្រាក់ទទួលជា US ($)">
                <input type="text" class="btn-input" id="txtrail" placeholder="ប្រាក់ទទួលជារៀល (៛)">
              </div>
          </div>
          <div class="popup-font" style="margin-top: 5px;">
            <label for="usr">សរុបប្រាក់ដែលទទួលបាន</label>
              <div>
                <input type="text" class="btn-input" id="txtus" placeholder="ប្រាក់ទទួលជា US ($)">
                <input type="text" class="btn-input" id="txtrail" placeholder="ប្រាក់ទទួលជារៀល (៛)">
                <input type="text" class="btn-input" id="txtrail" placeholder="Customer ID / លេខអថិជន">
              </div>
          </div>
          <div class="popup-font">
            <label for="usr">សរុបប្រាក់ដែលត្រូវបង់ (TOTAL)</label>
              <div>
                <input type="text" class="btn-input" id="txtus" placeholder="ប្រាក់ដែលនៅសល់ជា US ($)">
                <input type="text" class="btn-input" id="txtrail" placeholder="ប្រាក់ដែលនៅសល់ជារៀល (៛)">
                <button type="button" class="btn btn-danger" style="width: 100px;">Cancel</button>
                <button type="button" class="btn btn-success" style="width: 200px;">Enter</button>
              </div>
          </div>
          <div class="popup-font">
            <label for="usr">សរុបប្រាក់ដែលត្រូវបង់ (TOTAL)</label>
              <div>
                <input type="text" class="btn-input" id="txtus" placeholder="ប្រាក់អាប់ជា US ($)">
                <input type="text" class="btn-input" id="txtrail" placeholder="ប្រាក់អាប់រៀល (៛)">
                <button type="button" class="btn btn-info" style="width: 100px;">Print & Save</button>
                <button type="button" class="btn btn-info" style="width: 100px;">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px;">Close</button>
              </div>
          </div>
        </div>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>
@endsection
