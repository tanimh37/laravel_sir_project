@extends('backend.layouts.app')


@section('css')
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<link href="{{asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('js')
<script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.j')}}s"></script>
<script src="{{asset('vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('dist/js/export-table-data.js')}}"></script>
<script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>
<script src="{{asset('dist/js/init.js')}}"></script>

@endsection



@section('content')
<div class="container-fluid">

    <!-- Title -->
    <div class="row heading-bg bg-green">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Export</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#"><span>table</span></a></li>
                <li class="active"><span>Export</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">


        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">horizontal form with right icon</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form class="form-horizontal" method="post" action="{{route('doctor.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputuname_4" class="col-sm-3 control-label">Food Name*</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputuname_4" placeholder="Enter offer menu">
                                                    @error('name')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputuname_4" class="col-sm-3 control-label">Restaurent Name*</label>
                                            <div class="col-sm-9">

                                                <select name="specialist" id="">
                                                    @foreach ( $specialists as $specialist)
                                                    <option value="{{$specialist->id}}"@selected(old('specialist')==$specialist->id)>{{$specialist->name}}Select One</option>



                                                    @endforeach

                                                </select>




                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputuname_4" class="col-sm-3 control-label">Restaurent Email*</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" name="email" value="{{old('email')}}" class="form-control" id="exampleInputuname_4" placeholder="Doctor Email">
                                                    @error('email')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- <div class="form-group">
                                            <label for="exampleInputuname_4" class="col-sm-3 control-label">Password*</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="password" name="password" class="form-control" id="exampleInputuname_4" placeholder="Doctor Password">
                                                    @error('password')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputuname_4" class="col-sm-3 control-label">Confirm Password*</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputuname_4" placeholder="Doctor Re-Password">

                                                    @error('password_confirmation')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror

                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div> -->


                                        <div class="form-group">
                                            <label for="exampleInputuname_4" class="col-sm-3 control-label">Photo*</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="file" name="photo" class="form-control" id="exampleInputuname_4" placeholder="Doctor Picture">

                                                    <div class="input-group-addon"><i class="icon-picture"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label for="exampleInputEmail_4" class="col-sm-3 control-label">Status*</label>
                                            <div class="col-sm-9">
                                                <div class="radio radio-info">
                                                    <input type="radio" name="status" id="radio1" value="active" @if(old('status')=='active') checked @endif>
                                                    <label for="radio1">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="radio radio-info">
                                                    <input type="radio" name="status" id="radio2" value="inactive" @if(old('status')=='inactive') checked @endif>
                                                    <label for="radio2">
                                                        Inactive
                                                    </label>
                                                    @error('status')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group mb-0">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-info ">Submit</button>
                                            </div>
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
    <!-- /Row -->
</div>

@endsection
