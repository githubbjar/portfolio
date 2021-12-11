import React, { useState } from 'react';
import './App.css';

import Row from 'react-bootstrap/Row';
import Container from 'react-bootstrap/Container';
import Col from 'react-bootstrap/Col';
import 'bootstrap/dist/css/bootstrap.min.css';

import MyDropdown from '../MyDropdown/MyDropdown';
import CoverCard from '../CoverCard/CoverCard';
import WebCard from '../WebCard/WebCard';
import LayoutCard from '../LayoutCard/LayoutCard';
import Footer from '../Footer/Footer';

function App() {

  //https://upmostly.com/tutorials/react-onhover-event-handling-with-examples
  //Breakthrough. Used the above and wrapped my cards in a div, instead of using the button from the example.
  //Wasted a lot of time trying to figure out how to pass hover state from the other components. 
  //This method kept it all in THIS component.
  const [showCovers, setShowCovers] = useState(false);
  const [showLayouts, setShowLayouts] = useState(false);
  const [showWeb, setShowWeb] = useState(false);

  let welcomePane = 
      <>
        <hr />
        <h1>Welcome Pane</h1>
        <p>Rock you like a hurricane.</p>
      </>;
  if (showCovers) {
    welcomePane = 
    <>
    <hr />
    <h1>These are my covers.</h1>
    <p>I've done hundreds of 'em.</p>
    </>
  };
  if (showLayouts) {
    welcomePane = 
    <>
    <hr />
      <h1>These are my spreads.</h1>
      <p>In the thousands.</p>
    </>
  }
  if (showWeb) {
    welcomePane = 
    <>
    <hr />
          <h1>These are my web campaigns.</h1>
          <p>I also like to do these sorts of projects!</p>
    </>
  }

  return (
    <>
    <MyDropdown />
    <div className="app-wrapper">
    <Container>
      <Row>
        <Col><div className="mytext-wrapper">{welcomePane}</div></Col>
        <Col>
          <div onMouseEnter={() => setShowCovers(true)} onMouseLeave={() => setShowCovers(false)}>
            <WebCard />
          </div>
        </Col>
        <Col>
          <div onMouseEnter={() => setShowLayouts(true)} onMouseLeave={() => setShowLayouts(false)}>
            <CoverCard />
          </div>
        </Col>

        <Col>
          <div onMouseEnter={() => setShowWeb(true)} onMouseLeave={() => setShowWeb(false)}>
            <LayoutCard />
          </div>
        </Col>
      </Row>
    </Container>
    <Footer />
    </div>

    
   </>
  )
}
export default App;
