<form method="POST">
    <div class="boxTodo flex flex-column gap-3">
        <div class="flex flex-column  fs-4 gap-2">
            <label for="name">Nome cliente:</label>
            <input type="text" name="name" class="rounded-2 p-2  bdcolor bg text-dark  p-1">
        </div>
        <div class="flex flex-column   fs-4 gap-2">
            <label for="birth">Data de nascimento:</label>
            <input type="date" name="birth" class="rounded-2 p-2  bdcolor bg text-dark">
        </div>
        <div class="flex flex-column   fs-4 gap-2">
            <label for="email">Email cliente:</label>
            <input type="email" name="email" class="rounded-2 p-2  bdcolor bg text-dark">
        </div>
        <div class="flex flex-column   fs-4 gap-2">
            <label for="tel">Telefone de contato:</label>
            <input type="tel" name="tel" maxlength="11" class="rounded-2 p-2  bdcolor bg text-dark" placeholder="(xx)xxxxx-xxxx">
        </div>
        <div class="flex gap-2 justify-content-end mbottom " style="width: 100%;">
            <button type="reset"
                class="rounded-2 p-2 bdcolor bg text-dark  " style="width: 13%;">
                Cancelar
            </button>
            <button type="submit"
                class="rounded-2 p-2 bdcolor bg text-dark" style="width: 13%;">
                Adicionar cliente
            </button>

        </div>
    </div>
</form>