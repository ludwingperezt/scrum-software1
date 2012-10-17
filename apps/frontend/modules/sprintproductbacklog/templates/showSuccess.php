<table>
  <tbody>
    <tr>
      <th>Id sprint:</th>
      <td><?php echo $sprintproductbacklog->getIdSprint() ?></td>
    </tr>
    <tr>
      <th>Id product backlog:</th>
      <td><?php echo $sprintproductbacklog->getIdProductBacklog() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('sprintproductbacklog/edit?id_sprint='.$sprintproductbacklog->getIdSprint().'&id_product_backlog='.$sprintproductbacklog->getIdProductBacklog()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('sprintproductbacklog/index') ?>">List</a>
