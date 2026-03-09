<div class="flex gap-2" style="width: 100%;">
    <form action="" method="POST" style="width: 25%;" class="top">
        <div class="boxTodo flex flex-column gap-3 justify-content-center align-items-center text-center">
            <div class="flex flex-column  fs-4 gap-2">
                <h3>Buscar cliente</h3>
            </div>
            <div>
                <img src="./images/lupa.png" alt="">
                <input type="text" name="search" class="rounded-2 p-2  bdcolor bg text-dark  p-1" style="height:32px; ">
            </div>
            <div>
                <p>Digite o nome, telefone ou CPF do paciente para iniciar a busca.</p>
            </div>
        </div>
    </form>
    <form action="" method="GET" style="width: 75%;">

        <div class="boxTodo">
            <h2 class="mg-his">Clientes:</h2>
            <?php foreach ($searchs as $search): ?>
                <div class="flex flex-column justify-content-center align-items-center" style="width: 100%;">
                    <div class="flex mg-b p-2 bdcolor bg rounded-2 justify-content-between align-items-center" style="width: 100%;">
                        <h6 class="m-0"><?= $search->name ?></h6>
                        <div class="flex search-info rounded-2 align-items-center justify-content-center" style="width: 8%;">
                            <a href="/data-client?id=<?=$search->id ;?>" class="m-0 text-dark ">INFO</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </form>
</div>