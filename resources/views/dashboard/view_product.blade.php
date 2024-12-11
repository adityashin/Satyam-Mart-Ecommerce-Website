@extends('dashboard.header')
@section('content')

      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Categories</h5>
              <div class="card">
                <div class="card-body">
                <table class="table table-dark table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($cat as $pro)
                    <tr>
                      <td>{{$pro->id}}</td>
                      <td>{{$pro->Cname}}</td>
                      <td>{{$pro->pname}}</td>
                      <td>{{$pro->pdescription}}</td>
                      <td>{{$pro->price}}</td>
                      <td>
                     <img src="{{asset('images/'. $pro->image)}}" alt="" height=150 width=150>
                      </td>
                      <td>
                        <a href="{{route('product.edit',$pro->id)}}" class="btn btn-primary">Update</a>
                      </td>
                      <td>
                        <form method="post" action="{{route('product.destroy',$pro->id)}}">
                          @csrf
                          @method('DELETE')
                          <button type="delete" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
<a href="{{route('product.create')}}" class="btn btn-success float-end text-decoration-none">Add Product</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection