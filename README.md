Voici les insturction afin d'installer l'application

INSTALLATION DES FICHIERS EN LOCAL

1) Faire un clone en local du projet :
```shell
git clone https://gitlab.enssat.fr/iai_2023/gaagle_nuage.git
```
2) Création du dossier "pgadmin" et attribution de droit à ce dossier

```shell
cd gaagle_nuage
mkdir pgadmin && chmod a+wX pgadmin
```

3) Vérifier que les container suivant n'existent pas déjà "php81", "postgres_container", "pgadmin_container"
```shell
docker ps -a
```
3.5) SI OUI les supprimer.
```shell
docker rm php81 postgres_container pgadmin_container
```

4) Build les container
```shell
docker-compose build
```

5) Lancer le service docker
```shell
docker-compose up
```

CREATION DE LA BASE DE DONNEES

Maintenant l'application est lancé, vous aller vous connecter à la base de donnée et y rentrer les informations contenue dans le fichier Projet.dump

1) Connexion à la base de donnée
Ouvrir un navigateur et rentré l'URL suivante dans la barre de recherche : localhost:5050

Vous allez être connecter à l'application qui va communiquer avec la base de donnée : pgadmin

Il vous demandera d'enregistrer un mot de passe. Mettez que ce que vous voulez

Dans la colonne de gauche vous retrouverez un onglet "Server".
Faite un clic droit dessus > Register > Server

Une fenêtre va s'ouvrir.
Dans l'onglet "General", dans le champ "Name", rentrez "iai_php".
Dans l'onglet "Connection", dans le champ "host name", renseignez "postgres" et dans le champ "Username" renseigner "myuser", dans le champ "Password", renseigner "monpassword". 
Validez


La base de donnée est créer, maintenant vous allez la remplir.

Faite un clic droit sur la base de donnée "iai_php" > Query Tool
Ouvrez le fichier "Project.dump" contenue dans le dossier "php".
Copiez le contenu et collez le dans le champ "Query" de pgadmin.
Faitez "F5".

Votre base de donnée est prête.


CONNEXION A L'APPLICATION

Ouvrir un navigateur et rentré l'URL suivante dans la barre de recherche : localhost:8000
Vous êtes connecté !
