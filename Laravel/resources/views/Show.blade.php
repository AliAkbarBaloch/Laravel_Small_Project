@extends('layout')
@section('content')

<table class="table table-striped table-hover table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">job_id</th>
      <th scope="col">Job_Title</th>
      <th scope="col">Min_Salary</th>
      <th scope="col">Max_Salary</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{ $item->job_id }}</th>
      <td class="bg-primary">{{ $item->job_title }}</td>
      <td class="bg-danger">{{ $item->min_salary }}</td>
      <td class="bg-success" >{{ $item->max_salary }}</td>
      <td class="bg-warning"><a href="delete/{{ $item->job_id }}"><i class="fas fa-trash"></i></a>
        <a href="edit/{{ $item->job_id }}"><i class="fas fa-edit"></i></a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
    
@endsection