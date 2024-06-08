@extends('layouts.app')
@section('content')
    <div class="th-cart-wrapper  space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Cart</div>
            </div>
            @foreach ($paysaldo as $pay)
                <form action="#" class="woocommerce-cart-form">
                    <table class="cart_table mb-20">
                        <thead>
                            <tr>
                                <th class="cart-col-image">Image</th>
                                <th class="cart-col-orderid">Order Id</th>
                                <th class="cart-col-productname">Saldo</th>
                                <th class="cart-col-price">Price</th>
                                <th class="cart-col-quantity">Quantity</th>
                                <th class="cart-col-total">Purchase</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart_item">
                                <td data-title="Product">
                                    <a class="cart-productimage" href=""><img width="91" height="91"
                                            src="assets/img/product/product_thumb_1_1.png" alt="Image"></a>
                                </td>
                                <td data-title="OrderId">
                                    <a class="cart-orderid" href="">{{ $pay->order_id }}</a>
                                </td>
                                <td data-title="Name">
                                    <a class="cart-productname" href="shop-details.html">{{ $pay->id_saldo }} -
                                        {{ $pay->harga }}</a>
                                </td>
                                <td data-title="Price">
                                    <span
                                        class="amount"><bdi>{{ \App\Helpers\Rupiah::formatRupiah($pay->harga) }}</bdi></span>
                                </td>
                                <td data-title="Quantity">
                                    <a class="amount">{{ $pay->qty }}x</a>
                                </td>
                                <td data-title="Total">
                                    <button type="button" data-snap-token="{{ $pay->snap_token }}"
                                        data-transaction-id="{{ $pay->id }}" class="th-btn pay-button">Purchase
                                        order</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="checkout-ordertable">
                            <tr class="woocommerce-shipping-totals shipping">
                                <th>Details</th>
                                <td data-title="Shipping" colspan="4"> Enter your address to view shipping options.
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td data-title="Total" colspan="4"><strong><span
                                            class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol"></span>{{ \App\Helpers\Rupiah::formatRupiah($pay->total) }}</bdi></span></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            @endforeach
        </div>
    </div>
    @include('layouts.script')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-p1W9RBa616-_sWXB"></script>
    <script>
        $(document).ready(function() {
            $('.pay-button').click(function(event) {
                event.preventDefault();
                var snapToken = $(this).data('snap-token');
                var transactionId = $(this).data('transaction-id');
                snap.pay(snapToken, {
                    onSuccess: function(result) {
                        console.log("Payment success:", result);
                        $.post("{{ url('/payment-success') }}/" + transactionId, {
                            _token: "{{ csrf_token() }}"
                        }, function(response) {
                            alert(response.message);
                            location.reload();
                        }).fail(function(xhr, status, error) {
                            console.error("Error during the payment success callback:",
                                xhr.responseText);
                        });
                    },
                    onPending: function(result) {
                        console.log("Payment pending:", result);
                        alert("Payment pending!");
                    },
                    onError: function(result) {
                        console.log("Payment error:", result);
                        alert("Payment error!");
                    }
                });
            });
        });
    </script>
@endsection
