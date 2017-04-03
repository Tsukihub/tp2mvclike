<h2>Informations clients détaillées</h2>
<p><a href="index.php?p=clients">retour</a></p>
<table class="table table-bordered col-md-12 text-center">
<thead>

<tr>
<td>NOM PRENOM</td>
<td>Date de naissance</td>
<td>ADRESSE/CODE POSTAL</td>
<td>status martial</td>
<td>Surendettement</td>
</tr>
</thead>
<tbody>
<?php foreach (App::getInstance()->getTable("client")->lastAndFirstName() as  $client): ?>

	<tr>
		<td><?= $client->identite ?></td>
		<td><?= $client->birthday ?></td>
		<td><?= $client->adressecomplete ?></td>
		<td><?= $client->maritalStat ?></td>
		<td><?= $client->endettement ?></td>		

	</tr>
<?php endforeach ?>

</tbody>
</table>
