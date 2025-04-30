//nav menu sticky
let nav = document.querySelector("nav");
let scrollBtn = document.querySelector(".scroll-button a");
console.log(scrollBtn);
let val;
window.onscroll = function() {
  if(document.documentElement.scrollTop > 20){
    nav.classList.add("sticky");
    scrollBtn.style.display = "block";
  }else{
    nav.classList.remove("sticky");
    scrollBtn.style.display = "none";
  }

}

// small screen side nav menu
let body = document.querySelector("body");
let navBar = document.querySelector(".navbar");
let menuBtn = document.querySelector(".menu-btn");
let cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = function(){
  navBar.classList.add("active");
  menuBtn.style.opacity = "0";
  menuBtn.style.pointerEvents = "none";
  body.style.overflow = "hidden";
  scrollBtn.style.pointerEvents = "none";
}
cancelBtn.onclick = function(){
  navBar.classList.remove("active");
  menuBtn.style.opacity = "1";
  menuBtn.style.pointerEvents = "auto";
  body.style.overflow = "auto";
  scrollBtn.style.pointerEvents = "auto";
}

let navLinks = document.querySelectorAll(".menu li a");
for (var i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener("click" , function() {
    navBar.classList.remove("active");
    menuBtn.style.opacity = "1";
    menuBtn.style.pointerEvents = "auto";
  });
}

// filtering projects based on chosen skill
document.addEventListener('DOMContentLoaded', function () {
    const skillBoxes = document.querySelectorAll('.skill-box');
    const projectItems = document.querySelectorAll('.project-item');

    skillBoxes.forEach(box => {
        box.addEventListener('click', () => {
            const skill = box.getAttribute('data-skill');

            projectItems.forEach(item => {
                const skills = item.getAttribute('data-skills').split(',');
                
                if (skills.includes(skill)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});

//show all projects button
document.getElementById('showAllBtn').addEventListener('click', function() {
  const projectItems = document.querySelectorAll('.project-item');

  projectItems.forEach(item => {
      item.style.display = 'block';
  })
});

function openModal(courseId) {
  const courseTitle = document.querySelector(`[onclick="openModal('${courseId}')"] h5`).innerText;
  const courseDescription = document.getElementById(courseId).innerHTML;

  document.getElementById('modalTitle').innerText = courseTitle;
  document.getElementById('modalText').innerHTML = courseDescription;

  document.getElementById('courseModal').style.display = "block";
}

function closeModal() {
  document.getElementById('courseModal').style.display = "none";
}

window.onclick = function(event) {
  var modal = document.getElementById('courseModal');
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function toggleExperiences() {
  const moreExperiences = document.getElementById('more-experiences');
  const showMoreBtn = document.getElementById('showMoreBtn');

  if (moreExperiences.style.display === "none") {
    moreExperiences.style.display = "flex";
    showMoreBtn.innerText = "Show Less";
  } else {
    moreExperiences.style.display = "none";
    showMoreBtn.innerText = "Show More";
  }
}