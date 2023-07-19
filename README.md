# ECF2023-MaureenPiveteau
	Voici la démarche à suivre pour l'éxecution en local: 

Il faut d'abord installer WAMP : https://www.wampserver.com/ 
Ensuite aller dans le dossier wamps64 puis le sous dossier www
Et créer un dossier ECF2023

Puis à nouveau aller dans wamp64 > bin > apache > apache2.4.54.2 > conf > extra > httpd-vhosts.conf (il faut l'ouvrir en mode administrateur)
Puis copier et coller le texte suivant afin que wamp reconnaisse "garageECF.local" comme le nom que vous aller écrire dans le navigateur pour afficher le site web.
<VirtualHost *:80>
	DocumentRoot "C:\wamp64\www\ECF2023"
	ServerName garageECF.local
</VirtualHost>

Ensuite sur l'icone de Wamp qui se trouve dans votre barre de tache, faites un clique droit > Outils > SGBD par défaut My SQL > Inverser SGBD par défaut MySQL <-> MariaDB 

Il vous faudra clôner mon projet que vous retrouver sur mon github https://github.com/Neeruam244/ECF2023-MaureenPiveteau et enregistrer le dans le dossier ECF 2023. 

A nouveau faites un clique droit sur l'icône de WAMP dans la barre de tâche et redémarer de zéro

Cliquer sur l'icône WAMP qui est sur le bureau pour le lancer l'application. 


Clique gauche > LocalHost > Vos VirtualHost > garageECF.local


Si tout est ok, l'application web devrait apparaitre. 


	Voici la démarche à suivre pour la création d'un administrateur pour le back-office de l'application web. 
