@forelse ($galleries->chunk(3) as $chunk)
	<div class="row">
		@foreach ($chunk as $gallery)
			<div class="col s12 m4">
				@include('galleries.gallery')
			</div>
		@endforeach
	</div>
@empty
	<h5 class="center">
		There are no galleries posted.
	</h5>
@endforelse