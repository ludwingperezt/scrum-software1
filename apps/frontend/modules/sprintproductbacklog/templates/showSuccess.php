<table class="tablas">
  <tbody>
    <tr>
      <th>Creador:</th>
      <td><?php echo $sprintproductbacklog->getPersona()->getNombre() ?></td>
    </tr>
    <tr>
      <th>Sprint:</th>
      <td><?php echo $sprintproductbacklog->getSprint()->getNombre() ?></td>
    </tr>
    <tr>
      <th>Productbacklog:</th>
      <td><?php echo $sprintproductbacklog->getProductbacklog()->getNombre() ?></td>
    </tr>
    <tr>
      <th>Anotaciones:</th>
      <td><?php echo $sprintproductbacklog->getAnotaciones() ?></td>
    </tr>
    <tr>
      <th>Fecha de creacion:</th>
      <td><?php echo $sprintproductbacklog->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Fecha de actualizacion:</th>
      <td><?php echo $sprintproductbacklog->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('sprintproductbacklog/edit?id='.$sprintproductbacklog->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('sprintproductbacklog/index') ?>">Listado de Sprint ProductBacklog</a>
