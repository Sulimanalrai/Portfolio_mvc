
// input selecteren
inptAdd = document.querySelector(".Add");
// button selecteren
button =  document.querySelector(".addbtn"); 
// output selecteren
output =  document.querySelector(".x"); 


const bodyVar = document.querySelector('.bodyclass');
const buttonVar = document.querySelector('.theme-button');
if(bodyVar){
    if(bodyVar){
        buttonVar.addEventListener('click', function(){
            bodyVar.classList.toggle('blue');
        });
    }
}

const buttonAll = document.querySelectorAll('.buttontheme');
if(buttonAll){
    for(let i=0; i<buttonAll.length; i++){
        const buttonShow = buttonAll[i];
    }
}

button.addEventListener("click", function(){
    output.textContent = inptAdd.value/3.2808;

  inptAdd.value = "";
})


