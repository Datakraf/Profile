<form action="{{$actionUrl}}" method="{{$method}}">
    <ul class="nav nav-tabs nav-tabs-primary">
        <li class="nav-item">
            <a class="nav-link active show" data-toggle="tab" href="#personal-detail">Personal Information</a>
        </li>
        <li><a class="nav-link" data-toggle="tab" href="#family-detail">Family Information</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="personal-detail">
            @include('profile::forms.personal-detail')
        </div>
        <div class="tab-pane fade" id="family-detail">
            @include('profile::forms.family-detail')
        </div>
    </div>
</form>

@section('page-js')
<script>
    $(document).ready(function () {
        var counter = 0;

        $("#addrow").on("click", function () {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><input type="text" class="form-control" name="name' + counter + '" /></td>';
            cols += '<td><input type="text" class="form-control" name="mail' + counter + '" /></td>';
            cols += '<td><input type="text" class="form-control" name="phone' + counter + '" /></td>';

            cols +=
                '<td><input type="button" class="ibtnDel btn btn-md btn-danger " value="Delete"></td>';
            newRow.append(cols);
            $("table.order-list").append(newRow);
            counter++;
        });



        $("table.order-list").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();
            counter -= 1
        });


    });

    function calculateRow(row) {
        var price = +row.find('input[name^="price"]').val();

    }

    function calculateGrandTotal() {
        var grandTotal = 0;
        $("table.order-list").find('input[name^="price"]').each(function () {
            grandTotal += +$(this).val();
        });
        $("#grandtotal").text(grandTotal.toFixed(2));
    }

</script>

@endsection
