Cypress.Commands.add('login', (email, password) => {
    cy.visit('http://localhost/HouseRentalF/login');
    cy.get('#lemail').type(email);
    cy.get('#lpass').type(password);
    cy.get('#lbt').click();
  });
  
  describe('Edit User Profile', () => {
    
  
    it('User can change his info successfully', () => {
      cy.login('user@gmail.com','user');
      cy.visit('http://localhost/HouseRentalF/edit/user/profile');
      cy.get('#uname').clear();
      cy.get('#uname').type('user');
      cy.get('#uphone').clear();
      cy.get('#uphone').type('01747474222');
      cy.get('#uemail').clear();
      cy.get('#uemail').type('user@gmail.com');
      cy.get('#ubtn').click();
  
    
      });
    });