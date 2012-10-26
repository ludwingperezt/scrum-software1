<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sprint->getId() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><?php echo $sprint->getProyecto() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $sprint->getPersona() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $sprint->getEstado() ?></td>
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
    <tr>
      <th>Created at:</th>
      <td><?php echo $sprint->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sprint->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('sprint/edit?id='.$sprint->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('sprint/index') ?>">Lista de Sprints</a>
