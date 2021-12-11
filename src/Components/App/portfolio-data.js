let portfolioPieces = [];

function portfolioPiece(number, category, title, year, org) {
    this.number = number;
    this.category = category;
    this.title = title;
    this.year = year;
    this.org = org;
    this.description = "";

}

const cover1 = new portfolioPiece(0, "Cover", "Device Independent", "Winter 2020", "Salvo");
const cover2 = new portfolioPiece(1, "Cover", "Pietas Lost", "July/Aug 2021", "Touchstone");
const cover3 = new portfolioPiece(2, "Cover", "Post-Tragic", "Winter 2021", "Salvo");
const cover4 = new portfolioPiece(3, "Cover", "Divine Comedy", "Sept/Oct, 2019", "Touchstone");
const cover5 = new portfolioPiece(4, "Cover", "Searching for Meaning?", "Spring 2021", "Salvo");

const adsPosters1 = new portfolioPiece(5, "Ad", "Blog", "2021", "Salvo");
const adsPosters2 = new portfolioPiece(6, "Ad", "Magazine", "2019", "Salvo");
const adsPosters3 = new portfolioPiece(7, "Ad", "Solidarity", "2021", "First Things");
const adsPosters4 = new portfolioPiece(8, "Poster", "Folk Fest", "2018", "Riverside School" )
const adsPosters5 = new portfolioPiece(9, "Poster", "Folk Fest", "2019", "Riverside School");

const layout1 = new portfolioPiece(10, "Layout", "Metamorphosis", "Fall 2021", "Salvo");
const layout2 = new portfolioPiece(11, "Layout", "Epic Struggle", "Winter 2020", "Salvo");
const layout3 = new portfolioPiece(12, "Layout", "No Place Like Home?", "Summer 2021", "Salvo");
const layout4 = new portfolioPiece(13, "Layout", "Looking for a Date", "Fall 2021", "Salvo");
const layout5 = new portfolioPiece(14, "Layout", "Bits at the Bottom", "Spring 2020", "Salvo");




portfolioPieces.push(cover1);
portfolioPieces.push(cover2);
portfolioPieces.push(cover3);
portfolioPieces.push(cover4);
portfolioPieces.push(cover5);
portfolioPieces.push(adsPosters1);
portfolioPieces.push(adsPosters2);
portfolioPieces.push(adsPosters3);
portfolioPieces.push(adsPosters4);
portfolioPieces.push(adsPosters5);
portfolioPieces.push(layout1);
portfolioPieces.push(layout2);
portfolioPieces.push(layout3);
portfolioPieces.push(layout4);
portfolioPieces.push(layout5);

export default portfolioPieces;