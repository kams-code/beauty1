/**
* Theme: Montran Admin Template
* Author: Coderthemes
* Component: Full-Calendar
* 
*/




!function($) {
    "use strict";

    var CalendarApp = function() {
        this.$body = $("body")
        this.$modal = $('#event-modal'),
        this.$event = ('#external-events div.external-event'),
        this.$calendar = $('#calendar'),
        this.$saveCategoryBtn = $('.save-category'),
        this.$categoryForm = $('#add-category form'),
        this.$extEvents = $('#external-events'),
        this.$calendarObj = null
    };

    var dateString;
    /* on drop */
    CalendarApp.prototype.onDrop = function (eventObj, date) { 
        var $this = this;
            // retrieve the dropped element's stored Event Object
            var originalEventObject = eventObj.data('eventObject');
            var $categoryClass = eventObj.attr('data-class');
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            // assign it the date that was reported
            copiedEventObject.start = date;
            if ($categoryClass)
                copiedEventObject['className'] = [$categoryClass];
            // render the event on the calendar
            $this.$calendar.fullCalendar('renderEvent', copiedEventObject, true);
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                eventObj.remove();
            }
    },
    /* on click on event */
    CalendarApp.prototype.onEventClick =  function (calEvent, jsEvent, view) {
        var $this = this;
            var form = $("<form accept-charset='UTF-8' action='/reservations/"+ calEvent.id+"'   >");
            form.append("<input  name='_method' type='hidden' value='put'>");

form.append("<label>Reportet la réservation du client:"+ calEvent.title+ " à la date:</label>");                                                                                       
            form.append("<div class='input-group'><input class='form-control' name='date' type=date value='" + calEvent.start + "' /></div>");
          
            form.append("<div>");
            form.append("            <a data-toggle='modal' data-target='#con-close-modal' data-lien='reservation/service/personnel/"+calEvent.id+"' data-id='"+calEvent.id+"' class='btn-delete btnedit btn btn-primary'><i class='fa fa-user'></i></a>")
            form.append("</div><div>");
            form.append('<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button><button type="button" class="btn btn-success save-event waves-effect waves-light">Enregistrer</button>')
            form.append("</div>");
            form.append("</form>");    
            $this.$modal.modal({
                backdrop: 'static'
            });
            $this.$modal.find('.delete-event').show().end().find('.save-event').hide().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function () {
                form.submit();
            });
          

            $("#event-modal .modal-footer").remove();

                 
         ////////////////////////////////////////////////////////////////////////////////////////////////////
                
            $this.$modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
                form.submit();
            });
/////////////////////////////////////////////////////////
            
            $("#event-modal .modal-footer").remove();
          ////////////////////////////////////////////////////////////////////////////////////////////////////
            $this.$calendarObj.fullCalendar('unselect');
    },
    /* on select */
   
    CalendarApp.prototype.onSelect = function (start, end,date){
        var $this = this;
            $this.$modal.modal({
                backdrop: 'static'
            });
           var auxArr = [];
           var auxArrclient = [];
           var m = date;
         
           
           var form = $("<form action='/reservations' method='post'>@csrf");
           
           form.append("<div class='row'></div>");
                   form.find(".row")
                   .append("<div class='col-md-12'><div class='form-group'>                                <input type='datetime' style='height: 46px' class='form-control' name='email'  value="+dateString+" required autofocus>                  </div></div>")         
                   
                   .append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Services</label><select class='js-example-basic-multiple form-control' multiple='' id='selectservices' class='form-control' name='selectservices[]'></select></div></div><script>$('.js-example-basic-multiple').select2();</script>")         
                   .append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Clients</label><select class='form-control' id='selectclients' name='selectclients'></select></div></div>")         
                   ;
            $.getJSON("http://localhost:8000/api/get-all-services", function(json){
                //do some thing with json  or assign global variable to incoming json. 
                
                 for (var i = 0; i < json.length; i++) {
                     
                  
                    auxArr[i] = "<option value='" +  json[i].id + "'>" +  json[i].nom + "</option>";
                   }
                   console.log(auxArr);
                   

                if(auxArr!=null){
                 
                   form.find(".row")
                   .find("select[name='selectservices[]']")
                   .append(auxArr.join(''))
                  ;
                     

                    }

                });

                $.getJSON("http://localhost:8000/api/get-all-clients", function(json){
                    //do some thing with json  or assign global variable to incoming json. 
                    
                     for (var i = 0; i < json.length; i++) {
                         
                      
                        auxArr[i] = "<option value='" +  json[i].id + "'>" +  json[i].nom + "</option>";
                       }
                       console.log(auxArr);
                       
    
                    if(auxArr!=null){
                     
                       form.find(".row")
                       .find("select[name='selectclients']")
                       .append(auxArr.join(''))
                      ;
                         
    
                        }
    
                    });
                    form.append('<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button><button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>')
                    form.append("</form>");

            
         ////////////////////////////////////////////////////////////////////////////////////////////////////
                
            $this.$modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
                form.submit();
            });
/////////////////////////////////////////////////////////
            
            $("#event-modal .modal-footer").remove();
          ////////////////////////////////////////////////////////////////////////////////////////////////////
            $this.$calendarObj.fullCalendar('unselect');
    },
    CalendarApp.prototype.enableDrag = function() {
        //init events
        $(this.$event).each(function () {
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
        });
    }
    /* Initializing */
    CalendarApp.prototype.init = function() {
        this.enableDrag();
        /*  Initialize the calendar  */
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var form = '';
        var today = new Date($.now());

        var defaultEvents;

            var globalJsonVar;
            var $this = this;
            $.getJSON("http://localhost:8000/api/get-all-appointments", function(json){
                       //do some thing with json  or assign global variable to incoming json. 
                       console.log( json);
                        for (var i = 0; i < json.length; i++) {
                            console.log(json[i].startDate); 
                            console.log( json[i].endDate );
                            json[i].start = new Date(json[i].start);
                            json[i].end = new Date(json[i].end);
                            console.log(json[i].startDate); 
                            console.log( json[i].endDate );
                          }
                          defaultEvents=json;

                         
        if(defaultEvents!=null){
            console.log(defaultEvents);
            $this.$calendarObj = $this.$calendar.fullCalendar({
                slotDuration: '00:15:00', /* If we want to split day time each 15minutes */
                  
                defaultView: 'month',  
                handleWindowResize: true,   
                height: $(window).height() - 200,   
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
              
                events:defaultEvents,
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                dayClick: function(date, jsEvent, view) {

                    dateString= date.format();
            console.log(dateString);
            
            
                },
                drop: function(date) { $this.onDrop($(this), date); },
                select: function (start, end,date) { $this.onSelect(start, end,date); },
                eventClick: function(calEvent, jsEvent, view) { $this.onEventClick(calEvent, jsEvent, view); },
    
            });
    


        }
                      
                  });
                  
                 
       
     
        //on new event
        this.$saveCategoryBtn.on('click', function(){
            var categoryName = $this.$categoryForm.find("input[name='category-name']").val();
            var categoryColor = $this.$categoryForm.find("select[name='category-color']").val();
            if (categoryName !== null && categoryName.length != 0) {
                $this.$extEvents.append('<div class="external-event bg-' + categoryColor + '" data-class="bg-' + categoryColor + '" style="position: relative;"><i class="fa fa-move"></i>' + categoryName + '</div>')
                $this.enableDrag();
            }

        });
    },

   //init CalendarApp
    $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp
    
}(window.jQuery),

//initializing CalendarApp
function($) {
    "use strict";
    $.CalendarApp.init()
}(window.jQuery);
