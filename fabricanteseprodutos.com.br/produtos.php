<?php
       include('connection.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Fabricantes e Produtos</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Fabricantes e Produtos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="fabricantes.php">Fabricantes</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="produtos.php">Produtos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" >
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>IFRN</h1>
                            <span class="subheading">Produtos</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-striped table-hover"> 
		<thead>
			<tr>
				<th>Nome</th>
				<th>Valor</th>
                <th>Fabricante</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT produto.titulo, produto.valor, fabricante.nome from produto inner join fabricante
            on (produto.id_fabricante = fabricante.id);';
			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {
                                
				echo '<tr>';
					echo '<td>'. $row['titulo'].'</td>';
					echo '<td>R$ '. $row['valor'].'</td>';
                    echo '<td>'. $row['nome'].'</td>';
				echo '</tr> ';
			}
			?> 
                                    
		</tbody>
	</table>
            </div>
                    
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Instituto Federal do RN 2023</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>