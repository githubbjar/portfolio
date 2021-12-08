import React, { useState } from 'react';
import './LayoutCard.css';

import Card from 'react-bootstrap/Card';
import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
import Carousel from 'react-bootstrap/Carousel';

import portfolioPieces from '../App/portfolio-data';

import metamorphosis from './layouts_metamorphosis.jpg';
import epic from './layouts_epic-struggle.jpg';
import home from './layouts_no-place-like-home.jpg';
import date from './layout_looking-for-date.jpg';
import bits from './layouts_bits-at-the-bottom.jpg';

export default function LayoutCard() {
    const [show, setShow] = useState(false);
    const handleClose = () => setShow(false);
    const handleShow = () => setShow(true);

    const makeSlide = (slideIndex) => {
        let imgThumb = "";
        if (portfolioPieces[slideIndex].number === 10) {
            imgThumb = metamorphosis;
        };
        if (portfolioPieces[slideIndex].number === 11) {
            imgThumb = epic;
        };
        if (portfolioPieces[slideIndex].number === 12) {
            imgThumb = home;
        };
        if (portfolioPieces[slideIndex].number === 13) {
            imgThumb = date;
        };
        if (portfolioPieces[slideIndex].number === 14) {
            imgThumb = bits;
        };
        return (
            <>
                <p text-align="center">{portfolioPieces[slideIndex].title} {portfolioPieces[slideIndex].category}&#8212;<em>{portfolioPieces[slideIndex].org}</em>, {portfolioPieces[slideIndex].year}</p>
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
            <Card.Img variant="top" src={home} onClick={handleShow} />
            <Card.Body>
                <Card.Title>::: Spreads</Card.Title>
                <Card.Text>
                Layout / Concept / Design 
                </Card.Text>
                <Button variant="secondary" onClick={handleShow}>Slideshow</Button>

                <Modal show={show} onHide={handleClose} size="lg">
                    <Modal.Body>
                        <Carousel>       
                            <Carousel.Item>
                                {makeSlide(12)}
                            </Carousel.Item>                 
                            <Carousel.Item>
                                {makeSlide(10)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(11)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(14)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(13)}
                            </Carousel.Item>
                        </Carousel>
                    </Modal.Body>
                </Modal>

            </Card.Body>
        </Card>
    )
}