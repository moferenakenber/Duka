<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag and Drop Calendar</title>
    <!-- FullCalendar CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css" rel="stylesheet">
    <!-- Bootstrap CSS (alternative link) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional: Custom styling for the calendar */
        #calendar {
            max-width: 900px;
            margin: 40px auto;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Drag and Drop Calendar</h2>
    <div id="calendar"></div>
</div>

<!-- FullCalendar JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js"></script>
<!-- Bootstrap JS (alternative link) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth', // Set the initial view
            editable: true, // Enable dragging and resizing
            droppable: true, // Allow dropping on the calendar
            events: [
                {
                    title: 'Meeting',
                    start: '2024-10-21',
                    end: '2024-10-22'
                },
                {
                    title: 'Conference',
                    start: '2024-10-25',
                    end: '2024-10-27'
                }
            ],
            dateClick: function(info) {
                alert('Date: ' + info.dateStr); // Alert on date click
            },
            eventDrop: function(info) {
                alert('Event: ' + info.event.title + ' dropped on ' + info.event.start.toISOString()); // Alert on event drop
            }
        });

        calendar.render(); // Render the calendar
    });
</script>

</body>
</html>
