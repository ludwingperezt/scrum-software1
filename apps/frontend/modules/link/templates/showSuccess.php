<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $link->getId() ?></td>
    </tr>
    <tr>
      <th>Proyecto:</th>
      <td><?php echo $link->getProyecto() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $link->getPersona() ?></td>
    </tr>
    <tr>
      <th>Direccion:</th>
      <td><?php echo $link->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $link->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $link->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $link->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('link/edit?id='.$link->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('link/index') ?>">Listado de Links</a>