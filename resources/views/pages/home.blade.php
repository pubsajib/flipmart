@extends('layouts.master')
@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
	      		@include('partials.sidebars.sidebar')
			</div>
			<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
				@include('partials.home.slider')
				@include('partials.home.infoBoxes')
				@include('partials.home.newProducts')
				@include('partials.home.bannerHalf')
				@include('partials.home.featuredProducts')
				@include('partials.home.banner')
				@include('partials.home.bestSeller')
				@include('partials.home.latestBlog')
				@include('partials.home.newArrivals')
			</div>
		</div>
		@include('partials.home.brands')
	</div>
</div>
@endsection