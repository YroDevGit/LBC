@extends('adm.main.admin')

@section('content')
@php
    $page =3;
@endphp
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Events</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data" action="{{route('addevt')}}" onsubmit="showLoading()">
                                        @csrf
                                        <div class="row">
                                           
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input type="file" class="form-control" name="img" id="img" required>
                                                </div>
                                                <div>
                                                    @error('img')
                                                    {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" class="form-control" name="title" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Datetime</label>
                                                    <input type="datetime-local" class="form-control" name="datetime" required>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-8 pr-1">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name="desc" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    @if(Session('success'))
                                                    <span class="colgreen">{{Session('success')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        </div>
                                     
                                       
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Add Event</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="{{asset('../assets/img/apple-icon.png')}}" alt="..." id="imgcanvas" height="300" width="300">
                                            <h5 class="title">Libacao Baptist Church</h5>
                                        </a>
                                        <p class="description">
                                            <!-- Title -->
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        <!--
                                        "Lamborghini Mercy
                                        <br> Your chick she so thirsty
                                        <br> I'm in that two seat Lambo"
                                        -->
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .colgreen{
                    color:green;
                    font-weight:bold;
                    font-size: 25px;
                }
                .card-user .avatar{
                    width:300px;
                    height:300px;
                }
            </style>
            <script>
                document.getElementById("img").onchange = function(){
                    showImg();
                }
                function showImg(){
                    var getImg = document.getElementById("img");
                    var showImg = document.getElementById("imgcanvas");
                    if(getImg.files && getImg.files[0]){
                        var imageUrl = URL.createObjectURL(getImg.files[0]);
                        showImg.src = imageUrl;
                    }
                    
                }
            </script>
@endsection