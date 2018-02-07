/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    var selected = $('#option').val();
    console.log(selected);
    $("#option").change(function(event) {
       selected = $('#option').val();
    //    var selected = $('#dropDownId :selected').text();
        console.log(selected); 
    });
});