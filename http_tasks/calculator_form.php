<?php
// При первом открытии файла напрямую переменных нет — подставляем значения по умолчанию
$a = $a ?? '';
$b = $b ?? '';
$operation = $operation ?? '+';
$result = $result ?? null;
$error = $error ?? null;
$operations = ['+', '-', '*', '/', '**'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
</head>
<body>
<form action="calculator.php" method="post">
    <input type="text" name="a" placeholder="Первое число" value="<?= htmlspecialchars((string)$a, ENT_QUOTES, 'UTF-8') ?>">
    <select name="operation">
        <?php foreach ($operations as $op): ?>
            <option value="<?= htmlspecialchars($op, ENT_QUOTES, 'UTF-8') ?>"<?= $op === $operation ? ' selected' : '' ?>><?= htmlspecialchars($op, ENT_QUOTES, 'UTF-8') ?></option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="b" placeholder="Второе число" value="<?= htmlspecialchars((string)$b, ENT_QUOTES, 'UTF-8') ?>">
    <button type="submit">Вычислить</button>
</form>

<?php if ($error !== null): ?>
    <p style="color: red;"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
<?php elseif ($result !== null): ?>
    <p>Результат: <?= htmlspecialchars((string)$result, ENT_QUOTES, 'UTF-8') ?></p>
<?php endif; ?>
</body>
</html>