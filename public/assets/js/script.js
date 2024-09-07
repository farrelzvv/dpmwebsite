'use strict';



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navToggleBtn = document.querySelector("[data-nav-toggle-btn]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");

navToggleBtn.addEventListener("click", function () {
  navbar.classList.toggle("active");
  this.classList.toggle("active");
});

for (let i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
    navToggleBtn.classList.toggle("active");
  });
}



/**
 * header
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});

// Overlay Deskripsi proker

function toggleJobdesk(event) {
  var targetId = event.currentTarget.getAttribute('data-target');
  var overlay = document.getElementById('overlay');
  var jobdeskBanner = document.getElementById(targetId);
  
  // Toggle kelas 'active' untuk overlay dan jobdesk banner yang ditargetkan
  overlay.classList.toggle('active');
  jobdeskBanner.classList.toggle('active');
}

// Ambil semua elemen dengan class 'cek-jobdesk' dan tambahkan event listener
document.querySelectorAll('.cek-jobdesk').forEach(function(button) {
  button.addEventListener('click', toggleJobdesk);
});

function closeJobdesk() {
  var overlay = document.getElementById('overlay');
  var activeBanner = document.querySelector('.jobdesk-banner.active');

  if (activeBanner) {
    overlay.classList.remove('active');
    activeBanner.classList.remove('active');
  }
}

document.querySelectorAll('.close-btn').forEach(function(button) {
  button.addEventListener('click', closeJobdesk);
});












