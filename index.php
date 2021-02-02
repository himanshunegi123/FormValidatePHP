<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="FormQuiz.css">
    <title>Online Quiz</title>
</head>

<body>
    <?php
    $Ques = array(
        0 => array(
            "ques" => "Question 1. Which has block level scope ?",
            "op1" => "var",
            "op2" => "let",
            "op3" => "const",
            "op4" => "none",
            "correct" => "op1"
        ),
        1 => array(
            "ques" => "Question 2. What is full form of PHP ?",
            "op1" => "Preprocessor HyperText",
            "op2" => "Personal home page",
            "op3" => "Pay house Payment",
            "op4" => "none",
            "correct" => "op1"
        ),
        2 => array(
            "ques" => "Question 3. What is full form of PHP ?",
            "op1" => "Preprocessor HyperText",
            "op2" => "Personal home page",
            "op3" => "Pay house Payment",
            "op4" => "none",
            "correct" => "op1"
        ),
        3 => array(
            "ques" => "Question 4. Who is known as the father of PHP?",
            "op1" => "Rasmus Lerdorf",
            "op2" => "Willam Makepiece",
            "op3" => "List Barely",
            "op4" => "none",
            "correct" => "op1"
        ),
        4 => array(
            "ques" => "Question 5. Which of the following is not true?",
            "op1" => "PHP applications can not be compile",
            "op2" => "PHP can be used to develop web applications",
            "op3" => "PHP makes a website dynamic",
            "op4" => "PHP can not be embedded into html.",
            "correct" => "op4"
        ),
        5 => array(
            "ques" => "Question 6. Which of the following function returns a text in title case from a variable?",
            "op1" => "ucwords(var)",
            "op2" => "towords(var)",
            "op3" => "upper(var)",
            "op4" => "ucwords(var",
            "correct" => "op1"
        ),
        6 => array(
            "ques" => "Question 7. Which of the following variables is not a predefined variable?",
            "op1" => "Preprocessor HyperText",
            "op2" => "ask",
            "op3" => "post",
            "op4" => "none",
            "correct" => "op2"
        ),
        7 => array(
            "ques" => "Question 8. Which of the following method sends input to a script via a URL?",
            "op1" => "Get",
            "op2" => "Personal home page",
            "op3" => "Pay house Payment",
            "op4" => "none",
            "correct" => "op1"
        ),
        8 => array(
            "ques" => "Question 9. When you need to obtain the ASCII value of a character which of the following function you apply in PHP?",
            "op1" => "asc()",
            "op2" => "chr( );",
            "op3" => "ord();",
            "op4" => "none",
            "correct" => "op1"
        ),
        9 => array(
            "ques" => "Question 10. Which of the following method sends input to a script via a URL?",
            "op1" => "Get",
            "op2" => "Post",
            "op3" => "Both",
            "op4" => "none",
            "correct" => "op1"
        ),
    );

    echo ("<div class='forM'>");
    echo ("<h1>PHP ONLINE QUIZ</h1>");
    echo ("<form action='FormQuizBackend.php' method='POST'");
    foreach ($Ques as $Q => $Q_val) {
        foreach ($Q_val as $Q2 => $Q2_val) {
            // echo($Q2[0]);
            if ($Q2 == "ques") {
                echo ("<label id='q2'> $Q2_val</label>");
                echo ("<br><br>");
            } else if ($Q2 == "correct") {
                echo ("");
            } else {
                echo ("<label id='labell'>&#8227;&nbsp;</label>");
                echo ("<input type='radio' name = '$Q' value= '".$Q2."'>");
                echo ("&nbsp");
                echo ("<label id='q3'>$Q2_val</label>");
                echo ("<br><br>");
            }
            // echo("<input type='checkbox' value='$Q2_val'>");
        }
    }



    echo ("<button type='submit' value='submit'>SUBMIT</button>");


    echo ("<form>");
    echo ("<div>");




    ?>
</body>

</html>