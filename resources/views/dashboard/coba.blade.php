@extends('dashboard.post.main')

@section('container')

	<h3 class="mt-3">Create Quote</h3>

	<div class="col-lg-6 mt-5">
		<form action="/dashboard" method="post">
			@csrf
		  <label for="body" class="form-label">Quote</label>
		  <div class="mb-3 input-group" style="height: 60px;">
		    <span class="input-group-text" id="basic-addon1">"</span>
		    <input type="text" class="form-control @error('body') is-invalid @endError" id="body" name="body" aria-describedby="emailHelp" value="{{ old('body') }}">
		    <span class="input-group-text" id="basic-addon1">"</span>
		    @error('body')
		    <div class="invalid-feedback">{{ $message }}</div>
		    @endError
		  </div>
		  <label for="hastag" class="form-label">Hastag</label>
		  <div class="mb-3 input-group">
		    <span class="input-group-text" id="basic-addon1">#</span>
		    <input type="text" class="form-control @error('hastag') is-invalid @endError" id="hastag" name="hastag" aria-describedby="emailHelp" value="{{ old('hastag') }}">
		    @error('hastag')
		    <div class="invalid-feedback">{{ $message }}</div>
		    @endError
		  </div>
		  <button type="submit" class="btn btn-primary">Create</button>
		</form>
	</div>
	
@endSection