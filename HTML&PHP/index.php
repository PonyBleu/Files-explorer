<!DOCTYPE html>

	<html>
		<head>

			<title>Explorateur de fichiers</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/../CSS/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		</head>
		<body>

			<div class="container">

				<?php 

					$adresse = "/home/melanies/"; 

					
					if (isset($_GET['dossier'])) 
					{
						$adresse = $adresse.$_GET['dossier'];
					}

						$dirs = scandir($adresse);

					foreach ($dirs as $folder) 
					{
						if (!is_dir($adresse.$folder)) 
						{
						    if (isset($_GET['dossier'])) 
						    {
						       	echo "<a href='index.php?dossier='".$_GET['dossier']."$folder/><img id='fich' src='../img/fichier.png'>$folder</a><br>";
						    }

						    else 
						    {
						        if (isset($_GET['dossier'])) 
						        {
						            echo "<a href='index.php?dossier='".$_GET['dossier']."'$folder/><img id='fich' src='../img/fichier.png'>$folder</a><br>";
					            }
						    }
						}

						else 
						{
							if ($folder == "..")
							{
							    if (isset($_GET['dossier']))
							    {
							        echo "<a href='index.php?dossier=".$_GET['dossier'].$folder."/'><img src='../img/fleche.png'>$folder</a><br>";
						        }

							    else
							    {
							        echo "<a href='index.php'>$folder</a><br><img src='../img/fleche.png'>";
						        }
							}

							else 
							{
 							    if (isset($_GET['dossier']))
 							    {
 							        echo "<a href='index.php?dossier=".$_GET['dossier'].$folder."/'><img id='doss' src='../img/dossier.png'>$folder</a><br>";
 							    }
 							    
 							    else 
 							    {
 							      	echo "<a href='index.php?dossier=$folder/'><img id='doss' src='../img/dossier.png'>$folder</a><br>";
 							    }
 							}
 
 						}
 					}
 
 
 				    ?>
 				    </div>
 
 			
 			<script src ="../JS/fichier.js" type="text/javascript"></script>
  			</body>
	</html>