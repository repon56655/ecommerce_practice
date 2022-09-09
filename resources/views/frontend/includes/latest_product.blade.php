<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            <!-- <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset('Frontend') }}/img/product-1.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Samsung Galaxy s5- 2015</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div> 
                            </div> -->
                            @foreach($product as $product)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset('Backend/image/'.$product->image) }}" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>{{ $product->name }}</h2>
                                <div class="product-carousel-price">
                                    <ins>${{ $product->price }}</ins> <del>$800.00</del>
                                </div> 
                            </div>
                            @endforeach
                            <!-- <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset('Frontend') }}/img/product-3.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>LG Leon 2015</h2>

                                <div class="product-carousel-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset('Frontend') }}/img/product-4.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Sony microsoft</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$200.00</ins> <del>$225.00</del>
                                </div>                            
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset('Frontend') }}/img/product-5.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>iPhone 6</h2>

                                <div class="product-carousel-price">
                                    <ins>$1200.00</ins> <del>$1355.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset('Frontend') }}/img/product-6.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$400.00</ins>
                                </div>                            
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->