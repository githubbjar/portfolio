import React, { useState } from 'react';
import './CoverCardMap.css';
import Card from 'react-bootstrap/Card';
import Button from 'react-bootstrap/Button';
import SV56 from '../Covers/SV56_cover.jpg';
import SV56pdf from './download_sv56.pdf';
import SV59 from '../Covers/sv59Cover.jpg';
import SV59pdf from './pdf_tragic.pdf';
import SV55 from '../Covers/SV55_Cover.jpg';
import SV55pdf from './pdf_epic.pdf';
import TS325 from '../Covers/bigcover-32-05.jpg';
import TS325pdf from './pdf_pietas.pdf';
import TS344 from '../Covers/bigcover-34-04.jpg';
import TS344pdf from './pdf_dante.pdf';
import Modal from 'react-bootstrap/Modal';
import Carousel from 'react-bootstrap/Carousel';
import portfolioPieces from '../App/portfolio-data';
import CoverSlide from '../CoverSlide/CoverSlide';




export default function CoverCardMap() {
    const [show, setShow] = useState(false);
    const handleClose = () => setShow(false);
    const handleShow = () => setShow(true);
    
    return (
        
        <Card>
            <Card.Img variant="top" src={SV56} onClick={handleShow}/>
            <Card.Body>
                <Card.Title>Covers</Card.Title>
                <Card.Text>
                Concept / Design / Content 
                </Card.Text>
                
                <Modal show={show} onHide={handleClose}>
                    <Modal.Body>
                        <Carousel>           
                            <CoverSlide />
                            <Carousel.Item>
                            <p text-align="center">yolo</p>
                                <img
                                    key="1"
                                    className="d-block w-100"
                                    src={SV59}
                                    alt="Salvo 59"
                                />
                            </Carousel.Item>
                        </Carousel>
                    </Modal.Body>
                </Modal>

            </Card.Body>
        </Card>
    )
}