@extends('layout')
@section('content')
  
  <div class="container float-sm-right">
    <h3>Welcome to Add Page</h3>
  <form class="col-sm-6 border rounded border-success" action="add" method="POST">
      @csrf

    <div class="form-group">
      <label><b>Job Title</b></label>
      <input type="text" name="job_title" class="form-control "placeholder="Enter email">
    </div>
    <div class="form-group">
      <label><b>Minimum Salary</b></label>
      <input type="text" name="min_salary" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <label><b>Maximum Salary</b></label>
        <input type="text" name="max_salary" class="form-control" placeholder="Password">
    </div>
    <input type="submit" class="btn btn-primary">
  </form>
</div>
    
@endsection