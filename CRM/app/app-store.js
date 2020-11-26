document.onload = generateItemCards()

function generateItemCards() {
    var items = document.getElementById("items");
    fetch('../site/elements/itemcard.php')
        .then(function (response) {
            // The API call was successful!
            return response.text();
        }).then(function (html) {
            console.log(JSON.parse(html))
            
            for (var i = 0; i < 1; i++) {
                    var row_id = "row" + i;
                    var itemcard = itemcard;
                    items.innerHTML += html;
                    console.log('<?php include "elements/itemcard.php"; ?>');
                } 
            console.log(html);
        }).catch(function (err) {

            console.warn('Something went wrong.', err);
        });
            
    }


    // fetch('/about').then(function (response) {
    //     // The API call was successful!
    //     return response.text();
    // }).then(function (html) {
    //     // This is the HTML from our response as a text string
    //     console.log(html);
    // }).catch(function (err) {
    //     // There was an error
    //     console.warn('Something went wrong.', err);
    // });