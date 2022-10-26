const { Given, When, Then, And } = require("@badeball/cypress-cucumber-preprocessor");

Given("Un client est sur la page de commande", () => {
    cy.visit("/");
});

Given("une liste de produit", (datatable) => {
    datatable.hashes().forEach((element) => {
        cy.get("tr td:nth-child(1)").should("contain", element.produit);
    });
});

Then("Il doit voir un champ de saisie pour chaque produit", () => {
    cy.get("tr").each(($el, index, $list) => {
        if (index != 0) {
            cy.wrap($el).within(() => {
                cy.get("input").should("be.visible");
            });
        }
    });
});

When("Il saisie un nombre négatif dans n'importe quel champ de saisie de quantité", () => {
    cy.get('input[type=number]').first().type("-2");
});


Then("Il doit voir un message d'erreur", () => {
    cy.get('[type="submit"]').click();
    cy.get('input:invalid').should('have.length', 1)
});


When("Il renseigne la valeur 2 dans le champ quantité du produit Post-It qui coûte 12.4€ l'unité", () => {
    cy.contains("Post-It").parent().within(() => {
        cy.get('input[type=number]').type("2");
    });
});

And("Il valide sa saisie", () => {
    cy.get('[type="submit"]').click();
});

Then("Il doit voir la valeur {float} dans la page de résultat", (value) => {
    cy.get("#result").should('to.contain', value);
});