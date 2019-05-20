<?php
/*header('X-XSS-Protection:0');*/
include_once "from2Functions.php";
$fruits = ["mango", "orange", "Banana", "apple", "lemon", "peach"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Hello world</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="colum column-60 column-offset-20">
            <h2>Select/Dropdowns</h2>
            <p>orem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text </p>
            <p>
                <?php
                /* print_r($_POST);
                 if (isset($_POST['fruits']) && $_POST['fruits']!=''){
                     printf("You Have Selected : %s",filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING));
                 }*/
                /*                $sFruits = $_POST['fruits'] ? $_POST['fruits']:array() ;*/
/*                $sFruits = $_POST['fruits'] ?? array();//It is feature of PHP-7*/
                $sFruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
                if (count($sFruits) > 0) {
                    echo "You Have Selected :" . join(", ", $sFruits);
                }


                ?>
            </p>

        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST">
                <label for="fruits">Select Some Fruits</label>
                <select style="height: 200px;" name="fruits[]" id="fruits" multiple>
                    <option value="" disabled selected>Select Some Fruits</option>
                    <?php displayOptions($fruits,$sFruits); ?>
                </select>

                <button type="submit">Submit</button>

            </form>
        </div>
    </div>
</div>
</body>
</html>