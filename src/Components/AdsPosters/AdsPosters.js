import React from 'react';
import Col from 'react-bootstrap/Col';
import Card from 'react-bootstrap/Card';
import blogAd from './blogad.jpg';
import SVAd from './salvo-ad-airman.jpg';
import FTAd from './solidarity-ft.png';
import Django from './django.jpg';
import Bird from './folk-fest-2019.jpg';

export default function AdsPosters({ number, category, title, year, org }) {

    let imgThumb = "";

    if (number === 5) {imgThumb = blogAd;};
    if (number === 6) {imgThumb = SVAd;};
    if (number === 7) {imgThumb = FTAd;};
    if (number === 8) {imgThumb = Django;};
    if (number === 9) {imgThumb = Bird;};

    

    return (
        <Col>

            <Card>
            <Card.Img variant="top" src={imgThumb} />
            <Card.Body>
                <Card.Title>{title}</Card.Title>
                <Card.Text>
                <em>{org}</em> {category}, {year}
                </Card.Text>
            </Card.Body>
            </Card>

        </Col>
    )
}