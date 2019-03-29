let hotelModal = document.getElementById('hotelModal');
let hotelBtn = document.getElementById("hotelBtn");
let closeHotel = document.getElementById("closeHotel");

hotelBtn.addEventListener("click", function(){
  hotelModal.style.display = "block";
})
closeHotel.addEventListener("click", function(){
  hotelModal.style.display = "none";
})

let restoModal = document.getElementById('restoModal');
let restoBtn = document.getElementById("restoBtn");
let closeResto = document.getElementById("closeResto");

restoBtn.addEventListener("click", function(){
  restoModal.style.display = "block";
})
closeResto.addEventListener("click", function(){
  restoModal.style.display = "none";
})

let diversModal = document.getElementById('diversModal');
let diversBtn = document.getElementById("diversBtn");
let closeDivers = document.getElementById("closeDivers");

diversBtn.addEventListener("click", function(){
  diversModal.style.display = "block";
})
closeDivers.addEventListener("click", function(){
  diversModal.style.display = "none";
})
