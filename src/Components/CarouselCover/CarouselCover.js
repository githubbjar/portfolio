import React from 'react';
import './CarouselCover.css';
import Carousel from 'react-bootstrap/Carousel';
import SV55 from '../Covers/SV55_Cover.jpg';
import SV59 from '../Covers/sv59Cover.jpg';
import SV56 from '../Covers/SV56_cover.jpg';
import TS1 from '../Covers/bigcover-34-04.jpg';
import TS2 from '../Covers/bigcover-32-05.jpg';



export default function CarouselCover({ number, category, title, year, org }) {
    let imgThumb = "";
    if (number === 0) {imgThumb = SV55;};
    if (number === 1) {imgThumb = TS1;};
    if (number === 2) {imgThumb = SV59;};
    if (number === 3) {imgThumb = TS2;};
    if (number === 4) {imgThumb = SV56;};
    
   
    return (
        <Carousel.Item>
            <img
            src={imgThumb}
            alt={title}
            />

            <Carousel.Caption>
            <h3>{title}</h3>
            <p>{org} {year}</p>
            <p>{category}</p>
            </Carousel.Caption>
        </Carousel.Item>

    )
}