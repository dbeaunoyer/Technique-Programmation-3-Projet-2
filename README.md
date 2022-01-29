# Technique-Programmation-3-Projet-2

# Mise en contexte :
1. Le projet vise à mettre en œuvre l’interface applicative (API) qui sera utilisée par votre
application Angular. L’API sera intégrée au projet #1 (30%) afin de mettre en oeuvre l’application
finale visée par le projet #3 (40%).
2. Voici ce qui vous est demandé :
a. Votre API doit offrir la possibilité de gérer les forfaits de l’application voyages.
b. Toutes les opérations standard (CRUD) doivent être gérées. Lors de sa remise, votre API doit permettre:
i. D’afficher la liste complète des forfaits
ii. D’afficher un forfait en particulier selon son identifiant
iii. D’ajouter un forfait
iv. De modifier un forfait
v. De supprimer un forfait
vi. D’afficher d’autres données (de votre choix, en lien avec la thématique du projet) qui pourront
éventuellement être utilisées pour afficher des statistiques dans un graphique intégré à
application (liste de réservations avec nombre d’occupants, données météos des destinations,
liste des vols disponible pour certaines compagnies aériennes, etc.)
c. Vous êtes libres de structurer la base de données et le format JSON de l’API comme vous le désirez.
Celle-ci doit contenir au minimum 5 enregistrements dans chacune de vos tables « principales ».
Voici tout de même mes conseils :
i. Stockez les données des forfaits dans une seule table dans une base de données MySQL.
ii. Ajoutez une deuxième table pour les autres données.
iii. Créez votre API en PHP et assurez-vous que celui-ci envoie et reçoit les informations au format
proposé dans le Projet #1 (voir Exemple d’un forfait JSON à la page 3).
iv. Pour convertir le format « tabulaire » du résultat d’une requête SQL au format JSON avec objets
imbriqués et tableaux, vous pouvez vous inspirer de l’exemple sur GitHub :
https://github.com/Techniques-de-programmation-3/exemple-api-cegeps

Si vous préférez utiliser d’autres technologies ou un autre format JSON, vous êtes responsable :
v. D’intégrer des objets et tableaux imbriqués dans votre format JSON.
vi. D'intégrer les technologies non couvertes dans le cours Infrastructure Web sans garantie
d’obtenir un support pédagogique sur les technologies non couvertes dans le programme
d’études.


vii. D’adapter votre application lors de la mise en oeuvre du Projet #3 pour que celle-ci soit en
mesure d’interagir avec votre API.
viii. De fournir une procédure d’installation simple et rapide OU un environnement me permettant
d’évaluer votre projet et d’en tester son fonctionnement.
d. Vous devez également démontrer le bon fonctionnement des requêtes effectuées à l’API.
À cet effet, votre remise devra contenir un dossier « captures » qui contiendra les captures suivantes,
numérotées (je dois clairement voir l’URL, les données en entrées si applicable, et le résultat de la
requête) :


1. Affichage de la liste des forfaits (minimum 5) initialement présents dans la base de données,
affichés au format JSON dans un navigateur Web (Chrome, Firefox, Safari, etc.)
2. Affichage du premier forfait de la liste capturée au #1, selon son identifiant (id), affiché au
format JSON dans un navigateur Web (Chrome, Firefox, Safari, etc.)
3. Ajout d’un forfait avec données en entrée valides (format JSON), dans une application
permettant de tester des API (Postman, Thunder Client, etc.)
4. Ajout d’un forfait avec données en entrée invalides (format JSON), dans une application
permettant de tester des API (Postman, Thunder Client, etc.)
5. Édition du forfait capturé au #2 avec données en entrée valides (format JSON), dans une
application permettant de tester des API (Postman, Thunder Client, etc.)
6. Édition du forfait capturé au #2 avec données en entrée valides (format JSON), sans identifiant
dans l’URL, dans une application permettant de tester des API (Postman, Thunder Client, etc.)
7. Édition du forfait capturé au #2 avec données en entrée invalides (format JSON), dans une
application permettant de tester des API (Postman, Thunder Client, etc.)
8. Suppression du second forfait de la liste capturée au #1, dans une application permettant de
tester des API (Postman, Thunder Client, etc.)
9. Suppression d’un forfait sans identifiant, dans une application permettant de tester des API
(Postman, Thunder Client, etc.)
10.Affichage de la liste des forfaits suites aux opérations précédemment effectuées, affichés au
format JSON dans une application permettant de tester des API (Postman, Thunder Client, etc.)
11. Affichage des autres données que vous avez ciblées, affichées au format JSON dans une
application permettant de tester des API (Postman, Thunder Client, etc.)


# Exemple d’un forfait JSON (format proposé) :
{
destination : 'Mexique',
villeDepart : 'Québec',
hotel : {
nom : 'nom...',
coordonnees : '...',
nombreEtoiles : 6,
nombreChambres : 100,
caracteristiques : ['Face à la plage', 'Ascenseur', 'Miniclub']
},
dateDepart : '2021-01-01',
dateRetour : '2020-01-08',
prix : 500,
rabais : 100,
vedette : true
}
# Dates de remise :
✔ Du temps sera accordé dans les périodes du 17 et 24 janvier pour réaliser le projet.

✔ Le projet doit être remis sur Github avant le 6 février à 23h59.
À remettre:
✔ Lien GitHub du projet, contenant:
o Un script de la base de données, avec quelques enregistrements
(minimum 5 par table « principale»)
o Le code source de votre API
o Les captures d’écran prouvant le bon fonctionnement de votre API



Critère Pondération
# 1. Détermination correcte des tâches à effectuer / 2
# 2. Utilisation correcte des différents langages et outils de développement
(Serveur Web, Navigateur Web, Application permettant de tester des API,
langage de programmation interprété côté serveur, etc.)

# 3. Programmation appropriée de l’interface applicative
(3 points par commande)
/ 18
# 4. Information adéquatement sécurisée
(utilisation de requêtes préparées et validation des données reçues)
/ 6
# NOTE / 30
Pénalités lors de la remise des travaux :
Chaque journée de retard entraîne une pénalité de 10 %.
Aucun travail ne peut être remis après 7 jours de retard, la note zéro (0) sera alors attribuée.
3
