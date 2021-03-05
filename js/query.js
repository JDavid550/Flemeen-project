let misionButton = document.querySelector('.mision_button');
let visionButton = document.querySelector('.vision_button');
let numbersButton = document.querySelector('.numbers_button');

let mision = document.querySelector('.mision');
let vision = document.querySelector('.vision');
let numbers = document.querySelector('.numbers');

let divs = [mision,vision,numbers];
let button =[misionButton,visionButton,numbersButton];

console.log(divs);
console.log(mision,vision,numbers);

for (let index = 0; index < button.length; index++) {
    button[index].addEventListener('click', ()=>{
        for(let i=0; i< divs.length;i++){
            divs[i].classList.remove('active');
        }
        console.log('working');
        divs[index].classList.add('active');
    })
    
}




