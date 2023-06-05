const teamItem = document.querySelectorAll('.team__item')

Array.from(teamItem).forEach(element => {
    element.querySelector('button').addEventListener('click', () => {
        element.querySelector('.team__item_subdescr').classList.add('team__item_subdescr_active')
        element.querySelector('button').style.display = 'none'

        if (window.innerWidth >= 1200) document.querySelector('.team').style.marginBottom = '175px'
        else if (window.innerWidth >= 992 && window.innerWidth < 1200) document.querySelector('.team').style.marginBottom = '300px'
        else if (window.innerWidth >= 768 && window.innerWidth < 992) document.querySelector('.team').style.marginBottom = '350px'
        else if ( window.innerWidth < 768) element.querySelector('.team__item_subdescr').style.height = 'auto'
    })
})