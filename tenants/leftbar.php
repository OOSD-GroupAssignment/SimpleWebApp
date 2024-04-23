<link rel="stylesheet" type="text/css" href="home.css">
<style type="text/css">
	p #ee{
		text-decoration-color: brown;
	}
	#ee{
		animation-duration: 8s;
		animation-name: slidein;
		animation-iteration-count: infinite;
		
	}

	@keyframes slidein{
		0%{
			margin-left: 0%; 
		}
		50%{
			margin-left: 300px; 
		}
		100%{
			margin-left: 0%;
		}
	}
</style>
<?php echo "<div id='idk'><p id='ee'>Hello! </p></article></div>"?>
