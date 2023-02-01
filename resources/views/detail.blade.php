@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{ asset('storage/' . $selectedProduct['image']) }}" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{$selectedProduct['name']}}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            @include('layouts.stars', ['productRating' => $selectedProduct['rating']])
                            @yield('stars')
                        </div>
                        <small class="pt-1">({{$selectedProduct['rating_count']}} Reviews)</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">${{ $selectedProduct['price'] - ($selectedProduct['price'] * $selectedProduct['discount']) }}</h3>
                    <p class="mb-4">{{$selectedProduct['description']}}</p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart</button>
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews ({{$selectedProduct['rating_count']}})</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{$selectedProduct['description']}}.</p>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">{{$selectedProduct['rating_count']}} review for "{{$selectedProduct['name']}}"</h4>
                                    @foreach($rating as $rating)
                                    @if($rating['product_id'] == $selectedProduct['id'])
                                    <div class="media mb-4">
                                        <div class="media-body">
                                            <h6>{{ $rating['reviewName'] }}<small> - <i>{{ $rating['created_at'] }}</i></small></h6>
                                            <div class="text-primary mb-2">
                                                @include('layouts.stars', ['productRating' => $rating['rating']])
                                                @yield('stars')
                                            </div>
                                            <p>{{ $rating['reviewMsg'] }}.</p>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="col-md-6">    
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <form method="post" action="{{url('addRating')}}" id="ratingForm" enctype="multipart/form-data">
                                        @csrf
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="demo">
                                            <div class="ratingControl">
                                              <input type="radio" id="rating-5" name="rating" value="5">
                                              <label class="ratingControl-stars ratingControl-stars--5" for="rating-5">5</label>
                                              <input type="radio" id="rating-45" name="rating" value="4.5">
                                              <label class="ratingControl-stars ratingControl-stars--45 ratingControl-stars--half" for="rating-45">45</label>
                                              <input type="radio" id="rating-4" name="rating" value="4">
                                              <label class="ratingControl-stars ratingControl-stars--4" for="rating-4">4</label>
                                              <input type="radio" id="rating-35" name="rating" value="3.5">
                                              <label class="ratingControl-stars ratingControl-stars--35 ratingControl-stars--half" for="rating-35">35</label>
                                              <input type="radio" id="rating-3" name="rating" value="3">
                                              <label class="ratingControl-stars ratingControl-stars--3" for="rating-3">3</label>
                                              <input type="radio" id="rating-25" name="rating" value="2.5">
                                              <label class="ratingControl-stars ratingControl-stars--25 ratingControl-stars--half" for="rating-25">25</label>
                                              <input type="radio" id="rating-2" name="rating" value="2">
                                              <label class="ratingControl-stars ratingControl-stars--2" for="rating-2">2</label>
                                              <input type="radio" id="rating-15" name="rating" value="1.5">
                                              <label class="ratingControl-stars ratingControl-stars--15 ratingControl-stars--half" for="rating-15">15</label>
                                              <input type="radio" id="rating-1" name="rating" value="1">
                                              <label class="ratingControl-stars ratingControl-stars--1" for="rating-1">1</label>
                                              <input type="radio" id="rating-05" name="rating" value="0.5">
                                              <label class="ratingControl-stars ratingControl-stars--05 ratingControl-stars--half" for="rating-05">05</label>
                                            </div>
                                          </div>
                                    </div>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control" name="reviewMsg"></textarea>
                                        </div>
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary px-3" type="submit" form="ratingForm" value="Submit">Leave Your Review</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You May Also Like</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    @foreach ($similarProducts as $prod)
                    <div class="product-item bg-light">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $prod['image']) }}" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square"
                                onclick="addSingleProductToCart({{ $prod['id'] }})"><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" onclick="addSingleProductToWishList({{ $prod['id'] }})">
                                    <i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="{{ url('/detail' . '/'. $prod['id']) }}" ><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">{{ $prod['name'] }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>${{ $selectedProduct['price'] - ($selectedProduct['price'] * $selectedProduct['discount']) }}</h5><h6 class="text-muted ml-2"><del>${{ $prod['price'] }}</del></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                @include('layouts.stars', ['productRating' => $prod['rating']])
                                @yield('stars')
                                <small>({{ $prod['rating_count'] }})</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
@endsection
<script>
    function addSingleProductToCart(id) {
        // console.log(id);
        $.ajax({
            url: '{{ url('/auth/check') }}',
            success: (data) => {
                // console.log(data);
                if(data == 1){
                    $.ajax({
            url: '{{ url('/add-productID') }}',
            data: {
                id: id
            },
            success: (data) => {
                // console.log(data);
            }
        })
                }
                else {
                    alert("Please Login First")
                }
            }
        })    
    }
    function addSingleProductToWishList(id) {
        $.ajax({
            url: '{{ url('/auth/check') }}',
            success: (data) => {
                // console.log(data);
                if(data == 1){
                    $.ajax({
                        url: '{{ url('/add-productID-Wishlist') }}',
                        data: {
                            id: id
                        },
                        success: (data) => {
                            // console.log(data);
                        }
                    })
                }
                else {
                    alert("Please Login First")
                }
            }
        })    
    }
    function reviewProductInDetail(id) {
        $.ajax({
            url: '{{ url('/detail') }}',
            data: {
                id: id
            },
            success: (data) => {
                console.log(data);
            }
        })
    }

</script>