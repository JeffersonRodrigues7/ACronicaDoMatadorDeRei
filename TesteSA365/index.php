<?php
        require_once("Scripts/db.class.php");
        $database = new db();
        $conection = $database->getConnection();

        $query = $conection->prepare("SELECT nome FROM assunto");
        $query->execute();
        $assuntos = $query->fetchAll();

?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>A Crônica do Matador de Rei</title>
 
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="Style/index.css">
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="Scripts/index.js"></script>
        
    </head>

<body>

        <header>
                <h1><i class="fa fa-dice-d20"></i>
                A Crônica do Matador de Rei
                <i class="fa fa-dice-d20"></i></h1>
        </header>

<!----------------------------------------- Sessão 01 ----------------------------------------->

        <div class="container">
                <div class="col-12 sessao01" id = "s1">
                        <div class="row">
                                <div class="col-2"> </div>

                                <div class="col-8"> 

                                        <div class="row">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                                <a class="nav-link active" id="livro01-tab" data-toggle="tab" href="#livro01" role="tab" aria-controls="livro01" aria-selected="true">Livro 01</a>
                                                        </li>

                                                        <li class="nav-item">
                                                                <a class="nav-link" id="livro02-tab" data-toggle="tab" href="#livro02" role="tab" aria-controls="livro02" aria-selected="false">Livro 02</a>
                                                        </li>

                                                        <li class="nav-item">
                                                                <a class="nav-link" id="livroExtra-tab" data-toggle="tab" href="#livroExtra" role="tab" aria-controls="livroExtra" aria-selected="false">Livro Extra</a>
                                                        </li>
                                                </ul>
                                        </div>

                                        <div class="row">
                                                <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="livro01" role="tabpanel">
                                                                <h1><i class="fa fa-scroll"></i></h1>
                                                                
                                                                <div class="row titulo">
                                                                        <h1> O nome do vento </h1>
                                                                </div> 

                                                                <div class="row">
                                                                        <p>Ninguém sabe ao certo quem é o herói ou o vilão desse fascinante universo criado 
                                                                                por Patrick Rothfuss. Na realidade, essas duas figuras se concentram em Kote,
                                                                                um homem enigmático que se esconde sob a identidade de proprietário da hospedaria 
                                                                                Marco do Percurso.
                                                                        </p>
                                                                        <p>Da infância numa trupe de artistas itinerantes, passando pelos anos vividos 
                                                                                numa cidade hostil e pelo esforço para ingressar na escola de magia,
                                                                                O nome do vento acompanha a trajetória de Kote e as duas forças que
                                                                                movem sua vida: o desejo de aprender o mistério por trás da arte de nomear 
                                                                                as coisas e a necessidade de reunir informações sobre o Chandriano – 
                                                                                os lendários demônios que assassinaram sua família no passado.
                                                                        </p>
                                                                </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="livro02" role="tabpanel">
                                                                <h1><i class="fa fa-dungeon"></i></h1>
                                                        
                                                                <div class="row titulo">
                                                                        <h1> O temor do sábio </h1>
                                                                </div> 

                                                                <div class="row">
                                                                        <p>O temor do sábio dá continuidade à impressionante história de Kvothe, o Arcano, o Sem-Sangue, 
                                                                                o Matador do Rei.
                                                                        </p>
                                                                        
                                                                        <p> Quando é aconselhado a abandonar seus estudos na Universidade por
                                                                                um período, por causa de sua rivalidade com um membro da nobreza 
                                                                                local, Kvothe é obrigado a tentar a vida em outras paragens.
                                                                        </p>

                                                                        <p>Ao longo do caminho, tem um encontro fantástico com Feluriana, uma criatura encantada 
                                                                                à qual nenhum homem jamais pôde resistir ou sobreviver – até agora. Kvothe também
                                                                                conhece um guerreiro ademriano que o leva a sua terra, um lugar de costumes muito 
                                                                                diferentes, onde vai aprender a lutar como poucos.
                                                                        </p>
                                                                        
                                                                </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="livroExtra" role="tabpanel">
                                                                <h1><i class="fa fa-dragon"></i></h1>
                                                        
                                                                <div class="row titulo">
                                                                        <h1> A música do silêncio </h1>
                                                                </div> 

                                                                <div class="row">
                                                                        <p>Debaixo da Universidade, bem lá no fundo, há um lugar escuro. Poucas pessoas sabem de sua 
                                                                                existência, uma rede descontínua de antigas passagens e cômodos abandonados. 
                                                                                Ali, bem no meio desse local esquecido, situado no coração dos Subterrâneos, vive uma jovem.
                                                                        </p>
                                                                        <p>Seu nome é Auri, e ela é cheia de mistérios.</p>
                                                                </div>
                                                        </div>
                                                
                                                </div> 
                                        </div>

                                        <div class="row botoes">
                                                <button type="button" class="btn btn-session01">Já li</button>
                                                <button type="button" class="btn btn-session01">Estou lendo</button>
                                                <button type="button" class="btn btn-session01">Quero ler</button>
                                                <button type="button" class="btn btn-session01">Não lerei</button>
                                        </div>

                                </div>
                        </div>
                </div>

        </div>

