const { Given, When, Then, And } = require("@badeball/cypress-cucumber-preprocessor");

Given("Un client est sur la page principale", () => {
    cy.visit("/");
});

And("une liste de produit", (datatable) => {
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

Given("Un acheteur est sur le bon de commande", () => {
    cy.visit("/");
});

When("Il renseigne la valeur 2 dans le champ quantité", () => {
    cy.get('input[name="quantity"]').type("2");
});

And("Il renseigne le prix unitaire {float}", prix => {
    cy.get('input[name="price"]').type(prix);
});

And("Valide sa saisie", () => {
    cy.get('[type="submit"]').click();
});


Then("Il doit voir la valeur {float} dans la page de résultat", value => {
    cy.get("#result").should('to.contain', value);
});