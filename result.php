<?php
// var_dump($_GET);
// exit();

$count = (int)$_GET["count"];
var_dump($count);

?>


<body>
    <h1>総合計</h1>

    <div id='output'></div>

    <!-- jpuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        const data = <?= json_encode($count) ?>;
        num = data % 4

        const outputData = `総合計${data}を４で割った余りは${num}`

        $("#output").html(outputData);
    </script>


</body>

</html>