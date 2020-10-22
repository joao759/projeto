function alter_ImageNormal() {
    document.getElementById("img1_Carousel").src = "img1_Carousel.png";
    document.getElementById("img2_Carousel").src = "img2_Carousel.png";
    document.getElementById("img3_Carousel").src = "img3_Carousel.png";

    document.getElementById("Protanopia_Olho").src = "Protanopia_Olho.jpg";
    document.getElementById("Deuteranopia_Olho").src = "Deuteranopia_Olho.jpg";
    document.getElementById("Tritanopia_Olho").src = "Tritanopia_Olho.jpg";

    document.getElementById("verde").src = "verde_normal.jpg";
    document.getElementById("azul").src = "azul_normal.jpg";
    document.getElementById("vermelho").src = "vermelho_normal.jpg";
    document.getElementById("roxo").src = "roxo_normal.jpg";
    document.getElementById("laranja").src = "laranja_normal.jpg";
    document.getElementById("rosa").src = "rosa_normal.jpg";
}

function alter_ImageProtanopia() {
    document.getElementById("img1_Carousel").src = "img1_Carousel__AlterFor_Protanopia.png";
    document.getElementById("img2_Carousel").src = "img2_Carousel__AlterFor_Protanopia.png";
    document.getElementById("img3_Carousel").src = "img3_Carousel__AlterFor_Protanopia.png";

    document.getElementById("Protanopia_Olho").src = "Protanopia_Olho.jpg";
    document.getElementById("Deuteranopia_Olho").src = "Protanopia_Olho.jpg";
    document.getElementById("Tritanopia_Olho").src = "Tritanopia_Olho__AlterFor_Protanopia.png";

    document.getElementById("verde").src = "verde_protanopia.png";
    document.getElementById("azul").src = "azul_protanopia.png";
    document.getElementById("vermelho").src = "vermelho_protanopia.png";
    document.getElementById("roxo").src = "roxo_protanopia.png";
    document.getElementById("laranja").src = "laranja_protanopia.png";
    document.getElementById("rosa").src = "rosa_protanopia.png";
}

function alter_ImageDeuteranopia() {
    document.getElementById("img1_Carousel").src = "img1_Carousel__AlterFor_Deuteranopia.png";
    document.getElementById("img2_Carousel").src = "img2_Carousel__AlterFor_Deuteranopia.png";
    document.getElementById("img3_Carousel").src = "img3_Carousel__AlterFor_Deuteranopia.png";

    document.getElementById("Protanopia_Olho").src = "Protanopia_Olho__AlterFor_Deuteranopia.png";
    document.getElementById("Deuteranopia_Olho").src = "Deuteranopia_Olho__AlterFor_Deuteranopia.png";
    document.getElementById("Tritanopia_Olho").src = "Tritanopia_Olho__AlterFor_Deuteranopia.png";

    document.getElementById("verde").src = "verde_deuteranopia.png";
    document.getElementById("azul").src = "azul_deuteranopia.png";
    document.getElementById("vermelho").src = "vermelho_deuteranopia.png";
    document.getElementById("roxo").src = "roxo_deuteranopia.png";
    document.getElementById("laranja").src = "laranja_deuteranopia.png";
    document.getElementById("rosa").src = "rosa_deuteranopia.png";
}

function alter_ImageTritanopia() {
    document.getElementById("img1_Carousel").src = "img3_Carousel.png";
    document.getElementById("img2_Carousel").src = "img2_Carousel__AlterFor_Tritanopia.png";
    document.getElementById("img3_Carousel").src = "img3_Carousel__AlterFor_Tritanopia.png";

    document.getElementById("Protanopia_Olho").src = "Protanopia_Olho__AlterFor_Tritanopia.png";
    document.getElementById("Deuteranopia_Olho").src = "Deuteranopia_Olho__AlterFor_Tritanopia.png";
    document.getElementById("Tritanopia_Olho").src = "Tritanopia_Olho__AlterFor_Tritanopia.png";

    document.getElementById("verde").src = "verde_tritanopia.png";
    document.getElementById("azul").src = "azul_tritanopia.png";
    document.getElementById("vermelho").src = "vermelho_tritanopia.png";
    document.getElementById("roxo").src = "roxo_tritanopia.png";
    document.getElementById("laranja").src = "laranja_tritanopia.png";
    document.getElementById("rosa").src = "rosa_tritanopia.png";
}

function alter_ImageMonocromia() {
    document.getElementById("img1_Carousel").src = "img1_Carousel__AlterFor_Monocromia.png";
    document.getElementById("img2_Carousel").src = "img2_Carousel__AlterFor_Monocromia.png";
    document.getElementById("img3_Carousel").src = "img3_Carousel__AlterFor_Monocromia.png";

    document.getElementById("Protanopia_Olho").src = "Olho__AlterFor_Monocromia.png";
    document.getElementById("Deuteranopia_Olho").src = "Olho__AlterFor_Monocromia.png";
    document.getElementById("Tritanopia_Olho").src = "Olho__AlterFor_Monocromia.png";

    document.getElementById("verde").src = "verde_monocromia.png";
    document.getElementById("azul").src = "azul_monocromia.png";
    document.getElementById("vermelho").src = "vermelho_monocromia.png";
    document.getElementById("roxo").src = "roxo_monocromia.png";
    document.getElementById("laranja").src = "laranja_monocromia.png";
    document.getElementById("rosa").src = "rosa_monocromia.png";
}

$("[data-toggle='toggle']").click(function() {
    var selector = $(this).data("target");
    $(selector).toggleClass('in');
});

function alter_ImagemNormal() {
    document.getElementById("image1").src = "imagens\protanopia_normal.jpg";
    document.getElementById("image2").src = "imagens\deutoranopia_normal.jpg";
    document.getElementById("image3").src = "imagens\tritanopia_normal.jpg";
}

function alter_ImagemProtanopia() {
    document.getElementById("image1").src = "imagens\p1.png";
    document.getElementById("image2").src = "imagens\d1.png";
    document.getElementById("image3").src = "imagens\t1.png";
}

function alter_ImagemDeuteranopia() {
    document.getElementById("image1").src = "imagens\p2.png";
    document.getElementById("image2").src = "imagens\d2.png";
    document.getElementById("image3").src = "imagens\t2.png";
}

function alter_ImagemTritanopia() {
    document.getElementById("image1").src = "imagens\p3.png";
    document.getElementById("image2").src = "imagens\d3.png";
    document.getElementById("image3").src = "imagens\t3.png";
}

function alter_ImagemMonocromia() {
    document.getElementById("image1").src = "imagens\p4.png";
    document.getElementById("image2").src = "imagens\d4.png";
    document.getElementById("image3").src = "imagens\t4.png";
}
function altera_ImageNormal() {
    document.getElementById("imageTest").src = "imagens\.png";
}
function altera_ImageProtanopia() {
    document.getElementById("imageTest").src = "imagens\.png";
}
function altera_ImageDeuteranopia() {
    document.getElementById("imageTest").src = "imagens\.png";
}
function altera_ImageTritanopia() {
    document.getElementById("imageTest").src = "imagens\.png";
}
function altera_ImageMonocromia() {
    document.getElementById("imageTest").src = "imagens\.png";
}