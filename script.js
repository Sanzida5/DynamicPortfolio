let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');
        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
        }
    });
};

menuIcon.onclick = () => {
    menuIcon.classList.toggle('fa-x');
    navbar.classList.toggle('active');
};
document.addEventListener('DOMContentLoaded', function() {
    const socialIcons = document.querySelectorAll('.social-icons a');

    socialIcons.forEach(icon => {
        icon.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action of the anchor tag
            const link = this.getAttribute('href'); // Get the href attribute of the clicked icon
            window.open(link, '_blank'); // Open the link in a new tab
        });
    });
});
// Skills Learn More popup
const serviceModal = document.getElementById('serviceModal');
const serviceModalClose = document.getElementById('serviceModalClose');
const serviceModalIcon = document.getElementById('serviceModalIcon');
const serviceModalTitle = document.getElementById('serviceModalTitle');
const serviceModalDescription = document.getElementById('serviceModalDescription');
const serviceLearnButtons = document.querySelectorAll('.service-learn-btn');

serviceLearnButtons.forEach(button => {
    button.addEventListener('click', () => {
        serviceModalIcon.className = 'bx ' + button.dataset.icon;
        serviceModalTitle.textContent = button.dataset.title;
        serviceModalDescription.textContent = button.dataset.description;
        serviceModal.classList.add('active');
    });
});

if (serviceModalClose) {
    serviceModalClose.addEventListener('click', () => {
        serviceModal.classList.remove('active');
    });
}

if (serviceModal) {
    serviceModal.addEventListener('click', (event) => {
        if (event.target === serviceModal) {
            serviceModal.classList.remove('active');
        }
    });
}

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && serviceModal) {
        serviceModal.classList.remove('active');
    }
});
