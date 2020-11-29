// ! Estructura promesas
document.onload = generateDatesTable();

function generateDatesTable() {
    // * Target label to inyect petition
    var table = document.getElementById("date_table");

    fetch('../server/get_citas.php').then(function (response) {
        // * The API call was successful!
        return response.text();
    }).then(function (html) {
        // * Inject response in html from a php template
        table.innerHTML += html;
    }).catch(function (err) {
        //  * There was an error
        console.warn('Something went wrong.', err);
    });
}