# Lancer Cypress

## Headless

Par défaut il lance electron comme navigateur
```shell
> npx cypress run
```
Pour chrome
```shell
> npx cypress run --browser chrome
```
Pour les autres saveurs dispo cf: https://docs.cypress.io/guides/guides/launching-browsers#Browsers

## Avec des trucs qui bouge AKA Headed
```shell
> npx cypress open
```


# Visual Studio Code Config

In order to have nice Cucumber integration in your IDE,
ensure to have this in the `setting.json` file (For  users : `CMD+,` then json mode)

```json    
"cucumberautocomplete.steps": [
        "test/e2e/cypress/e2e/*.js"
      ],
   "cucumberautocomplete.syncfeatures": "test/e2e/cypress/e2e/*.feature",
   "cucumberautocomplete.strictGherkinCompletion": false,
   "cucumberautocomplete.smartSnippets": true,
   "cucumberautocomplete.stepsInvariants": true
```