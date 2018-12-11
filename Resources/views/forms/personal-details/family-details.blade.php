@extends('profile::personal-details-master')
@section('form-content')
<form action="{{route('family.store')}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <table id="myTable" class="table table-bordered dynamic-list">
                    <thead>
                        <tr>
                            <th>{{ucwords(__('profile::family-detail.name'))}}</th>
                            <th>{{ucwords(__('profile::family-detail.relationship'))}}</th>
                            <th>{{ucwords(__('profile::family-detail.ic-number'))}}</th>
                            <th>{{ucwords(__('profile::family-detail.mobile-number'))}}</th>
                            <th>{{ucwords(__('profile::family-detail.occupation'))}}</th>
                            <th>{{ucwords(__('profile::family-detail.income-tax-number'))}}</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                <input type="text" name="name" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="relationship_id" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="ic_number" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="mobile_number" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="occupation" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="income_tax_number" class="form-control" />
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
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg pull-right">
            Submit
        </button>
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

            cols += '<td><input type="text" class="form-control" name="name' + counter + '" /></td>';
            cols += '<td><input type="text" class="form-control" name="mail' + counter + '" /></td>';
            cols += '<td><input type="text" class="form-control" name="phone' + counter + '" /></td>';
            cols += '<td><input type="text" class="form-control" name="phone' + counter + '" /></td>';
            cols += '<td><input type="text" class="form-control" name="phone' + counter + '" /></td>';
            cols += '<td><input type="text" class="form-control" name="phone' + counter + '" /></td>';
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
