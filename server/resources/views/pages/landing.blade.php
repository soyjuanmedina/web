@extends('layouts.master')

@section('content')
<!-- Slider index -->
<div class="orbit full-page-slider" role="region" aria-label="Favorite Space Pictures" data-orbit>
	<ul class="orbit-container">
		<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
		<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
		<li class="orbit-slide is-active">
			<img src="http://placehold.it/2000x750">
		</li>
		<li class="orbit-slide">
			<img src="http://placehold.it/2000x750">
		</li>
		<li class="orbit-slide">
			<img src="http://placehold.it/2000x750">
		</li>
		<li class="orbit-slide">
			<img src="http://placehold.it/2000x750">
		</li>
	</ul>
</div>
@endsection