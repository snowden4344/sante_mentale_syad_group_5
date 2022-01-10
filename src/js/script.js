let navOpen = document.getElementById("navOpen"),
    navClose = document.getElementById("navClose"),
    navSide = document.getElementById("navSide"),
    hover_list_parent = document.getElementsByClassName("hover_list_parent");

hover_list_parent[0].addEventListener('click', function (){
  hover_list_parent[0].classList.toggle("links_visible");
})

navOpen.addEventListener("click", function() {
  navSide.classList.add("visibleNow");
  navOpen.classList.add("invisible");
});

navClose.addEventListener("click", function() {
  navSide.classList.remove("visibleNow");
  navOpen.classList.remove("invisible");
  navSide.style.transition = ".5s";
});

