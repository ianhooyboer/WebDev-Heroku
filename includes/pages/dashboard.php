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
            echo '<h2> Dashboard </h2>';

            //<!-- dynamically generate this list and link to the specific game's preference page -->
            require_once ($_SERVER["DOCUMENT_ROOT"] . "/Dao.php");
            $dao = new Dao();
            $games = $dao->getGames();

            foreach($games as $game)
            {
                    echo "- - - TODO: show a card of information for each game - - -";
                    echo "<div class=\\'card\\'>";
                        echo htmlspecialchars($game['name']);
                    echo "</div>";
            }

		}
	?>		
		
	</div>
	
</div>
 
<!-- footer same for all pages -->
<?php

include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");

?> 
