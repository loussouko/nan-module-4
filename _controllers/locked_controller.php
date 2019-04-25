<?php
if(isset($_GET['id']) && !empty($_GET['id']))
{
    User::bloquerUser($_GET['id']);
    header('Location: user');
    exit();
}

