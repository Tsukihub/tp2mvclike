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

<?php $counter=0; ?>
<?php foreach (App::getInstance()->getTable("client")->findbis($_POST['idclient']) as  $client): ?>

	<tr>
		<?php if($counter==0){?>
		<td><?= htmlspecialchars($client->identite) ?></td>
		<td><?= htmlspecialchars($client->birthday) ?></td>
		<td><?= htmlspecialchars($client->adressecomplete) ?></td>
		<td><?= htmlspecialchars($client->maritalStat) ?></td>
		
		<td><?= htmlspecialchars($client->endettement) ?></td>	

	</tr>
	<?php $counter+=1;}else{ ?>

	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><?= htmlspecialchars($client->endettement) ?></td>	

	</tr>
	<?php }?>
<?php endforeach ?>


</tbody>
</table>
