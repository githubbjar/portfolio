import React, { useState } from 'react';
import './CoverCard.css';
import Card from 'react-bootstrap/Card';
import Button from 'react-bootstrap/Button';
import SV56 from '../Covers/SV56_cover.jpg';
import SV59 from '../Covers/sv59Cover.jpg';
import SV55 from '../Covers/SV55_Cover.jpg';
import TS325 from '../Covers/bigcover-32-05.jpg';
import TS344 from '../Covers/bigcover-34-04.jpg';
import Modal from 'react-bootstrap/Modal';
import Carousel from 'react-bootstrap/Carousel';
import portfolioPieces from '../App/portfolio-data';




export default function CoverCard() {
    const [show, setShow] = useState(false);
    const handleClose = () => setShow(false);
    const handleShow = () => setShow(true);

    const makeSlide = (slideIndex) => {
        let imgThumb = "";
        if (portfolioPieces[slideIndex].number === 4) {
            imgThumb = SV56;
        };
        if (portfolioPieces[slideIndex].number === 3) {
            imgThumb = TS325;
        };
        if (portfolioPieces[slideIndex].number === 2) {
            imgThumb = SV59;
        };
        if (portfolioPieces[slideIndex].number === 1) {
            imgThumb = TS344;
        };
        if (portfolioPieces[slideIndex].number === 0) {
            imgThumb = SV55;
        };
        return (
            <>
                <p text-align="center"><em>{portfolioPieces[slideIndex].org}</em> {portfolioPieces[slideIndex].category}&#8212;{portfolioPieces[slideIndex].title}, {portfolioPieces[slideIndex].year}</p>
                <img
                    key={portfolioPieces[slideIndex].number}
                    className="d-block w-100"
                    src={imgThumb}
                    alt={portfolioPieces[slideIndex].number}
                />
            </>
        )
    }
    
    return (
        <Card>
            <Card.Img variant="top" src={SV56} onClick={handleShow}/>
            <Card.Body>
                <Card.Title>::: Magazine Covers</Card.Title>
                <Card.Text>
                Concept / Design / Content 
                </Card.Text>
                <Button variant="secondary" onClick={handleShow}>Slideshow</Button>

                <Modal show={show} onHide={handleClose}>
                    <Modal.Body>
                        <Carousel>                        
                            <Carousel.Item>
                                {makeSlide(4)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(3)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(2)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(1)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(0)}
                            </Carousel.Item>
                        </Carousel>
                    </Modal.Body>
                </Modal>

            </Card.Body>
        </Card>
    )
}