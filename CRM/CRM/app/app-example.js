
// ! Estructura promesas

function asyncPetition() {

    // * Target label to inyect petition
    var items = document.getElementById("items");

    fetch('/about').then(function (response) {
        // * The API call was successful!
        return response.text();
    }).then(function (html) {
        // * This is the HTML from our response as a text string
        console.log(html);
        // * Return a response as JSON
        console.log(JSON.parse(html))
        // * Inject response in html from a php template
        items.innerHTML += html;
    }).catch(function (err) {
        //  * There was an error
        console.warn('Something went wrong.', err);
    });

}