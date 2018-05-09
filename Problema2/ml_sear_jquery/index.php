<?php include 'partials/header.php'; ?>

<div>
  <input type="text" id="myInput" placeholder="Search for names..">
</div>
<div>
  <div>Filtros: <a class="condicion_usado" href="#">Usado</a> <a class="condicion_nuevo" href="#">Nuevo</a></div>
</div>
<table id="myTable">
  <tr class="header">
    <th style="width:10%;">Imagen</th>
    <th style="width:30%;">Titulo</th>
    <th style="width:30%;">Ubicación</th>
    <th style="width:15%;">Precio</th>
    <th style="width:15%;">Condicion</th>

  </tr>
</table>

<?php include 'partials/footer.php'; ?>