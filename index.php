<?php 
$FAQs = [
    'Come Stai?' => [
        'text' = 'bene,grazie'
    ],
    [
        'text' = 'malissimo, mi manca Anastasia'
    ],
'Ti piace il lavoro?' => [
        'text' = ' si, è entusiasmante!'
    ],
    [
        'text' = 'no, è estenuante!'
    ]

]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($FAQs as $ask => $FAQ) : ?>
        <h2><?= $ask ?></h2>
        <p><?=  $FAQ['text'] ?></p>
    <?php endforeach; ?>
</body>
</html>

