<form method="POST">
    <div class="boxTodo flex flex-column gap-3">
        <div class="flex flex-column  fs-4 gap-2">
            <label for="name">Nome cliente:</label>
            <input type="text" name="name" class="rounded-2 p-2  bdcolor bg text-dark  p-1">
        </div>
        <div>

        </div>
        <div class="flex gap-3" style="width: 100%;">
            <div class="flex flex-column   fs-4 gap-2 " style="width: 30%; ">
                <label for="birth">Data de nascimento:</label>
                <input type="date" name="birth" class="rounded-2 p-2  bdcolor bg text-dark">
            </div>
            <div class="flex flex-column fs-4 gap-2" style="width: 70%;">
                <label for="email">Email cliente:</label>
                <input type="email" name="email" class="rounded-2 p-2  bdcolor bg text-dark">
            </div>
        </div>

        <div class="flex flex-column   fs-4 gap-2" >
            <label for="tel">Telefone de contato:</label>
            <input type="tel" name="tel" id="telefone" maxlength="11" class="rounded-2 p-2  bdcolor bg text-dark" placeholder="(xx)xxxxx-xxxx">
        </div>
        <div class="flex flex-column fs-4 gap-2" >
            <label for="cpf">CPF:</label>
            <input type="cpf" name="cpf" id="cpf" maxlength="11" class="rounded-2 p-2  bdcolor bg text-dark" placeholder="xxx.xxx.xxx-xx">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
$(document).ready(function(){
    $('#telefone').mask('(00) 00000-0000');
});
$(document).ready(function(){
    $('#cpf').mask('000.000.000-00');
});
</script>