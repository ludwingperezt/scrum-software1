<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $estado->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $estado->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $estado->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $estado->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $estado->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('estado/edit?id='.$estado->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('estado/index') ?>">List</a>
