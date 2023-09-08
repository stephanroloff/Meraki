// setTimeout(function(){
//     let pageBlack = document.querySelector('.page-id-138');
//     let pageWhite = document.querySelector('.page-id-140');

//     pageBlack.style.backgroundColor = "#202020"
//     pageWhite.style.backgroundColor = "#ffffff"

// }, 0)


setTimeout(function(){ 

    //Calling classes
    let body = document.querySelector('body');
    let mainContainer = document.querySelector('.main-container');
    let testPage1 = document.querySelector('.test-page-1');
    let testPage2 = document.querySelector('.test-page-2');
    
    //Validation
    if(!(
        mainContainer ||
        testPage1 ||
        testPage2
    )) return;

    //Making groups of arrays
    let pagesBlack = [testPage1];
    let pagesWhite = [testPage2];

    //Default Color by loading page 
    pagesBlack.forEach(element => {
        if(element.classList.contains('current_page_item'))
        {
            body.style.backgroundColor = '#202020'
            console.log('Negro"!!');
            mainContainer.classList.add("fade-in-black");
            mainContainer.classList.add("fade-in");
        }
    });

    pagesWhite.forEach(element => {
        if(element.classList.contains('current_page_item'))
        {
            body.style.backgroundColor = '#ffffff'
            console.log('Blanco!');
            mainContainer.classList.add("fade-in-white");
            mainContainer.classList.add("fade-in");
        }
    });


    pagesWhite.forEach(element => {
        element.addEventListener('click',(e)=>{
            e.preventDefault();
    
            body.classList.add('fade-out-black-to-white');
            mainContainer.classList.remove("fade-in");
            mainContainer.classList.add("fade-out");
    


            // Espera 2 segundos (2000 milisegundos) antes de redirigir
            setTimeout(function() {
                // Obtiene la URL de destino del atributo "href" del enlace
                var destino = element.querySelector('a').getAttribute('href');
                // Redirige a la página de destino después de la animación
                window.location.href = destino;
            }, 100); 
        })
    });

    pagesBlack.forEach(element => {
        element.addEventListener('click',(e)=>{
            e.preventDefault();
    
            body.classList.add('fade-out-white-to-black');
            mainContainer.classList.remove("fade-in");
            mainContainer.classList.add("fade-out");
    


            // Espera 2 segundos (2000 milisegundos) antes de redirigir
            setTimeout(function() {
                // Obtiene la URL de destino del atributo "href" del enlace
                var destino = element.querySelector('a').getAttribute('href');
                // Redirige a la página de destino después de la animación
                window.location.href = destino;
            }, 100); 
        })
    });
    
    
}, 100)