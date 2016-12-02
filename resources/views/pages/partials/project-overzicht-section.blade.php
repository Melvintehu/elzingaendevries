<div class="row">
	
	<div class="col-lg-12">

		<div class="row all-row-centered">
			
			@foreach($data['projects'] as $project)

			<div class="col-lg-4 
						col-md-6 
						col-sm-6 
						col-xs-12 
						limit-width-xs  
						space-outside-down-md
						all-col-centered

			">	

				<div class="shadow-xs 
							shadow-md-hover 
							transition-normal 
							pointer 
							no-overflow  

				">
					
					<h4 class="text-color-light 
							   bg-secondary 
							   reset-margin 
							   space-inside-xs 
							   space-inside-sides-xs
					">
						{{$project->residence}}  <span class="font-sm text-light"> - {{$project->name}} </span></h4>
					
					<div class="image">
						
						<img src="/images/foto1.jpg">

					</div>

					<p class="font-xs 
							  space-inside-sides-xs 
							  space-inside-xs
							  min-height-xs
							  max-height-xs
							 
					">

						{{ str_limit($project->description, 220)}}
					</p>

					<div class="divider bg-accent"></div>

					<a class="btn-round
							  right 
							  space-inside-xs 
							  space-inside-sides-xs" 
							  href="/project/{{$project->id}}/{{strtolower($project->name)}}"
					> 

						<span class="circle 
									 circle-sm 
									 xs-circle-xs
									 bg-main 
									 text-color-light 
									 inline-block
									 shadow-xs 
						"> 
							> 
						</span>

					</a>

				</div>

			</div>

			@endforeach
			
			@if($data['projects']->isEmpty())
				<p> Er zijn op dit moment geen projecten binnen deze discipline. </p>
			@endif

		</div>
		
	</div>



</div>