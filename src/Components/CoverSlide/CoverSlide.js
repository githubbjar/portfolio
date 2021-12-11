import React from 'react';
import './CoverSlide.css';
import Carousel from 'react-bootstrap/Carousel';
import SV59 from '../Covers/sv59Cover.jpg';



export default function CoverSlide({ number, category, title, year, org }) { 
    return (
    
        
        <Carousel.Item>

<p text-align="center">Froyo</p>
                                <img
                                    key="1"
                                    className="d-block w-100"
                                    src={SV59}
                                    alt="Salvo 59"
                                />
                                <Carousel.Caption>
      <h3>First slide label</h3>
      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
    </Carousel.Caption>
        </Carousel.Item>
        
    )
};