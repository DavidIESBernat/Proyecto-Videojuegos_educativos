fetch(`http://localhost/Proyecto-Videojuegos_educativos/?controlador=api&accion=mostrarVideojuegos`)
    .then(data => data.json())
    .then(videojuegos => {
        let div_videojuegos = document.getElementById("div_videojuegos");
        let videojuegosOriginal = videojuegos;
        let checkboxes = document.querySelectorAll(".checkbox");
        let btnFiltrar = document.getElementById("btnFiltrar");
        let btnMostrarTodos = document.getElementById("btnMostrarTodos");
        let categorias = obtenerCategorias(videojuegos);

        btnFiltrar.addEventListener('click', function () {
            videojuegos = videojuegosOriginal;
            let arrayCategorias = Array.from(checkboxes).map(checkbox => checkbox.checked);

            if (arrayCategorias.includes(true)) {
                let categoriaPosicion = buscarCategoria(categorias);
                videojuegos = videojuegos.filter(videojuego => {
                    return arrayCategorias[categoriaPosicion[videojuego.categoria_id]];
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
                let a = document.createElement("a");
                a.classList.add("elemento");
                a.href = "";
                let containerImagen = document.createElement("div");
                containerImagen.classList.add("containerImagen");
                containerImagen.style.backgroundImage = `url(assets/images/${videojuego.img})`;
                let containerElemento = document.createElement("div");
                containerElemento.classList.add("containerElemento");
                let p = document.createElement("p");
                p.classList.add("primary", "p-no-margin");
                p.textContent = videojuego.nombre;
                containerElemento.appendChild(p);
                a.appendChild(containerImagen);
                a.appendChild(containerElemento);
                div.appendChild(a);
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
