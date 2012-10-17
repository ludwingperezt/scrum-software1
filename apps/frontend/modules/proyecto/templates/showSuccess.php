<table>
  <tbody>
    <tr>
      <th>Id proyecto:</th>
      <td><?php echo $proyecto->getIdProyecto() ?></td>
    </tr>
    <tr>
      <th>Id administrador:</th>
      <td><?php echo $proyecto->getIdAdministrador() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $proyecto->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $proyecto->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Comentarios:</th>
      <td><?php echo $proyecto->getComentarios() ?></td>
    </tr>
    <tr>
      <th>F creacion:</th>
      <td><?php echo $proyecto->getFCreacion() ?></td>
    </tr>
    <tr>
      <th>F modificacion:</th>
      <td><?php echo $proyecto->getFModificacion() ?></td>
    </tr>
    <tr>
      <th>F finalizacion:</th>
      <td><?php echo $proyecto->getFFinalizacion() ?></td>
    </tr>
    <tr>
      <th>Activo:</th>
      <td><?php echo $proyecto->getActivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('proyecto/edit?id_proyecto='.$proyecto->getIdProyecto()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('proyecto/index') ?>">List</a>
