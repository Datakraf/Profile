@extends('profile::personal-details-master')
@section('form-content')
<form action="{{$actionUrl}}" method="{{$method}}">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <table id="myTable" class="table table-bordered dynamic-list">
                    <thead>
                        <tr>
                            <th>{{ucwords(__('profile::awards.award'))}}</th>
                            <th>{{ucwords(__('profile::awards.received-date'))}}</th>
                            <th>{{ucwords(__('profile::awards.notes'))}}</th>                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" name="award" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="received_date" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="notes" class="form-control" />
                            </td>                           
                            <td>
                                <a class="deleteRow">
                                    <input type="button" class="btn btn-block" id="addrow" value="Add Row" />
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>
@endsection
@section('page-js')
<script type="text/javascript">
    $(document).ready(function () {
        var counter = 0;

        $("#addrow").on("click", function () {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><input type="text" class="form-control" name="award' + counter +
                '" /></td>';
            cols += '<td><input type="text" class="form-control" name="received_date' + counter +
                '" /></td>';
            cols += '<td><input type="text" class="form-control" name="note' + counter +
                '" /></td>';            
            cols +=
                '<td><input type="button" class="ibtnDel btn btn-block btn-danger " value="Remove"></td>';
            newRow.append(cols);
            $("table.dynamic-list").append(newRow);
            counter++;
        });

        $("table.dynamic-list").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();
            counter -= 1
        });
    });

</script>

@endsection
