import React from 'react';
import Navbar from 'react-bootstrap/Navbar'
import Nav from 'react-bootstrap/Nav'
import './App.css';
import CoverCard from '../CoverCard/CoverCard';
import AdCard from '../AdCard/AdCard';
import LayoutCard from '../LayoutCard/LayoutCard';
import 'bootstrap/dist/css/bootstrap.min.css';
import Row from 'react-bootstrap/Row';
import Container from 'react-bootstrap/Container';
import Col from 'react-bootstrap/Col';

function App() {
  return (
    <>
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
    <div className="app-wrapper">
    <Container>
      <Row>
        <Col></Col>
        <Col><CoverCard /></Col>
        <Col><LayoutCard /></Col>
        <Col><AdCard /></Col>
        <Col></Col>
      </Row>
    </Container>
    </div>
  </> 
  )
}
export default App;
