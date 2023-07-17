# ECF2023-MaureenPiveteau
Voici la démarche à suivre pour l'éxecution en local: 

Installer WAMP : https://www.wampserver.com/ dans le disque local
Aller dans wamps64 > www
Créer un dossier ECF2023

Aller dans wamp64 > bin > apache > apache2.4.54.2 > conf > extra > httpd-vhosts.conf (l'ouvrir en mode administrateur pour pouvoir bien enregistrer)
Copier et coller 
<VirtualHost *:80>
	DocumentRoot "C:\wamp64\www\ECF2023"
	ServerName garageECF.local
</VirtualHost>

Clique droit > Outils > SGBD par défaut My SQL > Inverser SGBD par défaut MySQL <-> MariaDB

Cloner mon projet et enregistrer le dans le dossier ECF 2023

Clique droit sur l'icone dan la barre de tache > redémarer de zéro

Cliquer sur l'icone WAMP qui est sur le bureau pour le lancer 
Clique gauche > LocalHost > Vos VirtualHost > garageECF.local

Si tout est ok, l'application web devrait apparaitre. 

Voici la démarche à suivre pour la création d'un administrateur pour le back-office de l'application web. 
