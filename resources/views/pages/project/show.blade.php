@extends('master')


@section('content')

	<section class="space-inside-sides-xl 
					bg-secondary 
					space-inside-md 
					space-outside-down-lg
	">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h1 class="text-color-light"> Projecten </h1>
					<div class="row">
						<div class="col-lg-11 space-inside-up-sm ">
							<p class="font-sm text-color-light">

							Onze ruime ervaring en enthousiasme in combinatie met hoogwaardige kwaliteitsproducten zorgen altijd voor het beste eindresultaat.

							</p>

						</div>

					</div>

				</div>

				<div class="col-lg-4 space-inside-up-md">

					<div class="row text-light space-inside-up-xs">

						<div class="col-lg-12 space-inside-sm ">
							
							<div class="row">

								<div class="col-lg-6 ">
										
									<a  href="/projecten" class="inline-block
											border
											border-secondary
											border-curved
											{{ Request::path() == 'projecten' ? 'bg-main' : '' }}
											space-inside-sides-xs 
											text-color-light"
									>
										Alle projecten
									</a>

								</div>
								
								@foreach($data['disciplines'] as $discipline)
								<div class="col-lg-6 ">
										
									<a  href="/projecten/{{$discipline->name}}" class="inline-block 
											border 
											border-secondary
											border-curved
											{{ $data['project']->discipline['name'] == $discipline->name  ? 'bg-main' : '' }}

											space-inside-sides-xs 
											text-color-light"
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
	{!! Breadcrumbs::render('show project', $data['project']) !!}
	<section class="container">
		<div class="row">
			<div class="col-lg-12 space-outside-down-lg">
				<h1 class="space-outside-down-xs">{{$data['project']->name}}</h1>

				@foreach($data['project']->tags()->get() as $tag)

					<p  class="text-light 
							   border-curved 
							   font-xs 
							   bg-main 
							   text-color-light 
							   inline-block  
							   space-inside-sides-xs
							   shadow-xs
					"> {{ $tag['name'] }} </p>

				@endForeach

				<div style="height:4px;" class="divider bg-accent space-outside-up-sm"></div>
				<div class="row">
					<div class="col-lg-8">
						<p class="space-outside-up-md block">{{$data['project']->description }}</p>
						<a href="#" class="font-xs 
										   block 
										   text-italic 
										   inline-block
										   space-outside-up-sm 
										   text-color-main
										   transition
										   space-inside-xs
										   left
										   transition-slow
										   hover-main
										   text-hover-light
										   space-inside-sides-xs
						"> PDF DOWNLOADEN </p>

						</a>

					</div>

				</div>

				

				<div class="col-lg-12 reset-padding">
						
					<div class="row">
						

						<div class="col-lg-12   space-outside-up-md space-outside-down-sm">
						
							<p class="bg-secondary 
									  inline-block  
									  text-color-light 
									  space-inside-xs right  
									  space-inside-sides-xs 
									  shadow-xs
									  font-xs"
							>

								Klik op de foto voor een slideshow.

							</p>

						</div>

						<div class="col-lg-12  space-outside-down-md">
							
							<div class="image 
										shadow-xs 
										shadow-xs-hover 
										transition-normal 
										pointer 

							">
								
								<a href="/images/foto1.jpg" data-gallery="project" data-toggle="lightbox">

									<img src="/images/foto1.jpg">

								</a>

							</div>

						</div>

						<div class="col-lg-4">
							
							<div class="image 
										shadow-xs 
										shadow-xs-hover 
										transition-normal 
										pointer 

							">
								
								<a href="/images/foto2.jpg" data-gallery="project" data-toggle="lightbox">

									<img src="/images/foto2.jpg">

								</a>

							</div>

						</div>

						<div class="col-lg-4  ">
							
							<div class="image 
										shadow-xs 
										shadow-xs-hover 
										transition-normal 
										pointer 

							">
								
								<a href="/images/foto1.jpg" data-gallery="project" data-toggle="lightbox">

									<img src="/images/foto1.jpg">

								</a>

							</div>

						</div>

						<div class="col-lg-4 ">
							

							<div class="image 
										shadow-xs 
										shadow-xs-hover 
										transition-normal 
										pointer 

							">

								<a href="/images/foto1.jpg" data-gallery="project" data-toggle="lightbox">

									<img src="/images/foto1.jpg">

								</a>

							</div>

						</div>



					</div>

				</div>

			</div>

			


		</div>

	</section>


	@include('pages.partials.contact-link-section')

@stop