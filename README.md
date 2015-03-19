# README
## README du site Opération'elles'

---

* Github du projet : https://github.com/MaevaAoigami/Agence_Projet-Symfony

### Installation du site

* Se rendre sur le dossier **htdocs** (MAMP) ou **www** (WAMP, EasyPHP, ...)

* Cloner le projet en local :
```html
git clone https://github.com/MaevaAoigami/Agence_Projet-Symfony.git**
```

* Allez dans le dossier du projet **Agence_Projet-Symfony**

* Mettre à jour le composer.phar  :
```html
php composer.phar update
```

* Générer la base de données :
```html
php app/console doctrine:database:create
```

* Générer les tables (entités) :
```html
php app/console doctrine:schema:update --force
```

* Générer les fixtures :
```html
php app/console doctrine:fixture:load
```

* Le site est prêt à être utilisé

### Création d'un compte administrateur

#### Pour accéder à la partie admin

* Se créer un compte dans la partie **S'inscrire**
* Dans le terminal, à la racine du dossier **Agence_Projet-Symfony**, tapez la commande :
```html
php app/console fos:user:promote [votre_pseudo] ROLE_ADMIN (ou --super)
```
* Se déconnecter puis se reconnecter **avec les identifiants du compte administrateur précédemment crée**
* La partie admin est disponible avec le menu **Admin**
