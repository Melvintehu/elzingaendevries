<footer class="bg-secondary space-inside-md">
	
	<div class="container">
		
		<div class="row ">
			
			<div class="col-lg-12">
				

				

			</div>

		</div>

	</div>

</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/ekko-lightbox.min.js') }}"></script>
<script type="text/javascript">
	
                        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true,
                onShown: function() {
                    console.log('Eigendom van MEN Technology & Media. Dat betekent: niet in de console kijken stiekemerd!');
                }
            });
        });

</script>