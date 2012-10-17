<table>
  <tbody>
    <tr>
      <th>Id rol:</th>
      <td><?php echo $rol->getIdRol() ?></td>
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
      <th>Activo:</th>
      <td><?php echo $rol->getActivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('rol/edit?id_rol='.$rol->getIdRol()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('rol/index') ?>">List</a>
