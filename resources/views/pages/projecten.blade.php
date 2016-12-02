@extends('master')

@section('content')
	<section class="space-inside-sides-xl
					bg-secondary
					space-inside-up-lg
					space-inside-down-xl
	">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-color-light"> Projecten </h1>
				</div>
				<div class="col-lg-7 space-inside-up-md">
					<div class="row">
						<div class="col-lg-11">
							<p class="font-sm text-color-light">
							Onze ruime ervaring en enthousiasme in combinatie met hoogwaardige kwaliteitsproducten zorgen altijd voor het beste eindresultaat.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 space-inside-up-md">
					<div class="row text-light ">
						<div class="col-lg-12  ">
							<div class="row">
								<div class="col-lg-6 ">
									<a  href="/projecten"
									 	class="inline-block
											border
											border-secondary
											border-curved
											text-light
											space-inside-sides-xs
											text-color-light
											{{ Request::path() == 'projecten' ? 'bg-main' : 'hover-accent
											text-hover-secondary
											transition-normal' }}
									">
										Alle projecten
									</a>
								</div>

								

								@foreach($data['disciplines'] as $discipline)
								<div class="col-lg-6 ">
									<a  href="/projecten/{{$discipline->name}}" class="inline-block
											border
											border-secondary
											border-curved
											{{ Request::path() == 'projecten/' . $discipline->name ? 'bg-main' : 'hover-accent
											text-hover-secondary
											transition-normal' }}
											space-inside-sides-xs
											text-color-light
											text-light
											"
									>
										{{$discipline->name}}
									</a>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- breadcrumbs -->
	@if($data['filter'] != '')
		{!! Breadcrumbs::render('filter', $data['filter']) !!}
	@else
		{!! Breadcrumbs::render('projecten') !!}
	@endif

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
							  href="#meer-projecten-laden"
					>Meer projecten laden</a>
			</div>


			<div class="project-cart">
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
							  href="#meer-projecten-laden"
					>Meer projecten laden</a>
			</div>
	</section>
@stop
