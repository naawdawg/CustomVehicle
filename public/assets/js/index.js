/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Prints out selected values for drop down menu
$(document).ready(function () { 
    // Global variables
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d"); 
    var selected = $('#option').val();
    var images = [];
    var imageCount = 0;
    var optionSelected = 0;
    var car;
    var frontWheel;
    var backWheel;
    var spoiler;
    var storage;    
    var empty = true;
    
    (function() {
        console.log(selected);
        
        initialize();
        
        // Constantly check the selection in drop down
        $("#option").change(function(event) {
            empty = true;
            selected = $('#option').val();
             if (selected == "car1") {
                 console.log(selected);
                 optionSelected = 0;
                 checkLoaded();
             } else if (selected == "car2") {
                 console.log(selected);
                 optionSelected = 1;
                 checkLoaded();
             } else {
                 console.log(selected);
                 optionSelected = 2;
                 checkLoaded();
             }
        });
        
        // Initializes all components to be rendered
        // Adds all images to image array
        // Adds a resize event listener
        // Calls checkLoaded()
        function initialize() {
            canvas.width = window.innerWidth * 0.9;
            canvas.height = window.innerHeight * 0.7;
            window.addEventListener('resize', resizeWindow, false);
            car = new Image();
            frontWheel = new Image();
            backWheel = new Image();
            storage = new Image();
            spoiler = new Image();
            
            images.push(car);
            images.push(frontWheel);
            images.push(backWheel);
            images.push(storage);
            images.push(spoiler);
            
            checkLoaded();
        }
        
        // Checks to see if all images have been loaded
        // Calls checkOption()
        // Once all images are loaded from checkOption(), calls drawPhotos()
        function checkLoaded() {
            imageCount = 0;
            checkOption();
            for (var i = 0; i < images.length; i++) {
                images[i].onload = function() {
                    imageCount++;
                    if (imageCount == images.length && empty) {
                        drawPhotos();
                    }
                };
            }
        }
        
        // Checks the selection made in the drop down
        // Sets the all the images src depending on the optionSelected
        function checkOption() {
            switch (optionSelected) {
                case 0:
                    car.src = "/Images/car3.png";
                    frontWheel.src = "/Images/rim1.png";
                    backWheel.src = "/Images/rim1.png";
                    storage.src = "/Images/rack1.png";
                    spoiler.src = "/Images/spoiler1.png";
                    break;
                case 1:
                    car.src = "/Images/car2.png";
                    frontWheel.src = "/Images/rim2.png";
                    backWheel.src = "/Images/rim2.png";
                    storage.src = "/Images/rack2.png";
                    spoiler.src = "/Images/spoiler2.png";
                    break;
                case 2:
                    car.src = "/Images/car1.png";
                    frontWheel.src = "/Images/rim1.png";
                    backWheel.src = "/Images/rim3.png";
                    storage.src = "/Images/rack1.png";
                    spoiler.src = "/Images/spoiler1.png";
                    break;
            }       
        }
        
        // Draws all the photos on the canvas
        function drawPhotos() {
            // clears the canvas
            ctx.clearRect(0,0,canvas.width, canvas.height);
            // draws the car
            ctx.drawImage(car, parseInt(0), parseInt(-10), parseInt(1200), parseInt(500));

            // draws front wheel with the position based on which rim to display
            if (frontWheel.getAttribute('src') == "/Images/rim1.png") {
                ctx.drawImage(frontWheel, parseInt(150), parseInt(205), parseInt(190), parseInt(195));
            } else if (frontWheel.getAttribute('src') == "/Images/rim2.png") {
                ctx.drawImage(frontWheel, parseInt(158), parseInt(224), parseInt(175), parseInt(175));
            } else {
                ctx.drawImage(frontWheel, parseInt(155), parseInt(215), parseInt(175), parseInt(175));
            }

            // draws back wheel with the position based on which rim to display
            if (backWheel.getAttribute('src') == "/Images/rim1.png") {
                ctx.drawImage(backWheel, parseInt(795), parseInt(205), parseInt(190), parseInt(195));
            } else if (backWheel.getAttribute('src') == "/Images/rim2.png") {
                ctx.drawImage(backWheel, parseInt(805), parseInt(220), parseInt(175), parseInt(175));
            } else {
                ctx.drawImage(backWheel, parseInt(802), parseInt(215), parseInt(175), parseInt(175));
            }

            // draws storage rack position based on which rack to display
            if (storage.getAttribute('src') == "/Images/rack1.png") {
                ctx.drawImage(storage, parseInt(600), parseInt(-50));
            } else {
                ctx.drawImage(storage, parseInt(600), parseInt(-150), parseInt(400), parseInt(400));
            }

            // draws spoiler position based on which spoiler to display
            if (spoiler.getAttribute('src') == "/Images/spoiler1.png") {
                ctx.drawImage(spoiler, parseInt(1000), parseInt(5), parseInt(200), parseInt(200));
            } else {
                ctx.drawImage(spoiler, parseInt(1000), parseInt(25), parseInt(200), parseInt(200));
            }
            empty = false;
        }
        
        // Deals with resizing of the window
        // Redraws the photos when window is resized
        function resizeWindow() {
            canvas.width = window.innerWidth * 0.9;
            canvas.height = window.innerHeight * 0.7;
            drawPhotos();
        }  
    })();
});