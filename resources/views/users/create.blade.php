@extends ('layouts.master')
@section('title','New User')
@section('content')

<div class="container">
<form action="{{ route('save.user') }}" method="post">
    @csrf
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label mt-3">ID </label>
    <input type="text" name="user_Id" class="form-control" placeholder="Enter Your Email">

  <label for="exampleInputEmail1" class="form-label mt-3">Name</label>
  <input type="text" name="name" class="form-control" placeholder="Enter Your Name">

    <label for="exampleInputEmail1" class="form-label mt-3">Email </label>
    <input type="email" name="email" class="form-control" placeholder="Enter Your Email">

    <label for="exampleInputEmail1" class="form-label mt-3">Date of Birth </label>
    <input type="text" name="date_of_birth" class="form-control" placeholder="Enter Your Date of Birth">

    <label for="exampleInputEmail1" class="form-label  mt-3">Status </label>
    <select class="form-control" name="status">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection