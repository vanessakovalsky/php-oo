# TP5 - Lire et écrire les propriétés des classes en utilisant le modèle, la BDD et les getters / setters ==



- Déclarer les getters et setters pour chaque classe 
- Créer un modèle par classe
- Dans chaque modèle créer des fonctions pour lire, écrire et supprimer des données
qui vont effectuer les requêtes en BDD
- Passé en paramètre du constructeur de chaque classe de modèle l'objet de connexion 
à la base de données (créer dans le index.php, avec les paramètres dans un fichier
config.php)
- Dans les controlleurs, appeler les méthodes des classes de modèles. Pour cela
il faut dans le constructeur que l'on un objet correspondant au modèle (objet de modèle
de classe à instancier dans le routeur et à passer en paramètre au controlleur)
