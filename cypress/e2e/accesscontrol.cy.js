/// ＜reference types="cypress" /＞


Cypress.Commands.add('login', (email, password) => {
  cy.visit('http://localhost/HouseRentalF/login');
  cy.get('#lemail').type(email);
  cy.get('#lpass').type(password);
  cy.get('#lbt').click();
});

describe('Access Control Test', () => {
  it('Guest User Access', () => {
   
    cy.visit('http://localhost/HouseRentalF/home');
    cy.url().should('include', 'http://localhost/HouseRentalF/login');
  });

  it('Authenticated User Access', () => {
    cy.login('user@gmail.com','user');
    cy.visit('http://localhost/HouseRentalF/home');
    // cy.contains('Restricted Page');
  });
});