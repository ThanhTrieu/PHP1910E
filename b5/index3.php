<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thuc hanh</title>
</head>
<body>
    <?php
        $state = $_GET['state'] ?? '';
        $input = $_GET['input'] ?? '';
        $result = $_GET['result'] ?? '';
    ?>
    
    <?php if($state === 'empty'): ?>
        <h5 style="color: red;">Vui long nhap day so</h5>
    <?php endif; ?>
    
    <form action="server/check.php" method="post">
        <label>nhap day so, cac so phai cach nhau boi dau phay</label>
        <input type="text" name="numberString" value="<?= $input; ?>">
        <br><br>
        <button type="submit" name="btnCheck">Kiem tra so nguyen to trong day</button>
    </form>
    
    <?php if($state === 'ok' && $result !== ''): ?>
        <h5>Cac so nguyen to trong day so la: <?= $result; ?></h5>
    <?php elseif($state === 'ok' && $result === ''): ?>
        <h5>ko co so nguyen to trong day so</h5>
    <?php endif; ?>
    
</body>
</html>
