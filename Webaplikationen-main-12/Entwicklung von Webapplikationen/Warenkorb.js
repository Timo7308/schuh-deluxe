document.getElementById("myForm").addEventListener("input", rechne);



	
function rechne() {
    var menge2 = document.getElementById('menge2');
    var preis1 = 60;
    var preis2 = 80;
    var menge1  = document.getElementById('menge1');
  
    var summe  = preis1 * menge1.valueAsNumber;
    var summe2 = preis2 * menge2.valueAsNumber;
    

    document.getElementById('betrag').value = summe + summe2;

    
}


    function myfunction() {
        var warenbild1 = document.getElementById("Warenkorbbild");
        warenbild1.remove();
    }
   
    function myfunction1() {
        var warenbild2 = document.getElementById("Warenkorbbild2");
        warenbild2.remove();


    }

/*
    function showfunction() {
        document.getElementById("Warenkorbbild").style.display = "block";
  
        }
        */