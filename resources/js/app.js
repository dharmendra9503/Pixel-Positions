import './bootstrap';

//This is becuase when we build this project it will import all the images from the images folder.
import.meta.glob([
    '../images/**'
]);