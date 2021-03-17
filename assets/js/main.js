/* Mobile toggle menu */
const menuIcon = document.querySelector('.menu-icon');
menuIcon.addEventListener('click', ()=>{
    document.querySelector('nav').classList.add('show-nav');
})

const closeIcon = document.querySelector('#custom_html-6');
if (closeIcon != null){
    
    closeIcon.addEventListener('click', ()=>{
        document.querySelector('nav').classList.remove('show-nav');
    })
}