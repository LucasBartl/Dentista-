<div class="boxTodo ">
    <header class="">
        <div class="flex headerCollaborators ">
            <h6 id="admin" class="flex bxHeader align-items-center  justify-content-center">Administrativo</h6>
            <h6 class="flex bxHeader  align-items-center justify-content-center">Terceirizados</h6>
            <h6 class="flex bxHeader  align-items-center justify-content-center">Dentistas</h6>
        </div>
    </header>

    <div id="collaborators" class=" none" style="height: 88%;">
        <div class="containerColab">
            <div>
                <div class="flex  flex-column  cardDentist   ">
                    <div class=" flex  flex-column hidden "><img src="./images/jose.png" alt=""></div>
                    <div class=" description text-center hidden aling-itens-center">
                        <h3>José Dente</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
        $('#admin').click(function() {
            const collaborators = document.querySelector('#collaborators');
            collaborators.classList.remove('none');
        });
    });
</script>