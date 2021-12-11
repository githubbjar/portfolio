import React, { useState } from 'react';
import Navbar from 'react-bootstrap/Navbar'
import Nav from 'react-bootstrap/Nav'
import './App.css';
import CoverCard from '../CoverCard/CoverCard';
import MyText from '../MyText/MyText';
import AdCard from '../AdCard/AdCard';
import LayoutCard from '../LayoutCard/LayoutCard';
import 'bootstrap/dist/css/bootstrap.min.css';
import Row from 'react-bootstrap/Row';
import Container from 'react-bootstrap/Container';
import Col from 'react-bootstrap/Col';

function App() {

  //https://upmostly.com/tutorials/react-onhover-event-handling-with-examples
  //Breakthrough. Used the above and wrapped my cards in a div, instead of using the button.
  //Wasted a lot of time trying to figure out how to pass hover state from the other components. 
  //This method kept it all in THIS component.
  const [isShown, setIsShown] = useState(false);
  const [isShown2, setIsShown2] = useState(false);
  const [isShown3, setIsShown3] = useState(false);

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
        <Col>
        
        <div>
      

      {isShown && (
        <div>
          <hr />
          <h1>These are my covers.</h1>
          <p>I've done hundreds of 'em.</p>
        </div>
      )}

      {isShown2 && (
        <div>
          <hr />
          <h1>These are my spreads.</h1>
          <p>In the thousands.</p>
        </div>
      )}

      {isShown3 && (
        <div>
          <hr />
          <h1>These are my ads &amp; posters.</h1>
          <p>I also like to do these sorts of projects!</p>
        </div>
      )}
      </div>
        </Col>
        <Col>
          <div
            onMouseEnter={() => setIsShown(true)}
            onMouseLeave={() => setIsShown(false)}
          >
          <CoverCard />
          </div>
        </Col>


        <Col>
          <div
            onMouseEnter={() => setIsShown2(true)}
            onMouseLeave={() => setIsShown2(false)}
          >
            <LayoutCard />
          </div>
        </Col>

        <Col>
        <div
            onMouseEnter={() => setIsShown3(true)}
            onMouseLeave={() => setIsShown3(false)}
          >
          <AdCard />
          </div>
        </Col>
      </Row>
    </Container>
    <Container>
      <Row>
        <Col></Col>
      </Row>
    </Container>
    </div>
  </> 
  )
}
export default App;
