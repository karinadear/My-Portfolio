const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('animateProfile', 'animateYearBox', 'animateProjectBox', 'animateDescHome', 'animateskill', 'animateskill2', 'animateExpBox','animateContactBox','animateContactBox2');
        } else {
            entry.target.classList.remove('animateProfile', 'animateYearBox', 'animateProjectBox', 'animateDescHome','animateskill', 'animateskill2', 'animateExpBox', 'animateContactBox', 'animateContactBox2');
        }
    });
});

const myProfileElements = document.querySelectorAll('.myProfile');
myProfileElements.forEach((el) => observer.observe(el));

const yearBoxElements = document.querySelectorAll('.yearBox');
yearBoxElements.forEach((el) => observer.observe(el));

const projectBoxElements = document.querySelectorAll('.projectBox');
projectBoxElements.forEach((el) => observer.observe(el));

const descHomeElements = document.querySelectorAll('.descHome');
descHomeElements.forEach((el) => observer.observe(el));

const myskillElements = document.querySelectorAll('.myskill');
myskillElements.forEach((el) => observer.observe(el));

const myskill2Elements = document.querySelectorAll('.myskill2');
myskill2Elements.forEach((el) => observer.observe(el));

const expBoxElements = document.querySelectorAll('.expBox');
expBoxElements.forEach((el) => observer.observe(el));

const contactBoxElements = document.querySelectorAll('.contactBox');
contactBoxElements.forEach((el) => observer.observe(el));

const contactBox2Elements = document.querySelectorAll('.contactBox2');
contactBox2Elements.forEach((el) => observer.observe(el));

