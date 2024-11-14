const btn = document.querySelector('.btn');

btn.addEventListener('click', () => {

    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
    })

})

function scrollToCompetences(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien
    console.log("ScollToSection called");
    document.querySelector('#competences').scrollIntoView({
        behavior: 'smooth'
    });
}
function scrollToContact(event) {
    event.preventDefault();
    console.log("ScrollToContact called");
    document.querySelector("#contact").scrollIntoView({
        behavior: 'smooth'
    })
}