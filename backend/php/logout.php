<?php
session_unset();
session_destroy();
header("Location: https://workifyph.online");
exit;