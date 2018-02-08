/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Prints out selected values for drop down menu
$(document).ready(function () {    
    var images = [];
    var imageCount = 0;
    var car;
    var frontWheel;
    var backWheel;
    var spoiler;
    var storage;
    
    (function() {
        var canvas = document.getElementById("myCanvas");
        var ctx = canvas.getContext("2d"); 
        
        initialize();
        
        function initialize() {
            window.addEventListener('resize', resizeWindow, false);
            car = new Image();
            frontWheel = new Image();
            backWheel = new Image();
            
            checkOption();
//            spoiler = new Image();
//            storage = new Image();
            resizeWindow();
        }
        
        function checkOption() {
            var selected = $('#option').val();
            if (selected == "car1") {
                car.src = "/Images/car3.png";
                frontWheel.src = "/Images/rim2.png";
                backWheel.src = "/Images/rim2.png";
            }
            console.log(selected);
            $("#option").change(function(event) {
               selected = $('#option').val();
            //    var selected = $('#dropDownId :selected').text();
                console.log(selected); 
                if (selected == "car1") {
                    car.src = "/Images/car3.png";
                    frontWheel.src = "/Images/rim2.png";
                    backWheel.src = "/Images/rim2.png";
                } else if (selected == "car2") {
                    car.src = "/Images/car2.png";
                    frontWheel.src = "/Images/rim1.png";
                    backWheel.src = "/Images/rim1.png";
                } else {
                    car.src = "/Images/car1.png";
                    frontWheel.src = "/Images/rim1.png";
                    backWheel.src = "/Images/rim2.png";
                }
            });
        }
        
        function drawPhotos() {
            ctx.drawImage(car, parseInt(0), parseInt(-10), parseInt(1200), parseInt(500));
            ctx.drawImage(frontWheel, parseInt(160), parseInt(220), parseInt(170), parseInt(175));
            ctx.drawImage(backWheel, parseInt(805), parseInt(215), parseInt(170), parseInt(180));
        }
        
        function redraw() {
            imageCount = 0;
            
            images[0] = car;
            images[1] = frontWheel;
            images[2] = backWheel;
//            images[3] = spoiler;
//            images[4] = storage;
            
            for (var i = 0; i < images.length; i++) {
                imageCount++;
                console.log(imageCount);
                
                images[i].onload = function() {
                    if (imageCount == images.length) {
                        drawPhotos();
                    }
                };
            }
            
            checkOption();
        }
        
        function resizeWindow() {
            canvas.width = window.innerWidth * 0.9;
            canvas.height = window.innerHeight * 0.7;
            redraw();
        }  
    })();
});