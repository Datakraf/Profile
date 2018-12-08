@extends('profile::personal-details-master')
@section('form-content')
<form action="{{$actionUrl}}" method="{{$method}}">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <table id="myTable" class="table table-bordered dynamic-list">
                    <thead>
                        <tr>
                            <th>{{ucwords(__('profile::academic.institution'))}}</th>
                            <th>{{ucwords(__('profile::academic.study-level'))}}</th>
                            <th>{{ucwords(__('profile::academic.start-year'))}}</th>
                            <th>{{ucwords(__('profile::academic.end-year'))}}</th>
                            <th>{{ucwords(__('profile::academic.result'))}}</th>
                            <th>{{ucwords(__('profile::academic.course'))}}</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" name="institution" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="study_level" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="start_year" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="end_year" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="result" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="course" class="form-control" />
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

            cols += '<td><input type="text" class="form-control" name="institution' + counter +
                '" /></td>';
            cols += '<td><input type="text" class="form-control" name="study_level' + counter +
                '" /></td>';
            cols += '<td><input type="text" class="form-control" name="start_year' + counter +
                '" /></td>';
            cols += '<td><input type="text" class="form-control" name="end_year' + counter +
                '" /></td>';
            cols += '<td><input type="text" class="form-control" name="result' + counter + '" /></td>';
            cols += '<td><input type="text" class="form-control" name="course' + counter + '" /></td>';
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
