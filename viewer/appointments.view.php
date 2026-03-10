<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<div id="modal" class="modal-agendamento none">
    <form action="" id="register" style="width: 100%;">
        <div class="container">
            <div class="flex flex-column gap-2 ">
                <label for="" class="fs-5">Data de agendamento</label>
                <input type="date" class="p-2 rounded-2 bd">
            </div>
            <div class="flex flex-column  gap-2">
                <label for="event" class="fs-5">Procedimento:</label>
                <input type="text" name="event" class="p-2 rounded-2 bd">
            </div>
            <div class="flex flex-column  gap-2">
                <label for="" class="fs-5">Cliente:</label>
                <input type="text" name="client" class="p-2 rounded-2 bd">
            </div>
            <div class="flex flex-column  gap-2">
                <label for="" class="fs-5">Dentista:</label>
                <select name="" id="" class="rounded-2 bd ">
                    <option value="one">Jose Dente</option>
                    <option value="two">Priscilla Aparelho</option>
                </select>
            </div>
            <div class="flex flex-column  gap-2">
                <label for="" class="fs-5 ">Observação:</label>
                <textarea name="" id="" class="p-2 rounded-2 bd"></textarea>
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
            events: [{

            }],
            buttonText: {
                dayGridMonth: 'Agendar',
                today: 'Hoje'
            },
            customButtons: {
                agendar: {
                    text: 'Agendar',
                    click: function() {
                        const modal = document.querySelector('#modal');
                        modal.classList.remove("none");
                    }
                }
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