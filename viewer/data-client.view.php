<form method="GET">
    <div class="boxTodo flex flex-column gap-3">
        <div class="flex flex-column  fs-4 gap-2">
            <h1 for="name"><?= $dataClient["name"]; ?></h1>
        </div>
        <div>

        </div>
        <div class="flex gap-3" style="width: 100%;">
            <div class="flex flex-column   fs-4 gap-2 " style="width: 30%; ">
                <label for="birth">Data de nascimento:</label>
                <input type="text" name="birth" class="rounded-2 p-2  bdcolor bg text-dark" placeholder="<?= $dataClient["birth"]; ?>" readonly>
            </div>
            <div class="flex flex-column fs-4 gap-2" style="width: 70%;">
                <label for="email">Email cliente:</label>
                <input readonly type="email" name="email" class="rounded-2 p-2  bdcolor bg text-dark" placeholder="<?= $dataClient["email"]; ?>">
            </div>
        </div>

        <div class="flex flex-column   fs-4 gap-2">
            <label for="tel">Telefone de contato:</label>
            <input readonly type="tel" name="tel" maxlength="11" class="rounded-2 p-2  bdcolor bg text-dark" placeholder="<?= $dataClient["tel"]; ?>">
        </div>
        <div class="flex flex-column fs-4 gap-2">
            <label for="cpf">CPF:</label>
            <input readonly type="cpf" name="cpf" maxlength="11" class="rounded-2 p-2  bdcolor bg text-dark" placeholder="<?= $dataClient["cpf"]; ?>">
        </div>
        <div class="box-to mt2 flex justify-content-between">
            <div  style="width: 50%;">
                <h2 class="mg-his">Agendamentos Abertos:</h2>
                <div class="flex ">
                    <?php foreach ($appointments as $appointment) : ?>
                        <div class="flex flex-column p-2 " style="width: 30%; ">
                            <div class="mg-b  p-2 bdcolor bg2 rounded-2  " style="width: 100%; height: 5rem;">
                                <a href="/historical?id=<?= $appointment['id'];?>" class="click fs-a side-a text-dark "><?= $appointment['procedures']; ?></a>
                                <div class="flex justify-content-between mt ">
                                    <p> <?= $appointment['date']; ?></p>
                                    <p> <?= $appointment['time']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

             <div style="width: 50%;">
                <h2 class="mg-his">Agendamentos finalizados:</h2>
                <div class="flex">
                    <?php foreach ($appointments_end as $end) : ?>
                        <div class="flex flex-column p-2 " style="width: 40%; ">
                            <div class="mg-b  p-2 bdcolor bg2 rounded-2  " style="width: 100%; height: 5rem;">
                                <a href="/historical_finished?id=<?= $end['id'];?>" class="click fs-a side-a text-dark "><?= $end['procedures']; ?></a>
                                <div class="flex justify-content-between mt ">
                                    <p> <?= $end['date']; ?></p>
                                    <p> <?= $end['time']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</form>