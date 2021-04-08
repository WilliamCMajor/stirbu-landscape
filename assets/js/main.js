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

/* Login forms */
const userName = document.querySelector('#username');
const passWord = document.querySelector('#password');
const loginBtn = document.querySelector('.woocommerce-button')
userName.classList.add('form-control');
passWord.classList.add('form-control');
loginBtn.classList.remove('woocommerce-button', 'button');
loginBtn.classList.add('btn', 'btn-outline-primary');

