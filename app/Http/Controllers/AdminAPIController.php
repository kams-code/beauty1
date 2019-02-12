<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use Auth;

// Model Usage
use App\Reservations;
use App\Clients;
use App\Plannings;
use App\User;
class AdminAPIController extends Controller
{

	/**
	 * Retrieves all appointments and returns them
	 * in fullCalendar expected JSON
	 */
	public function GetAllAppointments()
	{
		$appointments = Reservations::all();
		$calendarAppointments = array();
		foreach($appointments as $a) {

			$customer = Clients::find($a['client_id']);
			$customer = $customer->nom.' '.$customer->prenom;

			
			$startDate = date_create($a->datedebut);
			$endDate = date_create($a->datefin);
			
			$event = array(
				'id' => $a['id'],
				'title' => 'Appointment with '.$customer,
				'start' => $startDate->format('Y-m-d\TH:i:s'),
				'end' => $endDate->format('Y-m-d\TH:i:s'),
			);
			array_push($calendarAppointments, $event);
		}

		return response()->json($calendarAppointments);
	}

	public function GetAllPlannings()
	{
		$appointments = Plannings::all();
		$calendarAppointments = array();
		foreach($appointments as $a) {

			$customer = User::find($a['user_id']);
			$customer = $customer->name.' '.$customer->email;

			
			

			$string=$a->jours;
			$first = explode("/", $string);





			



			$from_date = strtotime($a->dateDeb);
$to_date   = strtotime($a->dateFin);

for ($current_date = $from_date; $current_date <= $to_date; $current_date += (60 * 60 * 24)) { // looping for avvailable dates
    // use date() and $currentDateTS to format the dates in between
    $date = date("Y-m-d",$current_date);
    $day_name = getdate($current_date) ;
	$day_name = $day_name['weekday'];
	
	

	foreach ($first as $key => $value) {
		// $arr[3] sera mis à jour avec chaque valeur de $arr...
		if($day_name==$value){
			$debut=$date;
			$debut.=" ";
			$debut.=$a->heureDeb;
			$fin=$date;
			$fin.=" ";
			$fin.=$a->heureFin;
			$startDate = date_create($debut);
			$endDate = date_create($fin);
			
			$event = array(
				'id' => $a['id'],
				'title' => 'Appointment with '.$customer,
				'start' => $startDate->format('Y-m-d\TH:i:s'),
				'end' => $endDate->format('Y-m-d\TH:i:s'),
			);
			array_push($calendarAppointments, $event);
		}
	}
    
}   
		}

		return response()->json($calendarAppointments);
	}
	public function GetAppointmentInfo($id)
	{
		$appointment = Reservations::all()->find($id);
		return response()->json($appointment);
	}
	public function GetPlanningInfo($id)
	{
		$appointment = Plannings::all()->find($id);
		return response()->json($appointment);
	}

	public function GetAllAvailability()
	{
		$times = BookingDateTime::all();
		$availability = array();
		$configs = Configuration::with('timeInterval')->first();
		foreach($times as $t) {
			$startDate = date_create($t['booking_datetime']);
			$endDate = date_create($t['booking_datetime']);

			// Get configuration variable
			// @todo default metric is minutes and only one supported
			// change to whichever metrics we support in the future
			$timeToAdd = $configs->timeInterval->interval; //minutes
			$endDate = $endDate->add(new \DateInterval('PT'.$timeToAdd.'M'));
			$event = [
				'id' => $t['id'],
				'title' => 'Available',
				'start' => $startDate->format('Y-m-d\TH:i:s'),
				'end' => $endDate->format('Y-m-d\TH:i:s'),
				'overlap' => false,
				'rendering' => 'background',
			];
			array_push($availability, $event);
		}
		return response()->json($availability);	
	}

	/**
	 * Sets availability based on POST data
	 * @param $start [Start datetime of selection]
	 * @param $end   [End datetime of selection]
	 *
	 * @return  response()->json() - description of events
	 */
	public function SetAvailability()
	{
		$post = Input::all();
		$configs = Configuration::with('timeInterval')->first();

		// Creating our datetime variables
		$startDate = new \DateTime($post['start']);
		$intervalDate = new \DateTime($post['start']);
		$endDate = new \DateTime($post['end']);

		// This loops from start to end, creating availability based on
		// configuration interval variables between start and end
		while($intervalDate < $endDate) {
			$intervalDateEnd = new \DateTime($intervalDate->format('Y-m-d H:i:s'));
			$intervalDateEnd->add(new \DateInterval('PT'.$configs->timeInterval->interval.'M'));

			// We check to make sure we are not overlapping existing availability
			if (BookingDateTime::timeBetween($intervalDate, $intervalDateEnd)->first()) {
				return response()->json("Segment overlaps with existing availability", 500);
			} else {
				BookingDateTime::addAvailability($intervalDate);
				$intervalDate->add(new \DateInterval('PT'.$configs->timeInterval->interval.'M'));
			}
		}

		return response()->json('success', 200);
	}
}
