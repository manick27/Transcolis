let slide = new Array( "images/img2.jpg", 
                        "images/img1.jpg",
                        // "images/img5.jpg",
                        "images/img9.jpg",
                        "images/img6.jpeg",
                        "images/img7.jpg",
                        "images/img3.jpg",
                        "images/img4.jpeg",
                        "images/img8.png"
                    );
let numero = 0;

function changeSlide(sens) {
    let img=document.getElementById("slide");
    numero = numero + sens;
    if (numero > slide.length - 1) {
        numero = 0;
    }
    img.src = slide[numero];
    // console.log(slide[numero])
}