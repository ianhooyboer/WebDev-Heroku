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
			 echo '<form method="POST" action="/actions/newgame_handler.php">
                        <div> Name </div>
                        <input type="text" name="name"/>
                        <div> Genre </div>
                        <div> <input type="text" name="genre"/> </div>
                        <div class="hori"><div> Competitive? </div>
                        <div> <input type="checkbox" name="competitive" value="Yes" /> </div> </div>			
                        <div> Average Playtime </div>
                        <div> <input type="text" name="avgplaytime" /> </div>			
                        <div> Number of Players </div>
                        <div> <input type="text" name="numplayers"/> </div>			
                        
                        <div   class="top-margin"> <input type="submit"/> </div>
		            </form>';
		}
	?>

        <?php
        if (isset($_SESSION['message'])) {
            echo "<div class='message bad'>{$_SESSION['message']}</div>";

            unset($_SESSION['message']);
        }
        ?>
    </div>
	
</div>
 
<!-- footer same for all pages -->
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");

?> 
