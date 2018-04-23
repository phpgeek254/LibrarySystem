
@forelse ($users->chunk(3) as $chunk)
	<div class="row">

		@foreach ($chunk as $user)
		<div class="col s12 m4 black-text">
			@include('Auth.user')
		</div>
		@endforeach
	</div>
@empty
@endforelse
<div class="center">
			@include('pagination.paginator', ['paginator' =>$users])
</div>
