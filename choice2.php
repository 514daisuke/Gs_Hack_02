<?php
// var_dump($_GET);
// exit();

$count = (int)$_GET["count"];
// var_dump($count);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../20210722Hack/css/choice.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>選択肢２</title>
</head>

<body>

    <h1>避暑地で過ごすなら？</h1>

    <div id='output'></div>

    <!-- jpuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        const data = <?= json_encode($count) ?>;

        const answer1 = 1 + data
        const answer2 = 2 + data
        const answer3 = 3 + data

        const outputData = `

        <div>

            <div class ="choice">
                <a href='choice3.php?count=${answer1}'><img src="../20210722Hack/img/shizen.png" alt="外でアクティブをする" width="250" height="200"></a>
            </div>

            <div class ="choice">
                <a href='choice3.php?count=${answer2}'><img src="../20210722Hack/img/rekishi.png" alt="観光に行く" width="250" height="200"></a>
            </div>

            <div class ="choice">
                <a href='choice3.php?count=${answer3}'><img src="../20210722Hack/img/home.png" alt="１日寝て過ごす"width="250" height="200"></a>
            </div>

        </div>

        `

        $("#output").html(outputData);
    </script>


</body>

</html>