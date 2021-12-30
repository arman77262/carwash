@extends('admin.admin_master')

@section('admin')

<div class="container">
    <div class="row">
        <div class="col-md-8">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif

            <div class="card shadow">
                <div class="card-header">
                    <h4>Slider Update</h4>
                </div>

                <div class="card-body">
                    <form action="{{url('update/slider/'.$slider->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="old_image" value="{{$slider->slider_image}}">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Small Title</label>
                            <input type="text" class="form-control" placeholder="Small Title" name="small_title" value="{{$slider->small_title}}">

                            <span class='text-danger'>
                                @error('small_title')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Big Title</label>
                            <input type="text" class="form-control" placeholder="Big title" name="big_title" value="{{$slider->big_title}}">

                            <span class='text-danger'>
                                @error('big_title')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" class="form-control">{{$slider->description}} </textarea>
                            <span class='text-danger'>
                                @error('description')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Slider Image</label>
                            <input type="file" class="form-control" name="slider_image">

                            <img src="{{asset($slider->slider_image)}}" width="150px" alt="" class="img-thumbnail">

                            <span class='text-danger'>
                                @error('slider_image')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>

                        <button type="submit" class="btn btn-warning">Update Slider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
