import React, { useState } from "react";
import './MyText.css';

export default function MyText() {
    
    const [isShown, setIsShown] = useState(false);

    return (
        <div className="App">
      <button
        onMouseEnter={() => setIsShown(true)}
        onMouseLeave={() => setIsShown(false)}>
        Hover over me!
      </button>
      <p id="mytext">Hello</p>
      {isShown && (
        <div>
          I'll appear when you hover over the button.
        </div>
      )}
      </div>
      
    )
}