<h2>liste des clients</h2>

<p><a href="admin.php?p=clients.add">ajouter un client</a></p>



<table class="table table-bordered col-md-12 text-center">
<thead>
<tr>
<td>NOM </td>
<td>PRENOM</td>
<td>Id du client</td>
</tr>
</thead>
<tbody>
<?php foreach (App::getInstance()->getTable("client")->all() as  $client): ?>
	<tr>
	<td><?= htmlspecialchars($client->lastname) ?></td>
		<td><?= htmlspecialchars($client->firstname) ?></td>
		<td><?= htmlspecialchars($client->idDuClient) ?></td>
		<td>
			<form action="admin.php?p=clients.delete" method="post">
				<input type="hidden" name="id" value="<?= $client->idDuClient; ?>">
				<input class="btn btn-danger" type="submit">
			</form>
		</td>
		<!-- <td><button class="btn btn-danger">Delete</button></td>	 -->

	</tr>
	<?php endforeach ?>

</tbody>
</table>
