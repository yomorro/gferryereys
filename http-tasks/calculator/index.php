<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
    <div>
        <form action="calculator.php" method="get">
            <input name="a" placeholder="Введите первое число"> <br>
            <input name="b" placeholder="Введите второе число"> <br>
            <select name="operation">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>**</option>
            </select>
            <button type="submit">=</button>
        </form>
    </div>
    <div>
        <?php
        if (isset($_GET['result'])) {
            echo $_GET['result'];
            //print_r($_GET); 
        }
        ?>
    </div>
</body>
</html>