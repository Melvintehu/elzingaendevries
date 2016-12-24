@extends('master')


@section('content')

	<section class="container 
				 	space-outside-down-md 
				 	space-outside-up-lg
				 	wow fadeInDown
	">

		<div class="row all-row-centered"> 


			<div class="col-lg-4 
						space-inside-sides-md 
						limit-width-xs
						all-col-centered
			">
				
				<div class="row">
					
					<div class="col-lg-12 space-inside-sm">
						
						<h2 class="text-center">
						<?php $section->render('title', 1, $data); ?>
						</h2>
					</div>

				</div>

				
				<a href="/betimmering-interieur">
					

					<div class="row all-row-centered">
						
						<div class="col-lg-12 
									all-col-centered 
									reset-padding 
									shadow-xs
									transition 
									 
						">						

							<div style="height:200px;" class="image ">
								
								<img class="width-auto" src="images/foto1.jpg">

							</div>

							<div style="height:4px;" class="divider bg-main"></div>

							<div class="col-lg-12 
										
										space-inside-xs 

							">
								
								<p class="font-xs text-color-dark" text-inject>
									<?php $section->render('body', 1, $data); ?>
								</p>
							</div>

						</div>

					</div>

				</a>

			</div>

			<div class="col-lg-4 
						space-inside-sides-md 
						limit-width-xs
						all-col-centered
			">
			

				
				<div class="row">
					
					<div class="col-lg-12 space-inside-sm">
						
						<h2 class="text-center">
							<?php $section->render('title', 2, $data); ?>
						</h2>

					</div>

				</div>

			<a href="/betimmering-exterieur">	

				<div class="row all-row-centered">
					
					<div class="col-lg-12 
								all-col-centered 
								reset-padding 
								shadow-xs 

					">						

						<div style="height:200px;" class="image ">
							
							<img class="width-auto" src="images/foto1.jpg">

						</div>

						<div style="height:4px;" class="divider bg-main"></div>

						<div class="col-lg-12 
									
									space-inside-xs 

						">
							
							<p  class="font-xs text-color-dark" text-inject>
								<?php $section->render('body', 2, $data); ?>
							</p>

						</div>

					</div>

				</div>

			</a>

			</div>

			<div class="col-lg-4 
						space-inside-sides-md 
						limit-width-xs
						all-col-centered
			">
				
				<div class="row">
					
					<div class="col-lg-12 space-inside-sm">
						
						<h2 class="text-center">
							<?php $section->render('title', 3, $data); ?>
						</h2>

					</div>

				</div>

			<a href="/betimmering-interieur">

				<div class="row all-row-centered">
					
					<div class="col-lg-12 
								all-col-centered 
								reset-padding 
								shadow-xs 

					">						

						<div style="height:200px;" class="image ">
							
							<img class="width-auto" src="images/foto1.jpg">

						</div>

						<div style="height:4px;" class="divider bg-main"></div>

						<div class="col-lg-12 
									 
									space-inside-xs 
 
						">
							
							<p class="font-xs text-color-dark" text-inject>
								<?php $section->render('body', 3, $data); ?>
							</p>

						</div>

					</div>

				</div>
				
			</a>

			</div>

			<!-- Divider -->
			<div class="col-lg-12">
				
				<div style="height:2px;" 
					class="divider 
						   bg-main 
						   space-outside-lg 
				"></div>

			</div>


		</div> <!-- End of row -->

	</section>


	<!-- contact opnemen -->
	<section class="bg-accent 
					space-outside-lg 
					space-inside-md 
					space-outside-lg 
					shadow-xs
					wow fadeInDown
	">

		<div class="container text-center">
			
			<div class="row">
				
				<div class="col-lg-12">
					
					<p> Bent u geïnteresseerd geraakt in onze service?  Neem dan gerust contact op. </p>

				</div>

				<div class="col-lg-12 space-outside-up-md">
					
				<a class="space-inside-xs
						  space-inside-sides-sm
						  border-curved 
						  border 
						  border-main

						  text-color-main 
						  light  
						  xs-font-xs
						  bg-hover-main
						  text-hover-light
						  transition-normal
						  " 
						  href="/contact"
				> 

					Contact opnemen

				</a>

				</div>

			</div>

		</div>

	</section>
	<section class="text-inject container ">
		
		<div class="row">
			
			<div class="col-lg-12">
				
				<h1 class="text-color-secondary"> <?php $section->render('title', 4, $data); ?></h1>
			</div>

			<div class="col-lg-8 space-outside-up-md space-outside-down-lg">
					
				<p class="text-color-dark font-sm">
					
				<?php $section->render('body', 4, $data); ?>

				</p>

			</div>

		</div>

	</section>


<!-- 
	
	<section class="container space-outside-down-md">

		<div class="row">
			
			<div class="col-lg-12 space-outside-lg">
				
				<h1 class="text-center text-color-secondary "> PROJECTEN </h1>

			</div>

			<div class="col-lg-12 space-inside-down-md">
				
				<div style="height:2px;" class="divider bg-main "> </div>

			</div>

			<div class="col-lg-12 
						space-outside-down-md 
						space-outside-up-sm
			">
				
				<h2 class="text-color-secondary light"> Renoveren dakgoot </h1>

			</div>

			<div  class="col-lg-8 xs-reset-padding">
				
				<div class="image shadow-xs">
					
					<img class="width-auto" src="images/foto2.jpg">

				</div>

				<a class="btn-round 
						  space-outside-up-md	 
						  bold 
						  block 
						  hidden-xs
						  " href=""
				> 
					Volledig project 

					<span class="circle-sm circle bg-accent inline-block"> > </span>

				</a>

			</div>

			<div class="col-lg-4 bg-main shadow-xs">
				
				<p class="font-sm 
						  text-color-light 
						  space-inside-md 
						  space-inside-sides-sm
				">

				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>

			</div>



			<div class="col-lg-12 space-inside-up-md">
				
				<div style="height:2px;" class="divider bg-main "> </div>

			</div>

			<div class="col-lg-12 space-outside-md text-center">
				
				<a class="border 
						  border-curved 
						  border-secondary  
						  light 
						  text-color-secondary 
						  xs-font-xs
						  bg-hover-secondary
						  text-hover-light
						  transition-normal
						  space-inside-sides-sm
						  space-inside-xs
						  " 
						  href="/projecten"
				> 

					Meer projecten

				</a>

			</div>

		</div>

	</section>

 -->
@stop