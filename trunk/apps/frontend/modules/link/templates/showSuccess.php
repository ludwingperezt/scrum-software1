<table>
  <tbody>
    <tr>
      <th>Id link:</th>
      <td><?php echo $link->getIdLink() ?></td>
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
      <th>Id proyecto:</th>
      <td><?php echo $link->getIdProyecto() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('link/edit?id_link='.$link->getIdLink()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('link/index') ?>">List</a>
