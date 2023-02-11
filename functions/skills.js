// Wait for the DOM to be loaded before running the script
document.addEventListener("DOMContentLoaded", function () {

    // Find all divs with the "div" class
    var divs = document.querySelectorAll(".div");

    // Add a click event listener to each div found
    for (var i = 0; i < divs.length; i++) {
        divs[i].addEventListener("click", function () {

            // If the div is already big, return it to its original size
            if (this.offsetWidth > 250) {
                this.classList.remove("big");
                this.style.width = "250px";
                this.style.height = "250px";
                this.style.boxShadow = "none";
                this.style.border = "none";
                this.style.position = "static";

                // If the div is not already big, make it big and bring it to the front
            } else {
                for (var j = 0; j < divs.length; j++) {
                    divs[j].classList.remove("big");
                    divs[j].style.zIndex = "0";
                }
                this.classList.add("big");
                this.style.width = "790px";
                this.style.height = "520px";
                this.style.boxShadow = "0 0 10px black";
                this.style.border = "solid 4px white";
                this.style.position = "absolute";
                this.style.zIndex = "1";
            }
        });
    }
});

