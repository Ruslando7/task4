<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$span = "";
foreach ($data as $el) {
    $date = date_create($el['date']);
    $date = date_format($date, "d.m.Y H:i:s");
    $span .= "<div class='note'><p class='date'>$date</p>";
    if (isset($_GET['id'])) {
        $span .= "<p class='title'>{$el['title']}</p>
                  <p class='text'>{$el['text']}</p></div>";
    } else {
        $span .= "<a href=\"item/index.php?id={$el['id']}\">{$el['title']}</a>
                  <p class='subtitle'>{$el['subtitle']}</p></div>";
    }
}
echo $span;