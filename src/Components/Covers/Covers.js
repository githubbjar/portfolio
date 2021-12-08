import React from 'react';
import './Covers.css';
import Col from 'react-bootstrap/Col';
import Card from 'react-bootstrap/Card';
import SV55 from './SV55_Cover.jpg';
import SV59 from './sv59Cover.jpg';
import SV56 from './SV56_cover.jpg';
import TS1 from './bigcover-34-04.jpg';
import TS2 from './bigcover-32-05.jpg';

export default function Covers({ number, category, title, year, org }) {

    let imgThumb = "";

    if (number === 0) {imgThumb = SV55;};
    if (number === 1) {imgThumb = TS1;};
    if (number === 2) {imgThumb = SV59;};
    if (number === 3) {imgThumb = TS2;};
    if (number === 4) {imgThumb = SV56;};

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