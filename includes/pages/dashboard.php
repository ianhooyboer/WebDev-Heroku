<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/header.php");

?>


<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/sidebar.php");

?> 

<!-- header & sidebar same for all pages -->
 
	<div class="page-content">
	
	<?php
		if ($_SESSION['logged_in'] == false)
		{
			echo '<p> You are a visitor  right now! </p>';
			echo '<p> Please log in to begin building your game collection! </p>';
		}
		else {
			//<!-- replace this with a readout of a user's games -->
			echo '<p> This is your dashboard! </p>';
			echo '<p> There is no content, add a new game! </p>';
		}
	?>		
		
	</div>
	
</div>
 
<!-- footer same for all pages -->
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");

?> 
