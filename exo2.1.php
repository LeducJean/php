<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<div>
       
        <?php  



            echo '<table>';
            for($i = 1; $i < 2; $i++) {
                echo '<tr>';
                for($j = 1; $j < 6; $j++) {
                    $Variable = rand(0,100);
                    echo "<td>$Variable</td>";
                }
                echo '</tr>';
            }
            echo '</table>';
       


        ?>
            
    </div>



</body>
</html>