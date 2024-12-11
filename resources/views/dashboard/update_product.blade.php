@extends('dashboard.header')
@section('content')
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Update Product</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data" >
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Pr oduct Name</label>
                      <input type="text" value="{{$product->pname}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Product Category / Type</label>
                      <select name="category" class="form-control">
                        <option value="Select Category" hidden selected>Select Category👜</option>
                        @foreach($cat as $cat)
                        <option value="{{$cat->id}}">{{$cat->Cname}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Description</label>
                      <textarea rows="" cols="" class="form-control" name="description">{{$product->pdescription}}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Price</label>
                      <input type="Number" name="price" class="form-control" id="exampleInputEmail1" value="{{$product->price}}"aria-describedby="emailHelp"> 
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Image</label>
                      <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Current Image</label>:
                        <img src="{{asset('images/'.$product->image)}}" alt="Can't Display Image" height=100 width=100>
                    </div>
                    <button type="submit" name="btn" class="btn btn-primary">Update</button>
                  </form>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection