

function showCard(){

  var div_card = document.getElementById("div_card");

    div_card.style.display = "block";

}

function unshowCard(){

  var div_card = document.getElementById("div_card");

    div_card.style.display = "none";

}

 var card = document.getElementById("card");
 card.addEventListener("click",showCard,false);
 card.addEventListener("unclick",unshowCard,false);




 function showAtm(){

  var div_atm = document.getElementById("div_atm");
  div_atm.style.display = "block";


}

 var atm = document.getElementById("atm");
 atm.addEventListener("click",showAtm,false);



