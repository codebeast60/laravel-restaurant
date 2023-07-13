@extends('layouts.app')
@section('content')

<div class="page-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb bg-transparent py-0 mb-5">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="blog.php">Menu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$item->Name}}</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- .row -->

        <div class="row">
            <div class="col-lg-8">

                <article class="blog-details">



                    <div class="w3-content" style="max-width:600px;">
                        <img class="mySlides" src="/images/products/{{$item->image_path}}"
                            style="width:100%;max-height:500px">


                    </div>

                    <div class="w3-center">

                    </div>
                    <script>
                        var slideIndex = 1;
              showDivs(slideIndex);

              function plusDivs(n) {
                showDivs(slideIndex += n);
              }

              function currentDiv(n) {
                showDivs(slideIndex = n);
              }

              function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) {
                  slideIndex = 1
                }
                if (n < 1) {
                  slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" w3-red", "");
                }
                x[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " w3-red";
              }
                    </script>

                    <h2 class="post-title mt-3  h1">
                        {{$item->Name}} | {{$item->price}} $</span>
                    </h2>
                    <div class="post-content">
                        <p> </p>
                    </div>
                    <div class="post-tags">
                        <!-- <a href="#" class="tag-link"><?php echo $item['price'] ?> $</a><br> -->

                        <!-- <span class="tag-link"><?php echo $item['add_Date'] ?></span> -->
                    </div>
                </article> <!-- .blog-details -->


            </div>
            <div class="col-lg-4">
                <div class="sidebar">


                    <div class="sidebar-block">
                        <h3 class="sidebar-title">recommended for you</h3>
                        @foreach($items as $item)

                        <div class="blog-item">
                            <a class="post-thumb" href="#">
                                <img style="width:100%" src="/images/products/{{$item->image_path}}" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a class="text-decoration-none" href="#">{{$item->price}} $</a>
                                </h5><br>

                                <div class="meta">

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>



                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                            necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente
                            consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .page-section -->











@endsection