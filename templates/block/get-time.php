<?php
// Function to convert a time difference into a friendly format

$timestamp_old = get_post_time('U');
$timestamp_now = time();

echo toFriendlyTime($timestamp_now - $timestamp_old);
?>
