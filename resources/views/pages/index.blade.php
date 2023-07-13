@extends('layouts.app')
@section('content')
<div class="page-hero bg-image overlay-dark" style="background-image: url(/images/pics/home.jpg);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">Let's make your life happier</span>
            <h1 class="display-4">Healthy Living</h1>

        </div>
    </div>
</div>
<div class="page-section pb-0 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <h1>Welcome to Your <br> Home</h1>
                <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                    accusam et justo duo dolores et ea rebum. Accusantium aperiam
                    earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi
                    accusantium! Placeat voluptates esse ut optio facilis!</p>
                <a href="about.php" class="btn btn-primary">Learn More</a>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                <div class="img-place custom-img-1">
                    <img src="/images/pics/Burger.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp">our Products</h1>
        <div class="row mt-5">
            @foreach($items as $item)
            <div class="col-lg-4 py-2 wow zoomIn">
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category ">
                            <a href="#" class="price text-decoration-none">{{$item->price}} $<i
                                    class="fa-duotone fa-dollar-sign"></i></a>
                        </div>
                        <a href="blog-details.php?itemid= " class="post-thumb">
                            <img src="/images/products/{{$item->image_path}}" alt="">

                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title">{{$item->Name}}</h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <div class="avatar-img">
                                    <!-- <img src="../assets/img/person/person_1.jpg" alt=""> -->
                                </div>
                                <!-- <span>Roger Adams</span> -->
                            </div>
                            <span class="mai-time"></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="col-12 text-center mt-4 wow zoomIn">
                <a href="/pages/items" class="btn btn-primary">See more</a>
            </div>

        </div>
    </div>
</div>

{{-- slide --}}
<div class="container">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/pics/image1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/pics/image2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/pics/image3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/pics/image5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
{{-- end slide --}}

{{-- <div id="carouselExampleControls" class="carousel slide mt-2 mb-2" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/images/pics/image1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/pics/image2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/pics/image3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/pics/image5.jpg" alt="fourth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> --}}

<div class="container mt-4 mb-3">
    <div class="row">
        <div class="col-lg-8">
            <img class="img-fluid wow fadeInLeft" style="width:100%" src="/images/pics/image1.jpg" alt="">
        </div>
        <div class="col lg-4 mt-3 wow fadeInRight">
            <h3>describe your feeling</h3>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima at fugiat ipsum ratione veniam harum
            praesentium, fuga qui. Officia molestiae provident, distinctio aliquam id sequi, impedit a tenetur facilis
            quo illo. Expedita voluptatibus iste mollitia provident quibusdam! Ducimus, facilis accusantium. Voluptate,
            odio qui. Sint commodi unde sequi sapiente voluptatibus amet deleniti explicabo quis accusantium assumenda.
            Amet reprehenderit eligendi quaerat adipisci velit sequi aperiam voluptas, ea distinctio eos laborum culpa
            cupiditate voluptatem perferendis laudantium veritatis. Fugiat rerum consequuntur dolorem quam vero?
        </div>
    </div>
</div>





@endsection