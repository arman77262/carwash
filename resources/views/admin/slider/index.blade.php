@extends('admin.admin_master')

@section('admin')

<div class="container">
    <div class="row">
        <div class="col-md-12">

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
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4>All Slider</h4>
                        </div>
                        <div class="">
                            <a href="{{route('add.slider')}}" class="btn btn-sm btn-danger">Add Slider</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Small Title</th>
                            <th scope="col">Big Title</th>
                            <th style="width: 200px;" scope="col">Descritpion</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach ($sliders as $slide)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$slide->small_title}}</td>
                                <td>{{$slide->big_title}}</td>
                                <td>{{$slide->description}}</td>
                                <td><img style="width: 120px" src="{{asset($slide->slider_image)}}" alt=""></td>
                                <td>
                                    <a href="{{url('edit/slider/'.$slide->id)}}" class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{url('delete/slider/'.$slide->id)}}" onclick="return confirm('Are you sure to delete !')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
