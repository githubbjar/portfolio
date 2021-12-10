import React, { useState } from 'react';
import './AdCard.css';
import Card from 'react-bootstrap/Card';
import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
import Carousel from 'react-bootstrap/Carousel';
import portfolioPieces from '../App/portfolio-data';
import blogAd from './blogad.jpg';
import salvoAd from './salvo-ad-airman.jpg';
import ftAd from './solidarity-ft.png';
import bird2 from './folk-fest-2018.png';
import bird from './folk-fest-2019.jpg';



export default function AdCard() {
    const [show, setShow] = useState(false);
    const handleClose = () => setShow(false);
    const handleShow = () => setShow(true);

    const makeSlide = (slideIndex) => {
        let imgThumb = "";
        if (portfolioPieces[slideIndex].number === 5) {
            imgThumb = blogAd;
        };
        if (portfolioPieces[slideIndex].number === 6) {
            imgThumb = salvoAd;
        };
        if (portfolioPieces[slideIndex].number === 7) {
            imgThumb = ftAd;
        };
        if (portfolioPieces[slideIndex].number === 8) {
            imgThumb = bird2;
        };
        if (portfolioPieces[slideIndex].number === 9) {
            imgThumb = bird;
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
            <Card.Img variant="top" src={ftAd} onClick={handleShow} />
            <Card.Body>
                <Card.Title>Ads &amp; Posters</Card.Title>
                <Card.Text>
                Concept / Art / Layout 
                </Card.Text>

                <Modal show={show} onHide={handleClose}>
                    <Modal.Body>
                        <Carousel>                        
                            <Carousel.Item>
                                {makeSlide(7)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(6)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(5)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(8)}
                            </Carousel.Item>
                            <Carousel.Item>
                                {makeSlide(9)}
                            </Carousel.Item>
                        </Carousel>
                    </Modal.Body>
                </Modal>

            </Card.Body>
        </Card>
    )
}