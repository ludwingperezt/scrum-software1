<table class="tablas" >
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $reunion->getId() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><?php echo $reunion->getProyecto()->getNombre() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $reunion->getPersona()->getNombre() ?></td>
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
      <th>Activo:</th>
      <td><?php echo $reunion->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Creado:</th>
      <td><?php echo $reunion->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Ultima modificacion:</th>
      <td><?php echo $reunion->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('reunion/edit?id='.$reunion->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('reunion/index') ?>">Listar reuniones</a>
