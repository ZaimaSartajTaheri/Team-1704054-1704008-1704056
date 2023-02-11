Cypress.Commands.add('login', (email, password) => {
  cy.visit('http://localhost/HouseRentalF/login');
  cy.get('#lemail').type(email);
  cy.get('#lpass').type(password);
  cy.get('#lbt').click();
});

describe('Login and Change Password', () => {
  

  it('should allow the user to login and change their password', () => {
    cy.login('user@gmail.com','user');
    cy.visit('http://localhost/HouseRentalF/password-change');
    cy.get('#oldpass').type('user');
    cy.get('#password').type('user');
    cy.get('#password-confirm').type('user');
    cy.get('#cpbtn').click();

  
    });
  });