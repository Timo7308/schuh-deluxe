
const password = document.getElementById("password1")
const form = document.getElementById ("form")
const errorElement = document.getElementById("error")
const password2 = document.getElementById("password2")
var numbers = /[0-9]/g;

// focus event
form.addEventListener("focus", function(event){

    event.target.style.background = "lightblue"
}, true
);

// blur event
form.addEventListener("blur", function(event){
event.target.style.background = ""

}, true 
);

// messages event
form.addEventListener("submit", (e) => {
    let messages =[]
  
    
    if(password.value === "" || password.value == null ){
        alert("Bitte ein Passwort eingeben")
        
    }

    else if(password.value.length <=4 ){
        alert("Das Passwort muss mindestens 5 Zeichen haben")
        
    }
    if(password.value.match !=(numbers))
{
    alert("Das Passwort muss mindestens eine Zahl enthalten")
}
    

     if(password.value != password2.value){
        alert(" Die Passwörter sind nicht gleich")
        
    }
  
    
})
