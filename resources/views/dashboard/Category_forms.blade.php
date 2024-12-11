@extends('dashboard.header')
@section('content')
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Add category</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="{{route('category.store')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Category Name</label>
                      <input type="text" name="name1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Re-Enter Category Name</label>
                      <input type="text" name="name2"class="form-control" id="exampleInputPassword1">
                    </div>
                   
                    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                  </form>
                  <a href="{{route('category.index')}}" class=" btn btn-primary float-end">View Categories</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection