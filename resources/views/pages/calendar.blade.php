<x-app title="Home Page" sidebar="show">
    @section('breadcrumbs')
        <div class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('content')
        <div class="row">
            <div class="col">
                <div class="card">
                    <x-calendar>
                        <h3>Calendar</h3>
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
                        right: 'listMonth,dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: events
                });
                calendar.render();
            });
        </script>
    @endsection
</x-app>
