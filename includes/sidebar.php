<div class="sidebar">
	<?php 
		echo '<a href="' . $navLinks['newgame'] . '"> Add New Game </a>';
	?>

	<hr/>

    <?php
    if ($_SESSION['logged_in'] == false)
    {

    }
    else
     {



    echo '<p> Your Games: </p>';

	//<!-- dynamically generate this list and link to the specific game's preference page -->
	echo '<ul>';
            require_once ($_SERVER["DOCUMENT_ROOT"] . "/Dao.php");
            $dao = new Dao();
            $games = $dao->getGames();

            foreach($games as $game)
            {
                echo "<li>" . $game['name']. "</li>";
            }

    echo '</ul>';
     }
    ?>
</div>