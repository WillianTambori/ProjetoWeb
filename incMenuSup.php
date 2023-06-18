    <header>
        <nav>
        <div>
                <figure>
                   <a href="index.php"> <img src="img/topo.jpg"></a>
                </figure>
            </div>
            <div class="resumoOpcoes">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="cadastroUsuario.php">Novo Usuário</a></li>
                    <li><a href="usuario.php">Cadastrar/Editar Produto</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            
            <div class="redesSociais">
                <a href="#"><img src="img/imgSocial/facebook.png"></a>
                <a href="#"><img src="img/imgSocial/instagram.png"></a>
                <a href="#"><img src="img/imgSocial/twitter.png"></a>
                <a href="#"><img src="img/imgSocial/youtube.png"></a>
            </div>
        </nav>
    </header>
    <section>
        <form class="pesquisa" method="POST" action="resultBusca.php">
            <input type="text" value="" class="campo" name="pesquisar" /><input type="submit" value="Pesquisar" class="bot"><a href="listaProdutos.php" class="botListar">Listar Produtos</a>
        </form>
    </section>
    <section class="categorias">
        <div>
            <a href="buscaCategoria.php?cat=SmartPhones"><img src="img/prod/celular.png"></a><br>
            <a href="buscaCategoria.php?cat=">SmartPhones</a>
        </div>
        <div>
            <a href="buscaCategoria.php?cat=Impressora"><img src="img/prod/impressora.png"></a><br>
            <a href="buscaCategoria.php?cat=">Impressoras</a>
        </div>
        <div>
            <a href="buscaCategoria.php?cat=Mouse"><img src="img/prod/mouse.png"></a><br>
            <a href="buscaCategoria.php?cat=Mouses">Mouses</a>
        </div>
        <div>
            <a href="buscaCategoria.php?cat=Computadores"><img src="img/prod/pc.png"></a><br>
            <a href="buscaCategoria.php?cat=Computadores">Computadores</a>
        </div>
        
    </section>