<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exo1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>





<div>
       
        <?php  



        $Variable = rand(0,100);


            if($Variable%2==1){

               echo "<div style='background-color:red;'>$Variable est impaire"; 

            }else{

                echo "<div style='background-color:blue;'>$Variable est paire"; 

            }



        ?>
            
    </div>
    




</body>
</html>