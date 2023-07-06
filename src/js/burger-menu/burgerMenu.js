let burgerMenuContainer = document.querySelector('.burger-menu-container');
let burgerMenuOverlay = document.querySelector('.burger-menu-overlay');
let closeIcon = document.querySelector('.close-button-icon');

if(burgerMenuContainer && burgerMenuOverlay){
    burgerMenuContainer.addEventListener('click', ()=>{
        burgerMenuOverlay.classList.remove('hidden');
    });
}

if(closeIcon && burgerMenuOverlay){
    closeIcon.addEventListener('click', ()=>{
        burgerMenuOverlay.classList.add('hidden');
    });
}