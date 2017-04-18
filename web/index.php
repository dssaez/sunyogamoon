<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../utils/functions.php';
require_once '../utils/constants.php';
require_once '../utils/languages.php';
require_once '../utils/check_request.php';

$_SESSION['TokenCheck_NotNull'] = "Activo";
$_SESSION['Token1'] = generaPass();

require_once VIEWS.'/templates/base.php';
