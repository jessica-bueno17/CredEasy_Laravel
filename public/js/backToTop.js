const botao = document.querySelector('#back-to-top')

function scrollToTop () {
    window.scrollTo({
        top:0,
        behavior:'smooth'})
}

botao.addEventListener("click",scrollToTop)