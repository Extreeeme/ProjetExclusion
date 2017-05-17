<table class="table table-striped">
  <thead>
    <th>Date</th>
    <th>Auteur</th>
    <th>Message</th>
    <th>Action</th>
  </thead>
  <tbody>
    <?php foreach ($testimonies as $key => $value): ?>
    <tr>
      <td><?=$value->date?></td>
      <td><?=$value->pseudo?></td>
      <td><?=$value->text?></td>
      <td>
        <form action="index.php?p=admin.posts.validTestimony" method="POST">
          <input type="hidden" name="id" value="<?=$value->id?>"/>
          <input type="submit" class="btn btn-success" value="Valider"/>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
