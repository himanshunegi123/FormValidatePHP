<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .main {
            width: 50%;
            height: 50vh;
            margin: 10% 25%;
            background-color: whitesmoke;
            text-align: center;
            border-radius: 10px;
            padding: 5%;

        }

        button {
            width: 25%;
            height: 35px;
            margin: 10% 40%;
            background-color: rgb(6, 140, 250);
            color: white;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            box-shadow: gray 1px 2px 1px 2px;

        }

        button:hover {
            cursor: pointer;
            box-shadow: none;
            color: black;
            border: 2px solid rgb(129, 129, 243);
        }

        #aw {
            text-decoration: none;
            color: white;
        }
    </style>

</head>

<body>
    <div class="main">
        <h1>YOUR SCORE</h1>

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



        // $count = 0;

        $count = 0;

        foreach ($Ques as $Q => $Q2_val) {
            if (isset($_POST[$Q])) {
                if ($_POST[$Q] == $Q2_val['correct']) {
                    $count++;
                }
            }
        }
        echo "<h1 >$count</h1>";
        echo "<button  type='Submit'><a id='aw' href='FormQuiz.php'>TRY AGAIN</a></button>"
        ?>


    </div>

</body>

</html>