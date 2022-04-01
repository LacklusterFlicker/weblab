<!-- Область основного контента -->
<form action='<?= $_SERVER['REQUEST_URI'] ?>' method="POST">
  <label>Количество колонок: </label>
  <br />
  <input name='cols' type='text' value="" />
  <br />
  <label>Количество строк: </label>
  <br />
  <input name='rows' type='text' value="" />
  <br />
  <label>Цвет: </label>
  <br />
  <input name='color' type='text' value="" />
  <br />
  <br />
  <input type='submit' value='Создать' />
</form>
<!-- Таблица -->
<?php
echo '<br>';
drawTable(5, 7, 'MediumSlateBlue');
echo '<br>';
drawTable(7, 5, 'PaleTurquoise');
?>
<!-- Таблица -->
<!-- Область основного контента -->
<script>
  if (window.localStorage) {
    var elements = document.querySelectorAll('[name]');

    for (var i = 0, length = elements.length; i < length; i++) {
      (function(element) {
        var name = element.getAttribute('name');

        element.value = localStorage.getItem(name) || '';

        element.onkeyup = function() {
          localStorage.setItem(name, element.value);
        };
      })(elements[i]);
    }
  }
</script>