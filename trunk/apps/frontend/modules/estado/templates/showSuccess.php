<table>
  <tbody>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $estado->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $estado->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Fecha de creación:</th>
      <td><?php echo $estado->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Ultima modificación:</th>
      <td><?php echo $estado->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('estado/edit?id='.$estado->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('estado/index') ?>">List</a>
