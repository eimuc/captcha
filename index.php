<?php

include __DIR__ . '/images.php';
include __DIR__ . '/verify.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="./main.js"></script>
    <title>Captcha</title>
</head>
<body>
    
    <h1>Select 3 images below matching "Žalgiris" basketball team.</h1>
    <div class="container">
        <form action="" method="POST">

            <div class="item">
                <input type="checkbox" name="<?php echo $images[0]; ?>" id="checkbox1" onclick="return checkBox()"/>
                <label for="checkbox1">
                <img class="images" src="<?php echo $images[0]; ?>" alt="image">
                </label>
            </div>

            <div class="item">
                <input type="checkbox" name="<?php echo $images[1]; ?>" id="checkbox2" onclick="return checkBox()"/>
                <label for="checkbox2">
                <img class="images" src="<?php echo $images[1]; ?>" alt="image">
                </label>
            </div>

            <div class="item">
                <input type="checkbox" name="<?php echo $images[2]; ?>" id="checkbox3" onclick="return checkBox()"/>
                <label for="checkbox3">
                <img class="images" src="<?php echo $images[2]; ?>" alt="image">
                </label>
            </div>

            <div class="item">
                <input type="checkbox" name="<?php echo $images[3]; ?>" id="checkbox4" onclick="return checkBox()"/>
                <label for="checkbox4">
                <img class="images" src="<?php echo $images[3]; ?>" alt="image">
                </label>
            </div>

            <div class="item">
                <input type="checkbox" name="<?php echo $images[4]; ?>" id="checkbox5" onclick="return checkBox()"/>
                <label for="checkbox5">
                <img class="images" src="<?php echo $images[4]; ?>" alt="image">
                </label>
            </div>

            <div class="item">
                <input type="checkbox" name="<?php echo $images[5]; ?>" id="checkbox6" onclick="return checkBox()"/>
                <label for="checkbox6">
                <img class="images" src="<?php echo $images[5]; ?>" alt="image">
                </label>
            </div>

            <div class="item">
                <input type="checkbox" name="<?php echo $images[6]; ?>" id="checkbox7" onclick="return checkBox()"/>
                <label for="checkbox7">
                <img class="images" src="<?php echo $images[6]; ?>" alt="image">
                </label>
            </div>

            <div class="item">
                <input type="checkbox" name="<?php echo $images[7]; ?>" id="checkbox8" onclick="return checkBox()"/>
                <label for="checkbox8">
                <img class="images" src="<?php echo $images[7]; ?>" alt="image">
                </label>
            </div>

            <div class="item">
                <input type="checkbox" name="<?php echo $images[8]; ?>" id="checkbox9" onclick="return checkBox()"/>
                <label for="checkbox9">
                <img class="images" src="<?php echo $images[8]; ?>" alt="image">
                </label>
            </div>


            <?php echo verifyCheckbox(); ?>
            <input class="button" type="submit" value="Verify">

        </form>

    </div>

</body>
</html>