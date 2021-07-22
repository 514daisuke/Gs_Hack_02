<?php
// var_dump($_POST);
// exit();

session_start();
include('functions.php');
check_session_id();

$pdo = connect_to_db();
$user_id = $_SESSION['id'];

//  select文を変更
// $sql = 'SELECT * FROM `user_tabel`LEFT OUTER JOIN (SELECT user_id, COUNT(user_id) AS cnt FROM check_table GROUP BY user_id) AS likes ON user_tabel.id = likes.user_id';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// アウトプットの情報をうまく変更する
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = "";
    foreach ($result as $record) {
        $output .= "<tr>";
        $output .= "<td>{$record["no"]}</td>";

        // $output .= "<td><a href='edit.php?id={$record["id"]}'>編集</a></td>";
        $output .= "</tr>";
    }
    unset($record);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>あなただけの隠れ家</title>
</head>

<link rel="stylesheet" href="../20210722Hack/css/style.css">
<body>
    <fieldset>
        <legend></legend>
        <a href="logout.php">ログアウト</a>









                <!-- <?= $output ?> -->
    </fieldset>
    <section>


    </section>

</body>

</html>