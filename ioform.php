<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <li>HTML</li>
    </ol>
    <form action="process_create.php" method="POST" formnovalidate>
        <p><input type="text" name="title" placeholder="이름입력" minlength="2" maxlength="5" required></p>
        <p><input type="text" name="pw" placeholder="사는지역" minlegth="1" maxlength="10" required></p>
        <p><input type="number" name="data" placeholder="나이" min="1" max="120" required></p>
        <p><input type="submit"></p>
    </form>
    <?php
    
    ?>
</body>
</html>