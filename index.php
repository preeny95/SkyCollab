<?php 
include 'includes/session.inc.php';
//include 'logics/authorize.php';

if(isset($_SESSION['login']))
{
     include('includes/session-logout.php');
}else
{ include('includes/session-login.php');
}
?>
<html>
<head>
    <title>Super Arrows</title>
</head>
<body>

<h2><a href="checklogin.php">Admin Page</a></h2>
    <form method="POST" action="results.php">
        <?php 

        
            //change to 2d array
            $allGames = array(array("James Smith", "Luke Green"), array("Phil Taylor", "Michael Van Gerwin"));

            foreach($allGames as $game)
            {
                echo "<p>".$game[0]. " vs " .$game[1]. "</p>";
                echo "<input type='number' name='player1[]'/>";
                echo "<input type='number' name='player2[]'/>";
            }

            echo "<br/><br/>";
            echo "<input type='submit'/>";
            
        ?>
    </form>
</body>
</html>
