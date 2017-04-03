<?php

if (isset($_POST['lastname'], $_POST['firstname'], $_POST['birthday'], $_POST['address'], $_POST['postalCode'], $_POST['phone'], $_POST['maritalStatusId']))
{
print_r($_POST['firstname']);
var_dump($_POST['lastname']);
App::getInstance()->getTable('Client')->create([


"lastname" => $_POST['lastname'],
"firstname"=> $_POST['firstname'],
"birthday"=>$_POST['birthday'],
"address" => $_POST['address'],
"postalCode" => $_POST['postalCode'],
"phone" => $_POST['phone'],
"maritalStatusId" => $_POST['maritalStatusId']

]);

header('location: admin.php?p=clients');

}



lastname 	firstname 	birthday 	address 	postalCode 	phone 	maritalStatusId 
?>

<h2>add client</h2>

<form action="admin.php?p=clients.add" method="post">    
<input type="text" name="lastname" placeholder="lastname">
<input type="text" name="firstname" placeholder="firstname">
<input type="date" name="birthday" placeholder="date de naissance">
<input type="text" name="address" placeholder="address">
<input type="text" name="postalCode" placeholder="code postal">
<input type="number" name="phone" placeholder="phone">
<select name="maritalStatusId" class="form form-control">
<?php foreach (App::getInstance()->getTable("Marital")->all() as $maritals):?>
    <option value='<?= $maritals->maritalid ?>' ?>
        <?= $maritals->maritalStat ?> 
    </option>
<?php endforeach ?>
</select>

<input class="btn btn-success" type="submit">
</form>
