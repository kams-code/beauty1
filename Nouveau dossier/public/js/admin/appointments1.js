$(document).ready(function() {
  var url = document.getElementById('url');
  url = url.textContent;
  var cDate = new Date();

  // Calendar initialization
  $('#calendar').fullCalendar({
    editable: false,
    header: {
      left: 'prev,next today',
      center: 'Appointments',
      right: 'month, agendaWeek, agendaDay'
    },
    defaultDate: cDate,
    defaultView: 'agendaWeek',
    // API call returns a json feed
    events: {
      url: url+'/api/get-all-plannings',
      error: function() {
        $('#error').html('Could not find any appointments');
      }
    },
    
    // Function to handle a day click event
    dayClick: function(date, jsEvent, view) {
      //$(this).css('background-color', 'red');
    },
    
    // Function to handle an event click event
    eventClick: function(calEvent, jsEvent, view) {
      var detailView = $('#appointment-details');
      $.get(url+"/api/get-planning-info/"+calEvent.id, 
        function(data) {
          var start = moment(calEvent.start).format('YYYY-MM-DD [at] h:mm a');
          var end = moment(calEvent.end).format('YYYY-MM-DD [at] h:mm a');
          var details = '<h3>'+calEvent.title+'</h3>' +
            '<p><b>Begins</b>: '+start+'</p>' +
            '<p><b>Ends</b>: '+end+'</p>' +
            '                                    <a class="on-default seedetails btn btn-primary" data-toggle="modal" data-lien="plannings/'+calEvent.id+'" data-id="'+calEvent.id+'" data-target="#con-close-modal"><i class="fa fa-eye"></i></a> '+
                 
            ' <a data-toggle="modal" data-target="#con-close-modal" data-lien="plannings/'+calEvent.id+'/edit" data-id="'+calEvent.id+'" class="btn-delete btnedit btn btn-primary"><i class="fa fa-pencil"></i></a>'+
            ' <a data-toggle="modal" data-target="#deletemodal" data-id="'+calEvent.id+'" data-lien="plannings/'+calEvent.id+'" class="btn-delete btndelete btn btn-danger"><i class="fa fa-trash-o"></i></a>   </p>';
           detailView.empty();
           detailView.append(details);
        });

    },
  });
});