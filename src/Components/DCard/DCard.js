import React, { useState } from 'react';
import './DCard.css';
import Card from 'react-bootstrap/Card';
import Button from 'react-bootstrap/Button';
import imgThumb from '../Covers/SV56_cover.jpg';
import Modal from 'react-bootstrap/Modal';
import Carousel from 'react-bootstrap/Carousel';


export default function DCard() {
    const [show, setShow] = useState(false);
    const handleClose = () => setShow(false);
    const handleShow = () => setShow(true);
    return (
        <Card>
            <Card.Img variant="top" src={imgThumb} />
            <Card.Body>
                <Card.Title>Card Title</Card.Title>
                <Card.Text>
                Some quick example text to build on the card title and make up the bulk of
                the card's content.
                </Card.Text>
                <Button variant="primary" onClick={handleShow}>Launch demo modal</Button>

                <Modal show={show} onHide={handleClose}>
                    
                    <Modal.Body>
                        

                    <Carousel>
                        <Carousel.Item>
                            <img
                            className="d-block w-100"
                            src={imgThumb}
                            alt="First slide"
                            width="50%"
                            />
                            <p>Some information here.</p>
                        </Carousel.Item>
                        <Carousel.Item>
                            <img
                            className="d-block w-100"
                            src="holder.js/800x400?text=Second slide&bg=282c34"
                            alt="Second slide"
                            />

                            <Carousel.Caption>
                            <h3>Second slide label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </Carousel.Caption>
                        </Carousel.Item>
                        <Carousel.Item>
                            <img
                            className="d-block w-100"
                            src="holder.js/800x400?text=Third slide&bg=20232a"
                            alt="Third slide"
                            />

                            <Carousel.Caption>
                            <h3>Third slide label</h3>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </Carousel.Caption>
                        </Carousel.Item>
                    </Carousel>


                    </Modal.Body>
                    <Modal.Footer>
                    <Button variant="secondary" onClick={handleClose}>
                        Close
                    </Button>
                    </Modal.Footer>
                </Modal>

            </Card.Body>
        </Card>
    )
}