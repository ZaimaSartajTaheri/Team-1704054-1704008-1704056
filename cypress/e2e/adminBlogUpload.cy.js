Cypress.Commands.add('login', (email, password) => {
  cy.visit('http://localhost/HouseRentalF/admin');
  cy.get('#aemail').type(email);
  cy.get('#apass').type(password);
  cy.get('#abtn').click();
});

describe('ABlogU', () => {
  it('should allow the admin to login and change their password', () => {
    cy.login('admin@gmail.com','admin');
    cy.visit('http://localhost/HouseRentalF/admin/Change/Password');
    cy.get('#oldpass').type('admin');
    cy.get('#password').type('admin');
    cy.get('#password-confirm').type('admin');
    cy.get('#acpbtn').click();

  
    });

it('should log the user in with correct credentials', () => {
  cy.visit('http://localhost/HouseRentalF/admin');

  cy.get('#aemail').type('admin@gmail.com');
  cy.get('#apass').type('user');
  cy.get('#abtn').click();

  // cy.contains('Welcome back, user@example.com!');
});

it('should display an error message with incorrect credentials', () => {
  cy.visit('http://localhost/HouseRentalF/admin');

  cy.get('#aemail').type('admin@example.com');
  cy.get('#apass').type('incorrect-password');
  cy.get('#abtn').click();

  // cy.contains('Invalid email or password.');
});

it('should display an error message with incorrect password', () => {
  cy.visit('http://localhost/HouseRentalF/admin');

  cy.get('#aemail').type('admin@amail.com');
  cy.get('#apass').type('incorrect-password');
  cy.get('#abtn').click();

  // cy.contains('Invalid email or password.');
});



  it('should only accept image files', () => {
      cy.login('admin@gmail.com','admin');
      cy.visit('http://localhost/HouseRentalF/admin/add/post');
    cy.get('#file').should('have.attr', 'accept', 'image/*');
  })

  it('File Upload using cypress-file-upload npm package', () => {
    
    const filepath = 'C:/xampp/htdocs/HouseRentalF/cypress/fixtures/test-image.jpg';
    cy.login('admin@gmail.com','admin');
    cy.visit('http://localhost/HouseRentalF/admin/add/post');
    cy.get('#file').selectFile(filepath)
    cy.get('#file').click()
   
    
})

 
})
