/// ＜reference types="cypress" /＞
describe('Index Page Test', () => {
  it('Navigates to Index Page', () => {
    cy.visit('http://localhost/HouseRentalF/');
    // cy.url().should('include', '/');
    // cy.get('[data-test=header]').should('be.visible');
  });
});

