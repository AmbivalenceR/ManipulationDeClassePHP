# ManipulationDeClassePHP

V1 

Objectifs:
Utiliser les concepts de bases de l'OOP
Créer des classes
Créer des objets
 

Sujet:
Dans cet atelier suivi, vous allez développer un backoffice pour un commerçant lui permettant de saisir des produits qu'il souhaite mettre en vente.

 

Pour commencer, créer une page principale index.php contenant une structure HTML de base et un titre.

 

Ensuite, créez un nouveau fichier qui contiendra votre future classe. Idéalement nommez le fichier Product.php ou Product.class.php . Dans ce fichier, écrivez une classe Product servant à instancier des produits. Chaque produit devra avoir les propriétés suivantes au minimum:

prix HT
TVA
prix TTC (calculé automatiquement à partir du HT et de la TVA)
nom
categorie
stock
description
 

Une fois votre classe créée, appelez le fichier de classe dans un nouveau fichier index.php avec include ou require et testez votre classe en instanciant un objet avec des valeurs "en dur". Vous pouvez vérifier le contenu de l'objet avec var_dump($variable); .

 

Lorsque la classe fonctionne correctement, ajoutez un formulaire sur la page permettant de saisir toutes les informations nécessaire à la création d'un produit. L'action du formulaire devra être "index.php" et le verbe "POST".

 

Dans le fichier index.php, si la requête a été effecutée avec le verbe POST, récupérez le contenu de la requête (provenant du formulaire) et utilisez le pour créer un nouvel objet produit. Ensuite, affichez les informations du nouveau produit en dessous du formulaire.



V2 

Objectifs:
Utiliser les concepts de bases de l'OOP
Créer des classes
Créer des objets
Ajouter des méthodes
 

Sujet:
Dans cette deuxième partie, vous devrez modifier la classe Product en ajoutant ou modifiant les éléments suivants:

Ajoutez une une méthode retournant la valorisation du stock (stock * prix HT)
Les propriétés de prix doivent être en visibilité protected. Lorsqu'on lit ces propriétés depuis l'objet, le symbole € doit apparaitre derrière le prix. Lorsqu'on les modifie, la conversion en nombre à virgule doit être automatique avant le stockage et la valeur devra être stockée uniquement si elle est supérieure ou égale à 0.
Ajouter une méthode permettant d'afficher toutes les informations du produit sur la page.

V3

Dans cette troisème partie, vous devrez créer un système de clonage de produit.

Pour cela, créez une méthode statique prenant en paramètre:

l'objet produit à dupliquer
le nom du clone à fabriquer
Cette méthode devra créer une nouvelle instance de la classe produit avec les contraintes suivantes:

Le nom devra être celui récupéré en paramètre
La description devra être vide
Les autres propriété deront être reprises depuis l'objet à cloner
La méthode statique devra retourner le nouvel objet.
