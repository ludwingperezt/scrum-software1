<table class="tablas">
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $proyecto->getId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $proyecto->getPersona() ?></td>
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
      <th>Creado:</th>
      <td><?php echo $proyecto->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Actualizado:</th>
      <td><?php echo $proyecto->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Expira:</th>
      <td><?php echo $proyecto->getExpiresAt() ?></td>
    </tr>
    <tr>
      <th>Activo:</th>
      <td><?php echo $proyecto->getIsActivated() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('proyecto/edit?id='.$proyecto->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('proyecto/index') ?>">Lista de Proyectos</a>
