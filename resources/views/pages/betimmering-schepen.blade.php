@extends('master')

@section('content')	
	{!! Breadcrumbs::render('schepen') !!}
	<section class="text-inject container   xs-space-inside-sides-md">
		<div class="row">
			<div class="col-lg-12 space-outside-down-md">
				<h1 class="text-color-secondary xs-font-md sm-font-lg"> @if(isset($data['sections'][1])){{ $data['sections'][1]->title }}  @endif </h1>
			</div>
			<div class="col-lg-8">
				<p class="text-color-dark font-sm">
					@if(isset($data['sections'][1])){!! nl2br( $data['sections'][1]->body) !!}  @endif
				</p>
			</div>

			<div class="col-lg-12 space-inside-lg ">
				<div style="height:4px;" class="divider bg-accent"></div>
			</div>
		</div>
	</section>
	
	<!-- project overzicht -->
	<section class="container">
		@include('pages.partials.project-overzicht-section', $data)
		<div class="row">
				<div class="col-lg-12 text-center space-outside-down-lg space-outside-up-md">
					<a class="space-inside-sides-sm
							  space-inside-xs
							  border 
							  border-curved 
							  border-main 
							  text-color-secondary
							  text-hover-light
							  bg-hover-main
							  transition-normal
							  " 
							  href="/projecten/Exterieur"
					>Meer projecten </a>
			</div>
		</div>
	</section>
	@include('pages.partials.contact-link-section')
@stop