<!--------------------------------------- FIM Sessão 01 --------------------------------------->


<!------------------------------------------------------------------------------------------->


<!------------------------------- Sessão 02 ------------------------------->

        <div class="container sessao02">
                <div class="row">
                        <div class="col-2"></div>

                        <div class="col-8">
                                <div class="row">
                                        <div id="conteudo">
                                                <p>Existem 2 contos baseados nos livros publicados em antologias, são eles: A Árvore Relâmpago que conta uma história extra sobre Bast, 
                                                                o discípulo de Kvothe e 
                                                                How Old Holly Came To Be(sem tradução oficial), uma história extra sobre o mundo da série Crônica do Matador do Rei
                                                </p>

                                        </div>
                                </div>

                        </div>
                </div>
        </div>

        <div class="container sessao021">
                <div class="row">
                        <div class="col-5"></div>

                        <div class="col-4">
                                <div class="row"> 
                                        <button class="btn-slide" id="btn1"><i class="fa fa-circle"></i></button>
                                        <button class="btn-slide" id="btn2"><i class="fa fa-circle"></i></button>
                                        <button class="btn-slide" id="btn3"><i class="fa fa-circle"></i></button>
                                        <button class="btn-slide" id="btn4"><i class="fa fa-circle"></i></button>
                                </div>
                        </div>
                </div>
        </div>

<!-------------------------------- FIM Sessão 02 ----------------------------->

<!------------------------------------------------------------------------------------------->

<!------------------------------------------ Sessão 03 -------------------------------------->

        <div class="container sessao03">
                <div class="col-12">
                        <div class="row">

                                <div class="col-6 contato"> 
                                        <div class="row">
                                                <h3> Contate-nos! </h3>
                                        </div>
                                        
                                        <div class="row">
                                                <form method="post" action="Scripts/registrarContato.php" id="formulario">
                                                       
                                                        <div class="form-group">
                                                                <input type="text" class="form-control" id="nomeContato" size="100" name="nome" placeholder="Nome">
                                                        </div>

                                                        <div class="form-group">
                                                                <input type="text" class="form-control" id="telefoneContato" name="telefone" placeholder="Telefone">
                                                        </div>

                                                        <div class="form-group">
                                                                <input type="email" class="form-control" id="emailContato" name="email" placeholder="Email">
                                                        </div>

                                                        <div class="form-group">
                                                                <select class="form-control" id="assuntoContato" name="assunto" placeholder="Assunto">
                                                                        <?php
                                                                                if($assuntos){
                                                                                        foreach($assuntos as $valor){
                                                                                                echo "<option>".$valor['nome']."</option>";
                                                                                        }
                                                                                }
                                                                        ?>
                                                                </select>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <textarea class="form-control" name="mensagem" id="mensagemContato" rows="5" placeholder="Mensagem"></textarea>
                                                        </div>

                                                        <button type="submit" class="btn btn-formulario" id="btn-Form">ENVIAR</button>
                                                        
                                                </form>

                                        </div>
                                </div>

                                <div class="col-6 imagemFinal"> 

                                </div>
                        
                        </div>
                </div>
        </div>

<!------------------------------------------ FIM Sessão 03 -------------------------------------->

<!------------------------------------------------------------------------------------------->

        <footer>
                <div class="container">
    
                    <div class="row">
    
                        <div class="col-6">  
                                <p> @2019 A Crônica do Matador de Rei</p>
                        </div>

                        <div class="col-1"> </div>
    
                        <div class="col-5 icones">  
                                <h2><i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-youtube"></i></h2>
                        </div>
    
                    </div>
                </div>
        </footer>

        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>


<!------------------------------------------------------------------------------------------->

</body>

</html>