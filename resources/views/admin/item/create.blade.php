@extends('layouts.app')
@if(Auth::check() && Auth::user()->groupID === 1 )
@section('content')

<h1 class="text-center">add new ad</h1>
<div class="create-ad block">
    <div class="container">
        <div class="panel panel-primary">
            <!--<div class="panel-heading">Edit my ad</div>-->
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-horizontal" autocomplete="off" action="/admin/item" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- start name Field-->
                            <div class="form-group form-group-lg">
                                <label for="user" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-10 col-md-9">
                                    <input pattern=".{2,}" title="this field require at least 2 characters" type="text"
                                        name="item_name" id="user" class="form-control" required>
                                </div>
                            </div>
                            <!--end name Field   -->
                            <!-- start category  -->
                            <div class="form-group form-group-lg">
                                <label for="user" class="col-sm-2 control-label"> Category :</label>
                                <div class="col-sm-10 col-md-6">
                                    <select class="form-select" name="item_category">
                                        @foreach ($categories as $cat)
                                        <option value="{{$cat->c_id}}"> {{$cat->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- end category  -->
                            <!-- start price Field-->
                            <div class="form-group form-group-lg">
                                <label for="user" class="col-sm-3 control-label"> Price</label>
                                <div class="col-sm-10 col-md-9">
                                    <input pattern=".{1,}" title="this field required at least 1 characters" type="text"
                                        name="item_price" id="user" class="form-control  ">
                                </div>
                            </div>
                            <!--end price Field   -->
                            <!-- start item picture -->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label"><b>item picture</b></label>
                                <div class="col-sm-10 col-md-6">
                                    <div class="itemAdd">

                                        <div class="upload">
                                            <img src="/images/products/no-image.jpg" id="image">

                                            <div class="rightRound" id="upload">
                                                <input type="file" name="item_picture" id="picture"
                                                    accept=".jpg, .jpeg, .png, .jfif, .avif" required>
                                                <i class="fa fa-camera text-white"></i>
                                            </div>

                                            <div class="leftRound text-white" id="cancel" style="display: none;">
                                                <i class="fa fa-times"></i>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class=" form-group">
                                <div class="col-sm-offset-3 col-sm-9 mb-5">
                                    <input type="submit" value="Add item" class="btn btn-success w-50 btn-md">
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