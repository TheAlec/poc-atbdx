Feature: Passer une commande

    Background: Accéder à la page de commande
        Given Un client est sur la page de commande

    Scenario: Champs de saisie quantité par produit
        Given une liste de produit
            | produit  | prix |
            | Post-It  | 12.4 |
            | Neulands | 20   |
        Then Il doit voir un champ de saisie pour chaque produit

    Scenario: Champs de saisie quantité n'accepte pas de nombre négatif
        When Il saisie un nombre négatif dans n'importe quel champ de saisie de quantité
        Then Il doit voir un message d'erreur

    Scenario: Calculer la total pour un produit
        When Il renseigne la valeur 2 dans le champ quantité du produit Post-It qui coûte 12.4€ l'unité
        And Il valide sa saisie
        Then Il doit voir la valeur 24.8 dans la page de résultat

    Scenario: Calculer la saisie total du panier
        When Il renseigne la valeur 2 dans le champ quantité du produit Post-It qui coûte 12.4€ l'unité
        And Il renseigne la valeur 2 dans le champ quantité du produit Neuland qui coûte 20€ l'unité
        And Il valide sa saisie
        Then Il doit voir sommes total du panier qui est égale à 64.8 €

    Scenario: Calculer la TVA