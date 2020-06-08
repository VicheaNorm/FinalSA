@extends('layouts.dashboard')

@section('content')
{{-- Content --}}
<form class="form-horizontal" action="{{ route('expense')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container-fluid" style="margin-left: 270px; width: 85%">
    <h3 class="card-title" style="font-family: ubuntu;"> EXPENSE</h3>
    <div class="container-fluid">
        <div class="row" style="width: 100%; height: 120px; background-color: #ff8000; border-radius: 5px">
            <div class="col-xl ">
                <div class="form-group">
                <label style="padding-top: 5px">Item</label>
                <input type="text" name="item" class="form-control" id="txtcode" placeholder="Enter Items" name="txtcode">
            </div>
            </div>
        <div class="col-xl ">
            <div class="form-group">
                <label style="padding-top: 5px">Description</label>
                <input type="text" name="description" class="form-control" id="txtcode" placeholder="Description" name="txtcode">
            </div>
        </div>
        <div class="col-xl ">
            <div class="form-group">
            <label style="padding-top: 5px">Date</label>
            <input type="date" name="date" class="form-control" id="txtcode" placeholder="Description" name="txtcode">
        </div>
        </div>
        <div class="col-xl ">
            <div class="form-group">
                <label style="padding-top: 5px">Cost</label>
                <input type="text" name="cost" class="form-control" id="txtcode" placeholder="Enter Cost" name="txtcode">
            </div>
        </div>
        <div class="col-xl ">
            <div class="form-group">
                <label style="padding-top: 5px">Qty</label>
                <input type="text" name="qty" class="form-control" id="txtcode" placeholder="Enter QTY" name="txtcode">

            </div>
        </div>
        <div class="col-xl ">
            <div class="form-group">
                <label style="padding-top: 5px">Other</label>
                <input type="text" name="other" class="form-control" id="txtcode" placeholder="Other......" name="txtcode">
                <button type="submit" name="submit" class="btn btn-success" style="width: 120px; height: 30px; padding:0px">Add</button>
            </div>
        </div>
        <div class="col-xl ">
            <div class="form-group">
                <label style="padding-top: 5px">Amount Notes</label>
                <input type="text" name="amountnote" class="form-control" id="txtcode" placeholder="Enter Amount" name="txtcode">
                <a href="" type="reset" class="btn btn-warning" style="height: 30px; width: 150px;padding: 4px;">Clear</a>
            </div>
        </div>
        </div>
    </div>
    </div>
</form>
<!--Table-->
<div class="content" style="margin-top: 5px; margin-left: 285px; width: 81%">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Items
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Cost
                      </th>
                      <th>
                        QTY
                      </th>
                      <th>
                        Other
                      </th>
                      <th class="text-right">
                        Amount Notes
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          001
                        </td>
                        <td>
                          Coffee
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td class="text-right">
                          Simple
                        </td>
                      </tr>
                      <tr>
                        <td>
                          002
                        </td>
                        <td>
                          Coffee
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td class="text-right">
                          Simple
                        </td>
                      </tr>
                      <tr>
                        <td>
                          003
                        </td>
                        <td>
                          Coffee
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td class="text-right">
                          Simple
                        </td>
                      </tr><tr>
                        <td>
                          004
                        </td>
                        <td>
                          Coffee
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td class="text-right">
                          Simple
                        </td>
                      </tr><tr>
                        <td>
                          005
                        </td>
                        <td>
                          Coffee
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td class="text-right">
                          Simple
                        </td>
                      </tr><tr>
                        <td>
                          006
                        </td>
                        <td>
                          Coffee
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td class="text-right">
                          Simple
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
<!--Table-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #2DFF69;">
            {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
            <h2 style="font-family: ubuntu; color: aliceblue; padding: 0px;">Successful</h2>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
@endsection
