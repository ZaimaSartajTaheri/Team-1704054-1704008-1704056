/// ＜reference types="cypress" /＞
describe('Login', () => {
  it('should log the user in with correct credentials', () => {
    cy.visit('http://localhost/HouseRentalF/login');

    cy.get('#lemail').type('user@gmail.com');
    cy.get('#lpass').type('user');
    cy.get('#lbt').click();

    // cy.contains('Welcome back, user@example.com!');
  });

  it('should display an error message with incorrect credentials', () => {
    cy.visit('http://localhost/HouseRentalF/login');

    cy.get('#lemail').type('user@example.com');
    cy.get('#lpass').type('incorrect-password');
    cy.get('#lbt').click();

    // cy.contains('Invalid email or password.');
  });

  it('should display an error message with incorrect password', () => {
    cy.visit('http://localhost/HouseRentalF/login');

    cy.get('#lemail').type('user@gmail.com');
    cy.get('#lpass').type('incorrect-password');
    cy.get('#lbt').click();

    // cy.contains('Invalid email or password.');
  });

  it('should fill the email field', () => {
    cy.visit('http://localhost/HouseRentalF/login');

    cy.get('#lemail').type(' ');
    cy.get('#lpass').type('user');
    cy.get('#lbt').click();

    // cy.contains('Invalid email or password.');
  });

  it('should fill the email field', () => {
    cy.visit('http://localhost/HouseRentalF/login');

    cy.get('#lemail').type('user@gmail.com');
    cy.get('#lpass').type(' ');
    cy.get('#lbt').click();

    // cy.contains('Invalid email or password.');
  });

  it('should fill the fields', () => {
    cy.visit('http://localhost/HouseRentalF/login');

    cy.get('#lemail').type(' ');
    cy.get('#lpass').type(' ');
    cy.get('#lbt').click();

    // cy.contains('Invalid email or password.');
  });
});