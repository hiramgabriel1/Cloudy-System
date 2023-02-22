Swal.fire({
    icon: 'question',
    title: "Bienvenido",
    text: "recuerda añadir algun correo y/o numero para que te contacten si necesitas ayuda. Al hacer un post, en el apartado de titulo añade ese dato"
})

// section plus
const section_plus = document.querySelector(".plus-section")
section_plus.addEventListener("click", () => {
    Swal.fire({
        icon: 'question',
        title: "Muy pronto!"
    })
})