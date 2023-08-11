let expression = [] ;
let total ;
// let input = '';
let input = [];

// buttons 
const numbers = document.querySelectorAll('.num');
// operators
const operators = document.querySelectorAll('.op');
// display
const sInput = document.querySelector('#input'),
sExp = document.querySelector('#exp');

   // add event in operators button
   operators.forEach(op =>{
      op.addEventListener('click', ()=>{
         if(op.value === '+'){
            operation(" + ");
         }else if(op.value === '-'){
            operation(" - ");
         }else if(op.value === '*'){
            operation(" * ");
         }else if(op.value === '/'){
            operation(" / ");
         }
      })
   })
   // add event in number btns
   numbers.forEach(num => {
    let numValue = num.value;
        num.addEventListener('click', ()=>{
         updateInput(numValue)
        });
   });

//  console.log(input);
// change the input value
function updateInput(n){
   input.push(n);
   sInput.value = input.join('');
}
// add
function operation(o){
   let i = input.join(''),
      arrOperation = ["+", '-', '/', '*'];
      console.log(expression[expression.length - 1]);
   if(!arrOperation.includes(expression[expression.length - 1])){
      if(expression.length === 0){
         expression.push(i); 
         expression.push(o);
         sExp.value = expression.join('');
         input = [];
         console.log(expression);
      }else if(expression.length > 0){
         expression.push(i); 
         expression.push(o);
         sExp.value = expression.join('');
         input = [];
         // let n1 = [...expression, ...input];
         // eval()
         // n1.push(i);
         // n1.join('');
         console.log(expression);
         // sExp.value = expression;
         // eval();
      }
   }
  
}
// function operation(o){
//       if(!expression){
//          expression += input;
//          expression += o;
//          sExp.value = expression;
//          console.log(expression);
//       }else if(expression){
//          expression += input;
//          expression += o;
//          sExp.value = expression;
//          // eval();
//       }
// }
// minus 
// multiplication
// divide
//  console.log("0000");