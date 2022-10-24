
# How to PHP

## Faire un affichage en php
- Déclaration d'un variable dans php
```php
<?php
    $uneVariable = "dsfds";
?>
```
- Dans la zone html
```html
<h2><?= $uneVariable; ?></h2>
Est égal à
<h2><?php echo $uneVariable; ?></h2>
```

## Les inputs en PHP

- Côté formulaire
```html
<input type="text" name="coucou">
```
- Côté traitement et affichage
```php
<?php echo $_POST["coucou"]; ?>
```

## Opération :
| Operateur  |  Example | Résultat  |
|---|---|---|
|  Addition | $x + $y  | Addition $x et $y  |
|  Soustraction | $x - $y  | Différence entre $x et $y  |
|  Multiplication | $x * $y  | Produit de $x et $y  |


## Fonctions
```php
function faireDesTrucs($strUn, $strDeux)
{
    return $strUn . $strDeux; // Concatene la chaine de caractère
}

<?= faireDesTrucs("coucou", " le monde!") ?> // affichera en texte "coucou le monde!"

```
# How to Cypress + Cucumber

/!\ Le nom du fichier feature et sa "Traduction" en test js/ts **DOIT** être identique

## Faire un fichier feature

- Il doit être nommer quelquechose.feature
- Le scénario en lui même
```gherkin
Feature: Smoke test
  Scenario: L'application fonctionne sur le bon environnement
    When Je visite la page principale
    Then Je devrais voir "Hello world in " ENV !
```
Ici la chaine de caractère entre "" est un bloc qui pourra être utiliser de manière dynamique (namique) dans le fichier js associé.

## Faire l'expression de ce fichier en Javascript
```js
const { When, Then } = require("@badeball/cypress-cucumber-preprocessor"); // les imports. Pense à ajouter si c'est pas fait automatiquement les autres Keywords

When("Je visite la page principale", () => { // Reprendre rigoureusement la phrase descriptive de son fichier .feature
  cy.visit('/'); // Je demande à cypress de visite la page racine du site
});

Then("Je devrais voir {string} ENV !", greating => { // Je reprends la phrase et j'indique qu'il y a un morceau de l'expression qui provient du fichier.feature. Puis je déclare son nom de variable pour l'utiliser ensuite
  cy.get("h1").should("contain", greating + Cypress.env('host') + " !") // Je recherche un h1 qui doit contenir mon expression l'environnement host et le point d'exclamation
});
```