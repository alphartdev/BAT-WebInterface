<?php
chdir("..");
require("application/models/BaseModel.php");
require("application/models/admin_model.php");
$admin_model = new admin_model();
echo $admin_model->createAccount($_POST['user'], $_POST['password']);
$admin_model->toogleSU($_POST['user']);
?>