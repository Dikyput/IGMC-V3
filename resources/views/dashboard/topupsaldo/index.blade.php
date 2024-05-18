<!doctype html>
<html class="no-js " lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IGMC V3</title>
    <meta name="author" content="IGMCV3">
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
                    <div class="woocommerce-message">Shipping costs updated.</div>
                </div>
                <form action="#" class="woocommerce-cart-form">
                    <table class="cart_table">
                        <thead>
                            <tr>
                                <th class="cart-col-image">Image</th>
                                <th class="cart-col-productname">Product Name</th>
                                <th class="cart-col-price">Price</th>
                                <th class="cart-col-quantity">Quantity</th>
                                <th class="cart-col-total">Total</th>
                                <th class="cart-col-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart_item">
                                <td data-title="Product">
                                    <a class="cart-productimage" href="shop-detailis.html"><img width="91" height="91" src="assets/img/product/product_thumb_1_1.png" alt="Image"></a>
                                </td>
                                <td data-title="Name">
                                    <a class="cart-productname" href="shop-detailis.html">Gaming Headphone</a>
                                </td>
                                <td data-title="Price">
                                    <span class="amount"><bdi><span>$</span>18</bdi></span>
                                </td>
                                <td data-title="Quantity">
                                    <div class="quantity">
                                        <button class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                        <input type="number" class="qty-input" value="1" min="1" max="99">
                                        <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                                    </div>
                                </td>
                                <td data-title="Total">
                                    <span class="amount"><bdi><span>$</span>18</bdi></span>
                                </td>
                                <td data-title="Remove">
                                    <a href="#" class="remove"><i class="fal fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td data-title="Product">
                                    <a class="cart-productimage" href="shop-detailis.html"><img width="91" height="91" src="assets/img/product/product_thumb_1_2.png" alt="Image"></a>
                                </td>
                                <td data-title="Name">
                                    <a class="cart-productname" href="shop-detailis.html">Gaming Mouse</a>
                                </td>
                                <td data-title="Price">
                                    <span class="amount"><bdi><span>$</span>18</bdi></span>
                                </td>
                                <td data-title="Quantity">
                                    <div class="quantity">
                                        <button class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                        <input type="number" class="qty-input" value="1" min="1" max="99">
                                        <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                                    </div>
                                </td>
                                <td data-title="Total">
                                    <span class="amount"><bdi><span>$</span>18</bdi></span>
                                </td>
                                <td data-title="Remove">
                                    <a href="#" class="remove"><i class="fal fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td data-title="Product">
                                    <a class="cart-productimage" href="shop-detailis.html"><img width="91" height="91" src="assets/img/product/product_thumb_1_3.png" alt="Image"></a>
                                </td>
                                <td data-title="Name">
                                    <a class="cart-productname" href="shop-detailis.html">Gaming Keyboard</a>
                                </td>
                                <td data-title="Price">
                                    <span class="amount"><bdi><span>$</span>18</bdi></span>
                                </td>
                                <td data-title="Quantity">
                                    <div class="quantity">
                                        <button class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                        <input type="number" class="qty-input" value="1" min="1" max="99">
                                        <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                                    </div>
                                </td>
                                <td data-title="Total">
                                    <span class="amount"><bdi><span>$</span>18</bdi></span>
                                </td>
                                <td data-title="Remove">
                                    <a href="#" class="remove"><i class="fal fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6" class="actions">
                                    <div class="th-cart-coupon">
                                        <input type="text" class="form-control" placeholder="Coupon Code...">
                                        <button type="submit" class="th-btn">Apply Coupon</button>
                                    </div>
                                    <button type="submit" class="th-btn">Update cart</button>
                                    <a href="shop.html" class="th-btn">Continue Shopping</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <div class="row justify-content-end">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <h2 class="h4 summary-title">Cart Totals</h2>
                        <table class="cart_totals">
                            <tbody>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td data-title="Cart Subtotal">
                                        <span class="amount"><bdi><span>$</span>47</bdi></span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping and Handling</th>
                                    <td data-title="Shipping and Handling">
                                        <ul class="woocommerce-shipping-methods list-unstyled">
                                            <li>
                                                <input type="radio" id="free_shipping" name="shipping_method" class="shipping_method">
                                                <label for="free_shipping">Free shipping</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="flat_rate" name="shipping_method" class="shipping_method" checked="checked">
                                                <label for="flat_rate">Flat rate</label>
                                            </li>
                                        </ul>
                                        <p class="woocommerce-shipping-destination">
                                            Shipping options will be updated during checkout.
                                        </p>
                                        <form action="#" method="post">
                                            <a href="#" class="shipping-calculator-button">Change address</a>
                                            <div class="shipping-calculator-form">
                                                <p class="form-row">
                                                    <select class="form-select">
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="BD" selected="selected">Bangladesh</option>
                                                    </select>
                                                </p>
                                                <p>
                                                    <select class="form-select">
                                                        <option value="">Select an option…</option>
                                                        <option value="BD-05">Bagerhat</option>
                                                        <option value="BD-01">Bandarban</option>
                                                        <option value="BD-02">Barguna</option>
                                                        <option value="BD-06">Barishal</option>
                                                    </select>
                                                </p>
                                                <p class="form-row">
                                                    <input type="text" class="form-control" placeholder="Town / City">
                                                </p>
                                                <p class="form-row">
                                                    <input type="text" class="form-control" placeholder="Postcode / ZIP">
                                                </p>
                                                <p>
                                                    <button class="th-btn">Update</button>
                                                </p>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="order-total">
                                    <td>Order Total</td>
                                    <td data-title="Total">
                                        <strong><span class="amount"><bdi><span>$</span>47</bdi></span></strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="wc-proceed-to-checkout mb-30">
                            <a href="checkout.html" class="th-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
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
</body>


</html>
