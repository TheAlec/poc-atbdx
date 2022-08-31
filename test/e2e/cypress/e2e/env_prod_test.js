const { When, Then } = require("@badeball/cypress-cucumber-preprocessor");

When("I visit production environment", () => {
  cy.visit("https://poc-atbdx-production.herokuapp.com/");
});

Then ("I should see {string}", envi => {
  cy.get("h1").should("contain", envi)
});