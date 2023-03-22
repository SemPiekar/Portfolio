document.addEventListener("DOMContentLoaded", function () {
    var divs = document.querySelectorAll(".div");
    for (var i = 0; i < divs.length; i++) {
        divs[i].addEventListener("click", function () {
            if (this.offsetWidth > 250) {
                this.classList.remove("big");
                this.style.width = "250px";
                this.style.height = "250px";
                this.style.boxShadow = "none";
                this.style.border = "none";
                this.style.position = "static";
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

