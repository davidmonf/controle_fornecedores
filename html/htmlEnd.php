


	</section>
	
</section>

</body>
	
	<script>

		$.getScript( "../src/js/main.js" )
			.done(function( script, textStatus ) {
				console.log( textStatus );
			})
			.fail(function( jqxhr, settings, exception ) {
				$( "div.log" ).text( "Triggered ajaxError handler." );
			});

			
	</script>

</html>


