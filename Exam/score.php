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
            //include "exam1.php";
            $score = 0;

            for($i = 0; $i < count($array); $i++)
            {
                $varQuestion = "question" . $i;
                $currentAnswer = $_POST[$varQuestion];
                var_dump($currentAnswer);

                if ($currentAnswer == $array[$i]['Answer'])
                {
                    $score++;
                }
            }
            
            print_r("Score: ");
            print_r($score);
            
        ?>
    </section>
    <!-- направи изход с всичките въпроси, отговори и дадените отговори -->
</body>
</html>

