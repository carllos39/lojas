<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
      include("logica-usuario.php");

 verificaUsuario();
$categorias=listaCategorias($conexao);
?>
<h1>Adiciona Produtos</h1>
<form action="adiciona-produto.php" method="post">
<p>
<label>Nome :</label>
<input class="form-control" type="text" name="nome"><br>
 </p>
 <p>
 Preco: <input class="form-control" type="text" name="preco"><br>
 </p>
 <p>
  <label>Descrição</label>
  <textarea class="form-control" name="descricao"></textarea>
 </p>
 <h2>Categorias</h2>
 <p>
<input type="checkbox" name="usado" value="true">Usado
 </p>
 <select name="categoria_id" class="form-control">
 <?php foreach($categorias as $categoria):?>
  <option value="<?=$categoria['id']?>">
  <?= $categoria['nome']?><br>
 </opton>
  <?php endforeach?>
 </select>
  <input type="submit" value="Cadastrar" name="Cadastrar" class="btn btn-danger">
</form>
<?php include("rodape.php");?>