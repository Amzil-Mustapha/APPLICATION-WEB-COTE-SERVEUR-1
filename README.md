# APPLICATION-WEB-COTE-SERVEUR-1
APPLICATION WEB COTE SERVEUR PHP POO PDO MVC

« Solidarité Co » est une application qui organise des aides humanitaires. Elle s’occupe de gérer la collection de l’argent (des dons) pour le profit de personnes bénéficiaires qui ont des problèmes comme une  maladie, un handicap, une crise financière ... etc. La  personne bénéficiaire est représentée par un responsable qui est une autre personne s’occupant  de l’action de collecte d’argent. Les donateurs sont les personnes qui offrent une somme d’argent (un don) pour une action donnée.   « Solidarité Co » utilise la base de données suivante :
N.B.  Les champs marqués en gras et soulignés représentent les clés primaires des tables, les champs marqués par # représentent les clés étrangères.

Type (idType, nomType)
Responsable (idResp,  nomResp , prenomResp, emailResp, passResp)
Action (idAct, nomAct,  description , dateCreation, dateFin , montantAct, nomBeneficiare , prenBeneficiare , dateDerniereDon , #idType ,  #idResp )
Donateur (idD, nomD, prenomD, emailD, passD)
Don (idDon, dateDon, montantDon,  #idAct , #idD)

N.B. les champs marqués en gras et soulignés représentent les clés primaires des tables et ceux préfixés par # représentent les clés étrangères.

1.	Créer la base de données avec un jeu de trois  enregistrements pour chaque table. 
2.	Créer une procédure stockée qui affiche  la liste des dons (montant don et nom du donateur) durant l’année en cour qui concerne une action donnée comme paramètre
3.	Ecrire une fonction qui retourne le montant total de dons qui concerne toutes les actions d’un type donné comme paramètre.   
1) Développer une page d’authentification (connexion) pour le niveau : une fois on s’authentifie en rentrant son numéro  et son mot de passe, il est redirigé vers une autre page accueil contenant  toutes les  informations qui lui sont propres.   [SESSION]
2) Réaliser une page web permettant à un utilisateur  de s’inscrire comme donateur en saisissant son identifiant, son nom et prénom, son adresse e-mail et son mot de passe avec :
a)	La page doit effectuer la validation de l’adresse e-mail.  
b)	Ajouter une  autre zone de texte de confirmation du mot de passe. 
3) Réaliser une page permettant à un utilisateur d’afficher la liste des  actions en cours pour un type         sélectionné dans une liste déroulante.  La liste affiche l’identifiant de l’action, le nom de l’action, le montant total obtenu et le nom du bénéficiaire.  .  [AJAX]

4) On veut ajouter un service web permettant de retourner  le nombre de donateurs ayant  participé à une action  donnée : 
a)	développer ce service web. 
b)	Créer une page web permettant de tester ce service web.
