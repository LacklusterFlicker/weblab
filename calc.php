<!-- Область основного контента -->
<?php
if (isset($_POST['submit'])) {
    $num1 = (int) $_POST['num1'];
    $operator = $_POST['operator'];
    $num2 = (int) $_POST['num2'];

    if ($operator != '+' && $operator != '-' && $operator != '*' && $operator != '/') {
        $result = 'Вы ввели неправильный оператор...';
    } else {
        switch ($operator) {
            case '+':
                $result = 'Результат: ' . $num1 + $num2;
                break;
            case '-':
                $result = 'Результат: ' . $num1 - $num2;
                break;
            case '*':
                $result = 'Результат: ' . $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $result = 'На 0 делить нельзя.';
                } else {
                    $result = 'Результат: ' . $num1 / $num2;
                }
                break;
            default:
                $result = 'Вы ввели неправильный оператор';
        }
    }
    echo $result;
}
?>
<br>
<br>
<form action='' method="POST">
    <label>Число 1:</label>
    <br />
    <input name='num1' type='number' required />
    <br />
    <label>Оператор: </label>
    <br />
    <input name='operator' type='text' required />
    <br />
    <label>Число 2: </label>
    <br />
    <input name='num2' type='number' required />
    <br />
    <br />
    <input type='submit' name="submit" value='Считать'>
</form>
<!-- Область основного контента -->