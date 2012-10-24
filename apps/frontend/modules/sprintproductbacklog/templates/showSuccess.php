<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sprintproductbacklog->getId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $sprintproductbacklog->getPersonaId() ?></td>
    </tr>
    <tr>
      <th>Sprint:</th>
      <td><?php echo $sprintproductbacklog->getSprintId() ?></td>
    </tr>
    <tr>
      <th>Product backlog:</th>
      <td><?php echo $sprintproductbacklog->getProductBacklogId() ?></td>
    </tr>
    <tr>
      <th>Anotaciones:</th>
      <td><?php echo $sprintproductbacklog->getAnotaciones() ?></td>
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

<a href="<?php echo url_for('sprintproductbacklog/edit?id='.$sprintproductbacklog->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('sprintproductbacklog/index') ?>">List</a>
