<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $rol->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $rol->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $rol->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $rol->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $rol->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $rol->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('rol/edit?id='.$rol->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('rol/index') ?>">List</a>
