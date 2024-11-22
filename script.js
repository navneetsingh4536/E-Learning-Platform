// Carousel auto-scroll
let scrollAmount = 0;
const track = document.querySelector(".carousel-track");
const scrollInterval = setInterval(() => {
    if (scrollAmount >= track.scrollWidth - track.clientWidth) {
        scrollAmount = 0;
    } else {
        scrollAmount += 2;
    }
    track.scrollTo({ left: scrollAmount, behavior: "smooth" });
}, 30);

// Rotate announcements
const announcements = [
    "Enroll Now in Our Latest Courses and Unlock Your Potential!",
    "Limited Time Offer: Get up to 20% off on select courses!",
    "Join Now and receive a free course bundle!"
];
let currentAnnouncement = 0;

function rotateAnnouncement() {
    document.querySelector(".announcement span").innerText = announcements[currentAnnouncement];
    currentAnnouncement = (currentAnnouncement + 1) % announcements.length;
}

setInterval(rotateAnnouncement, 5000);  


// Typing effect
const text = "Learn without limits";
let index = 0;
function typeEffect() {
    if (index < text.length) {
        document.querySelector(".main-section h1").textContent += text.charAt(index);
        index++;
        setTimeout(typeEffect, 150);
    }
}
document.addEventListener("DOMContentLoaded", typeEffect);



// Show modal on enroll click
const modal = document.createElement("div");
modal.className = "modal";
modal.innerHTML = `
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Thank you for choosing InspireLearn!</p>
        <p>Are you sure you want to enroll in this course?</p>
        <button class="confirm-enroll">Confirm</button>
    </div>
`;
document.body.appendChild(modal);

document.querySelectorAll(".enroll-btn").forEach(button => {
    button.addEventListener("click", event => {
        event.preventDefault();
        modal.style.display = "block";
    });
});

document.querySelector(".close").onclick = function() {
    modal.style.display = "none";
};

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

