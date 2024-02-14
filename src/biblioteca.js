fetch(`http://localhost/Proyecto-Videojuegos_educativos/?controlador=api&accion=mostrarVideojuegos`)
    .then(data => data.json())
    .then(videojuegos => {
        let div_videojuegos = document.getElementById("div_videojuegos");
        let videojuegosOriginal = videojuegos;
        let checkboxes = document.querySelectorAll(".checkbox"); // Corregido aquí
        let btnFiltrar = document.getElementById("btnFiltrar");
        let btnMostrarTodos = document.getElementById("btnMostrarTodos");
        let categorias = obtenerCategorias(videojuegos);

        btnFiltrar.addEventListener('click', function () {
            videojuegos = videojuegosOriginal;
            let arrayCategorias = Array.from(checkboxes).map(checkbox => checkbox.checked);

            if (arrayCategorias.includes(true)) {
                videojuegos = videojuegos.filter(videojuego => { // Corregido aquí
                    let categoriasPosicion = buscarCategoria(categorias);
                    return arrayCategorias[categoriasPosicion[videojuego.categoria_id]];
                });
                mostrarVideojuegos(videojuegos, div_videojuegos);
            } else {
                mostrarVideojuegos(videojuegosOriginal, div_videojuegos);
            }
        });

        btnMostrarTodos.addEventListener('click', function () {
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
                <a href="" class="elemento">
                <div class="containerImagen" style="background-image: url(assets/images/${videojuego.img})"></div>
                    <div class="containerElemento">
                        <p class="primary p-no-margin">${videojuego.nombre}</p>
                    </div>
                </a>
            `;
                row.appendChild(div);
            })
            div_videojuegos.appendChild(row);
        }

        function obtenerCategorias(videojuegos) {
            let categorias = new Set();
            videojuegos.forEach(videojuego => {
                categorias.add(videojuego.categoria_id);
            });
            return Array.from(categorias);
        }

        function buscarCategoria(categorias) {
            let categoriaPosicion = {};
            categorias.forEach((categoria, index) => {
                categoriaPosicion[categoria] = index;
            });
            return categoriaPosicion;
        }

        mostrarVideojuegos(videojuegos, div_videojuegos);

    });
