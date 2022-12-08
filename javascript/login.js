const btn = document.getElementById('Register');
const Register =document.getElementById('Formh');
const login =document.getElementById('formv');
const rbtn = document.getElementById('Login');


document.querySelector('form').style.visibility='hidden';
document.getElementById('subcont1').style.visibility='hidden';



btn.addEventListener('click', function onClick(event) {
    Register.style.visibility='visible';
    login.style.visibility='hidden';
    document.querySelector('form').style.visibility='visible';
    document.getElementById('subcont2').style.visibility='hidden';
    document.getElementById('subcont1').style.visibility='visible';
    
  });

rbtn.addEventListener('click', function onClick(event) {
    Register.style.visibility='hidden';
    login.style.visibility='visible';
    document.getElementById('formv').style.visibility='visible';
    document.getElementById('subcont2').style.visibility='visible';
    document.getElementById('subcont1').style.visibility='hidden';
    

    
  }); 

