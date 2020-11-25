<?php
session_start();
include_once 'topo_restrito.php';
?>
    <div class="container">
    <h1>Cadastrar notícia</h1>
    <hr>
        <a href="lista_noticias.php"> < Voltar </a>
        
       <br><br>
        

        <form method="POST" action="salvar_noticia.php">
          <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control"  >
          </div>
          <div class="form-group">
            <label for="corpo">Corpo</label>
            <textarea name="corpo" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

    </div>

    
<?php
include_once 'rodape_restrito.php';
?>
