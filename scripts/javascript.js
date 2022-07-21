function displayMenu(){
  document.querySelector('.navigation').classList.toggle('active');
  document.querySelector('.menus').classList.toggle('hide');
  document.querySelector('.close').classList.toggle('show');
}

//functions to open the fridge
function openFridge(){
  document.getElementById('openFridge').style.display = "block";
}
function lockFridge(){
  document.getElementById('lockFridge').style.display = "block";
}

//function to close popup
function closeFridgeControl(){
  document.getElementById('openFridge').style.display = "none";
  document.getElementById('lockFridge').style.display = "none";
}



//Reference - https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal
window.onload = function(){ 

  // Get the modal
  const modal = document.getElementById("myModal");
     
 //open the model once alert settings has been clicked
  const btn = document.getElementById("myBtn");
  btn && btn.addEventListener("click", () => {
    modal.style.display = "block";
  });

  //close modal the using X icon
  const span = document.getElementsByClassName("close")[0];
  span.addEventListener("click", () => {
    modal.style.display = "none";
  });

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
};
