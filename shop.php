
<?php
require_once('includes/head.php');
?>
<body>

<?php
require_once('includes/header.php');
?>


<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">


            <div class="slider-area">
                <div class="slider-active owl-carousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                                    <div class="slider-content slider-animated-1 pt-230">
                                        <h1 class="animated" >Lista de Productos</h1>
                                        <p class="animated" > seleccione uno de los productos para agregarlos al carrito de compras. </p>
                                        <div class="slider-btn">
                                            <a class="animated default-btn btn-green-color fa fa-dog" href="shop.php"> Perros</a>
                                            <a class="animated default-btn btn-green-color fa fa-cat" href="contact.php"> Gatos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                </div>
            </div>

        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Inicio</a> <span><i class="fa fa-angle-double-right"></i>Productos</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop-top-bar">
                    <div class="shop-tab-wrap">
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-1" data-toggle="tab">
                                <i class="fa fa-table"></i>
                            </a>
                            <a href="#shop-2" data-toggle="tab">
                                <i class="fa fa-list-ul"></i>
                            </a>
                        </div>
                        <p>Mostrando productos en stock</p>
                    </div>
<!--                    <div class="shop-select">-->
<!--                        <select>-->
<!--                            <option value="">Sort By Popularity</option>-->
<!--                            <option value="">A to Z</option>-->
<!--                            <option value=""> Z to A</option>-->
<!--                            <option value="">In stock</option>-->
<!--                        </select>-->
<!--                    </div>-->
                </div>
                <div class="shop-bottom-area mt-30">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-1.jpg" alt=""></a>
                                            <span>Sale</span>
<!--                                            <div class="product-action">-->
<!--                                                <ul>-->
<!--                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>-->
<!--                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>-->
<!--                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>-->
<!--                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Marker Pen</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$10</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-2.jpg" alt=""></a>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Color Pencil</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-3.jpg" alt=""></a>
                                            <span>New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Color Box</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$30</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-4.jpg" alt=""></a>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Toy mobile</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$40</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-5.jpg" alt=""></a>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Awesome vase</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-6.jpg" alt=""></a>
                                            <span>Sale</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Ceramic vase</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-7.jpg" alt=""></a>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Smart Watch</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$70</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-8.jpg" alt=""></a>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">History Book</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$80</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-1.jpg" alt=""></a>
                                            <span>Sale</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Color Box</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$90</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-12.jpg" alt=""></a>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Marker Pen</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$10</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-10.jpg" alt=""></a>
                                            <span>New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Softball Gloves</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="assets/img/product/pro-11.jpg" alt=""></a>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                                    <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Color Box</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Skating Shoes</span>
                                                <span class="pro-price">$30</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="shop-2" class="tab-pane">
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-3.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-2.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-5.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-6.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-10.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pro-pagination-style text-center mt-30">
            <ul>
                <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/5.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/6.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="assets/img/product/quickview-l1.jpg" alt="">
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l3.jpg" alt="">
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail">
                            <div class="thumb-menu owl-carousel nav nav-style" role="tablist">
                                <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/img/product/quickview-s1.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-2"><img src="assets/img/product/quickview-s2.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-3"><img src="assets/img/product/quickview-s3.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-4"><img src="assets/img/product/quickview-s2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Product Name</h2>
                            <div class="pro-details-rating-wrap">
                                <div class="pro-details-rating">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
                                <span>(1 customer review)</span>
                            </div>
                            <h3>$329</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunca augue quis neque ultrices placerat sit amet quis mauris. Integer urna libero, aliquet neque posu ullamcorper fringilla dolor. Maecenas id mattis magna. </p>
                            <div class="pro-details-size-color2 mt-30">
                                <div class="pro-details-color2-wrap">
                                    <span>Color</span>
                                    <div class="pro-details-color2-content">
                                        <ul>
                                            <li class="blue"></li>
                                            <li class="maroon active"></li>
                                            <li class="gray"></li>
                                            <li class="green"></li>
                                            <li class="yellow"></li>
                                            <li class="white"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-size2">
                                    <span>Size</span>
                                    <div class="pro-details-size2-content">
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality mt-50 mb-45">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                                <div class="pro-details-cart">
                                    <a class="default-btn btn-hover" href="#">Add To Cart</a>
                                </div>
                                <div class="pro-details-wishlist">
                                    <a class=" btn-hover" href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <span><i class="fa fa-check"></i> In stock</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->




<?php
require_once('includes/footer.php');
require_once('includes/js.php');

?>





</body>

</html>