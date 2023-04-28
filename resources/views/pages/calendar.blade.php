<x-app title="Home Page" sidebar="show">
    @section('content')
        <div class="row">
            <div class="col">
                <x-card>
                    <x-calendar></x-calendar>
                </x-card>
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
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: events
                });
                calendar.render();
            });
        </script>
    @endsection
</x-app>
