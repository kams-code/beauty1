<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model implements \MaddHatter\LaravelFullcalendar\IdentifiableEvent


{
    protected $fillable = [  'organisation_id',
       'code',
       'datedebut',
       'datefin',
       'client_id',
       'service_id'
    ];

    public function client(){
        return $this->belongsTo('App\Clients');
    }

    public function service(){
        return $this->belongsTo('App\Services');
    }
    
    protected $dates = ['start', 'end'];

    /**
     * Get the event's id number
     *
     * @return int
     */
    public function getId() {
		return $this->id;
	}

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return (bool)$this->all_day;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }
}
