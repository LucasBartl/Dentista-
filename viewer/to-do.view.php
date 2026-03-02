<?php require "partial/main.php"; ?>
<form action="POST">
    <div class="flex gap-2">
        <div class="boxTodo flex flex-column " style="width: 70%;">
            <div class="">
                <div class="flex flex-column">
                    <label for="titulo" class=" margiBottomAnotacoes fs-2">Título</label>
                    <input type="text" placeholder="Digite o título" style="width: 20%;" class="rounded-2 p-1  bdcolor bg text-dark margiBottomBook p-1">
                </div>
                <div>
                    <textarea name="notepad" id="notepad" class="rounded-2 p-3 writing bdcolor bg margiBottomAnotacoes" style="width: 100%; height: 40vh;">

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

                <div class="flex button-style gap-2 button-style">
                    <button type="reset" class="rounded-2 p-1  bdcolor bg text-dark margiBottomBook" style="width: 10%;">Cancelar</button>
                    <button type="submit" class="rounded-2 p-1  bdcolor bg text-dark margiBottomBook" style="width: 10%;">Salvar</button>
                </div>
            </div>
        </div>
        <div class="boxTodo" style="width: 30%;">
            <h2>Historico:</h2>
        </div>
    </div>
</form>