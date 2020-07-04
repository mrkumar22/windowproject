const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});
/*
const click_signup=document.getElementById('validate-signup');
click_signup.addEventListener('click',()=>{
  const all_inputs=document.querySelectorAll(".sign-up-container form input");
  for(let i=0; i<5; i++){
    if(all_inputs[i].value==""){
      alert("All fields are required!");
      all_inputs[i].focus()=true;
      break;
    }
  }
  const pwd1=document.getElementById('pwd1');
  const pwd2=document.getElementById('pwd2');
  if(pwd2.value.trim()!=pwd1.value.trim() )
  {
    alert("Password doesn't match");
    pwd2.focus()=true;
  }
  if((pwd2.value.length || pwd1.value.length)<8){
    alert("Passwword length must be 8 letters/numbers")
  }
});
const click_Signin=document.getElementById('validate-signin');
click_Signin.addEventListener('click',()=>{
  const all_input=document.querySelectorAll(".sign-in-container form input");
  console.log(all_input);
  for(let i=0; i<2; i++)
  {
    if(all_input[i].value.trim()=="")
    {
      alert("Fill out all fields!");
      all_input[i].focus()=true;
      break;
    }
  
  }
})*/


$("#signupbtn").click(function(){
  if($("#pwd1").value()!=$("#pwd2").value())
alert("sf");
});