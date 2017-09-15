<html>
    <head>
        <title>Super Arrows</title>
    </head>
    <body>
            <?php 

                $predictions = [];

                foreach($_POST['player1'] as $val => $player1score)
                {
                    $match = [];
                    array_push($match, $player1score);
                    $predictions[$val] = $match;
                }

                foreach($_POST['player2'] as $val => $player2score)
                {
                    $match = $predictions[$val];
                    array_push($match, $player2score);
                    $predictions[$val] = $match;
                }
            
                

                print_r($predictions);
            ?>
    </body>
</html>