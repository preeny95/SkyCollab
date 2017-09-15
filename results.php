<html>
    <head>
        <title>Super Arrows</title>
    </head>
    <body>
            <?php 
                

                foreach($_POST['player1'] as $player1score)
                {
                    echo "<p>$game : $player1score</p>";
                }

                foreach($_POST['player2'] as $player2score)
                {
                    echo "<p>$player2score</p>";
                }
            ?>
    </body>
</html>