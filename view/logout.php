<?php

session_set_cookie_params(0);
session_start();
session_destroy();
echo 'Thank you for signing out. <a href="../index.php">Go back to home page</a>';
