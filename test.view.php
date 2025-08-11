<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $info['name'] ?></h1>

    <ul>
        <?php foreach ($info['learn'] as $l) : ?>
            <li><?php echo $l ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>