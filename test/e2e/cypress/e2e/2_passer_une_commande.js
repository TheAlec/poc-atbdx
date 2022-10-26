const { Given, When, Then, And } = require("@badeball/cypress-cucumber-preprocessor");


/* FEATURE : Saisie d'une quantité par produits avec contrôle simple */

/* ------------------------------------------------------------ */
/* SCENARIO : Un champ de saisie de quantité par produit */

Given("un client est sur la page de commande", () => {
    cy.visit("/");
});

Given("une liste de produits", (datatable) => {
    datatable.hashes().forEach((element) => {
        cy.get("tr td:nth-child(1)").should("contain", element.produit);
    });
});

Then("il doit voir un champ de saisie pour chaque produit", () => {
    cy.get("tr").each(($el, index, $list) => {
        if (index != 0) {
            cy.wrap($el).within(() => {
                cy.get("input").should("be.visible");
            });
        }
    });
});

/* ------------------------------------------------------------ */
/* SCENARIO : Les champs de saisie quantité n'acceptent pas de nombres négatif */

When("il saisie un nombre négatif dans n'importe quel champ de saisie de quantité", () => {
    cy.get('input[type=number]').first().type("-2");
});


Then("il doit voir un message d'erreur", () => {
    cy.get('[type="submit"]').click();
    cy.get('input:invalid').should('have.length', 1)
});

/* ------------------------------------------------------------ */
/* SCENARIO : Calculer la total pour un produit */

When("il renseigne la valeur 2 dans le champ quantité d'un produit qui coûte 12.4€ l'unité", () => {
    cy.contains("Post-It").parent().within(() => {
        cy.get('input[type=number]').type("2");
    });
});

And("il valide sa saisie", () => {
    cy.get('[type="submit"]').click();
});

Then("il doit voir la valeur totale {float} sur la ligne du produit", (valeurTotaleProduit) => {
    cy.contains("Post-It").parent().within(() => {
        cy.get('td.TotalDuProduit').should('have.text', valeurTotaleProduit);
        // ou
        cy.get('td.TotalDuProduit').invoke('text')
            .then(parseFloat)
            .should('equal', valeurTotaleProduit);
    });
});


/* ------------------------------------------------------------ */
/* SCENARIO : Calculer la saisie total du panier */

When("il renseigne la valeur 2 dans le champ quantité d'un produit qui coûte 12.4 € l'unité", () => {
    cy.contains("Post-It").parent().within(() => {
        cy.get('input[type=number]').type("2");
    });
});

When("il renseigne la valeur 2 dans le champ quantité d'un produit qui coûte 20 € l'unité", () => {
    cy.contains("Neulands").parent().within(() => {
        cy.get('input[type=number]').type("2");
    });
});

Then("il doit voir la valeur totale {float} dans la page de résultat", (valeurTotale) => {
    cy.get('#result').invoke('text').then(parseFloat).should('equal', valeurTotale);
});

/* ------------------------------------------------------------ */
/* SCENARIO : Appliquer la TVA Française */
