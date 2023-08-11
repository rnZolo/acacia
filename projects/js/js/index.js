const numbers = document.querySelectorAll('.num');
numbers.forEach(element => {
    element.addEventListener('click', ()=>{

            console.log(element);
    });    
});
