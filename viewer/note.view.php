<div class="boxTodo flex flex-column " style="width: 100%;">
    <div class="">
        <div class="flex flex-column">

            <label for="title" class=" margiBottomAnotacoes fs-2"><?= $read['title']; ?></label>
        </div>
        <div>
            <textarea readonly name="notepad" id="notepad" class="rounded-2 p-3 writing bdcolor bg margiBottomAnotacoes" style="width: 100%; height: 40vh;">
                    <?= $read['notepad']; ?>
                </textarea>
        </div>
        <div class="flex d-flex align-items-center " style="width: 100%;">
            <div class="flex flex-column" style="width: 50%;">
                <label for="date" class=" marginB fs-4">Data da anotação:</label>
                <label for="date" class="rounded-2 marginB fs-4 bdcolor bg p-2" style="width: 40%; "><?= $read['date']; ?></label>
            </div>
            <div class="flex flex-column" style="width: 50%;">
                <label for="name" class=" marginB fs-4 ">Anotação feita por: </label>
                <label for="name" class="rounded-2 marginB fs-4 bdcolor bg p-2" style="width: 40%; "><?= $read['name']; ?></label>
            </div>
        </div>
        <form method="POST" class="flex gap-2 justify-content-end mt-5 "  style="width: 100%;">
            <button type="submit"  class="rounded-2 p-2 bdcolor bg text-dark delete " style="width: 13%;">
                Deletar
            </button>
        </form>
    </div>
</div>