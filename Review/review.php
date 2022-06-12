<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="review.css">
    <title>Review</title>
</head>

<body>
    <section class="page">
        <h1>Реценция на тест</h1>

        <?php
        echo '<p>Hello World</p>';
            include "../MainPage/array.php";
            for($i = 0; $i < count($array); $i++){
                ?>
                <form action="" method="post">
                    <?php
                    echo "<ul class='questions'>";
                        echo "<li>";
                            print_r("Номер: ");
                            print_r($i+1);
                        echo "</li>";

                        echo "<li>";
                            print_r($array[$i]['Question']);
                        echo "</li>";

                        echo "<li>";
                            print_r("A) ");
                            print_r($array[$i]['Option1']);
                        echo "</li>";
                        
                        echo "<li>";
                            print_r("B) ");
                            print_r($array[$i]['Option2']);
                        echo "</li>";

                        echo "<li>";
                            print_r("C) ");
                            print_r($array[$i]['Option3']);
                        echo "</li>";

                        echo "<li>";
                            print_r("D) ");
                            print_r($array[$i]['Option4']);
                        echo "</li>";
                    echo "</ul>";
                    ?>
                  
                </form>
                <?php
            }

           
        ?>
        

</section>

</body>

</html>
