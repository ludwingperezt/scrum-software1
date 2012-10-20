<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sprint->getId() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><?php echo $sprint->getProyectoId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $sprint->getPersonaId() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $sprint->getEstadoId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $sprint->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $sprint->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Fecha inicio:</th>
      <td><?php echo $sprint->getFechaInicio() ?></td>
    </tr>
    <tr>
      <th>Fecha fin:</th>
      <td><?php echo $sprint->getFechaFin() ?></td>
    </tr>
    <tr>
      <th>Dias disponibles:</th>
      <td><?php echo $sprint->getDiasDisponibles() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('sprint/edit?id='.$sprint->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('sprint/index') ?>">List</a>
