@extends('dashboard.header')
@section('content')

      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Categories</h5>
              <div class="card">
                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Categories Id</th>
      <th scope="col">Categories Name</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cat as $cat)
    <tr>
      <td>{{$cat->id}}</td>
      <td>{{$cat->Cname}}</td>
      <td>
        <a href="{{route('category.edit',$cat->id)}}" class="btn btn-success text-decoration-none">Update</a>
      </td>
      <td>
        <form method="post" action="{{route('category.destroy',$cat->id)}}">
          @csrf
          @method('DELETE')
          <button type="delete" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('category.create')}}" class="btn btn-success float-end text-decoration-none">Add Category</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection