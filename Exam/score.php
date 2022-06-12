<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="examStyle.css">
    <title>Exam score</title>
</head>

<body>
    <section class="pageScore">
        <h1>Изпитен режим</h1>
        <br>

        <?php
            include "../MainPage/array.php";
            //include "exam1.php";
            $score = 0;

            for($i = 0; $i < count($array); $i++)
            {
                $varQuestion = "question" . $i;
                $currentAnswer = $_POST[$varQuestion];
                //var_dump($currentAnswer);

                if ($currentAnswer == $array[$i]['Answer'])
                {
                    $score++;
                    echo("<p>");
                    print_r("Въпрос <b>" . ($i+1) . "</b> e верен!");
                    echo("</p>");
                }
                else
                {
                    echo ("<p>");
                    print_r("Въпрос <b>" . ($i+1) . "</b> e грешен! Верният отговор е <b>");
                    switch ($array[$i]['Answer']) 
                    {
                        case 1:
                            print_r("A.");
                            break;
                        case 2:
                            print_r("B.");
                            break;
                        case 3:
                            print_r("C.");
                            break;
                        case 4:
                            print_r("D.");
                            break;
                    }
                    echo("</b></p>");
                }
            }
            
            echo("<br><p><b>");
            print_r("Резултат: ");
            print_r($score);
            print_r(" от " . count($array));
            echo("</b></p><p><b>");
            print_r("Оценка: " . ($score/(count($array))*100) . "%");
            echo("</b></p>");

            $name= substr($filename,0,-4);
            $myfile = fopen("./export/$name.txt", "w");
        ?>

        <form action="exportResult.php">
            <section id="buttons", class="buttons">
                <button id="button" class="button">Експорт на Вашия резултат</button>
            </section>
        </form>
        <br>
    </section>
    <!-- направи изход с всичките въпроси, отговори и дадените отговори -->
</body>
</html>

