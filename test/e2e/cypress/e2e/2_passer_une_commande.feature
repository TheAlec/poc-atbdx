Feature: Saisie d'une quantité par produits avec contrôle simple

    Background: Accéder à la page de commande
        Given un client est sur la page de commande

    Scenario: Un champ de saisie de quantité par produit
        Given une liste de produits
            | produit  | prix |
            | Post-It  | 12.4 |
            | Neulands | 20   |
        Then il doit voir un champ de saisie pour chaque produit

    Scenario: Les champs de saisie quantité n'acceptent pas de nombres négatif
        When il saisie un nombre négatif dans n'importe quel champ de saisie de quantité
        Then il doit voir un message d'erreur

    Scenario: Calculer la total pour un produit
        When il renseigne la valeur 2 dans le champ quantité d'un produit qui coûte 12.4 € l'unité
        And il valide sa saisie
        Then il doit voir la valeur 24.8 dans la page de résultat

    Scenario: Calculer la saisie total du panier
        When il renseigne la valeur 2 dans le champ quantité d'un produit qui coûte 12.4 € l'unité
        And il renseigne la valeur 2 dans le champ quantité d'un produit qui coûte 20 € l'unité
        And il valide sa saisie
        Then il doit voir la valeur 64.8 dans la page de résultat