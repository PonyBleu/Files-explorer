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
                     			echo "<a href='index.php?dossier='".$_GET['dossier']."$folder/><img id='fichier' src='../img/fichier.png'>$folder</a><br>"; 
                 			}

	                    	else 
	                    	{
	                      		if (isset($_GET['dossier'])) 
	                      		{
	                    			echo "<a href='index.php?dossier='".$_GET['dossier']."'$folder/><img id='fichier' src='../img/fichier.png'>$folder</a><br>";
	                    		}
	                  		}
                  		}

                   		else 
                   		{
                    		if ($folder == "..")
                    		{
                         		if (isset($_GET['dossier']))
                         		{
                            		echo "<a href='index.php?dossier=".$_GET['dossier'].$folder."/'><img id='retour' src='../img/fleche.png'>$folder</a><br>";
                            	}

	                         	else
	                         	{
	                            	echo "<a href='index.php'>$folder</a><br><img id='retour' src='../img/fleche.png'><br>";
	                         	}
                       		}
                       
	                       	elseif ($folder == ".") 
	                       	{
	                        	echo "<a href='index.php'><img id='home' src='../img/home.png'></a><br>";
	                       	}

	                       	else 
	                       	{
	                        	if (isset($_GET['dossier']))
	                        	{
	                            echo "<a href='index.php?dossier=".$_GET['dossier'].$folder."/'><img id='dossier' src='../img/dossier.png'>$folder</a><br>";
	                        	}

	                        	else 
	                        	{
	                        		echo "<a href='index.php?dossier=$folder/'><img id='dossier' src='../img/dossier.png'>$folder</a><br>";
	                        	}
	                       	}

                       	}
                    }
        		?>

 				<?php

					/*function liste($dossier)
					{
				    	mkdir($dossier); // crée dossier sur serveur
				    	$tousLesFichiers = glob($dossier.'/*'); // liste les fichiers
				    
					    foreach($tousLesFichier as $fichier) // parcours les fichiers
					    {
					        if(is_dir($fichier))//si dossier
					        {
					            liste($fichier); // liste dossier
					        }

					        else
					        {
					            
					        }
					    }
					}*/
				?>

 			</div>
 
 			
 			<script src ="../JS/fichier.js" type="text/javascript"></script>
  			</body>
	</html>