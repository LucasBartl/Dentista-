<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Projeto dentista</title>
</head>

<body>

    <div class="d-flex" style="min-height: 100vh;">
        <!-- Sidebar -->
        <div class=" py-3 px-3 " style="width: 250px;">
            <div class="align-items-center py-2 flex flex-column border-red " style="width: 200px;">
                <a class="mg"><img class="img" src="./images/dente.png" alt=""></a>
                <div>
                    <ul class="nav flex-column gap-3  ">
                        <li>
                            <div class="flex gap-2 align-items-center box">
                                <img src="./images/calendario.png" alt="">
                                <a class="side-a nav-item text-dark text-decoration-none" href="/appointments">Agendamentos</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex gap-2 align-items-center box">
                                <img src="./images/lapis.png" alt="">
                                <a class="side-a nav-item text-dark text-decoration-none" href="/to-do">Anotações</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex gap-2 align-items-center box">
                                <img src="./images/editar.png" alt="">
                                <a class="side-a nav-item text-dark text-decoration-none" href="/register-clients">Novo cliente</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex gap-2 align-items-center box">
                                <img src="./images/procurar.png" alt="">
                                <a class="side-a nav-item text-dark text-decoration-none" href="/search-clients">Buscar cliente</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex gap-2 align-items-center box">
                                <img src="./images/do-utilizador.png" alt="">
                                <a class="side-a nav-item text-dark text-decoration-none" href="/dentists">Dentistas</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="flex-grow-1">
            <header class="pd-page  py-3 d-flex justify-content-end align-items-center">
                <div class="d-flex  align-items-center">
                    <ul class="d-flex gap-1.5 align-items-center">
                        <ol><a class="text-dark text-decoration-none" href="/notification"><img src="./images/sino.png" alt=""></a></ol>
                        <ol><a class="text-dark text-decoration-none" href="/login">Olá, usuário</a></ol>
                    </ul>
                </div>
            </header>
            <main class=" flex-grow-1 p-4 main ">
                <?php require "../viewer/{$view}.view.php" ?>
            </main>



        </div>

    </div>

</body>

</html>