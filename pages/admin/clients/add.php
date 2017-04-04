<?php

if (isset($_POST['lastname'], $_POST['firstname'], $_POST['birthday'], $_POST['address'], $_POST['postalCode'], $_POST['phone'], $_POST['maritalStatusId']))
{
print_r($_POST['firstname']);
var_dump($_POST['lastname']);
App::getInstance()->getTable('Client')->create([


"lastname" => htmlspecialchars($_POST['lastname']),
"firstname"=> htmlspecialchars($_POST['firstname']),
"birthday"=>htmlspecialchars($_POST['birthday']),
"address" => htmlspecialchars($_POST['address']),
"postalCode" => htmlspecialchars($_POST['postalCode']),
"phone" => htmlspecialchars($_POST['phone']),
"maritalStatusId" => htmlspecialchars($_POST['maritalStatusId'])

]);

header('location: admin.php?p=clients');

}




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
        <?= htmlspecialchars($maritals->maritalStat) ?> 
    </option>
<?php endforeach ?>
</select>

<input class="btn btn-success" type="submit">
</form>
