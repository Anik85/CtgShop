<x-frontend.layouts.master_dashbord>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="/storage/product/{{$product->product_image}}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">{{$product->product_name}}</h1>
                    <p class="h3 py-2">
                        <div class="product-price primary-color float-left">
                            <span class="save-price font-md color m-1-15">TK {{$product->price}}</span>
                        </div>
                    </p>
                        <p class="font-lg">{{$product->short_descp}}</p>

                        <div class="col-auto">
                            <ul class="list-inline pb-3">
                                <li class="list-inline-item text-right">
                                </li>
                                <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                            </ul>
                        </div>

                        <div class="row pb-3">
                            <div class="col d-grid">
                                <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                            </div>
                        </div>



                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


</x-frontend.layouts.master_dashbord>


<div class="card-body">
    <h1 class="h2">Active Wear</h1>
    <p class="h3 py-2">$25.00</p>
    <p class="py-2">
        <i class="fa fa-star text-warning"></i>
        <i class="fa fa-star text-warning"></i>
        <i class="fa fa-star text-warning"></i>
        <i class="fa fa-star text-warning"></i>
        <i class="fa fa-star text-secondary"></i>
        <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
    </p>
    <ul class="list-inline">
        <li class="list-inline-item">
            <h6>Brand:</h6>
        </li>
        <li class="list-inline-item">
            <p class="text-muted"><strong>Easy Wear</strong></p>
        </li>
    </ul>

    <h6>Description:</h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
    <ul class="list-inline">
        <li class="list-inline-item">
            <h6>Avaliable Color :</h6>
        </li>
        <li class="list-inline-item">
            <p class="text-muted"><strong>White / Black</strong></p>
        </li>
    </ul>

    <h6>Specification:</h6>
    <ul class="list-unstyled pb-3">
        <li>Lorem ipsum dolor sit</li>
        <li>Amet, consectetur</li>
        <li>Adipiscing elit,set</li>
        <li>Duis aute irure</li>
        <li>Ut enim ad minim</li>
        <li>Dolore magna aliqua</li>
        <li>Excepteur sint</li>
    </ul>

    <form action="" method="GET">
        <input type="hidden" name="product-title" value="Activewear">
        <div class="row">
            <div class="col-auto">
                <ul class="list-inline pb-3">
                    <li class="list-inline-item">Size :
                        <input type="hidden" name="product-size" id="product-size" value="S">
                    </li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                </ul>
            </div>
            <div class="col-auto">
                <ul class="list-inline pb-3">
                    <li class="list-inline-item text-right">
                        Quantity
                        <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                    </li>
                    <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                    <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                    <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                </ul>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col d-grid">
                <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
            </div>
            <div class="col d-grid">
                <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
            </div>
        </div>
    </form>

</div>
