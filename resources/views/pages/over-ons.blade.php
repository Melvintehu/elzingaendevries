@extends('master')

@section('title')
	Over ons
@stop

@section('content')
	
	{!! Breadcrumbs::render('over ons') !!}
	
	<section class="text-inject container ">
		
		<div class="row">
			
			<div class="col-lg-12">
				
				<h1 class="text-color-secondary"> @if(isset($data['sections'][1])){{ $data['sections'][1]->title }}  @endif </h1>

			</div>

			<div class="col-lg-8 space-outside-up-md space-outside-down-lg">
					
				<p class="text-color-dark font-sm">
					
				@if(isset($data['sections'][1])){{ $data['sections'][1]->body }}  @endif

				</p>

			</div>

		</div>

	</section>


	@include('pages.partials.contact-link-section')

@stop