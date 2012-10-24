<h1>Sprintproductbacklogs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Persona</th>
      <th>Sprint</th>
      <th>Product backlog</th>
      <th>Anotaciones</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sprintproductbacklogs as $sprintproductbacklog): ?>
    <tr>
      <td><a href="<?php echo url_for('sprintproductbacklog/show?id='.$sprintproductbacklog->getId()) ?>"><?php echo $sprintproductbacklog->getId() ?></a></td>
      <td><?php echo $sprintproductbacklog->getPersonaId() ?></td>
      <td><?php echo $sprintproductbacklog->getSprintId() ?></td>
      <td><?php echo $sprintproductbacklog->getProductBacklogId() ?></td>
      <td><?php echo $sprintproductbacklog->getAnotaciones() ?></td>
      <td><?php echo $sprintproductbacklog->getCreatedAt() ?></td>
      <td><?php echo $sprintproductbacklog->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('sprintproductbacklog/new') ?>">New</a>
