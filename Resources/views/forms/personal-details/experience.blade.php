@extends('profile::personal-details-master')
@section('form-content')
<div class="container">
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#add-family-records">
                <i class="ti ti-plus"></i> Add Employment History Record
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered mt-3">
                <thead class="thead-light">
                    @include('profile::partials.experience.table-header')
                </thead>
                <tbody>
                    @include('profile::partials.experience.record')
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('page-js')
<script type="text/javascript">
    $(document).ready(function () {
        var counter = 0;

        $("#addrow").on("click", function () {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><input type="text" class="form-control" name="company' + counter +
                '" /></td>';
            cols += '<td><input type="text" class="form-control" name="position' + counter +
                '" /></td>';
            cols += '<td><input type="text" class="form-control" name="start_year' + counter +
                '" /></td>';
            cols += '<td><input type="text" class="form-control" name="end_year' + counter +
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
