<div class="boxTodo flex flex-column w-100">
    <div class="flex flex-column">

        <label class="margiBottomAnotacoes fs-2">
            <?= htmlspecialchars($client['name'] ?? '') ?>
        </label>

        
        <div class="flex flex-column w-50">
            <label class="marginB fs-4">Procedimento:</label>
            <label class="rounded-2 marginB fs-4 bdcolor bg p-2 w-40">
                <?= htmlspecialchars($searchs['procedures'] ?? '') ?>
            </label>
        </div>

        
        <div>
            <label class="marginB fs-4">Observação inicial:</label>
            <textarea readonly
                class="rounded-2 p-2 writing bdcolor bg margiBottomAnotacoes w-100 h-10"><?= htmlspecialchars($searchs['obs'] ?? '') ?></textarea>
        </div>

        
        <div class="flex align-items-center w-100 gap-1">

            <div class="flex flex-column w-50">
                <label class="marginB fs-4">Data:</label>
                <label class="rounded-2 marginB fs-4 bdcolor bg p-2 text-center w-35">
                    <?= htmlspecialchars($searchs['date'] ?? '') ?>
                </label>
            </div>

            <div class="flex flex-column w-50">
                <label class="marginB fs-4">Horário:</label>
                <label class="rounded-2 marginB fs-4 bdcolor bg p-2 text-center w-35">
                    <?= htmlspecialchars($searchs['time'] ?? '') ?>
                </label>
            </div>

            <div class="flex flex-column w-50">
                <label class="marginB fs-4">Dentista:</label>
                <label class="rounded-2 marginB fs-4 bdcolor bg p-2 text-center w-40">
                    <?= htmlspecialchars($searchs['dentist'] ?? '') ?>
                </label>
            </div>

        </div>

        <form method="POST" >

            <div class="flex gap-2">

                <div class="w-100">
                    <label class="marginB fs-4">Observação de conclusão:</label>
                    <textarea readonly
                        name="obs_end"
                        class="rounded-2 p-2 writing bdcolor bg margiBottomAnotacoes w-100 h-10"><?= htmlspecialchars($searchs['obs_end'] ?? '') ?></textarea>
                </div>

                <div class="flex flex-column">
                    <label class="marginB fs-4">Status:</label>
                    <select name="status" class="p-2 rounded-2 ">



                        <option>
                            Finalizado
                        </option>

                    </select>
                </div>

            </div>
        </form>

    </div>
</div>