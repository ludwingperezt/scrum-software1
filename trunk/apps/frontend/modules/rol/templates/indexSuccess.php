<h1>Rols List</h1>

<table>
  <thead>
    <tr>
      <th>Id rol</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rols as $rol): ?>
    <tr>
      <td><a href="<?php echo url_for('rol/show?id_rol='.$rol->getIdRol()) ?>"><?php echo $rol->getIdRol() ?></a></td>
      <td><?php echo $rol->getNombre() ?></td>
      <td><?php echo $rol->getDescripcion() ?></td>
      <td><?php echo $rol->getActivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('rol/new') ?>">New</a>
