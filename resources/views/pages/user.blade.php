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
                                Total Amount
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


@endsection
