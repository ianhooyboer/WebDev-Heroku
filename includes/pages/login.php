<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/header.php");

?>


<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/sidebar.php");

?> 



<!-- header & sidebar same for all pages -->
 
	<div class="page-content">
	<!-- replace this with a form that validates user input against the DB -->
		<form method="POST" action="/actions/login_handler.php">
			<div> LOGIN </div>
			<input type="text" name="login"/>
			<div> PASSWORD </div>
			<div> <input type="password" name="password"/> </div>
			<div> <input type="submit"/> </div>
		</form>

	<?php
		if (isset($_SESSION['message'])) {
		echo "<div class='message bad'>{$_SESSION['message']}</div>";
		}
	?>

		<!-- link to createuser.php -->
		<p> Create new Account</p>		
		
	</div>
	
</div>
 
<!-- footer same for all pages -->
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");

?> 
