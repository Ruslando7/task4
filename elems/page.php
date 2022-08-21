<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$prev = $page - 1;
if ($prev > 1):?>
    <li>
        <a href="?page=<?=$prev?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li>
<?php else:?>
    <li class="disabled">
        <span aria-hidden="true">&laquo;</span>
    </li>
<?php endif; ?>

<?php
for ($i = 1; $i <= $countPage; $i++) {
    if ($page == $i) {
        $class = " class=\"active\"";
    } else {
        $class = "";
    }
    echo "<li$class><a href=\"?page=$i\">$i</a></li>";
}
$next = $page + 1;
if ($next <= $countPage):?>
    <li>
        <a href="?page=<?=$next?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>
<?php else:?>
    <li class="disabled">
        <span aria-hidden="true">&raquo;</span>
    </li>
<?php endif; ?>
