<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $tarea->getId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $tarea->getPersonaId() ?></td>
    </tr>
    <tr>
      <th>Product backlog:</th>
      <td><?php echo $tarea->getProductBacklogId() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $tarea->getEstadoId() ?></td>
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

<a href="<?php echo url_for('tarea/edit?id='.$tarea->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tarea/index') ?>">List</a>
