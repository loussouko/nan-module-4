<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 19/04/2019
 * Time: 19:19
 */
session_unset();
session_destroy();
header('Location: home');
exit();
