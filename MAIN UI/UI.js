
let info=document.getElementsByName('informations');
let Col=document.getElementsByClassName('PARTS');
for (let i = 0; i < Col.length; i++) {
  // const element = array[i];
//  console.log( Col[i] );
Col[i].addEventListener("mouseover", ()=>{
info[i].style.display="";
});
Col[i].addEventListener("mouseout", ()=>{
info[i].style.display="none";
}); 
}


let Cimg=document.getElementsByClassName("CHILDIMG");
let Color=document.getElementsByName('color');
let ChildImg=document.getElementsByClassName('CHILD_IMGS');

console.log( Cimg.length );
for (let i = 0; i < Cimg.length; i++) {
// console.log(Cimg[j].parentElement.parentElement.nextElementSibling.src); 

Cimg[i].addEventListener("mouseover",()=>{
    
  Cimg[i].parentElement.parentElement.nextElementSibling.src=Cimg[i].src;
  console.assert(Cimg[i].src)
  document.getElementsByName("COLOR")[0].value=Color[i].value;
  console.log(document.getElementsByName("COLOR")[0]);

});
//  console.log(ChildImg[i].children[0]);
ChildImg[i].children[0].addEventListener('mouseover', ()=>{

// 
console.log();
document.getElementsByClassName('CHILD_IMGS')[i].parentElement.nextElementSibling.src=document.getElementsByClassName('CHILD_IMGS')[i].children[0].src;
console.log(document.getElementsByClassName('CHILD_IMGS')[i].parentElement.nextElementSibling.src);    
}
);
}

function SendImg(e,element)
{

let mainSrc=  element.parentElement.parentElement.nextElementSibling;
mainSrc.src=e;
// console.log(element.parentElement.parentElement.nextElementSibling.src=);
console.log(mainSrc);
let Audioo= new Audio('sounds/pop-39222.mp3');
Audioo.play();
}

function playSound() {
var audio = new Audio('sounds/shh.mp3');
audio.play();
}
function popAudio() {
var PlayAudio = new Audio('sounds/pop-39222.mp3');
playSound.play();

}


// for search baar 

