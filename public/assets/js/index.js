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
    var dropdown = document.getElementById("option");
    var selected = null;
    var setId;
    var accessoryId;
    var accessories = [];
    var images = [];
    var imageCount = 0;
    var car;
    var frontWheel;
    var backWheel;
    var spoiler;
    var storage;
    var initialLoad = true;
    var done = false;
    var changed = false;

    (function () {
        // First ajax request
        ajaxRequest("../info/bundle/");
        // Waits for ajax to complete before continuing
        waitForAjax();

        // Constantly check the selection in drop down
        $("#option").change(function (event) {
            setId = $('#option').val();
            if (setId == 1) {
                ajaxRequest("../info/bundleDetail/" + setId);
                waitForAjax();
            } else if (setId == 2) {
                ajaxRequest("../info/bundleDetail/" + setId);
                waitForAjax();
            } else {
                ajaxRequest("../info/bundleDetail/" + setId);
                waitForAjax();
            }
        });
        
        // Make an ajax request based on the url provided (controller)
        function ajaxRequest(url) {
            if (url == "../info/bundle/" && initialLoad) {
                // Initial ajax call to determine which set to load
                // Sets up dropdown menu options/values
                // Call to grab SetId and Name from Set.csv
                $.ajax({url: url, success: function (result) {
                    var data = result;
                    var index = 0;
                    for (var row in data) {
                        if (selected == null) {
                            selected = data[row].SetId;
                            setId = selected;
                        }
                        dropdown.options[index].text = data[row].Name;
                        dropdown.options[index].value = data[row].SetId;
                        index++;
                    }
                    ajaxRequest("../info/bundleDetail/" + setId);
                }});
            } else if (url == "../info/bundleDetail/" + setId) {
                // Call to grab AccessoryId from SetDetail.csv
                // Loops through all AccessoryId's that have the same SetId in SetDatil.csv
                if (initialLoad) {
                    $.ajax({url: url, success: function (result) {
                        var data = result;
                        for (var row in data) {
                            accessoryId = data[row].AccessoryId;
                            ajaxRequest("../info/catalog/" + accessoryId);
                        }
                        initialLoad = false;
                        done = true;
                    }});
                } else {
                    // Call to grab AccessoryId from SetDetail.csv
                    $.ajax({url: url, success: function (result) {
                        var data = result;
                        for (var row in data) {
                            accessoryId = data[row].AccessoryId;
                            ajaxRequest("../info/catalog/" + accessoryId);
                        }
                        changed = true;
                        done = true;
                    }});
                }
            } else if (url == "../info/catalog/" + accessoryId) { 
                // Call to grab Path and CategoryId from Accessory.csv
                // Stores the Path in accessories array with the index of CategoryId
                $.ajax({url: url, success: function (result) {
                    var data = result;
                    var cId = data.CategoryId;
                    accessories[cId] = data.Path;
                }});
            } else {
                // If all else fails :(
                return;
            }
        };
    })();
    
    // Waits for the ajax calls to complete before calling initialize()
    // Set timeout to 500 milliseconds just so that the ajax calls can perform first
    // Calls checkLoaded() when option selected has changed
    function waitForAjax() {
        setTimeout(function() {
            do {
                if (done && !changed) {
                    initialize();
                    break;
                } else if (done && changed) {
                    checkLoaded();
                    break;
                } else {
                    break;
                }
            } while (1);
        }, 500);
    }
    
    // Sets up initial page and it's values
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
            if (done) {
                checkOption();
                for (var i = 0; i < images.length; i++) {
                    images[i].onload = function () {
                        imageCount++;
                        if (imageCount == images.length && done) {
                            drawPhotos();
                        }
                    };
                }
            }
        }

        // Checks the selection made in the drop down
        // Sets the all the images src depending on the optionSelected
        function checkOption() {
            switch (setId) {
                case "1":
                    car.src = accessories[1];
                    frontWheel.src = accessories[2];
                    backWheel.src = accessories[2];
                    storage.src = accessories[4];
                    spoiler.src = accessories[3];
                    break;
                case "2":
                    car.src = accessories[1];
                    frontWheel.src = accessories[2];
                    backWheel.src = accessories[2];
                    storage.src = accessories[4];
                    spoiler.src = accessories[3];
                    break;
                case "3":
                    car.src = accessories[1];
                    frontWheel.src = accessories[2];
                    backWheel.src = accessories[2];
                    storage.src = accessories[4];
                    spoiler.src = accessories[3];
                    break;
            }
            done = true;
            accessories = [];
        }

        // Draws all the photos on the canvas
        function drawPhotos() {
            // clears the canvas
            ctx.clearRect(0, 0, canvas.width, canvas.height);
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
            done = false;
        }

        // Deals with resizing of the window
        // Redraws the photos when window is resized
        function resizeWindow() {
            canvas.width = window.innerWidth * 0.9;
            canvas.height = window.innerHeight * 0.7;
            drawPhotos();
        }
    
    
});