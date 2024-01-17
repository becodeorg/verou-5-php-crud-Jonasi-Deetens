const addToArena = () => {
    
}

const initButtons = () => {
    let buttons = document.querySelectorAll(".addToArena");

    buttons.forEach(button => {
        button.addEventListener("click", addToArena);
    });
}

initButtons();