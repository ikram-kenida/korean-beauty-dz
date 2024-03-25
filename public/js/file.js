const menu= document.getElementById('menu-items');
const menu_icon=document.getElementById('menu-icon');
menu_icon.onclick=function () {
    if (menu.style.display !== "none") {
      menu.style.display = "none";
    } else {
      menu.style.display = "block";
    }
};
function hideNavbar() {
  menu.style.display = 'none';
}

// Function to show the navbar
function showNavbar() {
  menu.style.display = 'block';
}
document.addEventListener('click', function(event) {
  // Check if the clicked element is NOT part of the navbar or the navbar icon
  if (!menu.contains(event.target) && event.target !== menu_icon) {
    hideNavbar();

  }
});

// Event listener to show the navbar when clicking on the navbar icon
navbarIcon.addEventListener('click', function(event) {
  showNavbar();
  event.stopPropagation(); // Prevent the click event from bubbling up to the document

});



navbarIcon.addEventListener('click', function() {
  // Toggle the 'navbar-open' class on the navbar
  navbar.classList.toggle('navbar-open');
});
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
})/*

function toggleSearchBox() {
  var searchBox = document.getElementById("search_input");
  var isOpen = searchBox.style.display === "block";

  if (!isOpen) {
    searchBox.style.display = "block";
    searchBox.classList.add('slide-bottom');
  } else {
    searchBox.style.display = "none";
  }
}

document.addEventListener('click', function (event) {
  var searchInput = document.getElementById('searchInput');
  var searchBox = document.getElementById('search_input');

  if (!searchInput.contains(event.target) && !searchBox.contains(event.target)) {
    // Clicked outside the search box or input, close the search box
    searchBox.style.display = "none";
  }
});

*/
function toggleSearchBox() {
  var searchBox = document.getElementById("search_input");
  var main = document.getElementById("main");
  var isOpen = searchBox.style.display === "block";

  if (!isOpen) {
    searchBox.style.display = "block";
    searchBox.classList.add('slide-bottom');
    main.classList.add('opacity-1')
    main.classList.remove('opacity-2')
  } else {
    searchBox.style.display = "none";
    main.classList.add('opacity-2')
    main.classList.remove('opacity-1')
  }
}

document.addEventListener('click', function (event) {
  var searchInput = document.getElementById('searchInput');
  var searchBox = document.getElementById('search_input');

  if (!searchInput.contains(event.target) && !event.target.classList.contains('fa-magnifying-glass')) {
    // Clicked outside the search box and search icon, close the search box
    searchBox.style.display = "none";
  }
});


function change_image(image){
  var container = document.getElementById("main-image");
  container.src = image.src;
  }
  document.addEventListener("DOMContentLoaded", function(event) {
  });

  function changeImage(imageUrl){
    const mainImage = document.getElementById('mainImage');
    mainImage.src = imageUrl;
  }

function showHidecomment(){
  const comment=document.getElementById('commentaire');
  if(comment.style.display=='none'){
    comment.style.display="flex"
    comment.classList.add('slide-bottom')
  }else{
    comment.style.display="none"
  }
}



