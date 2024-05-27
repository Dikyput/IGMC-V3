@extends('layouts.app')
@section('content')
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <p class="woocommerce-result-count">Showing 1–12 of 16 results</p>
                    </div>

                    <div class="col-md-auto">
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby" aria-label="Shop order">
                                <option value="menu_order" selected="selected">Default Sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row gy-40">
                @foreach ($datashop as $item)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-product product-grid">
                            <div class="product-img">
                                <img src="assets/img/product/{{ $item->foto }}" alt="Product Image">
                                <div class="overlay gradient-border"></div>
                                <div class="actions">
                                    <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="#QuickView{{ $item->id }}" class="icon-btn popup-content"><i
                                            class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html">{{ $item->name_item }}</a></h3>
                                <span class="price">{{ $item->price }}</span>
                            </div>
                        </div>
                    </div>

                    <div id="QuickView{{ $item->id }}" class="white-popup mfp-hide">
                        <div class="container bg-black3 rounded-10">
                            <div class="row gx-60">
                                <div class="col-lg-6">
                                    <div class="product-big-img">
                                        <div class="img"><img src="assets/img/product/product_details_1_1.png"
                                                alt="Product Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 align-self-center">
                                    <div class="product-about">
                                        <p class="price">{{ $item->price }}<del>{{ $item->price }}</del></p>
                                        <h2 class="product-title">{{ $item->name_item }}</h2>
                                        <div class="product-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                <span style="width:100%">Rated <strong class="rating">5.00</strong>
                                                    out of 5 based on
                                                    <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <a href="shop-details.html" class="woocommerce-review-link">(<span
                                                    class="count">4</span>
                                                customer reviews)</a>
                                        </div>
                                        <p class="text">{{ $item->details }}</p>
                                        <div class="mt-2 link-inherit">
                                            <p>
                                                <strong class="text-white me-3">Availability:</strong>
                                                <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In
                                                    Stock</span>
                                            </p>
                                        </div>
                                        <div class="actions">
                                            <div class="quantity">
                                                <input type="number" class="qty-input" step="1" min="1"
                                                    max="100" name="quantity" value="1" title="Qty">
                                                <button class="quantity-plus qty-btn"><i
                                                        class="far fa-chevron-up"></i></button>
                                                <button class="quantity-minus qty-btn"><i
                                                        class="far fa-chevron-down"></i></button>
                                            </div>
                                            <button class="th-btn">Add to Cart <span class="icon"><i
                                                        class="fa-solid fa-arrow-right ms-3"></i></span></button>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product_meta">
                                            <span class="sku_wrapper">SKU: <span
                                                    class="sku">Wheel-fits-chevy-camaro</span></span>
                                            <span class="posted_in">Category: <a href="shop.html">Dresses &
                                                    Bags</a></span>
                                            <span>Tags: <a href="shop.html">Products</a><a href="shop.html">Bags</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button title="Close (Esc)" type="button" class="mfp-close text-white">×</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
