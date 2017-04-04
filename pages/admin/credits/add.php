<?php
// if (isset($_POST['id'])){
if (isset($_POST['body'], $_POST['amount'], $_POST['clients_id']))
{

App::getInstance()->getTable('credit')->create([


"body" => htmlspecialchars($_POST['body']),
"amount"=> htmlspecialchars($_POST['amount']),
"clients_id"=> htmlspecialchars($_POST['clients_id'])

]);

header('location: admin.php?p=credits');

}




?>

<h2>Ajouter un crédit à <?= $_POST['nom'] ?></h2>

<form action="admin.php?p=credits.add" method="post">    
<input type="text" name="body" placeholder="Organisme de crédit">
<input type="number" name="amount" placeholder="montant">
<input type="hidden" name="clients_id" value="<?= $_POST['id']?>">
<input class="btn btn-success" type="submit">
</form>
<?php
// }else{
// 	header('location: admin.php?p=credits');
// }
?>