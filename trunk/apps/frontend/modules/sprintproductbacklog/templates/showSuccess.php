<table>
  <tbody>
    <tr>
      <th>Sprint:</th>
      <td><?php echo $sprintproductbacklog->getSprintId() ?></td>
    </tr>
    <tr>
      <th>Product backlog:</th>
      <td><?php echo $sprintproductbacklog->getProductBacklogId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sprintproductbacklog->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sprintproductbacklog->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('sprintproductbacklog/edit?sprint_id='.$sprintproductbacklog->getSprintId().'&product_backlog_id='.$sprintproductbacklog->getProductBacklogId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('sprintproductbacklog/index') ?>">List</a>
