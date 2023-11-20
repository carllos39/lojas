<?php
function ListaProdutos($conexao){
    $produtos=array();
    $resultado=mysqli_query($conexao,"select p.*,c.nome as categoria_nome from produto as p join categorias as c on c.id=p.categoria_id");
    while($produto=mysqli_fetch_assoc($resultado)){
        array_push($produtos,$produto);
         
}
return $produtos;
}

function inserirProduto($conexao,$nome,$preco,$descricao,$categoria_id,$usado){
 $query="INSERT INTO produto(nome,preco,descricao,categoria_id,usado) VALUES('{$nome}',{$preco},'{$descricao}',{$categoria_id},'{$usado}')";
 return mysqli_query($conexao,$query);
 }
 function alteraProduto($conexao,$id,$nome,$preco,$descricao,$categoria_id,$usado){
    $query="UPDATE produto SET nome='{$nome}',preco={$preco},descricao='{$descricao}',categoria_id={$categoria_id},usado={$usado} where id='{$id}'"; 
    return mysqli_query($conexao,$query);
    }
 function buscaProduto($conexao,$id){
    $query="select * from produto where id={$id}";
    $resultado=mysqli_query($conexao,$query);
    return mysqli_fetch_assoc($resultado);
}
function removeProduto($conexao,$id){
    $query="DELETE FROM produto WHERE id={$id}";
    return mysqli_query($conexao,$query);
    
}
?>