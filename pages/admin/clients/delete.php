<?php
echo($_POST['id']);
App::getInstance()->getTable('client')->deletebis($_POST['id']);
header('location: admin.php?p=clients');