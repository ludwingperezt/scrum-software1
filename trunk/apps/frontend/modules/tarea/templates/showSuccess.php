<table>
  <tbody>
    <tr>
      <th>Id tarea:</th>
      <td><?php echo $tarea->getIdTarea() ?></td>
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
      <th>Id product backlog:</th>
      <td><?php echo $tarea->getIdProductBacklog() ?></td>
    </tr>
    <tr>
      <th>Id estado:</th>
      <td><?php echo $tarea->getIdEstado() ?></td>
    </tr>
    <tr>
      <th>Id persona:</th>
      <td><?php echo $tarea->getIdPersona() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tarea/edit?id_tarea='.$tarea->getIdTarea()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tarea/index') ?>">List</a>
