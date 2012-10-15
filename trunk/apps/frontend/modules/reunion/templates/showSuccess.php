<table>
  <tbody>
    <tr>
      <th>Id reunion:</th>
      <td><?php echo $reunion->getIdReunion() ?></td>
    </tr>
    <tr>
      <th>Titulo:</th>
      <td><?php echo $reunion->getTitulo() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $reunion->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Anotaciones:</th>
      <td><?php echo $reunion->getAnotaciones() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $reunion->getFecha() ?></td>
    </tr>
    <tr>
      <th>Duracion:</th>
      <td><?php echo $reunion->getDuracion() ?></td>
    </tr>
    <tr>
      <th>Id proyecto:</th>
      <td><?php echo $reunion->getIdProyecto() ?></td>
    </tr>
    <tr>
      <th>Id persona:</th>
      <td><?php echo $reunion->getIdPersona() ?></td>
    </tr>
    <tr>
      <th>Activo:</th>
      <td><?php echo $reunion->getActivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('reunion/edit?id_reunion='.$reunion->getIdReunion()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('reunion/index') ?>">List</a>
