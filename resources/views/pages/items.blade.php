@extends('layouts.app')
@section('content')

{{-- @foreach ($categories as $category)
<h2>{{ $category->Name }}</h2>
<ul>
    @foreach ($category->item as $ite )
    <li>{{ $ite->Name }}</li>
    <li>{{ $ite->price }}</li>
    @endforeach
</ul>
@endforeach --}}


@php
$i=1;
$j=1;
@endphp

{{-- @foreach ($categories as $category)
<div class="menu tabs">
    <a href="#" class="active" data-cont=".class{{$i}}">{{$category->Name}} </a>
@php
$i++;
@endphp
</div>
@endforeach--}}
{{--
<div class="menu tabs">
    <a href="#" class="active" data-cont=".one1">Soup </a>
    <a href="#" data-cont=".one2">Cold Appetizers</a>
    <a href="#" data-cont=".one3">Hot Appetizers</a>
    <a href="#" data-cont=".one4">Salad</a>
    <a href="#" data-cont=".one5">seafood Appetizers</a>
    <a href="#" data-cont=".one6">Nayeh</a>
    <a href="#" data-cont=".one7">Platters</a>
    <a href="#" data-cont=".one8">Mashawi</a>
    <a href="#" data-cont=".one9">Turkish Kabab</a>
    <a href="#" data-cont=".one10">Kids Meals</a>
    <a href="#" data-cont=".one11"> Cold Drinks </a>
    <a href="#" data-cont=".one12">Hot Drinks </a>
    <a href="#" data-cont=".one13">Milkshake And Frappe</a>
    <a href="#" data-cont=".one14">Ice cream </a>
    <a href="#" data-cont=".one15">smoothies </a>
    <a href="#" data-cont=".one16">cake </a>
    <a href="#" data-cont=".one17">Turkish Dessert </a>
    <a href="#" data-cont=".one18">Shisha </a>


</div> --}}


<div class="page-section" style=" background-color:rgb(206 206 206)">
    <div class="container content">
        <!-- start cat  -->
        <div class="row .one{{$j}} mb-5">
            @foreach ($categories as $category)


            <h2 class="text-center fw-bold ">{{ $category->Name }}</h2>
            <img src="/images/category/{{$category->cat_pic}}" style="width:350px;height:300px"
                class="rounded-circle img-responsive m-auto mb-5 ">


            <hr>

            <div class="col-lg-12">
                <div class="row ">
                    @foreach ($category->item as $ite )
                    <div class="col-sm-6 col-lg-3 py-3">
                        <div class="card-blog ">
                            <div class="header" style="height:200px">
                                <div class="post-category">
                                    <a href="#" class="text-decoration-none">{{$ite->price}} $</a>
                                </div>
                                <a href="#" class="post-thumb">
                                    <img src="/images/products/{{$ite->image_path}}" alt="">
                                </a>
                            </div>
                            <div class="body line">
                                <h5 class="post-title"><a href="/admin/item/{{$ite->item_id}}"
                                        class="text-decoration-none ">{{$ite->Name}}</a>
                                </h5>
                                <div class="site-info">
                                    <div class="avatar mr-2">
                                        <div class="avatar-img">
                                            <!-- <img src="../assets/img/person/person_1.jpg" alt=""> -->
                                        </div>
                                        <!-- <span>Roger Adams</span> -->
                                    </div>
                                    <!-- <span class="mai-time" style="font-size:14px;margin-top:5px;"></span> -->
                                    <i class="fa-solid fa-bolt"></i>
                                    <span>{{$ite->updated_at}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                    $j++;

                    @endphp
                    @endforeach
                    <hr>

                    @endforeach
                </div> <!-- .row -->
            </div>
        </div>
        <!-- end of cat  -->
    </div>
</div>

<script>
    let tabs = Array.from(document.querySelectorAll(".tabs a"));
   let divs = Array.from(document.querySelectorAll(".content > div"));
   tabs.forEach((ele) => {
     ele.addEventListener("click", function(e) {
       tabs.forEach((ele) => {
         ele.classList.remove("active");
       });
       e.currentTarget.classList.add("active");
       divs.forEach((div) => {
         div.style.display = "none";
       });
       document.querySelector(e.currentTarget.dataset.cont).style.display = "block";
       document.querySelector(e.currentTarget.dataset.cont).classList.remove("d-none");
     });
   });
</script>


@endsection