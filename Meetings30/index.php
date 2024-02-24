<?php
require_once 'helper/RequiredRule.php';
require_once 'helper/Validation.php';

$name = $_POST['name'] ?? "name";
$attributes = ['name' => $name];

$rules = [
    'name' => [
        new RequiredRule(),
    ],
];

$validation = new Validation();
$validation->makeRule(
    $attributes,
    $rules
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <div style="color: red;">
            <?= $validation->getErrors()['name'][0] ?? ''; ?>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>