<?php

//for creating the objects
    class FullProject {

        // the properties
        public $description;
        public $projecttype;
        public $imagerootfolder;
        public $cover1;
        public $cover2;
        public $example1;
        public $example1pagecount;
        public $example2;
        public $example2pagecount;
        public $example3;
        public $example3pagecount;
        public $example4;
        public $example4pagecount;
        public $projectnumber;
    
        // the constructor
        function __construct($description, $projecttype, $imagerootfolder, $cover1, $cover2, $example1, $example1pagecount, $example2, $example2pagecount, $example3, $example3pagecount, $example4, $example4pagecount) {
        $this->description = $description;
        $this->projecttype = $projecttype;
        $this->imagerootfolder = $imagerootfolder;
        $this->cover1 = $cover1;
        $this->cover2 = $cover2;
        $this->example1 = $example1;
        $this->example1pagecount = $example1pagecount;
        $this->example2 = $example2;
        $this->example2pagecount = $example2pagecount;
        $this->example3 = $example3;
        $this->example3pagecount = $example3pagecount;
        $this->example4 = $example4;
        $this->example4pagecount = $example4pagecount;
        }

        // the methods
        function get_description() {
        return $this->description;
        }
        function get_projecttype() {
        return $this->projecttype;
        }
        function get_imagerootfolder() {
            return $this->imagerootfolder;
        }
        function get_cover1() {
            return $this->cover1;
        }
        function get_cover2() {
            return $this->cover2;
        }
        function get_example1() {
            return $this->example1;
        }
        function get_example1pagecount() {
            return $this->example1pagecount;
        }
        function get_example2() {
            return $this->example2;
        }
        function get_example2pagecount() {
            return $this->example2pagecount;
        }
        function get_example3() {
            return $this->example3;
        }
        function get_example3pagecount() {
            return $this->example3pagecount;
        }
        function get_example4() {
            return $this->example4;
        }
        function get_example4pagecount() {
            return $this->example4pagecount;
        }
        function get_projectnumber() {
            return $this->projectnumber;
        }
    }

  
    //initialize the array
    $allProjects = array();
    
    //add the projects
    //SALVO
    $allProjects[] = new FullProject("#62 / Fall '22 / 64 pages", "<em>Salvo</em> magazine", "images/sv62/", "cover.jpg", "mag-ad.jpg", "brainiacs", 5, "ground-zero", 4, "stealth-education", 4, "six-billion-tics", 4);
    $allProjects[] = new FullProject("#60 / Spring '22 / 64 pages", "<em>Salvo</em> magazine", "images/sv60/", "cover.jpg", "blog-ad.jpg", "what-the-wartortle", 5, "sun-in-a-million", 4, "i-ramona", 4, "i-porn", 2);
    $allProjects[] = new FullProject("#59 / Winter '21 / 64 pages", "<em>Salvo</em> magazine", "images/sv59/", "cover.jpg", "mag-ad.jpg", "the-red-sky-paradox", 4, "crt-doublespeak", 6, "after-tragedy", 5, "no-place-like-home", 2);
    $allProjects[] = new FullProject("#56 / Spring '21 / 64 pages", "<em>Salvo</em> magazine", "images/sv56/", "cover.jpg", "mag-ad.jpg", "our-search-for-meaninglessness", 4, "scientific-conversations", 4, "in-defense-of-the-ancients", 4, "retaking-delight", 2);
    $allProjects[] = new FullProject("#47 / Winter '18 / 64 pages", "<em>Salvo</em> magazine", "images/sv47/", "cover.jpg", "blog-ad.jpg", "todays-teen-girls", 5, "seeing-stars", 4, "dreadful-and-designed", 4,  "moral-law-argument-2", 4);
    $allProjects[] = new FullProject("#54 / Fall '20 / 64 pages", "<em>Salvo</em> magazine", "images/sv54/", "cover.jpg", "mag-ad.jpg", "the-grandest-program", 4, "set-for-life", 4, "families-and-the-economy", 6, "psycho-babble", 2);
    $allProjects[] = new FullProject("#49 / Summer '19 / 64 pages", "<em>Salvo</em> magazine", "images/sv49/", "cover.jpg", "mag-ad.jpg", "far-and-away-above-average", 5, "dramatic-direction", 4, "overprotected", 4, "what-the-bleep", 4);

    //TOUCHSTONE
    $allProjects[] = new FullProject("Nov/Dec '22 / 64 pages", "<em>Touchstone</em> magazine", "images/ts356/", "cover.jpg", "cal-ad.jpg", "of-sages-and-prophets", 6, "old-school-beauty", 5, "a-thousand-words", 2, "commonplaces", 2);
    $allProjects[] = new FullProject("Jul/Aug '22 / 56 pages", "<em>Touchstone</em> magazine", "images/ts354/", "cover.jpg", "conf-ad.jpg", "the-sacred-cosmos", 6, "dominion", 4, "a-thousand-words", 2, "commonplaces", 2);
    $allProjects[] = new FullProject("Nov/Dec '22 / 56 pages", "<em>Touchstone</em> magazine", "images/ts346/", "cover.jpg", "cal-ad.jpg", "st-nicholas", 7, "john-paul-the-scribe", 5, "a-thousand-words", 2, "commonplaces", 2);
    $allProjects[] = new FullProject("Jul/Aug '20 / 56 pages", "<em>Touchstone</em> magazine", "images/ts334/", "cover.jpg", "share-ts.jpg", "no-option", 11, "book-reviews", 4, "a-thousand-words", 2, "commonplaces", 2);
    $allProjects[] = new FullProject("2022 Conference print/web", "<em>Touchstone</em> magazine", "images/tsconf/", "cover.jpg", "website.jpg", "program", 4, "postcard", 4, "slide", 2, "video", 2);
    $allProjects[] = new FullProject("Sept/Oct '19 / 56 pages", "<em>Touchstone</em> magazine", "images/ts325/", "cover.jpg", "share-ts.jpg", "looking-for-jacobs", 4, "make-men-pious-again", 4, "book-review", 2, "commonplaces", 2);

    //BIRETTA
    $allProjects[] = new FullProject("5 Masses / sheet music", "Biretta Books", "images/bmass/", "cover.jpg", "mass-ad.jpg", "missa-yellow", 4, "miss-green", 4, "missa-brown", 2, "missa-light-green", 2);
    $allProjects[] = new FullProject("Schedule '23 / 16 pages", "Biretta Books", "images/bmusic23/", "cover.jpg", "back-cover.jpg", "first-group", 4, "second-group", 4, "third-group", 2, "fourth-group", 2);
    $allProjects[] = new FullProject("Ordo '23 book / 144 pages", "Biretta Books", "images/bordo23/", "cover.jpg", "back-cover.jpg", "first-group", 4, "second-group", 4, "third-group", 2, "fourth-group", 2);
    $allProjects[] = new FullProject("Newsletter / 16 pages", "Biretta Books", "images/bviasacra/", "cover.jpg", "back-cover.jpg", "first-group", 4, "second-group", 4, "third-group", 2, "fourth-group", 2);
    $allProjects[] = new FullProject("Program / 8 pages", "Biretta Books", "images/bmozart/", "cover.jpg", "back-cover.jpg", "first-group", 4, "second-group", 4, "third-group", 2, "fourth-group", 0);
    $allProjects[] = new FullProject("Ordo '22 book / 152 pages", "Biretta Books", "images/bordo22/", "cover.jpg", "back-cover.jpg", "first-group", 4, "second-group", 4, "third-group", 2, "fourth-group", 2);

    //project numbers assigned after the fact to each object in the $allProjects array
    $numOfProjects = count($allProjects);
    for ($i = 0; $i <= $numOfProjects; $i++) {
        $allProjects[$i]->projectnumber = $i+1;
      } 

?>