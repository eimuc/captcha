<?php


function verifyCheckbox() {

  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    if (!empty($_POST['_/img/z1_jpg']) && !empty($_POST['_/img/z2_jpg']) && !empty($_POST['_/img/z3_jpg'])) {
      return '<h3 style="color: green;">Correct!</h3>';
    } else {
      return '<h3 style="color: red;">Incorrect!</h3>';
    }
  } else {
    return '<h3>Choose 3 images!</h3>';
  }
}