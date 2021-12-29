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
                    <form action="{{url('update/header/'.$header->id)}}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Open Hour</label>
                            <input type="text" class="form-control" placeholder="Open Hour" name="open_hour" value="{{$header->open_hour}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$header->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{$header->email}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
