<?php
// var_dump($_GET);
// exit();

$count = (int)$_GET["count"];
var_dump($count);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>選択肢３</h1>

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
                <a href='result.php?count=${answer1}'>１をしたい</a>
            </div>
            <div>
                <a href='result.php?count=${answer2}'>２が欲しい</a>
            </div>
            <div>
                <a href='result.php?count=${answer3}'>３で遊びたい</a>
            </div>
        `

        $("#output").html(outputData);
    </script>


</body>

</html>