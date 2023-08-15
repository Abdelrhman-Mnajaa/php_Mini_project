const inputs = document.querySelectorAll('input');
const date = new Date(document.getElementById('date').value);
console.log(date.value);
// document.getElementById("f").addEventListener("click", function(event){
//   event.preventDefault()
// });

// document.getElementById("f").addEventListener("onload", function(event){
//   event.preventDefault()
// });
const patterns = {
  username: /^[a-z\d]{5,12}$/i,
  password: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/i,
  email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
  phone: /^\d{14}$/,
  fullname:/^[a-zA-Z]+ [a-zA-Z]+ [a-zA-Z]+ ([a-zA-Z]+$|[a-zA-Z]+\s+$)/,
  date:/^(?:(?:31(\,)(?:0?[13578]|1[02]|(?:Jan|Mar|May|Jul|Aug|Oct|Dec)))\1|(?:(?:29|30)(\,)(?:0?[1,3-9]|1[0-2]|(?:Jan|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec))\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\,)(?:0?2|(?:Feb))\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\,)(?:(?:0?[1-9]|(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep))|(?:1[0-2]|(?:Oct|Nov|Dec)))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/


};

inputs.forEach((input) => {
  input.addEventListener('keyup', (e) =>{    
        validate(e.target, patterns[e.target.attributes.id.value]);
  });
  
});

function validate(field, regex) {
  if (field.value==''){
    field.className = 'form-control valid';
  }
  else if (regex.test(field.value)) {
    field.className = 'form-control valid';
  } else {
    field.className = 'form-control invalid';
  }

// back to it later 
// you have to split the date from string to meet date function syntax 'yyyy-mm-dd' from 'dd-mm-yyyy'
// Not working need further modification

function validateDate(){
  const y = new Date('2007-08-14');
  if (date.value < y){
    document.getElementById("birthdayNameHelp").innerHTML("You are below 16 old ");
  }
}

// validateDate();

}


function checkPassword(){
  let password = document. getElementById
  ("password") . value;
  let cnfrmPassword = document. getElementById
  ("cnfrm-password") . value;

  console. log (password, cnfrmPassword) ;
  let message = document. getElementById
  ("ConPasswordHelp");

  if(password. length != 0){
  if (password == cnfrmPassword) {
  message.textContent = "Password match";
    }
  else {message.textContent = "Password not match"};

}
}