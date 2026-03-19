<div class="flex gap-2" style="width: 100%;" >
    <form method="POST" action="/create-note" style="width: 100%;" >
        <div class="flex "  style="width: 100%;">
            <div class="boxTodo flex flex-column " style="width: 100%;">
                <div class="">
                    <div class="flex flex-column">
                        <label for="title" class=" margiBottomAnotacoes fs-2">Título:</label>
                        <input type="text" name="title" placeholder="Digite o título" style="width: 100%; max-width: 300px;" class="rounded-2 p-2  bdcolor bg text-dark margiBottomBook p-1">
                    </div>
                    <div>
                        <textarea name="notepad" id="notepad" class="textarea rounded-2 p-3 writing bdcolor bg margiBottomAnotacoes" style="width: 100%; height: 40vh;">

                </textarea>
                    </div>
                    <div class="flex d-flex align-items-center " style="width: 100%;">
                        <div class="flex flex-column" style="width: 50%;">
                            <label for="date" class=" marginB fs-4">Data da anotação:</label>
                            <input type="date" name="date" id="date" class="rounded-2 p-1  bdcolor bg text-dark p-2" style="width: 40%;">
                        </div>
                        <div class="flex flex-column" style="width: 50%;">
                            <label for="name" class=" marginB fs-4">Feito por: </label>
                            <input type="text" name="name" id="name" class="rounded-2 p-1  bdcolor bg text-dark p-2" style="width: 100%;" placeholder="Digite seu nome">
                        </div>
                    </div>

                    <div class="flex gap-2 justify-content-end mt-5 " style="width: 100%;">
                        <button type="reset"
                            class="rounded-2 p-2 bdcolor bg text-dark " style="width: 13%;">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="rounded-2 p-2 bdcolor bg text-dark" style="width: 13%;">
                            Salvar
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <form method="get" style="width: 30%;" >
        <div class="boxTodo">
            <h2 class="mg-his">Historico:</h2>
            <?php foreach ($notes as $note) : ?>
                <div class="flex flex-column " style="width: 100%;">
                    <div class="mg-b  p-2 bdcolor bg rounded-2" style="width: 100%; height: 5rem;">
                        <a class="click fs-a side-a text-dark " href="/note?id=<?=$note->id ;?>"><?= $note->title; ?></a>
                        <div class="flex justify-content-between mt ">
                            <p> <?= $note->name; ?></p>
                            <p> <?= $note->date; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </form>
</div>