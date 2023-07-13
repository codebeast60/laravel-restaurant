@extends('layouts.app')
@if(Auth::check() && Auth::user()->groupID === 1 )
@section('content')
@if(session()->has('message'))
<div class="alert alert-success text-center" role="alert">
    {{session()->get('message')}}
</div>
@endif
<h1 class="text-center">welcome <span class="text-primary">{{Auth::user()->name}}</span></h1>

<div class="container">

    <div class="card mb-4 " style="margin-top:2rem;">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#cat ID</th>
                    <th scope="col">cat Name</th>
                    <th scope="col">cat picture</th>
                    <th scope="col">Edit</th>
                    <th scope="col">DELETE</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $cat)
                <tr>
                    <th style="width:20px;" scope="row">{{$cat->c_id}}</th>
                    <td>{{$cat->Name}}</td>
                    <td><img class="rounded-circle" width="90" height="90" src="/images/category/{{$cat->cat_pic}}">
                    </td>
                    <td>
                        <a href="/admin/category/{{$cat->c_id}}/edit" style="padding:5px 10px;margin-top:20px"
                            class="btn btn-success btn-sm text-white"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="/admin/category/{{$cat->c_id}}">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                class="rounded fw-bold text-light p-2 mt-3 text-decoration-none bg-danger border-0 ">Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<a href="/admin/category/create" class="rounded fw-bold text-light p-2 text-decoration-none bg-primary link-danger">New
    category</a>
<hr class="mt-5">

<div id="my-ads" class="card mb-4 " style="margin-top:2rem;">
    <h5 class="card-header text-center bg-dark text-white p-3 ">items </h5>
    <div class="card-body" style="background-color:#dbf3d7">

        <div class="row">



            @foreach($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-3 pb-3">
                <div class="thumbnail item-box">
                    <span class="price">$ {{$item['price']}} </span>
                    {{-- <img class='img-responsive' style='width:180px;height:200px;'
                        src='admin/uploads/items/no-profile.jpg'> --}}
                    <img class='img-responsive' style='width:250px;height:200px;'
                        src="/images/products/{{$item->image_path}}">

                    <div class='caption'>
                        <h4 class="htitle"><a href="items.php?itemid=' . $item['item_id'] . '">{{$item->Name}}</a>
                        </h4>
                        {{-- <p class="commentd">{{$item->Name}}</p> --}}
                        <a style="position:absolute; top:300px;left:2px;width:55px;height:30px;padding:0"
                            class="btn btn-primary" href="/admin/item/{{$item->item_id}}/edit"><i
                                class="fa-regular fa-pen-to-square"></i> edit </a>
                        {{-- <a style="position:absolute; top:300px;left:60px;width:70px;height:30px;padding:0"
                            class="btn btn-danger confirm"
                            href="profile.php?do=DeleteItem&itemid=' . $link . '&memberid=' .  $linkuser . '"
                            style="margin:5px;"><i class="fa-solid fa-trash"></i> Delete
                        </a> --}}
                        <div class="position-absolute" style="margin-top:80px; margin-left:70px;height:80px">

                            <form method="POST" action="/admin/item/{{$item->item_id}}">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="rounded fw-bold text-light p-2 mt-3 text-decoration-none bg-danger border-0 ">Delete
                                </button>
                            </form>
                        </div>
                        <div class="dated">{{$item->updated_at}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</div>

<a href="/admin/item/create" class="btn btn-primary btn-sm mb-3"
    style="width:150px;margin-bottom:-50px;margin-left:40px"><i class="fa-solid fa-plus"></i> add new item</a>




@endsection

@else
@section('content')
<h1 class="text-center text-uppercase fw-bold ">you can't access this page this section just for admin</h1>
@endsection
{{header("Refresh:4;url=/")}}

@endif