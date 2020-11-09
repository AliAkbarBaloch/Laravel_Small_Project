@extends('layout')
@section('content')
  
  <div class="container">
    @foreach ($data as $item)
    <h3>WelCome to Edit Page </h3>
    
  <form class="col-sm-6" action="update/{{ $item->job_id }}" method="POST">@endforeach
      @csrf
      @foreach ($data as $item)

    <div class="form-group">
      <label><b>Job Title</b></label>
      <input type="text" name="job_title" value="{{$item->job_title }}" class="form-control"placeholder="Enter email">
    </div>
    <div class="form-group">
      <label><b>Minimum Salary</b></label>
      <input type="text" name="min_salary" value="{{ $item->min_salary }}" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <label><b>Maximum Salary</b></label>
        <input type="text" name="max_salary" value="{{$item->max_salary }}" class="form-control" placeholder="Password">
    </div>
    <input type="submit" class="btn btn-primary">
    @endforeach
  </form>
</div>
@endsection