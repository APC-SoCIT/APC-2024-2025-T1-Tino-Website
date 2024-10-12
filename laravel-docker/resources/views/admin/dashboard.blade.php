@extends('admin/layouts.app')

@section('content')

			<main class="content">
				<div class="container-fluid p-0">

					<h1>Welcome<strong> {{ Auth::user()->name }}</strong></h1>
						
				</div>
			</main>


@endsection