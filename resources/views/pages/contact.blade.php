@extends('master')

@section('title')
	Contact
@stop

@section('content')
	{!! Breadcrumbs::render('contact') !!}

	<section class="text-inject container wow fadeInDown">

		<div class="row">
			<div class="col-lg-12 space-outside-down-md">
				<h1 class="text-color-main"> <?php $section->render('title', 1, $data); ?>  </h1>
			</div>
			<div class="col-lg-7 space-outside-down-lg">	
				<p class="text-color-dark" text-inject>
				<?php $section->render('body', 1, $data); ?>
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

								 " text-inject>  
								 <?php $section->render('title', 2, $data); ?>
					</span> 
					<?php $section->render('body', 2, $data); ?>
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
								 " text-inject>  
								 <?php $section->render('title', 3, $data); ?>
					</span> 
					<?php $section->render('body', 3, $data); ?>
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
								 " text-inject>  
								 <?php $section->render('title', 4, $data); ?>
					</span> 
					<?php $section->render('body', 4, $data); ?>
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
								 " text-inject>  
								 <?php $section->render('title', 5, $data); ?>
					</span> 
					<?php $section->render('body', 5, $data); ?>
				</p>
			</div>
			<div class="col-lg-12 space-outside-down-lg reset-padding">
				<div style="height:4px;" class="divider bg-accent"></div>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3> Vul het onderstaande contactformulier in </h3>
			</div>

			<div class="col-lg-12">
						{!! Form::open(['method' => 'POST', 'action' => 'MailController@contactMail']) !!}

		{{ csrf_field() }}

		<div class="col-lg-12 space-outside-sm fadeInDown wow">

			<div class="row">
				

				<div class="col-lg-5 clear-left"> 
	    			{!! Form::text('naam', null, ['required', 'placeholder' => 'Uw volledige naam', 'class' => 'input border border-accent space-outside-xs']) !!}
	    		</div>

				<div class="col-lg-5 clear-left"> 
					
					{!! Form::text('emailadres', null, ['required', 'placeholder' => 'Uw emailadres', 'class' => 'input border border-accent space-outside-xs']) !!}
				</div>

				<div class="col-lg-7 clear-left"> 
					{!! Form::text('telefoonnummer', null, ['required', 'placeholder' => 'Telefoonnummer', 'class' => 'input border border-accent space-outside-xs']) !!}
				</div>
					
				<div class="col-lg-7 clear-left"> 	

					{!! Form::textarea('bericht', null, ['required', 'placeholder' => 'Uw bericht of opmerking', 'class' => 'textarea border border-accent space-outside-xs']) !!}
				</div>

				<div class="col-lg-12 space-outside-sm"> 
					 {!! Form::submit('Verzenden', ['class' => 'btn-standard bg-secondary light text-color-light']) !!}
				</div>
			</div>

		</div>

			{!! Form::close() !!}
			
			</div>

		</div>
	</section>
@stop