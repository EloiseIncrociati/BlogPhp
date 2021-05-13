README : 

Installation du projet : 

1. Installer Ampps et placer le dossier de projet dans le dossier "www".

2. Récupérer le projet sur GitHub et cloner le projet : 

https://github.com/EloiseIncrociati/BlogPhp.git

3. Avec Ampps, créer la base de données en exécutant les scripts SQL présents dans le dossier "sql" du projet.

4. Paramétrer sendermail et php.init pour recevoir les mails à votre adresse :

	
	1) Editer le fichier C:\wamp\sendmail\sendmail.ini:

   	smtp_server=smtp.gmail.com
   	smtp_port=465
   	auth_username=user@gmail.com
   	auth_password=your_password

	2) Editer ensuite votre fichier php.ini et configurer sendmail_path

   	sendmail_path = "C:\wamp\sendmail\sendmail.exe -t"

	3) Ouvrez ensuite le fichier [REPERTOIRE DE XAMPP]sendmailsendmail.ini et écrasez le contenu du fichier avec les lignes suivantes :
	
	[sendmail]
	smtp_server=smtp.gmail.com
	smtp_port=587
	error_logfile=error.log
	debug_logfile=debug.log
	auth_username=[Votre Adresse Gmail]
	auth_password=[Votre Mot de passe Gmail]
	force_sender=[Votre Adresse Gmail]

4. Créez un compte et aller modifier en base l'id de role pour passer en admin.
