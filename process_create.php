<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', 'admin1025', 'test');
    $sql = "
    INSERT INTO data
    (title, pw, data)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['pw']}',
        '{$_POST['data']}'
    )";
    $res = mysqli_query($conn, $sql);
    if($res === false){
        echo '저장하는 과정에서 문제가 생겼습니다.';
        error_log(mysqli_error($conn));
    }
    else{
        echo '성공적으로 데이터가 저장이 됐습니다. <br/> <a href = "index.php">돌아가기</a>';
    }
    ?>
</body>
</html>