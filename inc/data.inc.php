<?php
// Инициализация массива
$leftMenu = [
  ['link' => 'Домой', 'href' => 'index.php'],
  ['link' => 'О нас', 'href' => 'about.php'],
  ['link' => 'Контакты', 'href' => 'contact.php'],
  ['link' => 'Таблица умножения', 'href' => 'table.php'],
  ['link' => 'Калькулятор', 'href' => 'calc.php']
];

$hour = (int) strftime('%H');
$welcome = ''; // Инициализируем переменную для приветстви

if ($hour >= 0 && $hour < 6) {
  $welcome = 'Доброй ночи';
} elseif ($hour >= 6 && $hour < 12) {
  $welcome = 'Доброе утро';
} elseif ($hour >= 12 && $hour < 18) {
  $welcome = 'Добрый день';
} elseif ($hour >= 18 && $hour < 23) {
  $welcome = 'Добрый вечер';
} else {
  $welcome = 'Доброй ночи';
}

// Установка локали и выбор значений даты
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');
