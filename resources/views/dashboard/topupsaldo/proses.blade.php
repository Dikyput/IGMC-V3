<!doctype html>
<html class="no-js " lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IGMC V3</title>
    <meta name="author" content="IGMCV3">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="IGMC V3 - Indonesia GTA V Master Championship">
    <meta name="keywords" content="IGMC V3 - Indonesia GTA V Master Championship">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    @include('landingpage.public.core')
</head>

<body>
    <div class="cursor-animation cursor-image"></div>

    <div class="preloader ">
        <button class="th-btn preloaderCls">CANCEL PRELOADER </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>


    
    @include('landingpage.public.header')
    <!--==============================
        Product Area
        ==============================-->
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
                                        <a class="cart-productimage" href=""><img width="91" height="91" src="assets/img/product/product_thumb_1_1.png" alt="Image"></a>
                                    </td>
                                    <td data-title="OrderId">
                                        <a class="cart-orderid" href="">{{$pay->order_id}}</a>
                                    </td>
                                    <td data-title="Name">
                                        <a class="cart-productname" href="shop-details.html">{{$pay->id_saldo}} - {{$pay->harga}}</a>
                                    </td>
                                    <td data-title="Price">
                                        <span class="amount"><bdi>{{ \App\Helpers\Rupiah::formatRupiah($pay->harga) }}</bdi></span>
                                    </td>
                                    <td data-title="Quantity">
                                        <a class="amount">{{$pay->qty}}x</a>
                                    </td>
                                    <td data-title="Total">
                                        <button type="button" data-snap-token="{{ $pay->snap_token }}" data-transaction-id="{{ $pay->id }}" class="th-btn pay-button">Purchase order</button>
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
                                    <td data-title="Total" colspan="4"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ \App\Helpers\Rupiah::formatRupiah($pay->total) }}</bdi></span></strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                @endforeach          
            </div>
        </div>
    @include('landingpage.public.footer')
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    
    @include('landingpage.public.script')
    
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-p1W9RBa616-_sWXB"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("Document is ready");

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
                            console.error("Error during the payment success callback:", xhr.responseText);
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


</body>


</html>
