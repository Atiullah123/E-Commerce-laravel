@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="{{url('user/')}}" method="POST" enctype="multipart/form-data" >
                  @csrf
                  @method('POST')
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>

            </div>

        </div>

    </div>
@endsection
