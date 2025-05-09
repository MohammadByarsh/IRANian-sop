<?php
if (isset($_SESSION['state_login']) && $_SESSION['state_login'] && $_SESSION['user_type'] == "admin") {
    echo "<h4>پیوند های مدیر</h4>";
    echo "<ul style='list-style:square;font-weight:700'>";
    echo "<li><a href='admin_orders.php'>سفارشات کاربران</a></li>";
    echo "<li><a href='admin_messages.php'>پیام های کاربران</a></li>";
    echo "</ul>";
    echo "پیوند های کاربران عادی";
}

