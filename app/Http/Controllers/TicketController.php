<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Tickets;
use App\Services;
use App\Clients;
use DateTime;
class TicketController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        $tickets=Tickets::pluck('titre','id');
        $services=Services::pluck('nom','id');
        $clients=Clients::pluck('nom','id');
        $Tickets=Tickets::get();
        $formules=Formules::pluck('nom','id');
     
        return view('tickets.index',compact('Tickets','services','clients','tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Services::pluck('nom','id');
        $clients=Clients::pluck('nom','id');
        $Tickets=Tickets::get();
        $formules=Formules::pluck('nom','id');
        return view('tickets.create',compact('Tickets','services','clients','tickets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $first = explode(" - ",  $request->get('periode'));
        foreach ($first as $key => $value) {
           if($key==0){
               $debut=DateTime::createFromFormat('d/m/Y', $value);
           }if($key==1){
               $fin=DateTime::createFromFormat('d/m/Y', $value);
           }
        }
      
        if($request->get('client')=="on"){
        $clients=$request->get('clients');
       
        $val="";
        foreach($clients as $key=>$value)
        {
            $val=$val. '/' .$value;
           
        }
        $tick= new Tickets([
            'titre' => $request->get('titre'),
            'type'=> $request->get('type'),
            'datedebut'=> $debut,
            'datefin'=>$fin,
            'valeur'=> $request->get('valeur'),
            'clients_id'=>$val
          ]);

    
    }if($request->get('service')=="on"){
            $services=$request->get('services');
       
        $val="";
        foreach($services as $key=>$value)
        {
            $val=$val. '/' .$value;
           
        }


        $tick= new Tickets([
            'titre' => $request->get('titre'),
            'type'=> $request->get('type'),
            'datedebut'=> $debut,
            'datefin'=> $fin,
            'valeur'=> $request->get('valeur'),
            'services_id'=>$val
          ]);
        }
        if(new DateTime() > new DateTime($request->get('datedebut'))){
            $tick['etat']="Inactif";
        
        }elseif(new DateTime() < new DateTime($request->get('datedebut')))
         {
            $tick['etat']="En cour";

         }
         elseif(new DateTime() > new DateTime( $request->get('datefin')))
         {
            $tick['etat']="Expirer";

         }
        
  $tick->save();






  if($request->get('client')=="on"){
    foreach($clients as $key=>$value)
    { $string = bin2hex(openssl_random_pseudo_bytes(10));
       $client=Clients::get()->where('id',$value)->first();
       $client['codepromo']=$string ;
       $client['id_ticket']=$tick->id;
  $client->update();
    }
}if($request->get('service')=="on"){
    foreach($services as $key=>$value)
    { $string = bin2hex(openssl_random_pseudo_bytes(10));
       $service=Services::get()->where('id',$value)->first();
       $service['codepromo']=$string ;
       $service['id_ticket']=$tick->id;
  $service->update();
    }
    }



 
        return redirect(route('tickets.index'));
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket=Tickets::findOrFail($id);
        $services=Services::get()-> where('id_ticket',$id);
        $clients=Clients::get()-> where('id_ticket',$id);
        return view('tickets.show',compact('ticket','services','clients'));
    }
 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $services=Services::pluck('nom','id');
        $clients=Clients::pluck('nom','id');
        $Tickets=Tickets::get();
        $ticket=Tickets::findOrFail($id);
      
   
        return view('tickets.edit', compact('Tickets','services','clients','tickets','ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
        $first = explode(" - ",  $request->get('periode'));
        foreach ($first as $key => $value) {
           if($key==0){
               $debut=$value;
           }if($key==1){
               $fin=$value;
           }
        }
      
        if($request->get('client')=="on"){
            $clients=$request->get('clients');
           
            $val="";
            foreach($clients as $key=>$value)
            {
                $val=$val. '/' .$value;
               
            }
            $tick= new Tickets([
                'titre' => $request->get('titre'),
                'type'=> $request->get('type'),
                'datedebut'=> $debut,
            'datefin'=> $fin,
                'valeur'=> $request->get('valeur'),
                'clients_id'=>$val
              ]);
    
        
        }if($request->get('service')=="on"){
                $services=$request->get('services');
           
            $val="";
            foreach($clients as $key=>$value)
            {
                $val=$val. '/' .$value;
               
            }
    
    
            $tick= new Tickets([
                'titre' => $request->get('titre'),
                'type'=> $request->get('type'),
                'datedebut'=> $debut,
            'datefin'=> $fin,
                'valeur'=> $request->get('valeur'),
                'services_id'=>$val
              ]);
            }
            if(new DateTime() > new DateTime($request->get('datedebut'))){
                $tick['etat']="Inactif";
            
            }elseif(new DateTime() < new DateTime($request->get('datedebut')))
             {
                $tick['etat']="En cour";
    
             }
             elseif(new DateTime() > new DateTime( $request->get('datefin')))
             {
                $tick['etat']="Expirer";
    
             }
            
            
      $tick->update();
      if($request->get('client')!="on"){
        foreach($clientins as $key=>$value)
        {  $clientin=Clients::get()->where('id',$value)->first();
           $clientin['codepromo']=null ;
           $clientin['id_ticket']=null;
      $clientin->update();
        }
    }
    if($request->get('service')!="on"){
        foreach($serviceins as $key=>$value)
        { $string = bin2hex(openssl_random_pseudo_bytes(10));
           $servicein=Services::get()->where('id',$value)->first();
           $servicein['codepromo']=null ;
           $servicein['id_ticket']=null;
      $servicein->update();
        }
        }
    
    
    
    
    
      if($request->get('client')=="on"){
        foreach($clients as $key=>$value)
        { $string = bin2hex(openssl_random_pseudo_bytes(10));
           $client=Clients::get()->where('id',$value)->first();
           $client['codepromo']=$string ;
           $client['id_ticket']=$tick->id;
      $client->update();
        }
    } 
    if($request->get('service')=="on"){
        foreach($services as $key=>$value)
        { $string = bin2hex(openssl_random_pseudo_bytes(10));
           $service=Services::get()->where('id',$value)->first();
           $service['codepromo']=$string ;
           $service['id_ticket']=$tick->id;
      $service->update();
        }
        }
    
    
    
    
     
            return redirect(route('tickets.index'));
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Tickets::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();  //
    }
}
