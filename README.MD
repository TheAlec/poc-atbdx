# Agile Tour Bordeaux 2022
## De l'idée à la production, bien faire les choses ne coûte pas plus cher.


### 1. Création / connexion aux services externes
- Se connecter à son compte [GitHub](https://github.com/)
- Se connecter à son compte [Heroku](https://id.heroku.com/login)

### 2. Préparer son environnement
#### 2.1 Installer les packages
Il vous fait un environnement de développement. Si vous voulez suivre notre tuto, suivez ces instructions :
- Installer un IDE ([PhpStorm](https://www.jetbrains.com/phpstorm/download/), [VisualStudio](https://code.visualstudio.com/))
- Installer [Git](https://git-scm.com/book/fr/v2/D%C3%A9marrage-rapide-Installation-de-Git)
- Installer [PHP](https://www.php.net/manual/en/install.php)
    - Installer en local un server PHP (MAMP, XAMP, etc...) 
    - ou pour les utilisateurs VisualStudio Code
        - Installer l'extension "PHP Server" (Assuré vous d'avoir PHP d'installé)
- Installer [Heroku](https://devcenter.heroku.com/articles/heroku-cli)
- Installer [Composer](https://getcomposer.org/download/)
- Installer [NPM](https://nodejs.org/en/download/current/)

#### 2.2 Initialiser le projet
On va commencer par installer les dépendances
```
composer install
```

```
npm install
```

Pour vérifier que tout s'est bien passé, lancez
```
composer run-script unit-test
```
et
```
composer run-script e2e-test
```
si les deux passent, vous êtes prêts