@extends('shop')

@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Age</th>
           <th>Service</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" class="card-img-top"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Quantity">{{ $details['quantity'] }}</td>
                    <td data-th="Price">₹{{ $details['price'] }}</td>

                    <td data-th="Subtotal" class="text-center">₹{{ $details['price']*$details['quantity'] }}</td>
                    <td class="actions">
                        <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="6" class="text-right">
                <a href="{{ url('/dashboard') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Choose More Service</a>
                <button class="btn btn-danger">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.sopping.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("rowId"),
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".delete-product").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection
