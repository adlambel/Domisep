// Get the modal
var modal = document.getElementById('myModaladd');

// Get the button that close the modal
var close = document.getElementById("answermodal");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
    modal.style.display = "block";

$("#answerbutton").on('click', function () {
    modal.style.display = "none";
});

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}