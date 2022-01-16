@extends('layouts.main')

@section('container')

@if($posts->count())

<div class="row justify-content-center mt-4">
  <div class="col-md-4">
    <form action="/quotes">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
        <button style="margin-right: 10px;" class="btn btn-info" type="submit">search</button>
      </div>
    </form>  
  </div> 
</div>

@foreach($posts as $p)
<div class="container col-lg-10">
	<div class="card mt-4 p-2">
  		<div class="card-body text-center">
    		<blockquote class="blockquote mb-0">
      			<p>"{{ $p->body }}"</p>
      			<p style="font-style: italic; font-size: 15px"><a href="/quote" class="text-secondary text-decoration-none">-- {{ $p->user->name }} --</a></p>
      			<p class="btn btn-secondary p-0 px-2 py-1" style="font-size: 12px;">#{{ $p->hastag }}</p>
    		</blockquote>
  		</div>
    	<small class="text-muted d-grid justify-content-end">{{ $p->created_at->diffForHumans() }}</small>
	</div>
</div>	
@endforeach

@else
<p class="text-center fs-2 mt-5 text-muted">Quote not found</p>
@endif

<div class="mb-8 mt-4 d-flex justify-content-center">{{ $posts->links() }}</div>

@endsection
