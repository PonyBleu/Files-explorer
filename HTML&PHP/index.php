<!DOCTYPE html>

	<html>
		<head>

			<title>Explorateur de fichiers</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link rel="stylesheet" href="../CSS/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		</head>
		<body>

			<div class="page">
					<header>
						<h1>Explorateur de fichier</h1>
					</header>

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
	                        		echo "<a download='$folder' href=http://melanies.marmier.codeur.online/".$_GET['dossier'].$folder."><img id='fichier' src='../img/fichier.png'> $folder</a><br>";
	                    		}
	                    	}

							else 
							{
								if ($folder == "..")
								{
								    if (isset($_GET['dossier']))
								    {
								        echo "<a target='_blank' href='index.php?dossier=".$_GET['dossier'].$folder."/'><img id='retour' src='../img/fleche.png'>$folder</a><br>";
								    }

								    else
								    {
								        echo "<a href='index.php'>$folder</a><br><img id='retour' src='../img/fleche.png'><br>";
								    }
								}
								                
								else if ($folder == ".") 
								{
								    echo "<a href='index.php'><img id='home' src='../img/home.png'></a><br>";
								}

								else 
								{
								    if (isset($_GET['dossier']))
								    {
								        echo "<a class='link' href='index.php?dossier=".$_GET['dossier'].$folder."/'><img id='dossier' src='../img/dossier.png'>$folder</a><br>";
								    }
								           
								    else 
								    {
								        echo "<a class='link' href='index.php?dossier=$folder/'><img id='dossier' src='../img/dossier.png'>$folder</a><br>";           
								    }
								}
							}
						}
		
	        		?>

				</div>
 			</div>
 
 			
 			<script src ="../JS/ajax.js" type="text/javascript"></script>
  			</body>
	</html>