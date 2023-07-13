@extends('layouts.app')
@if(Auth::check() && Auth::user()->groupID === 1 )
@section('content')



<h1 class="text-center">Edit my Ad</h1>
<div class="create-ad block">
    <div class="container">
        <div class="panel panel-primary">
            <!--<div class="panel-heading">Edit my ad</div>-->
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-horizontal" autocomplete="off" action="/admin/item/{{$item->item_id}}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- start hidden input  -->
                            <input type="hidden" name="itemid" value="{{$item->item_id}}">

                            <!-- end hidden input  -->
                            <!-- start name Field-->
                            <div class="form-group form-group-lg">
                                <label for="user" class="col-sm-3 control-label"> Name</label>
                                <div class="col-sm-10 col-md-9">
                                    <input type="text" name="item_name" id="user" class="form-control live"
                                        value="{{$item->Name}}">
                                </div>
                            </div>
                            <!--end name Field   -->

                            <!-- start category -->
                            <div class="form-group form-group-lg">
                                <label for="user" class="col-sm-2 control-label">category</label>
                                <div class="col-sm-10 col-md-6">
                                    <select class="form-select" name="item_category">
                                        <option value="1" @if($item->Cat_id == 1)
                                            selected
                                            @endif
                                            >Soup</option>
                                        <option value="2" @if($item->Cat_id == 2)
                                            selected
                                            @endif>
                                            Cold Appetizers</option>
                                        <option value="3" @if($item->Cat_id == 3)
                                            selected
                                            @endif>HotAppetizers</option>

                                        <option value="4" @if($item->Cat_id == 4)
                                            selected
                                            @endif>Salad</option>

                                        <option value="5" @if($item->Cat_id == 5)
                                            selected
                                            @endif>Seafood Appetizers</option>

                                        <option value="6" @if($item->Cat_id == 6)
                                            selected
                                            @endif>Nayeh</option>

                                        <option value="7" @if($item->Cat_id == 7)
                                            selected
                                            @endif>Platters
                                        </option>
                                        <option value="8" @if($item->Cat_id == 8)
                                            selected
                                            @endif>Mashawi
                                        </option>
                                        <option value="9" @if($item->Cat_id == 9)
                                            selected
                                            @endif>Turkish
                                            Kabab</option>
                                        <option value="10" @if($item->Cat_id == 10)
                                            selected
                                            @endif>Kids Meals</option>

                                        <option value="11" @if($item->Cat_id == 11)
                                            selected
                                            @endif>Cold
                                            Drinks</option>
                                        <option value="12" @if($item->Cat_id == 12)
                                            selected
                                            @endif>Hot
                                            Drinks</option>
                                        <option value="13" @if($item->Cat_id == 13)
                                            selected
                                            @endif>Milkshake
                                            and Frappe</option>
                                        <option value="14" @if($item->Cat_id == 14)
                                            selected
                                            @endif>Ice Cream
                                        </option>
                                        <option value="15" @if($item->Cat_id == 15)
                                            selected
                                            @endif>Smoothies
                                        </option>
                                        <option value="16" @if($item->Cat_id == 16)
                                            selected
                                            @endif>Cake
                                        </option>
                                        <option value="17" @if($item->Cat_id == 17)
                                            selected
                                            @endif>Turkish
                                            Dessert</option>
                                        <option value="18" @if($item->Cat_id == 18)
                                            selected
                                            @endif>Shisha
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <!-- end category -->
                            <!-- start price Field-->
                            <div class="form-group form-group-lg">
                                <label for="user" class="col-sm-3 control-label"> Price</label>
                                <div class="col-sm-10 col-md-9">
                                    <input pattern=".{1,}" title="this field required at least 1 characters" type="text"
                                        name="item_price" id="user" class="form-control live" value="{{$item->price}}"
                                        data-class=".live-price">
                                </div>
                            </div>
                            <!--end price Field   -->

                            <!-- start item picture -->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label">item picture</label>
                                <div class="col-sm-10 col-md-6">
                                    <div class="itemAdd">

                                        <div class="upload">
                                            <a href="/images/products/{{$item->image_path}}" target="_blanck">
                                                <img src="/images/products/{{$item->image_path}}" id="image">
                                            </a>
                                            <input type="hidden" name="item_oldimage" value="{{$item->image_path}}">

                                            <div class="rightRound" id="upload">
                                                <input type="file" name="item_image" id="picture"
                                                    accept=".jpg, .jpeg, .png, .jfif, .avif">
                                                <i class="fa fa-camera text-white"></i>
                                            </div>

                                            <div class="leftRound" id="cancel" style="display: none;">
                                                <i class="fa fa-times text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" form-group">
                                <div class="col-sm-offset-3 col-sm-9 mb-5">
                                    <input type="submit" value="Save Changes" class="btn btn-success w-50 btn-md">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@else
@section('content')
<h1 class="text-center text-uppercase fw-bold ">you can't access this page this section just for admin</h1>
@endsection
{{header("Refresh:4;url=/")}}

@endif