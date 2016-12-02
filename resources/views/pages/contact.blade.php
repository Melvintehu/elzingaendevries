@extends('master')


@section('content')
	
	{!! Breadcrumbs::render('contact') !!}

	<section class="text-inject container ">
			
		<div class="row">
			
			<div class="col-lg-12 space-outside-down-md">
				

				<h1 class="text-color-main"> @if(isset($data['sections'][1])){{ $data['sections'][1]->title }}  @endif </h1>

			</div>

			<div class="col-lg-7 space-outside-down-lg">
					
				<p class="text-color-dark">
					
				@if(isset($data['sections'][1])){!! nl2br( $data['sections'][1]->body )!!}  @endif

				</p>

			</div>

			<div class="col-lg-5 bg-accent">
				
				<p class="space-outside-xs ">  

					<span class="bg-secondary 
								 text-color-light 
								 space-inside-sides-xs 
								 inline-block
								 font-xs
								 text-bold
								 space-outside-right-xs
								 border-curved
								 ">  

								 Adres 

					</span> 

					Metaallaan 75 

				</p>

				<p class="space-outside-xs ">  

					<span class="bg-secondary 
								 text-color-light 
								 space-inside-sides-xs 
								 inline-block
								 font-xs
								 text-bold
								 space-outside-right-xs
								 border-curved
								 ">  

								 Postcode 

					</span> 

					9743 BP 

				</p>

				<p class="space-outside-xs ">  

					<span class="bg-secondary 
								 text-color-light 
								 space-inside-sides-xs 
								 inline-block
								 font-xs
								 text-bold
								 space-outside-right-xs
								 border-curved
								 ">  

								 Telefoonnummer 

					</span> 

					06 30 63 23 1 

				</p>

				<p class="space-outside-xs ">  

					<span class="bg-secondary 
								 text-color-light 
								 space-inside-sides-xs 
								 inline-block
								 font-xs
								 text-bold
								 border-curved
								 space-outside-right-xs
								 ">  

								 Emailadres

					</span> 

					info@elzingaendevries.nl 

				</p>

			</div>

			<div class="col-lg-12 space-outside-down-lg reset-padding">
				
				<div style="height:4px;" class="divider bg-accent"></div>

			</div>


		


		</div>


	</section>

@stop