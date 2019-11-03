<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/header.php");

?>


<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/sidebar.php");

?> 



<!-- header & sidebar same for all pages -->
 
	<div class="page-content"> 
		<form method="POST" action="/actions/login_handler.php">
			<div> LOGIN </div>
			<input type="text" name="login"/>
			<div> PASSWORD </div>	
			<div> <input type="password" name="password"/> </div>
			<div   class="top-margin"> <input type="submit"/> </div>
		</form>

	<?php
		if (isset($_SESSION['message'])) {
			echo "<div class='message bad'>{$_SESSION['message']}</div>";
			
			unset($_SESSION['message']);
		}
	?>	

	<!-- link to createuser.php -->
	<?php 
		echo '<a href="' . $navLinks['createuser'] . '"> Create New Account </a>';
	?>
		
	</div>
	
</div>
 
<!-- footer same for all pages -->
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");

?> 
