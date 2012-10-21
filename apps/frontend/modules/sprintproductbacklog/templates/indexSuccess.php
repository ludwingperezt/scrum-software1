<h1>Sprintproductbacklogs List</h1>

<table>
  <thead>
    <tr>
      <th>Sprint</th>
      <th>Product backlog</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sprintproductbacklogs as $sprintproductbacklog): ?>
    <tr>
      <td><a href="<?php echo url_for('sprintproductbacklog/show?sprint_id='.$sprintproductbacklog->getSprintId().'&product_backlog_id='.$sprintproductbacklog->getProductBacklogId()) ?>"><?php echo $sprintproductbacklog->getSprintId() ?></a></td>
      <td><a href="<?php echo url_for('sprintproductbacklog/show?sprint_id='.$sprintproductbacklog->getSprintId().'&product_backlog_id='.$sprintproductbacklog->getProductBacklogId()) ?>"><?php echo $sprintproductbacklog->getProductBacklogId() ?></a></td>
      <td><?php echo $sprintproductbacklog->getCreatedAt() ?></td>
      <td><?php echo $sprintproductbacklog->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('sprintproductbacklog/new') ?>">New</a>
