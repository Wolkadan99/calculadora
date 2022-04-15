<?php

use Aluno\ProjetoPhp\Config\Logger;

session_destroy();
Logger::logger("Usuário fez logout", "info");
header('Location: ../src/Views/login.page.php');

?>