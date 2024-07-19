### Nom du projet : The dream 🍹
  
---  
  
# Projet de Calculateur de Taux de Change Interactif  
  
## Menu  
  
1. [Quoi](#Quoi)  
2. [Qui](#Qui)  
3. [Quand](#Quand)  
4. [Comment](#Comment)  
5. [Pourquoi](#Pourquoi)  
  
---  
  
## Quoi  
  
Ce projet a pour objectif de créer une page web simple permettant de calculer le prix d'un article en Euros en fonction du taux de change de différentes devises. L'utilisateur pourra entrer le prix en devise locale et obtenir immédiatement le prix en Euros. Les taux de change seront récupérés à partir d'une API externe pour garantir des données à jour.  
  
### Détails du projet :  
  
**Calculateur de Taux de Change** : Création d'un formulaire permettant à l'utilisateur de saisir le montant en devise locale et de choisir la devise locale.    
**Mise à jour des Taux en Temps Réel**  : Récupération des taux de change actuels via une **API externe** pour des conversions précises.  
**Technologies utilisées**  : **HTML** , **CSS** , **PHP**, **MySQL**, **PDO**   pour le traitement des formulaires, et l'API [ExchangeRate-API](https://app.exchangerate-api.com) pour les taux de change. Ensuite la création de la database avec **MySQL** et insertion des rates dans la database avec **PDO**.  

---  
  
## Qui
  
**Loïc**
  
GitHub : [**GigiTheGiraffe**](https://github.com/GigiTheGiraffe)  
Je suis un jeune développeur en formation chez BeCode, passionné par les technologies web et les défis de développement.  

---  
  
## Quand  
  
Durée : 1 jour  
Date de début : 18/07/24 à 9h
Date limite : 18/07/24 à 17h

---  
  
## Comment  
  
### Technologie:  
  
**HTML & CSS** : Pour la structure et le design de la page.  
**PHP** : Pour traiter le formulaire et obtenir les données des API.  
**API de taux de change** : Utilisation de l'API [ExchangeRate-API](https://app.exchangerate-api.com) pour obtenir les taux de change actuels.  
**MySQL & PDO**: Création et update des rates dans la database.
  
### Stratégie de déploiement  
  
Aucune pour l'instant.
  
### Étapes du projet  
  
*Création du formulaire* : Créer un formulaire HTML pour entrer le montant et la devise.  
*Traitement du formulaire en PHP* : Écrire un script PHP pour traiter les données soumises et effectuer la conversion.  
*Intégration de l'API de taux de change* : Utiliser l'API pour obtenir les taux actuels et les afficher.  
*Amélioration de l'interface utilisateur* : Ajouter des options pour choisir entre différentes devises et un bouton pour inverser les conversions.  
*Enregistrement des rates et des iso dans la database* : Ajouter via requête PDO les rates obtenus via l'API dans la base de données créée avec MySQL.  
  
---
  
## Pourquoi
  
### Objectifs pédagogiques  
  
Consolider mes compétences en *HTML* et *CSS* pour la création d'interfaces utilisateur.  
Apprendre à traiter des formulaires avec *PHP*.  
Intégrer des *API externes* pour obtenir des données en temps réel.  
Améliorer mes compétences en *résolution de problèmes et en débogage*.  
   
### Résultats attendus    
  
**Calculateur fonctionnel** : La page doit permettre de convertir les devises et d'afficher les résultats correctement.  
**Données à jour** : Les taux de change doivent être actualisés grâce à l'API.  
**UX améliorée** : Offrir une interface simple et intuitive pour l'utilisateur.  
