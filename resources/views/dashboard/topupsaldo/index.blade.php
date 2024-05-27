@extends('layouts.app')
@section('content')
    <div class="th-cart-wrapper  space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Shipping costs updated.</div>
            </div>
            <form class="woocommerce-cart-form">
                @csrf
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-col-productname">Saldo</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-Buy">Buy</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datalistsaldo as $saldo)
                            <tr class="cart_item">
                                <td data-title="Product" class="cart-productimage">
                                    {{ $saldo->id_saldo }}
                                </td>
                                <td data-title="Name">
                                    <a class="cart-productname">{{ \App\Helpers\Rupiah::formatRupiah($saldo->nominal) }}</a>
                                </td>
                                <td data-title="Price">
                                    <span class="amount"><bdi><span>IDR.
                                            </span>{{ \App\Helpers\Rupiah::formatRupiah($saldo->harga) }}</bdi></span>
                                </td>
                                <td data-title="Quantity">
                                    <div class="quantity">
                                        <button type="button" class="quantity-minus qty-btn"><i
                                                class="far fa-minus"></i></button>
                                        <input type="number" class="qty-input" name="qty" value="1" min="1"
                                            max="99">
                                        <button type="button" class="quantity-plus qty-btn"><i
                                                class="far fa-plus"></i></button>
                                    </div>
                                </td>
                                <td data-title="Buy">
                                    <button type="button" class="th-btn">Add To Cart</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>

    @include('layouts.footer')
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    @include('layouts.script')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('.cart_item .th-btn').click(function(event) {
                event.preventDefault();
                var button = $(this);
                var tr = $(this).closest('tr');
                var idSaldo = tr.find('.cart-productimage').text();
                var qty = tr.find('.qty-input').val();
                button.prop('disabled', true);
                $.ajax({
                    url: "{{ route('submitcart') }}",
                    type: 'POST',
                    data: {
                        id_saldo: idSaldo,
                        qty: qty
                    },
                    success: function(response) {
                        location.reload();
                        button.prop('disabled', false);
                        console.log(response);
                    },
                    error: function(xhr, status, error) {

                        button.prop('disabled', false);
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
