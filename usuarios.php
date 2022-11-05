<?php

$titulo = "Lista de usuários";
include "cabecalho.php";

include "conexao.php";
$query = "select id, nome, login, ativo from usuarios";
$resultado = mysqli_query($conexao , $query);

?>



<table class="table table-hover table-striped">

     <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Ativo</th>
            <th></th>

</th>
</thead>
<tbody>
    <?php
    while($linha = mysqli_fetch_array($resultado))
    {
 ?>
 <tr>
   <td><?php echo $linha["id"];?></td>
   <td><?php echo $linha["nome"];?></td>
   <td><?php echo $linha["login"];?></td>
   <td><?php echo $linha["ativo"];?></td>

      <td></td>
    </tr>

<?php

    }