//start of megical header
window.addEventListener('scroll', yScroll);

var menuRow, searchRow, yPos;

function yScroll(){
  menuRow = document.querySelector('.menuRow');
  searchRow = document.querySelector('.searchRow');
  yPos = window.pageYOffset;
  if(yPos > 150) {
    menuRow.style.height = "100%";
    searchRow.style.height = "0";
    searchRow.style.padding = "0";
  }else {
    menuRow.style.height = "100%";
    searchRow.style.height = "43px";
    searchRow.style.padding = "5px";
  }
}
//end of magical header

//toggle menu class on click
  document.querySelector('.menuIcon').onclick = function() {menuEffect()};
  function menuEffect(){
    var menu = document.querySelector('.menuIcon');
    menu.classList.toggle('active');

    var toggle = document.querySelector('.menuPanel');
    toggle.classList.toggle('toggleActive');
  }

//remove menu class on scroll
document.addEventListener("wheel", removeClass);
function removeClass() {
  var toggle = document.querySelector('.menuPanel');
  toggle.classList.remove('toggleActive');

  var menu = document.querySelector('.menuIcon');
  menu.classList.remove('active');
}

//tab switch class on mouseover

var menu = document.querySelector('.menuTab1'); //global variables
var menu2 = document.querySelector('.menuTab2');
var menu3 = document.querySelector('.menuTab3');
var menu4 = document.querySelector('.menuTab4');
var menu5 = document.querySelector('.menuTab5');
var menu6 = document.querySelector('.menuTab6');

//1 tab
document.querySelector('.menuTab1').addEventListener('mouseover', addStyle);
function addStyle(){
    menu2.classList.remove('tab2');
    menu3.classList.remove('tab3');
    menu4.classList.remove('tab4');
    menu5.classList.remove('tab5');
    menu6.classList.remove('tab6');
    menu.classList.add('tab1');
    menu.setAttribute("style", "border-right-style:none");
}

//2 tab
document.querySelector('.menuTab2').addEventListener('mouseover', addStyle1);
function addStyle1(){
menu.setAttribute("style", "border-right-style:solid; border-bottom-style:none");
menu2.classList.add('tab2');
menu3.classList.remove('tab3');
menu4.classList.remove('tab4');
menu5.classList.remove('tab5');
menu6.classList.remove('tab6');
}

//3tab
document.querySelector('.menuTab3').addEventListener('mouseover', addStyle2);
function addStyle2(){
menu3.classList.add('tab3');
menu.classList.remove('tab1');
menu2.classList.remove('tab2');
menu4.classList.remove('tab4');
menu5.classList.remove('tab5');
menu6.classList.remove('tab6');
menu.setAttribute("style", "border-right-style:solid; border-bottom-style:none");
}

//4tab
document.querySelector('.menuTab4').addEventListener('mouseover', addStyle3);
function addStyle3(){
menu4.classList.add('tab4');
menu.classList.remove('tab1');
menu2.classList.remove('tab2');
menu3.classList.remove('tab3');
menu5.classList.remove('tab5');
menu6.classList.remove('tab6');
menu.setAttribute("style", "border-right-style:solid; border-bottom-style:none");
}

//tab5
document.querySelector('.menuTab5').addEventListener('mouseover', addStyle4);
function addStyle4(){
menu5.classList.add('tab5');
menu.classList.remove('tab1');
menu2.classList.remove('tab2');
menu3.classList.remove('tab3');
menu4.classList.remove('tab4');
menu6.classList.remove('tab6');
menu.setAttribute("style", "border-right-style:solid; border-bottom-style:none");
}

//tab6
document.querySelector('.menuTab6').addEventListener('mouseover', addStyle5);
function addStyle5(){
menu6.classList.add('tab6');
menu.classList.remove('tab1');
menu2.classList.remove('tab2');
menu3.classList.remove('tab3');
menu4.classList.remove('tab4');
menu5.classList.remove('tab5');
menu.setAttribute("style", "border-right-style:solid; border-bottom-style:none");
}
//end of tab switch class on mouseover

//adding content articles to menu (right side)

var lietuva = document.querySelector('.lietuva');
var uzsienis = document.querySelector('.uzsienis');
var verslas = document.querySelector('.verslas');
var sportas = document.querySelector('.sportas');
var mokslas = document.querySelector('.mokslas');
var sveikata = document.querySelector('.sveikata');

//"uzsienis"
document.querySelector('.menuTab2').addEventListener('mouseover', showCont);
function showCont(){
  uzsienis.setAttribute("style", "display:block");
  lietuva.setAttribute("style", "display:none");
  verslas.setAttribute("style", "display:none");
  sportas.setAttribute("style", "display:none");
  mokslas.setAttribute("style", "display:none");
  sveikata.setAttribute("style", "display:none");
}

//contant "lietuva"
document.querySelector('.menuTab1').addEventListener('mouseover', showCont1);
function showCont1(){
  lietuva.setAttribute("style", "display:block");
  uzsienis.setAttribute("style", "display:none");
  verslas.setAttribute("style", "display:none");
  sportas.setAttribute("style", "display:none");
  mokslas.setAttribute("style", "display:none");
  sveikata.setAttribute("style", "display:none");
}
//"verslas"
document.querySelector('.menuTab3').addEventListener('mouseover', showCont2);
function showCont2(){
  verslas.setAttribute("style", "display:block");
  lietuva.setAttribute("style", "display:none");
  uzsienis.setAttribute("style", "display:none");
  sportas.setAttribute("style", "display:none");
  mokslas.setAttribute("style", "display:none");
  sveikata.setAttribute("style", "display:none");
}
//"sportas"
document.querySelector('.menuTab4').addEventListener('mouseover', showCont3);
function showCont3(){
  sportas.setAttribute("style", "display:block");
  lietuva.setAttribute("style", "display:none");
  uzsienis.setAttribute("style", "display:none");
  verslas.setAttribute("style", "display:none");
  mokslas.setAttribute("style", "display:none");
  sveikata.setAttribute("style", "display:none");
}
//"mokslas"
document.querySelector('.menuTab5').addEventListener('mouseover', showCont4);
function showCont4(){
  mokslas.setAttribute("style", "display:block");
  lietuva.setAttribute("style", "display:none");
  uzsienis.setAttribute("style", "display:none");
  verslas.setAttribute("style", "display:none");
  sportas.setAttribute("style", "display:none");
  sveikata.setAttribute("style", "display:none");
}
//"sveikata"
document.querySelector('.menuTab6').addEventListener('mouseover', showCont5);
function showCont5(){
  sveikata.setAttribute("style", "display:block");
  lietuva.setAttribute("style", "display:none");
  uzsienis.setAttribute("style", "display:none");
  verslas.setAttribute("style", "display:none");
  sportas.setAttribute("style", "display:none");
  mokslas.setAttribute("style", "display:none");
}
//end of menuRight content

// bootstrap gallery
$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "fade",
        closeEffect: "fade",
        type: "image"
    });
});

// end bootstrai gallery

$(document).ready(function(){

    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

});
