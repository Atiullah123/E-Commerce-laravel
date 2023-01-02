@extends('master')
@section('content')
    <div class="container detail">
        <div class="row">
        <div class="col-sm-6">
          <img src="{{$detail['gallery']}}" class="detail-image">
        </div>
         <div class="col-sm-6">
           <a href="/">Go Back</a>
           <h2>{{$detail['name']}}</h2>
           <h3>Price:{{$detail['price']}}</h3>
           <h4>Detail:{{$detail['description']}}</h4>
           <h5>Category:{{$detail['category']}}</h5>
           <br><br>
           <form action="{{url('add_to_cart/')}}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$detail['id']}}">
           <button class="btn btn-primary">Add to Cart</button>
           </form>
           <br><br>
           <button class="btn btn-success">Buy Now</button>
        </div>
        </div>
       

</div>
@endsection
