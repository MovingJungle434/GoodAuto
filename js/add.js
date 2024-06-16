const delete1 = document.querySelector("#delete");
const cancel = document.querySelector("#cancel");
const next_layer = document.querySelector(".next_layer");

cancel.addEventListener('click', () => {
    next_layer.classList.add('hide')
})

delete1.addEventListener('click', () => {
    next_layer.classList.remove('hide')
})