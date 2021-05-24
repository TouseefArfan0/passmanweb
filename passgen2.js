/* creating variables using the ids from html */

const passlength = document.getElementById('passlengthid');
const numbers = document.getElementById('numbersid');
const lowercase  = document.getElementById('lowercaseid');
const uppercase = document.getElementById('uppercaseid');
const symbols = document.getElementById('symbolsid');
const button  = document.getElementById('Genbutton');
const clipboard  = document.getElementById('copy');
const password  = document.getElementById('passhead');

/* creating variables to include all 4 functions created  to specify characters */ 
const Ofunc = {
    lower: lowercaseM,
    upper: uppercaseM,
    numb: numbersM,
    symb: symbolsM
    
};


/* linking the boxes to the generate button. creating variables */
button.addEventListener('click', () => {

    const length = +passlength.value;
    const islower = lowercase.checked;
    const isupper = uppercase.checked;
    const isnumber = numbers.checked;
    const issymbols = symbols.checked;

  /* allowing the "password" variable to be equivelent to "generatepassword" for the upcoming function with the input variables */
    
    password.value = generatepassword(
        length, islower, isupper, isnumber, issymbols);


});
/* this function will take in all variables from when the "generatepassword" created*/
function generatepassword (length, lower, upper, numb, symb) {

    /* initializing a generatedpassword variable 
    
    creating a variable 'typescount' which counts the checked values */
    let generatedpassword = '';


    const typescheck = lower + upper + numb + symb;
   
/* filtering out the unchecked values, looping through the values  */
    const typesArray = [{ lower }, { upper }, { numb }, { symb }].filter
    (item => Object.values(item)[0]);
    
/* if none of the boxes are checked it will not generate a password */

    if (typescheck === 0) {
        return '';
    }

    /* the for loop is if 'i' is less than the length + the variables in the 'typescheck'*/

    for (let i=0; i<length; i+=typescheck)
    /* looping through the array for each 
    creating a const called 'functionName' and using the 'Object.keys' to return the array */
    
    {
    typesArray.forEach(type => {
     const functionName = Object.keys(type)[0];
     
     /* earlier the algorithms were made into functions and added into a const called 'Ofunc' which will be added 
     and the 'functionName' will add the keys */
     generatedpassword += Ofunc[functionName]();

    });
   
}
/* because there are 4 variables in the 'typescheck' the minimum length can only be the amount is checked
to prevent this the slice command is used so the length can be as low as 1*/
const mainpassword = generatedpassword.slice(0, length);
return mainpassword;
    
} 

/* using https://net-comber.com/charset.html to specify the function into certain characters*/

function lowercaseM() {

  return String.fromCharCode(Math.floor (Math.random() * 26) + 97);
  
}

function uppercaseM() {

    return String.fromCharCode(Math.floor (Math.random() * 26) + 65);
    
  }
  
  function numbersM() {
	return +String.fromCharCode(Math.floor(Math.random() * 10) + 48);
}

function symbolsM() {
	const symbols = '!@#$%^&*(){}[]=<>/,.'
	return symbols[Math.floor(Math.random() * symbols.length)];
}
