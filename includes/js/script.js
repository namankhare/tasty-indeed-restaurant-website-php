//mobile nav
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navUl");

hamburger.addEventListener("click", mobileMenu);
function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

//testimonials





// menu dropdown
function itemMenu(params) {
    var itemAllCat = document.querySelectorAll('.itemCat:not(.'+params+')');
    var itemDrop = document.querySelector('.'+params+'.itemCat');
    
    [].forEach.call(itemAllCat, function(el) {
        el.classList.remove("active") ;
    });
    itemDrop.classList.toggle("active");
}









//login and signup
var loginModal = document.getElementById('id01');

function loginModel(){
        document.getElementById('id02').style.display='none';
    document.getElementById('id01').style.display='block';
}

var signupModal = document.getElementById('id02');

function signupModel(){
    document.getElementById('id01').style.display='none';
    document.getElementById('id02').style.display='block';
}

window.onclick = function(event) {
    if (event.target == signupModal) {
        signupModal.style.display = "none";
    }
    else if(event.target == loginModal){
        loginModal.style.display = "none";
    }
}

//choose one checkbox
function checkBox(checkbox) {
    var checkboxes = document.getElementsByName('seating')
    checkboxes.forEach((item) => {
      if (item !== checkbox){
          item.checked =  false;
        } 
      
    })
}
//special Occasion
function bookingOccasion(checkbox1) {
    var occasions = document.getElementsByName('occasion')
    occasions.forEach((item1) => {
      if (item1 !== checkbox1){
          item1.checked =  false;
        } 
      
    })
}

// validation

function tableValid(){
    var seatingcap = document.getElementsByName('seating');
    if(seatingcap[0].checked || seatingcap[1].checked || seatingcap[2].checked || seatingcap[3].checked){
        
    }else{
        alert("Please select seating capacity")
        
    }
}

//searchbox press enter
var input = document.getElementById("query");

input.addEventListener("keyup", function enterkey(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    form.submit()
  }
});

// document.getElementById("bookTablebtn").addEventListener('click',tableValid )