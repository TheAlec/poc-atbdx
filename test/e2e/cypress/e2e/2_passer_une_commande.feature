Feature: Passer une commande
    @focus
    Scenario: Champs de saisie quantité par produit
        Given Un client est sur la page principale
        And une liste de produit
            | produit  | prix |
            | Post-It  | 12.4 |
            | Neulands | 20   |
        Then Il doit voir un champ de saisie pour chaque produit

    Scenario: Récupérer le montant total HT d'un produit en fonction de la quantité saisie
        Given Un acheteur est sur le bon de commande
        When Il renseigne la valeur 2 dans le champ quantité
        And Il renseigne le prix unitaire 12.4
        And Valide sa saisie
        Then Il doit voir la valeur 24.8 dans la page de résultat
