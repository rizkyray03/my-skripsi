<x-app title="Home Page" sidebar="show">
    @section('content')
        <div class="row">
            <div class="col">
                <div class="card">
                    <x-calendar></x-calendar>
                </div>
            </div>
        </div>
        <script>
            let events = @json($events);
            console.log(events)
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'id',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'listMonth,dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: events
                });
                calendar.render();
            });
        </script>
    @endsection
</x-app>
