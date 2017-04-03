<h2>Liste des clients</h2>
<p><a href="index.php?p=clients.details">Informations clients détaillées</a></p>
<table class="table table-bordered col-md-12 text-center">
<thead>

<tr>
<td>NOM PRENOM</td>
<td>DATE DE NAISSANCE</td>

</tr>
</thead>
<tbody>
<?php foreach (App::getInstance()->getTable("client")->lastAndFirstName() as  $client): ?>
	<tr>
	<td><?= $client->identite ?></td>
		<td><?= $client->birthday ?></td>
	
	</tr>
	<?php endforeach ?>

</tbody>
</table>
