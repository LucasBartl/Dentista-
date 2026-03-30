<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<div id="modal" class="modal-agendamento none">
    <form action="" method="POST" id="register" style="width: 100%;">
        <div class="container">
            <div class="flex flex-column  gap-2" style="width: 98%;">
                <label for="" class="fs-5">Cliente:</label>
                <select name="user_id" id=""  class="rounded-2 bd " >
                    <?php foreach ( $selectClient as $select) : ?>
                        <option value=<?= $select["id"]; ?>>
                            <?= $select["name"]; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <!-- <input type="text" name="client" class="p-2 rounded-2 bd"> -->
            </div>
            <div class="flex flex-column  gap-2">
                <label for="event" class="fs-5">Procedimento:</label>
                <input type="text" name="procedures" class="p-2 rounded-2 bd">
            </div>
            <div class="flex flex-column  gap-2">
                <label for="" class="fs-5">Dentista:</label>
                <select name="dentist" id="" class="rounded-2 bd ">
                    <option value="Jose Dente">Jose Dente</option>
                    <option value="Priscilla Aparelho">Priscilla Aparelho</option>
                </select>
            </div>
            <div class="flex  gap-2 ">
                <div>
                    <label for="" class="fs-5">Data:</label>
                    <input type="date" name="date" t class="p-2 rounded-2 bd">
                </div>
                <div>
                    <label for="" class="fs-5" style="width: 50%;">Horário</label>
                    <input type="time" name="time" class="p-2 rounded-2 bd" style="width: 100%;">
                </div>
            </div>
            <div class="flex flex-column  gap-2">
                <label for="" class="fs-5 ">Observação:</label>
                <textarea name="obs" id="" class="p-2 rounded-2 bd"></textarea>
            </div>
            <div class="flex justify-content-end align-items-center gap-1">
                <button class="btn-register" name="return">
                    voltar
                </button>
                <button class="btn-register">
                    enviar
                </button>
            </div>
        </div>
    </form>
</div>


<div id="calendar"></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let calendarEl = document.getElementById('calendar');
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'pt-br',
            events: "search-appointments",
            eventContent: function(info) {

                let container = document.createElement("div");
                container.className = "box-agendamento gap-1 click hidden ";
                //container.classList = "containerCalendar";

                container.innerHTML = `
                        <div >${info.timeText}</div>
                        <div>${info.event.title}</div>
                `;

                container.addEventListener("click", () => {
                    const modalInfo = document.querySelector("#modal-info");
                    modalInfo.classList.remove("none");
                    
                })

                return {
                    domNodes: [container]
                };
            },

            buttonText: {
                dayGridMonth: 'Agendar',
                today: 'Hoje',
            },
            customButtons: {
                agendar: {
                    text: 'Agendar',
                    click: function() {
                        const modal = document.querySelector('#modal');
                        modal.classList.remove("none");

                    }
                },
            },
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                left: 'agendar',
            },
        });
        calendar.render();
    });
</script>