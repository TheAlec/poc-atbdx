Feature: Smoke test
  Scenario: L'application fonctionne sur le bon environnement
    When Je visite la page principale
    Then Je devrais voir "Hello world in " ENV !
