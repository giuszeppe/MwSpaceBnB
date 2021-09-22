
let div_images = document.getElementsByClassName('result-img');
for(div_image of div_images){

    let img = div_image.getElementsByClassName('myImg')[0];
    let modal = div_image.getElementsByClassName("modal")[0];

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var captionText = modal.getElementsByClassName("caption");
    img.onclick = function() {
        modal.style.display = "block";
        console.log("CIAO");
    }

    // Get the <span> element that closes the modal
    let span = modal.getElementsByClassName('close')[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    };
}