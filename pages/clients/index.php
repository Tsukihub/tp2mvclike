<h2>Liste des clients</h2>

<table class="table table-bordered col-md-12 text-center">
<thead>

<tr>
<td>NOM PRENOM</td>
<td>DATE DE NAISSANCE</td>

</tr>
</thead>
<tbody>
<?php foreach (App::getInstance()->getTable("client")->all() as  $client): ?>
	<tr>
	<td><?= htmlspecialchars($client->identite) ?></td>
		<td><?= htmlspecialchars($client->birthday) ?></td>
		<td>
			<form action="index.php?p=clients.details" method="post">
				<input type="hidden" name="idclient" value="<?= $client->idDuClient; ?>">
				<input class="btn btn-danger" type="submit" value="détails">
			</form>
		</td>
	
	</tr>
	<?php endforeach ?>

</tbody>
</table>
