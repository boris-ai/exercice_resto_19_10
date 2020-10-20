
    const burger = document.querySelector('#mobile')
    const menu = document.querySelector('#menu_mobile')
    const links = document.querySelectorAll('header .container nav #menu_mobile ul li a')
    burger.addEventListener('click',()=>{
    burger.classList.toggle('open')
    menu.classList.toggle('open-menu')
})

    for(link of links)
    {
        link.addEventListener('click',(event)=>{
            //event.preventDefault()
            burger.classList.toggle('open')
            menu.classList.toggle('open-menu')
        })
    }

