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
                    <h4>Header Update</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('store.slider')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Small Title</label>
                            <input type="text" class="form-control" placeholder="Small Title" name="small_title">

                            <span class='text-danger'>
                                @error('small_title')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Big Title</label>
                            <input type="text" class="form-control" placeholder="Big title" name="big_title">

                            <span class='text-danger'>
                                @error('big_title')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                            <span class='text-danger'>
                                @error('description')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Slider Image</label>
                            <input type="file" class="form-control" name="slider_image">
                            <span class='text-danger'>
                                @error('slider_image')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>

                        <button type="submit" class="btn btn-success">Add Slider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
