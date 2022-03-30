<?php
function drawTable($cols, $rows, $color)
{
    echo '<table width="500" border="2" style="background-color:', $color, '">';
    for ($i = 1; $i <= $rows; $i++) {
        if ($i == 1) {
            echo '<tr style="text-align: center; font-weight: bold;">';
        } else {
            echo '<tr>';
        }
        for ($j = 1; $j <= $cols; $j++) {
            if ($j == 1) {
                echo '<td style="font-weight: bold; text-align: center;">', $i, '*', $j, '=', $i * $j, '</td>';
            } else {
                echo '<td>', $i, '*', $j, '=', $i * $j, '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}

function drawMenu($menu, $vertical = true)
{
    $css = '';
    $marg = '';
    if (!$vertical) {
        $css = ' style="display: flex; flex-wrap: wrap; font-size: 12px"';
        $marg = ' style="margin: 0 10px 0 0"';
    }
    echo "<ul{$css}>";
    foreach ($menu as $key) {
        echo "<li>";
        echo "<a{$marg} href='{$key['href']}'> {$key['link']} </a>";
        echo "</li>";
    }
    echo '</ul>';
}
