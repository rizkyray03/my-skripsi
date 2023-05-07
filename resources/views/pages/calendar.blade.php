<x-app title="Home Page" sidebar="show">
    @section('breadcrumbs')
        <div class="content-header">
            <div class="container">
                {{ Breadcrumbs::render('bc_calendar') }}
            </div>
        </div>
    @endsection
    @section('content')
        <div class="row">
            <div class="col">
                <div class="card">
                    <x-calendar>
                        <h2 class="content-page-title">Calendar</h2>
                    </x-calendar>
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
                        right: 'dayGridMonth listMonth timeGridWeek'
                    },
                    events: events
                });
                calendar.render();

            });
        </script>
    @endsection
</x-app>
