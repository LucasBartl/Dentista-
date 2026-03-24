<!-- Box dados dentistas  -->
<div class="containerDentists none">
    <div class="flex  bx justify-content-center align-items-center gap-3">
        <div class="flex  flex-column  cardDentist  " style="width: 50%; height: 100%;">
            <div class=" flex  flex-column hidden imgajuste" style="width: 100%; height: 65%;"><img src="./images/jose.png" alt=""></div>
            <div class=" description text-center hidden " style="width: 100%; height: 35%;">
                <h3>José Dente</h3>
                <p>Dentista geral</p>
                <hr color="blue">
                <p>10 anos de experiencia</p>
                <p>Especialista em implantodontia</p>
            </div>
        </div>
    </div>
</div>
<div class="boxTodo">
    <header>
        <div class="flex headerCollaborators">
            <div class="flex bxHeader  align-items-center  justify-content-center">Administrativo</div>
            <div class="flex bxHeader  align-items-center justify-content-center">Terceirizados</div>
            <div class="flex bxHeader  align-items-center justify-content-center">Dentistas</div>
        </div>
    </header>


</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$(document).ready(function(){
    $('#search').mask('000.000.000-00');
});
</script>