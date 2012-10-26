<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $tarea->getId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $tarea->getPersona() ?></td>
    </tr>
    <tr>
      <th>Productbacklog:</th>
      <td><?php echo $tarea->getProductbacklog() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $tarea->getEstado() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $tarea->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $tarea->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Tiempo estimado:</th>
      <td><?php echo $tarea->getTiempoEstimado() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $tarea->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $tarea->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tarea/edit?id='.$tarea->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('tarea/index') ?>">Listado de Tareas</a>
