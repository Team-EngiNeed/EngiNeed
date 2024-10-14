const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.navbar__menu')


menu.addEventListener('click', function(){
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
}
)



// Function to open the login popup
function openLoginPopup() {
  document.getElementById('loginPopup').style.display = 'flex'; // Use flex for centering
}

// Function to close the login popup
function closeLoginPopup() {
  document.getElementById('loginPopup').style.display = 'none';
}

// Close the popup if the user clicks outside of it
window.onclick = function(event) {
  const popup = document.getElementById('loginPopup');
  if (event.target === popup) {
    popup.style.display = 'none';
  }
}
