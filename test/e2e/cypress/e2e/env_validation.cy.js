describe('Check environments', () => {
  it('Visits the dev env', () => {
    cy.visit('https://poc-atbdx-dev.herokuapp.com/')
    cy.get("h1").should("contain", "development")
  })
  it('Visits the Staging env', () => {
    cy.visit('https://poc-atbdx-staging.herokuapp.com/')
    cy.get("h1").should("contain", "staging")
  })

})
describe('Check environments prod', () => {
  it.only('Visits the dev prod', () => {
    cy.visit('https://poc-atbdx-production.herokuapp.com/')
    cy.get("h1").should("contain", "production")
  })
  it.only('Alec sait pas codé', () => {
    cy.get("h1").should("contain", "Alec sait coder un E2E avecc Cypress")
  })
})