<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $proyecto->getId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $proyecto->getPersonaId() ?></td>
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
      <th>Created at:</th>
      <td><?php echo $proyecto->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $proyecto->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $proyecto->getExpiresAt() ?></td>
    </tr>
    <tr>
      <th>Activo:</th>
      <td><?php echo $proyecto->getActivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('proyecto/edit?id='.$proyecto->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('proyecto/index') ?>">List</a>
