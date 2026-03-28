<div class="boxTodo">
    <header>
        <div class="flex headerCollaborators">
            <h6 data-target="ad" class="bxHeader flex align-items-center justify-content-center">Administrativo</h6>
            <h6 data-target="tz" class="bxHeader flex align-items-center justify-content-center">Terceirizados</h6>
            <h6 data-target="dt" class="bxHeader flex align-items-center justify-content-center">Dentistas</h6>
        </div>
    </header>

    <!-- Administrativo -->
    <div id="ad" class="collaborators none">
        <div class="containerColab">
            <?php foreach ($administrative as $admin) : ?>
                <div class="cardDentist">
                    <div class="flex flex-column hidden">
                        <img src="./images/jose.png" alt="">
                    </div>
                    <div class="description text-center hidden aling-itens-center">
                        <h3><?= $admin['name'] ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Dentistas -->
    <div id="dt" class="collaborators none">
        <div class="containerColab">
            <?php foreach ($dentists as $dentist) : ?>
                <div class="cardDentist">
                    <div class="flex flex-column hidden">
                        <img src="./images/jose.png" alt="">
                    </div>
                    <div class="description text-center hidden aling-itens-center">
                        <h3><?= $dentist['name'] ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Terceirizados -->
    <div id="tz" class="collaborators none">
        <div class="containerColab">
            <?php foreach ($outsourced as $third) : ?>
                <div class="cardDentist">
                    <div class="flex flex-column hidden">
                        <img src="./images/jose.png" alt="">
                    </div>
                    <div class="description text-center hidden aling-itens-center">
                        <h3><?= $third['name'] ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {

    $('.bxHeader').click(function() {
        const target = $(this).data('target');

        $('.collaborators').addClass('none');

        $('#' + target).removeClass('none');
    });

});
</script>