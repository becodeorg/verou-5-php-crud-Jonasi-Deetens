const addToArena = (url) => {
    let arena = document.querySelector("#arena");
    let img = document.createElement("img");
    img.src = url;
    img.style.width = "100px";
    img.style.height = "100px";
    img.classList.add("spin-forever");

    arena.appendChild(img);
}

const initButtons = () => {
    let buttonsList = document.querySelectorAll(".arenaItem");

    buttonsList.forEach(li => {
        let imageUrl = li.querySelector(".beyblade").src;

        let button = document.createElement("button");
        button.textContent ="Add";
        button.addEventListener("click", () => addToArena(imageUrl));
        li.appendChild(button);
    });
}

initButtons();