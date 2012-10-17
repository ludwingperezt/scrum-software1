<h1>Sprintproductbacklogs List</h1>

<table>
  <thead>
    <tr>
      <th>Id sprint</th>
      <th>Id product backlog</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sprintproductbacklogs as $sprintproductbacklog): ?>
    <tr>
      <td><a href="<?php echo url_for('sprintproductbacklog/show?id_sprint='.$sprintproductbacklog->getIdSprint().'&id_product_backlog='.$sprintproductbacklog->getIdProductBacklog()) ?>"><?php echo $sprintproductbacklog->getIdSprint() ?></a></td>
      <td><a href="<?php echo url_for('sprintproductbacklog/show?id_sprint='.$sprintproductbacklog->getIdSprint().'&id_product_backlog='.$sprintproductbacklog->getIdProductBacklog()) ?>"><?php echo $sprintproductbacklog->getIdProductBacklog() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('sprintproductbacklog/new') ?>">New</a>
