<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
      include("banco-produto.php");
      $id=$_GET['id'];
      $produto=buscaProduto($conexao,$id);
      $categorias=listaCategorias($conexao);
      $usado=$produto['usado'] ? "checked='checked'":"";
?>


<h1>Alterando Produtos</h1>
<form action="altera-produto.php" method="post">
<p>
<label>Id :</label>
<input type="hidden" name="id" value="<?=$produto['id'] ?>"><br>
 </p>
<p>
<label>Nome :</label>
<input class="form-control" type="text" name="nome" value="<?=$produto['nome'] ?>"><br>
 </p>
 <p>
 Preco: <input class="form-control" type="text" name="preco" value="<?=$produto['preco'] ?>"><br>
 </p>
 <p>
  <label>Descrição</label>
  <textarea class="form-control" name="descricao">value="<?=$produto['descricao'] ?></textarea>
 </p>
 <h2>Categorias</h2>
 <p>
<input type="checkbox" name="usado" <?= $usado?> value="true">Usado
 </p>
 <select name="categoria_id" class="form-control">
 <?php foreach($categorias as $categoria):
 $essaEhACategoria=['categoria_id']==$categoria['id'];
 $selecao=$essaEhACategoria ? "selectd='selectd'":"";
    ?>
  <option value="<?=$categoria['id']?>">
  <?= $categoria['nome']?><br>
 </opton>
  <?php endforeach?>
 </select>
 <input type="submit" value="Alterar" name="Alterar" class="btn btn-danger">
</form>
<?php include("rodape.php");?>