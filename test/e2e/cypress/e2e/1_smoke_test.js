const { When, Then } = require("@badeball/cypress-cucumber-preprocessor");

When("Je visite la page principale", () => {
  cy.visit('/');
});

Then("Je devrais voir {string} ENV !", greating => {
  cy.get("h1").should("contain", greating + Cypress.env('host') + " !")
});