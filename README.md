# ManipulationDeClassePHP


#V1 / Utiliser les concepts de bases de l'OOP / Créer des classes / Créer des objets
 
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


#V2 / Utiliser les concepts de bases de l'OOP / Créer des classes / Créer des objets / Ajouter des méthodes

Sujet:
Dans cette deuxième partie, vous devrez modifier la classe Product en ajoutant ou modifiant les éléments suivants:

Ajoutez une une méthode retournant la valorisation du stock (stock * prix HT)
Les propriétés de prix doivent être en visibilité protected. Lorsqu'on lit ces propriétés depuis l'objet, le symbole € doit apparaitre derrière le prix. Lorsqu'on les modifie, la conversion en nombre à virgule doit être automatique avant le stockage et la valeur devra être stockée uniquement si elle est supérieure ou égale à 0.
Ajouter une méthode permettant d'afficher toutes les informations du produit sur la page.


#V3 / Créer des méthodes statiques

Sujet:
Dans cette troisème partie, vous devrez créer un système de clonage de produit.

Pour cela, créez une méthode statique prenant en paramètre:

l'objet produit à dupliquer
le nom du clone à fabriquer
Cette méthode devra créer une nouvelle instance de la classe produit avec les contraintes suivantes:

Le nom devra être celui récupéré en paramètre
La description devra être vide
Les autres propriété deront être reprises depuis l'objet à cloner
La méthode statique devra retourner le nouvel objet.


#V4 / Utiliser l'héritage

Sujet:
Dans cette partie, vous devrez créer différent types de produits basés sur un modèle de produit principal.

Utilisez l'héritage pour créer 2 nouvelles classes, héritant de la classe Product:

la classe Books, pour les livres
la classe VideoGames, pour les jeux vidéo

Lors de la création de la classe Book:

ajoutez les propriétés auteur, format (poche, grand format, etc...)
ajoutez une méthode permettant d'afficher uniquement le titre, l'auteur et la description
bloquez la propriété TVA à 5,5%
surchargez la méthode d'affichage des données du produits pour qu'elle affiche toutes les propriétés du produit
Lors de la création de la classe VideoGames:

ajouter les propriétés type (FPS, RPG, etc...), age minimum et moyenne des critiques
ajoutez une méthode prenant un age en paramètre et permettant de vérifier si l'âge est suffiant pour jouer au jeu conerné
bloquez la TVA à 20%
surchargez la méthode d'affichage des données du produits pour qu'elle affiche toutes les propriétés du produit


#V5 / Utiliser les classes abstraites / Utilises les interfaces

Sujet:
Dans cette partie, vous allez apporter des améliorations à vos classes.

La classe Product n'étant pas à instancier directement, transformez la en classe abstraite.

Ensuite créez une interface IProduct contenant les méthodes publiques de la classe Product et implémentez cette interface sur cette même classe.


#V6 / Utiliser les espaces de nom

Dans cette partie, vous allez finaliser votre application. Pour cela, ajouter vos classes à un namespace au nom de votre choix et effectuez les modifications nécessaires pour que l'application fonctionne. 

Ensuite créez une seconde classe Produit, ne comportant pas de propriété stock et pouvant être instanciée directement, pour les produits virtuel (téléchargeables) et ajoutez la à un autre namespace au nom également de votre choix.
