<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<form action="">
    <div>
        <div>
            <label for="">Data de agendamento</label>
            <input type="date">
        </div>
        <div>
            <label for="event">Procedimento:</label>
            <input type="text" name="event">
        </div>
        <div>
            <label for="">Cliente:</label>
            <input type="text" name="client">
        </div>
        <div>
            <label for="">Dentista:</label>
            <select name="" id="">
                <option value="one">Jose Dente</option>
                <option value="two">Priscilla Aparelho</option>
            </select>
        </div>
        <div>
            <label for="">Observação:</label>
            <textarea name="" id=""></textarea>
        </div>
    </div>
</form>

<div id="calendar" class=" none"></div>
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
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                left: 'dayGridMonth',
            }
        });



        calendar.render();
    });

    const dayGridMonth = document.addEventListener('click', () => {
        dayGridMonth.classList.add("boxCalendar");
    
    })
</script>