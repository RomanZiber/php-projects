<?php

require_once  __DIR__ . 'classes/Form.php';

$form = new Form('post', 'action.php');

$formGet = new Form('get', 'action.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task1</title>
    <link rel="stylesheet" href="main.css"
    </head>

<body>
    <?= $form->render() ?>
    <?= $formGet->render() ?>
</body>
</html>

