let start = document.querySelector('.start-btn')
let form = document.querySelector('.form')


start.addEventListener('click', function(){
    start.classList.add('none')
    form.classList.remove('none')
})