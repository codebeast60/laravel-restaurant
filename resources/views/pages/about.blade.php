@extends('layouts.app')
@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(/images/pics/image2.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            {{-- <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">about</li>
                </ol>
            </nav> --}}
            <h1 class="font-weight-normal">about us</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->


<div class="page-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp">
                <h1 class="text-center mb-3">Welcome into your Home</h1>
                <div class="text-lg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla
                        animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut
                        consequuntur. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque,
                        eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur.</p>
                    <p>Expedita iusto sunt beatae esse id nihil voluptates magni, excepturi distinctio impedit illo,
                        incidunt iure facilis atque, inventore reprehenderit quidem aliquid recusandae. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit.
                        Laudantium quod ad sequi atque accusamus deleniti placeat dignissimos illum nulla voluptatibus
                        vel optio, molestiae dolore velit iste maxime, nobis odio molestias!</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="page-section" id="contact-us">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Get in Touch</h1>

        <form class="contact-form mt-5" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="row mb-3">
                <div class="col-sm-6 py-2 wow fadeInLeft">
                    <label for="fullName">Name</label>
                    <input type="text" id="fullName" class="form-control" name="name" placeholder="Full name..">
                </div>
                <div class="col-sm-6 py-2 wow fadeInRight">
                    <label for="emailAddress">Email</label>
                    <input type="text" id="emailAddress" class="form-control" name="email"
                        placeholder="Email address..">
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" class="form-control" name="subject" placeholder="Enter subject..">
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control" name="message" rows="8"
                        placeholder="Enter Message.."></textarea>
                </div>
            </div>
            <button type="submit" name="send" class="btn btn-primary wow zoomIn">Send Message</button>
        </form>
    </div>
</div>

<h3 class="text-center mb-5">visit us </h3>
<!--The div element for the map -->
<div class="container mb-5 wow fadeInLeft " id="visit-us">
    <div class="row m-auto ">
        <div class="col-lg-12 ">
            <!-- <iframe style="width:100%;height:300px" class="ms-lg-5" src="https://www.google.com/maps?q=	36.778259,-119.417931&hl=es;z=14&output=embed"></iframe> -->
            <iframe style="width:100%;height:300px"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3289.845893983814!2d35.94807971547826!3d34.45605960378811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15221fcc9a97fb75%3A0x6afc85a7f05be054!2z2YXYt9i52YUg2KfZhtinINmI2YrYp9mD!5e0!3m2!1sen!2slb!4v1677487580100!5m2!1sen!2slb"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>



@endsection