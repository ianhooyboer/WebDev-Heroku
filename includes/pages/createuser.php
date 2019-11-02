<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/header.php");

?>


<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/sidebar.php");

?> 



<!-- header & sidebar same for all pages -->
 
	<div class="page-content">
	<!-- replace this with a form that validates user input against the DB -->
		<form method="POST" action="/actions/create_user.php">
			<div> Username </div>
			<input type="text" name="username"/>
			<div> Password </div>
			<div> <input type="password" name="password"/> </div>
			<div> Email </div>
			<div> <input type="text" name="email"/> </div>			
			
			<div   class="top-margin"> <input type="submit"/> </div>
		</form>

	<?php
    if (isset($_SESSION['messages'])) {
       foreach ($_SESSION['messages'] as $message) {
         echo "<div class='message {$_SESSION['sentiment']}'>{$message}</div>";
       }
	   
	   unset($_SESSION['messages']);
    }

    ?>
		
	</div>
	
</div>
 
<!-- footer same for all pages -->
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");

?> 
