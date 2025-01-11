<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

    <style>
        :root {
            --pagination-color: #000000;
            --pagination-hover-color: #000000;
            --pagination-active-color: #000000;
        }

        .pagination .page-item {
            margin: 0 3px;

        }

        .pagination .page-link {
            margin: 0 3px;
            border-radius: 3px;
        }

        .pagination .page-link {
            color: var(--pagination-color);
            background-color: transparent;
            border-color: #dee2e6;
        }

        .pagination .page-item.active .page-link {
            background-color: var(--pagination-active-color);
            border-color: var(--pagination-active-color);
            color: white;
        }

        .pagination .page-link:hover {
            color: var(--pagination-hover-color);
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .pagination .page-link:focus {
            box-shadow: 0 0 0 4px rgb(0 0 0);
            border-radius: 3px;
        }

        .pagination .page-item.disabled .page-link {
            color: #555b61;
            pointer-events: none;
            background-color: #fff;
            border-color: #dee2e6;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Usuarios</h1>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">RUT</th>
                </tr>
            </thead>
            <tbody id="users-table"></tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul id="pagination-links" class="pagination justify-content-center"></ul>
        </nav>
    </div>

    <script>
        async function fetchUsers(page = 1) {
            try {
                const response = await fetch(`/api/usuarios?page=${page}`);
                const data = await response.json();

                // Crear la tabla de usuarios
                const table = document.getElementById('users-table');
                table.innerHTML = '';
                data.data.forEach((user, index) => {
                    const startIndex = (page - 1) * data.per_page;
                    table.innerHTML += `
                        <tr>
                            <th scope="row">${startIndex + index + 1}</th>
                            <td>${user.nombre}</td>
                            <td>${user.apellido}</td>
                            <td>${user.rut}</td>
                        </tr>
                    `;
                });

                // Crear los enlaces de paginación
                const links = document.getElementById('pagination-links');
                links.innerHTML = '';

                // Botón anterior
                links.innerHTML += `
                    <li class="page-item ${data.current_page <= 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="fetchUsers(${data.current_page - 1}); return false;">
                            Anterior
                        </a>
                    </li>
                `;

                // Números de página
                for (let i = 1; i <= data.last_page; i++) {
                    links.innerHTML += `
                        <li class="page-item ${data.current_page === i ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="fetchUsers(${i}); return false;">
                                ${i}
                            </a>
                        </li>
                    `;
                }

                // Botón Siguiente
                links.innerHTML += `
                    <li class="page-item ${data.current_page >= data.last_page ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="fetchUsers(${data.current_page + 1}); return false;">
                            Siguiente
                        </a>
                    </li>
                `;

            } catch (error) {
                console.error('Error:', error);
            }
        }

        // Cargar usuarios al iniciar la página
        document.addEventListener('DOMContentLoaded', () => {
            fetchUsers();
        });
    </script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>