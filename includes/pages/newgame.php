<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/header.php");

?>


<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/sidebar.php");

?> 

<!-- header & sidebar same for all pages -->
 
	<div class="page-content">
	<!-- replace this with a form that submits user data to the DB -->
	<?php
		if ($_SESSION['logged_in'] == false)
		{
			echo '<p> You are a visitor right now! </p>';
			echo '<p> You must be logged in to add a new game! </p>';
		}
		else {
			//<!-- replace this with a readout of a user's games -->
			echo '<p> This is where you can add a new game!</p>';
		}
	?>
	</div>
	
</div>
 
<!-- footer same for all pages -->
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");

?> 
