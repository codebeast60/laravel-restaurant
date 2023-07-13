@extends('layouts.app')
@if(Auth::check() && Auth::user()->groupID === 1 )
@section('content')

<h1 class="text-center"><i class="fa-solid fa-staff-snake" style="color:red"></i>edit category</h1>
<div class="create-ad block">
    <div class="container">
        <div class="panel panel-primary">
            <!--<div class="panel-heading">Edit my ad</div>-->
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-horizontal" autocomplete="off" action="/admin/category/{{$cat->c_id}}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- start name Field-->
                            <div class="form-group form-group-lg">
                                <label for="user" class="col-sm-3 control-label">Category Name </label>
                                <div class="col-sm-10 col-md-9">
                                    <input type="hidden" name="catid" value="{{$cat->c_id}}">
                                    <input type="text" name="category_name" class="form-control" value="{{$cat->Name}}"
                                        required>
                                </div>
                            </div>
                            <!--end name Field   -->
                            <!-- start category picture -->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label">cat picture</label>
                                <div class="col-sm-10 col-md-6">
                                    <div class="itemAdd">

                                        <div class="upload">
                                            <img src="/images/category/{{$cat->cat_pic}}" id="image">
                                            <input type="hidden" name="category_oldimage" value="{{$cat->cat_pic}}">

                                            <div class="rightRound" id="upload">
                                                <input type="file" name="category_image" id="picture"
                                                    accept=".jpg, .jpeg, .png">
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
                                    <input type="submit" value="save changes" class="btn btn-success w-50 btn-md">
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