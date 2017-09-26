<?php
   $banda = $_POST['nomeBanda'];
   $imagem = $_POST['imagem'];
   $int1Nome = $_POST['int1Nome'];
   $int1Nas = $_POST['int1Nas'];
   $int1Inst = $_POST['int1Inst'];
   $int2Nome = $_POST['int2Nome'];
   $int2Nas = $_POST['int2Nas'];
   $int2Inst = $_POST['int2Inst'];
   $int3Nome = $_POST['int3Nome'];
   $int3Nas = $_POST['int3Nas'];
   $int3Inst = $_POST['int3Inst'];
   $bandaBio = $_POST['bandaBio'];
   $corFundo = $_POST['corFundo'];
   $corTexto = $_POST['corTexto'];
   ?>
       
   <html>
		<head>
			<meta charset = 'utf-8'>
			<title> 
				Trabalho EAD 02 PHP
			</title>
			
			<style>
				.corpo{
					
					background : <?php echo $corFundo ?>;
					color : <?php echo $corTexto ?>;
					   }
				.titulo{
					text-align : center;
						}
				#img {
					display: block;
					margin-left: auto;
					margin-right: auto;
						}

				#tabela {
					margin: 0 auto;
				}
			</style>
		</head>
		<body class="corpo">
		
		  
		<h1 class="titulo"><?php echo $banda ?></h1>
			<img id="img" src="<?php echo $imagem ?>" alt="<?php echo $banda ?>" title="<?php echo $banda ?>"> <br>
			
			
		</body>
		
		<hr>
		
		<h1> Biografia </h1>
		
		
		<?php echo $bandaBio ?>
		
		<hr> 

		<div>
            <table id="tabela" border="2px solid" >
                <th>Integrante(Nome)</th>
                <th>Data de Nascimento</th>
                <th>Instrumento</th>
                <tr>
                    <td><?php echo $int1Nome ?></td>
                    <td><?php echo $int1Nas ?></td>
                    <td><?php echo $int1Inst ?></td>
                </tr>
                <tr>
                    <td><?php echo $int2Nome ?></td>
                    <td><?php echo $int2Nas ?></td>
                    <td><?php echo $int2Inst ?></td>
                </tr>
                <tr>
                    <td><?php echo $int3Nome ?></td>
                    <td><?php echo $int3Nas ?></td>
                    <td><?php echo $int3Inst ?></td>
                </tr>
            </table>
        </div>
	</html>




