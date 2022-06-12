<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exam.css">
    <title>Exam</title>
</head>

<body>
    <section class="page">
        <h1>Изпитен режим</h1>

        <?php
            include "../MainPage/array.php";
            $score = 0;
            for($i = 0; $i < count($array); $i++)
            {
                ?>
                <form action="score.php" method="post">
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
                    $varQuestion = "question" . $i;
                    var_dump($varQuestion); // comment this later

                    echo '<select id="' . $varQuestion . '" name="' . $varQuestion . '">';
                        echo '<option value="0">Изберете отговор</option>';
                        echo '<option value="1">A</option>';
                        echo '<option value="2">B</option>';
                        echo '<option value="3">C</option>';
                        echo '<option value="4">D</option>';
                    echo '</select>';

            }
                ?>

            <input type="submit" name="submit" value="Проверка">
            </form>

                <?php

            function submit()
            {
                if(isset($_POST['submit'])){
                    if(!empty($_POST['question'])) {
                      $selected = $_POST['question'];
                      print_r('You have chosen: ' . $selected);
                    } else {
                      print_r('Please select the value.');
                    }
                  }
            }
        ?>
        

</section>

</body>

</html>