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
			 
			
				require_once ($_SERVER["DOCUMENT_ROOT"] . "/Dao.php");
				$dao = new Dao();
				$games = $dao->getGames(); 
			
				//if ($games->rowCount() > 0) 
				//{
				//	echo "<ul>";
				
				//	foreach($games as $game)
				//	{
				//		echo "<li>" . $game['username'] . "</li>";
				//	}
					
				//	echo "</ul>";
				//}
				//else 
				//{
				//	echo '<p> This is your dashboard! </p>';
				//	echo '<p> Add a game to begin building your collection! </p>';
				//} 
		}
	?>		
		
	</div>
	
</div>
 
<!-- footer same for all pages -->
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");

?> 
