<?php
session_start();
session_destroy();
header('Location: login.php?return=Voce+saiu+do+sistema');