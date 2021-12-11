import React from 'react';
import './MyDropdown.css';
import Navbar from 'react-bootstrap/Navbar'
import Nav from 'react-bootstrap/Nav'
import Container from 'react-bootstrap/Container';

export default function MyDropdown() {
    return (
        <Navbar bg="light" variant="light">
        <Container>
          <Navbar.Brand href="#home">Jerry Janquart / Portfolio</Navbar.Brand>
          <Nav className="me-auto">
            <Nav.Link href="https://github.com/githubbjar/portfolio">Github</Nav.Link>
            <Nav.Link href="https://www.linkedin.com/in/jerry-janquart-67aa608/">LinkedIn</Nav.Link>
            <Nav.Link href="">Contact</Nav.Link>
          </Nav>
        </Container>
      </Navbar>
    )
}