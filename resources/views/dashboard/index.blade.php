@extends('dashboard.post.main')


@section('container')

<h3 class="mt-3">Welcome back, {{ Auth()->user()->name }}</h3>

@if(session()->has('success'))
	<div class="alert alert-success" role="alert">
	  {{ session('success') }}
	</div>
@endIf
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
<div class="col-lg-8 mt-5 text-center">
	<table class="table table-striped table-sm">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Body</th>
	      <th scope="col">Hastag</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($post as $p)
	    <tr>
	      <td>{{ $loop->iteration }}</td>
	      <td>{{ $p->body }}</td>
	      <td>{{ $p->hastag }}</td>
	      <td>
	      	<a href="#" class="btn btn-primary">edit</a>
	      	<a href="#" class="btn btn-danger">delete</a>
	      </td>
	    </tr>
	    @endForeach
	  </tbody>
	</table>
	
</div>

@endsection