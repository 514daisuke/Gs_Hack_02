<?php
$count = (int)$_GET["count"] % 4 + 1;
var_dump($count);
// exit();

include("functions.php");

$id = (int)$_GET["count"] % 4 + 1;
$pdo = connect_to_db();

$sql = 'SELECT * FROM villa_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ようこそあなただけの隠れ家へ</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
    <header>
        <div>
            <h1>ようこそあなただけの隠れ家へ</h1>
        </div>
    </header>

    <nav>
        <ul>
            <div>
                <div><a href="#ACCESS">ACCESS</a></div>
                <div><a href="#CONTACT">CONTACT</a></div>
            </div>
        </ul>
    </nav>

    <main>
        <div>
            <section>
                <h2 class="">ABOUT</h2>
                <div class="">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <p><?= $record["villa_name"] ?></p>
                                </td>
                                <td>
                                    <p><?= $record["address"] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <img src="<?= $record["image"] ?>" alt="">
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>


        <div>
            <section id="ACCESS">
                <h2>ACCESS</h2>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.304794118895!2d130.9474063151606!3d33.95900463008527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3543bd78398287fd%3A0x542ab7ed5b49326a!2zdXp1aG91c2XvvIjjgqbjgrrjg4_jgqbjgrnvvIk!5e0!3m2!1sja!2sjp!4v1626959809262!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </section>
        </div>

        <div>
            <section id="CONTACT">
                <div>
                    <h2>CONTACT</h2>
                    <p>お問い合わせ</p>
                </div>
            </section>

            <form action="" method="post">
                <ul>
                    <li>
                        <label class="form_label">名前</label>
                        <input class="form" type="text" name="yourname" placeholder="Gs 志士">
                    </li>
                    <li>
                        <label class="form_label" for="kana">カナ</label>
                        <input class="form" type="text" id="kana" placeholder="ジーズ シシ">
                    </li>
                    <li>
                        <label class="form_label_adress" for="email">メールアドレス</label>
                        <input class="form" type="email" id="email" placeholder="example@gs.ac.jp">
                    </li>
                    <li>
                        <div class="check_box">
                            <div class="check_box_input">
                                <div>
                                    <input type="checkbox" id="check1">
                                    <label for="check1">いますぐ契約する</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="check2">
                                    <label for="check2">少し考える</label>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div>
                    <button type="submit">送信</button>
                </div>
            </form>
        </div>
        <div>
            <a href="#" id=""><i class="blogicon-chevron-up"></i>別の場所もみてみる</a>
        </div>

        <div>
            <a href="#" id="page-top"><i class="blogicon-chevron-up"></i>トップへ戻る</a>
        </div>

        <footer class="footer">
            copyrights Gs Fukuoka Hack Fes 2021
        </footer>

    </main>
</body>

</html>




<!-- <body>
    <h1>総合計</h1>

    <div id='output'></div> -->

<!-- jpuery読み込み -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        const data = <?= json_encode($count) ?>;
        num = data % 4

        const outputData = `総合計${data}を４で割った余りは${num}`

        $("#output").html(outputData);
    </script>



</body>

</html> -->