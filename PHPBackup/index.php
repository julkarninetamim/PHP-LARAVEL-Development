<?php
header('X-XSS-Protection:0');
include_once "functions.php";
?>
<!DOCTYPE html>
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
            <h2>Our First Form</h2>
            <p>orem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text <</p>

            <p>
                <?php
                $fname = '';
                $lname = '';
                $checked = '';
                ?>
                <?php
                if (isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1) {
                    $checked = 'checked';
                }


                ?>

                <?php
                if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                }
                ?>
                <?php
                if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                }
                ?>
            </p>
        </div>

    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>Welcome To PHP Class Room</h1>
            <form method="POST">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                <div>
                    <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>>
                    <label for="cb1" class="label-inline">Some CheckBox</label>
                </div>

                <label class="label">Select Some Fruits</label>
                <!--It is for Multiple Array-->
                <!--
                <label>
                    <input type="checkbox" name="fruits[]" value="orange" <?php /*isChecked('fruits', 'orange')*/ ?>>
                    <label class="label-inline">Orange</label><br>
                </label>
                  <label>
                    <input type="checkbox" name="fruits[]" value="mango" <?php /*isChecked('fruits', 'mango') */?>>
                    <label class="label-inline">Mango</label><br>
                </label>
                <label>
                    <input type="checkbox" name="fruits[]" value="banana" <?php /*isChecked('fruits', 'banana') */?>>
                    <label class="label-inline">Banana</label><br>
                </label>
                <label>
                    <input type="checkbox" name="fruits[]" value="lemon" <?php /*isChecked('fruits', 'lemon') */?>>
                    <label class="label-inline">Lemon</label><br>
                </label>-->
                <label>
                    <input type="checkbox" name="fruits[]" value="orange" <?php isFruitChecked('orange') ?>>
                    <label class="label-inline">Orange</label><br>
                </label>
                <label>
                    <input type="checkbox" name="fruits[]" value="mango" <?php isFruitChecked( 'mango') ?>>
                    <label class="label-inline">Mango</label><br>
                </label>
                <label>
                    <input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked( 'banana') ?>>
                    <label class="label-inline">Banana</label><br>
                </label>
                <label>
                    <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitChecked( 'lemon') ?>>
                    <label class="label-inline">Lemon</label><br>
                </label>


                <button type="submit">Submit</button>

            </form>
        </div>
    </div>
</div>
</body>
</html>