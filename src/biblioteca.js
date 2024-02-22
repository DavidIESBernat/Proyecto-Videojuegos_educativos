// Muestra la animación de carga
function showLoading() {
    document.getElementById("loading").style.display = "block";
}

// Oculta la animación de carga
function hideLoading() {
    document.getElementById("loading").style.display = "none";
}

showLoading(); // Mostrar animación de carga al principio

fetch(`http://localhost/Proyecto-Videojuegos_educativos/?controlador=api&accion=mostrarVideojuegos`)
.then(data => data.json())
.then(videojuegos => {
    let div_videojuegos = document.getElementById("div_videojuegos");
    let videojuegosOriginal = videojuegos;
    let checkboxes = document.querySelectorAll("input[type='checkbox']");
    let btnFiltrar = document.getElementById("btnFiltrar");
    let btnMostrarTodos = document.getElementById("btnMostrarTodos");

    btnFiltrar.addEventListener('click', function() {
        videojuegos = videojuegosOriginal;
        let arrayCategorias = Array.from(checkboxes).map(checkbox => checkbox.checked);
    
        if (arrayCategorias.includes(true)) {
            videojuegos = videojuegos.filter(videojuego => {
                return arrayCategorias[videojuego.categoria_id - 1]; // Ajuste aquí
            });
            mostrarVideojuegos(videojuegos, div_videojuegos);
        } else {
            mostrarVideojuegos(videojuegosOriginal, div_videojuegos);
        }
    });
    

    btnMostrarTodos.addEventListener('click', function() {
        videojuegos = videojuegosOriginal;
        mostrarVideojuegos(videojuegos, div_videojuegos);
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
    });

    function mostrarVideojuegos(videojuegos, div_videojuegos) {
        div_videojuegos.innerHTML = "";

        let row = document.createElement("div");
        row.classList.add("row", "justify-content-center");

        videojuegos.forEach(videojuego => {
            let div = document.createElement("div");
            div.classList.add("col-sm-12", "col-md-6", "col-lg-3");
            div.innerHTML = `
                <a href="?controlador=biblioteca&accion=game&videojuego_id=${videojuego.videojuego_id}" class="elemento">
                <div class="containerImagen" style="background-image: url(assets/images/${videojuego.img})"></div>
                    <div class="containerElemento">
                        <p class="primary p-no-margin">${videojuego.nombre}</p>
                    </div>
                </a>
            `;
            row.appendChild(div);
        })
        div_videojuegos.appendChild(row);

        hideLoading(); // Ocultar animación de carga cuando se completa la carga
    }

    mostrarVideojuegos(videojuegos, div_videojuegos);

});