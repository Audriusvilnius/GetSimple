<?php
global $wpdb;
$users = $wpdb->get_results("SELECT * FROM gs_users");
foreach ($users as $user) {
echo '<h3>' . $user->user_nicename . '</h3><br>';
echo '<h3>'. $row->user_login . '</h3><br>';

}

?>