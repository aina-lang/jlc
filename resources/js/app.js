import './bootstrap';
import 'flowbite';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';
import Datepicker from 'flowbite-datepicker/Datepicker';


let calendarEl = document.getElementById('calendar');

const frenchLocale = {
    weekdays: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
    months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
    today: "Aujourd'hui",
    clear: 'Effacer',
    dateFormat: 'd.m.Y', // Format de date personnalisé
    timeFormat: 'H:i',   // Format d'heure personnalisé
};

let calendar = new Calendar(calendarEl, {
    plugins: [dayGridPlugin, timeGridPlugin, listPlugin],
    initialView: 'dayGridMonth',
    // locale: frenchLocale,
    editable: true,
    selectable: true,
    selectHelper: true,
    
    headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'

    },
    eventRender: function (event, element, view) {

        if (event.allDay === 'true') {

            event.allDay = true;

        } else {

            event.allDay = false;

        }

    },
    eventDrop: function (event, delta) {

        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");

        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");



        $.ajax({

            url: SITEURL + '/fullcalenderAjax',

            data: {

                title: event.title,

                start: start,

                end: end,

                id: event.id,

                type: 'update'

            },

            type: "POST",

            success: function (response) {

                displayMessage("Event Updated Successfully");

            }

        });

    },
    events: [
        {
            title: 'Événement 1',
            start: '2024-01-31T10:00:00',
            end: '2024-01-31T12:00:00',
            backgroundColor: '#4CAF50', // couleur de fond de l'événement
            borderColor: '#4CAF50', // couleur de la bordure de l'événement
            // url: 'https://exemple.com/evenement-1', // lien URL pour rediriger lorsqu'on clique sur l'événement
            description: 'Ceci est un exemple d\'événement.'
        },
        {
            title: 'Événement 2',
            start: '2024-02-15',
            end: '2024-02-17',
            backgroundColor: '#2196F3',
            borderColor: '#2196F3',
            // url: 'https://exemple.com/evenement-2',
            description: 'Un autre exemple d\'événement sur plusieurs jours.'
        }
        // Ajoutez d'autres événements selon vos besoins
    ],
    eventClick: function (info) {
        // Gestionnaire d'événements lorsqu'un événement est cliqué
        alert('Event: ' + info.event.title + '\nDescription: ' + info.event.extendedProps.description);
    }
    // eventClick: function (event) {

    //     var deleteMsg = confirm("Do you really want to delete?");

    //     if (deleteMsg) {

    //         $.ajax({

    //             type: "POST",

    //             url: SITEURL + '/fullcalenderAjax',

    //             data: {

    //                 id: event.id,

    //                 type: 'delete'

    //             },

    //             success: function (response) {

    //                 calendar.fullCalendar('removeEvents', event.id);

    //                 displayMessage("Event Deleted Successfully");

    //             }

    //         });

    //     }
    // },
});

import 'flatpickr/dist/flatpickr.min.css';
import flatpickr from 'flatpickr';

document.addEventListener('DOMContentLoaded', function() {
    flatpickr('#timepickerFin', {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true,
    });
    flatpickr('#timepickerDebut', {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true,
    });
});

calendar.render();

const datepickerEl = document.getElementById('datepicker');

new Datepicker(datepickerEl, {
    // format: 'yyyy-mm-dd', // Format de la date
    // autohide: true, // Masquer automatiquement le calendrier après la sélection
    // startDate: new Date(), 
});
