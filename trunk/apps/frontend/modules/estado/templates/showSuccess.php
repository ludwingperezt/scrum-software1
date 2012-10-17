<table>
  <tbody>
    <tr>
      <th>Id estado:</th>
      <td><?php echo $estado->getIdEstado() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $estado->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $estado->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('estado/edit?id_estado='.$estado->getIdEstado()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('estado/index') ?>">List</a>
