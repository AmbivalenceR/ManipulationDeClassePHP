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

