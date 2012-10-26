<table>
  <tbody>
    
    <tr>
      <th>Nombre:</th>
      <td><?php echo $rol->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $rol->getDescripcion() ?></td>
    </tr>
    
    <tr>
      <th>Fecha de creación:</th>
      <td><?php echo $rol->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Ultima modificación:</th>
      <td><?php echo $rol->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('rol/edit?id='.$rol->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('rol/index') ?>">Listado de Roles</a>
