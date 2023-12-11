<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Slider;
use App\Contact;
use App\Country;
use App\Visa;
use App\Visacondition;
use App\Visademond;
use App\Visadoc;
use App\Participant;
use App\Doctypevisa;
use App\Demondrecord;
use App\Models\User;
use App\Hotelcategory;
use App\Hoteldemond;
use App\Hotel;
use App\Room;
use App\Drive;
use App\Drivdemond;
use App\Hotelreq;
use App\Budget;
use App\Note;
use App\Singledemond;
use App\Reqinfor;
use App\Tablebudget;
use App\DOCreq;
use App\Roomservice;
use App\Hotelroomdemond;
use App\Booklet;
use App\Mailoption;
use App\Travell;
use App\Accommodation;
use App\Offer;
use App\Traveldemond;
use App\Typepayment;
use App\Pepoltravel;
use App\Singletravel;
use App\Flight;
use App\Airline;
use App\Demondflight;
use App\Peopleflight;
use Mail;
use Redirect;
use Session;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function home()
    {
        $abouts=About::find(1);
        $sliders=Slider::all();
        $active=Auth::user()->active;
        if(Auth::user()){
            if($active==1){
                return view('welcome')->with('abouts',$abouts)->with('sliders',$sliders);
        }
        return view('home')->with('abouts',$abouts)->with('sliders',$sliders);
    }
       
        return Redirect::route('login');

    }
    public function firststage()
    {
        if(Auth::user()){
            $active=Auth::user()->active;
            if($active==1){
        $abouts=About::find(1);
        $sliders=Slider::all();
         $countries=Country::all();
         $visas=Visa::all();
         $visaconditions=Visacondition::all();
         $visademond=Visademond::all();
         $visadoc=Visadoc::all();
        return view('demond.demond')->with('abouts',$abouts)->with('visademond',$visademond)->with('visadoc',$visadoc)->with('sliders',$sliders)->with('visaconditions',$visaconditions)->with('countries',$countries)->with('visas',$visas);
              }
               }
               return Redirect::route('login');

     }
    public function visa()
    {
        if(Auth::user()){
            $active=Auth::user()->active;
            if($active==1){
        $abouts=About::find(1);
        $sliders=Slider::all();
         $countries=Country::all();
         $visas=Visa::all();
         $visaconditions=Visacondition::all();
         $visademond=Visademond::all();
         $visadoc=Visadoc::all();
        return view('visa')->with('abouts',$abouts)->with('visademond',$visademond)->with('visadoc',$visadoc)->with('sliders',$sliders)->with('visaconditions',$visaconditions)->with('countries',$countries)->with('visas',$visas);
              }
               }
               return Redirect::route('login');

     }


     public function demond()
     {
         if(Auth::user()){
             $active=Auth::user()->active;
             if($active==1){
                $visacountry= Country::all();
                $idvisa=0;
                $pricevisa=0;
                foreach($visacountry as $visacoun){
                    if($visacoun->name==request()->country || $visacoun->visaid==request()->visaid){
                    $idvisa=$visacoun->id;
                    $pricevisa=$visacoun->price;
                    }
                }
                if($pricevisa<=Auth::user()->wallet){
                    Auth::user()->wallet=Auth::user()->wallet-$pricevisa;
                    Auth::user()->save();
                $visademond=new Visademond();
                $visademond->country=request()->country;
                $visademond->visaid=request()->visass;
                $visademond->numberfamily=request()->numberfamily;
                $visademond->nationality=request()->nationality;
                $visademond->datearrive=request()->datearrive;
                $visademond->docvoyager=request()->docvoyager;
                $visademond->price=request()->pricevisa;
                $visademond->status="non soumis";
                $visademond->userid=Auth::user()->id;
                $visademond->save();
             
                $demondrecord=new Demondrecord();
                $demondrecord->userid=Auth::user()->id;
                $demondrecord->amount=$pricevisa;
                $demondrecord->operationtype='se désister';
                $demondrecord->servicetype="Visa";
                $demondrecord->serviceid=$visademond->id;
                $demondrecord->save();

               $visadoc= Visadoc::where('visaid', '=', $idvisa)->get();
               $visaarray=[];
               $visaidarray=[];
               foreach($visadoc as $visad)
                     {
                   array_push($visaarray,$visad->linkdoc);
                   array_push($visaidarray,$visad->id);
                     }
                     Session::flash('success','L\'étape de la demande est terminée ');
 
                return view('demond.information')->with('numberfamily',request()->numberfamily)->with('id',$visademond->id)->with('visacountry',$idvisa)->with('pricevisa',$pricevisa)->with('visadoc',$visaarray)->with('visaidarray',$visaidarray);
        }
        else{
            Session::flash('infor','Pas assez de crédit, veuillez recharger  ');
 return redirect()->back(); 
        }
    }
                }
                return Redirect::route('login');

      }
      public function country()
      {
        $visacountry= Country::all();

        dd(  $visacountry);
      }     
     public function participant()
     {
        //  return response()->json(['success'=>'success']);
         if(Auth::user()){
             $active=Auth::user()->active;
             if($active==1){
                //  dd(request()->all());
                $visacountry=request()->visacountry;
                $visadoc= Visadoc::where('visaid', '=', $visacountry)->get();
                $visaarray=[];
                $visaidarray=[];
                foreach($visadoc as $visad)
                      {
                    array_push($visaarray,$visad->linkdoc);
                    array_push($visaidarray,$visad->id);
                      }
             
                      $idobject=request()->demondid;

                 $numberfamily=request()->numberfamily;
               
                 $length=request()->length;
                  
                 $count=1;
                 for($i=1;$i<=$numberfamily;$i++){
                     
                    $participents=new Participant();
                    $participents->visaid=$idobject;
                    $participents->fname=request()->input('fname'.$i);
                    $participents->lname=request()->input('lname'.$i);
                    $participents->passportnum=request()->input('passport'.$i);
                    $participents->datebirth=request()->input('birthdate'.$i);
                    $participents->locationbirth=request()->input('locationbirth'.$i);
                    $participents->dateexpired=request()->input('expireddate'.$i);
                    $participents->daterelease=request()->input('releaseddate'.$i);
                    $participents->email=request()->input('email'.$i);
                    $participents->address=request()->input('addressres'.$i);
                    $participents->save();
                 
                    
                    for($j=1;$j<=$length;$j++){
                        $doc=request()->file("file".$j.$i); 
                       
                        $img_newname=time().$doc->getClientOriginalName();
                        $doc->move('storage/app/public/doctypevisas',$img_newname);
                        $doctypevisa=new Doctypevisa();
                        $doctypevisa->visaid=$idobject;
                        $doctypevisa->namedoc='doctypevisas\\'.$img_newname;
                         $doctypevisa->docid=$visaidarray[$j-1];
                         $doctypevisa->peopleid= $participents->id;
                         $doctypevisa->save();
                         $count=$count+1;
                        // }
                      
                           
                          
                    
                }
                 
            }
            // $demond=Visademond::find($idobject);
            // $participant=Participant::where('visaid', '=', $idobject)->get();
            Session::flash('success','Étape d\'information complète ');
            $visacountry=request()->visacountry;
            $visaconditions=Visacondition::where('countriesid', '=', $visacountry)->get();
            return view('demond.condition')->with('visacountry',$visacountry)->with('visaconditions',$visaconditions)->with('numberfamily',request()->numberfamily)->with('id',$idobject)->with('pricevisa',request()->pricevisa);
        }
                }
                return Redirect::route('login');
      }


      public function conditions()
      {
        $visacountry=request()->visacountry;
        $id=request()->id;
        $visaconditions=Visacondition::where('countriesid', '=', $visacountry)->get();

        $pricevisa=request()->pricevisa;
            $demond=Visademond::find($id);
            $participants=Participant::where('visaid', '=', $id)->get();
            $visatype=Visa::find($demond->visaid);
        // dd($visaconditions);
        return view('demond.confirm')->with('visaconditions',$visaconditions)->with('visatype',$visatype)->with('demond',$demond)->with('participants',$participants)->with('visacountry',$visacountry)->with('id',$id)->with('pricevisa',$pricevisa);
    }

        public function submit()
        {
            //  dd(request()->demondidsubmit);
            $iddemond=request()->demondidsubmit;
            $demond=Visademond::find($iddemond);
            $demond->status="En attente";
            $demond->save();
            return redirect()->route('myorder');
          }
          public function myorder()
          {
            if(Auth::user()){
                $active=Auth::user()->active;
                if($active==1){
                    $id=Auth::user()->id;
    // dd($id);
                    $orders= Visademond::where('userid', '=', $id)->get();
                    $visas=Visa::all();
                    $participents=Participant::all();    
                    // dd($orders);
                    
                      $ordershotel= Hoteldemond::where('userid', '=', $id)->get();
                    $Hotels=Hotel::all();
                    
                    $hotelreqs= Hotelreq::where('userid', '=', $id)->get();
                    $budgets=Budget::all();
                    $tablebudgets=Tablebudget::all();

  
                    $drives=Drive::all();
                    $drivdemonds=Drivdemond::where('userid', '=', $id)->get();

                    $airlines=Airline::all();
                    $flights=Flight::all();
                    $peopleflight=Peopleflight::all();
                    $demondflights=Demondflight::where('userid', '=', $id)->get();

                    $travels=Travell::all();
                    $typepayment=Typepayment::all();
                    $offers=Offer::all();
                    $accommodation=Accommodation::all();
                    $pepoltravels=Pepoltravel::all();
                    $traveldemonds=Traveldemond::where('userid', '=', $id)->get();

                    $singletravel=Singletravel::all();
                    $singledemond=Singledemond::where('userid', '=', $id)->get();


                    return view('myorders')->with('singletravel',$singletravel)->with('singledemond',$singledemond)->with('travels',$travels)->with('typepayment',$typepayment)->with('offers',$offers)->with('accommodation',$accommodation)->with('traveldemonds',$traveldemonds)->with('pepoltravels',$pepoltravels)->with('airlines',$airlines)->with('flights',$flights)->with('peopleflight',$peopleflight)->with('demondflights',$demondflights)->with('drives',$drives)->with('drivdemonds',$drivdemonds)->with('hotelreqs',$hotelreqs)->with('budgets',$budgets)->with('tablebudgets',$tablebudgets)->with('Hotels',$Hotels)->with('ordershotel',$ordershotel)->with('orders',$orders)->with('visas',$visas)->with('participents',$participents);
                }
            }
            }

            ///////hotel 
            public function hotel_request()
            {
             $budgets=Budget::all();
             $notes=Note::all();
                return view('hotel_request')->with('budgets',$budgets)->with('notes',$notes);
            }
            public function demondhotelreq()
            {

             $hotelreq=new Hotelreq;
             $hotelreq->name=request()->name;
             $hotelreq->arrivetime=request()->arrivetime;
             $hotelreq->departtime=request()->departtime;
             $hotelreq->child=request()->child;
             $hotelreq->userid=Auth::user()->id;;
             $hotelreq->room=request()->room;
             $hotelreq->adult=request()->adult;
             $hotelreq->state="En attente";
             $hotelreq->save();
             $budgets=Budget::all();
             foreach($budgets as $budget){
                 if(request()->input('hotelreq'.$budget->id)){
                     $tablebudget=new Tablebudget;
                     $tablebudget->reqid= $hotelreq->id;
                     $tablebudget->budgetid= $budget->id;
                     $tablebudget->from= $budget->from;
                     $tablebudget->to= $budget->to;
                     $tablebudget->save();
                 }
             }
             for ($i=0; $i <request()->adult ; $i++) { 
                $reqinfor=new Reqinfor;
                $reqinfor->reqid= $hotelreq->id;
                $reqinfor->type="Adulte";
                $reqinfor->civility=request()->input('civi'.$i);
                $reqinfor->fname=request()->input('fname'.$i);
                $reqinfor->lname=request()->input('lname'.$i);
                $reqinfor->save();
             }

             for ($i=0; $i <request()->child ; $i++) { 
                $reqinfor=new Reqinfor;
                $reqinfor->reqid= $hotelreq->id;
                $reqinfor->type="Enfant";
                $reqinfor->birth=request()->input('birth'.$i);
                $reqinfor->fname=request()->input('fname'.$i);
                $reqinfor->lname=request()->input('lname'.$i);
                $reqinfor->save();
             } 
             Session::flash('success','L\'étape de la demande est terminée ');
             return redirect()->back();
           }
            //////////////////////////////
            public function hotels()
            {
                $hotels=Hotel::paginate(6);

                $hotelcategories=Hotelcategory::all();
                return view('hotels')->with('hotels',$hotels)->with('hotelcategories',$hotelcategories);
            }
          
            public function hoteldemond($id)
            {
                $hotels=Hotel::find($id);

                $rooms = Room::where("hotelid", "=", $id)->get();
                $roomservice = Roomservice::all();

                return view('hotel.demond')->with('hotels',$hotels)->with('roomservice',$roomservice)->with('rooms',$rooms);
            }
            public function hotelinformation($id)
            {
                $hotels=Hotel::find($id);
                 $iddemond=Session::get('demondid');
                 $demondhotels=Hoteldemond::find($iddemond);
                 $rooms = Room::where("hotelid", "=", $iddemond)->get();
                return view('hotel.information')->with('rooms',$rooms)->with('hotels',$hotels)->with('demondhotels',$demondhotels);
            }
            public function demondhotel()
            {
                if(Auth::user()){
                    $active=Auth::user()->active;
                    if($active==1){
                        $pricevisa=request()->totalprice;;
                        if($pricevisa<=Auth::user()->wallet){
                            Auth::user()->wallet=Auth::user()->wallet-$pricevisa;
                            Auth::user()->save();
                        $demondhotels=new Hoteldemond();
                        $demondhotels->idhotel=request()->idhotel;
                     $demondhotels->userid=Auth::user()->id;
                        $demondhotels->arrivedate=request()->arrivedate;
                        $demondhotels->departdate=request()->departdate;
                        $demondhotels->night=request()->night;
                        $demondhotels->numberroms=request()->numberroms;
                        $demondhotels->adult=request()->adult;
                        $demondhotels->child=request()->chlid;
                        $demondhotels->totalprice=request()->totalprice;

                        //totalprice
                        $demondhotels->save();
                        

                        $iddemond= $demondhotels->id;
                        $numberroms=request()->numberroms;
                        for($i=0;$i<$numberroms;$i++){
                         //                    $participents->fname=request()->input('fname'.$i);type
                           $hotelroomdemond=new Hotelroomdemond();
                              $hotelroomdemond->roomid=request()->input('type'.$i);
                              $hotelroomdemond->demondid=$iddemond;
                              $hotelroomdemond->servicetype=request()->input('service'.$i);
                              $hotelroomdemond->price=request()->input('price'.$i);
                              $hotelroomdemond->save();
                        }
                        $demondrecord=new Demondrecord();
                        $demondrecord->userid=Auth::user()->id;
                        $demondrecord->amount=request()->totalprice;
                        $demondrecord->operationtype='se désister';
                        $demondrecord->servicetype="Hotal";
                        $demondrecord->serviceid=$demondhotels->id;
                        $demondrecord->save();
        
                            // Session::flash('success','L\'étape de la demande est terminée ');
                   
                            Session::flash('demondid',$demondhotels->id);
                            Session::flash('success','L\'étape de la demande est terminée ');
                       return redirect()->back();
                    }else{
                        Session::flash('infor','Pas assez de crédit, veuillez recharger  ');
                        return redirect()->back(); 
                    }
             
           }
                       }
                       return Redirect::route('login');
       
             }
           
            /////////////////////////////////////////////
            public function finance()
            {
              if(Auth::user()){
                  $active=Auth::user()->active;
                  if($active==1){
                      $id=Auth::user()->id;
      // dd($id);
                      $demondrecord= Demondrecord::where('userid', '=', $id)->get();
                      $visas=Visa::all();
                      // dd($orders);
                      return view('finance')->with('demondrecords',$demondrecord)->with('visas',$visas);
                  }
              }
              }
            public function deleteorder($id)
            {
                $orders= Visademond::find($id);
                $orders->delete();
                $participents= Participant::where('visaid', '=', $id)->get();
                foreach($participents as $participent){
                    $participent->delete();  
                }
              
                      Session::flash('infor','La demande a été supprimée avec succès ');

                return redirect()->back();

   
            }
            public function changewallet()
            {
               $user=User::find($_GET['id']);
                return view('vendor.voyager.users.changewallet')->with('user',$user);
            }   
            public function deposit()
            {
                 $id=request()->id;
                 $user=User::find($id);
                 $user->wallet+=request()->amount;
                 $user->save();
                 $demondrecord=new Demondrecord();
                 $demondrecord->userid=  $id;
                 $demondrecord->amount=request()->amount;
                 $demondrecord->note=request()->note;
                 $demondrecord->operationtype='déposer';
                 $demondrecord->servicetype="Ajouter un montant de l'administration";
                 $demondrecord->save();
                 
                 Session::flash('success','opération réussie ');

                return redirect()->to(url('/admin/users/'.$id));
            } 
            public function withdrawwww()
            {
                 $id=request()->id;
                 $user=User::find($id);
            //    $amount=var_dump(tofloat(request()->amount)); 
            //    $wallet=var_dump(tofloat($user->wallet)); 
            $wallet=  $user->wallet-request()->amount;
             

            //   dd(  $user->wallet);
            if($wallet>0){
                $user->wallet= $wallet;
                    $user->save();
                    $demondrecord=new Demondrecord();
                    $demondrecord->userid=  $id;
                    $demondrecord->amount=request()->amount;
                    $demondrecord->note=request()->note;

                    $demondrecord->operationtype='se désister';
                    $demondrecord->servicetype="Déduction d'un montant par l'administration ";
                    $demondrecord->save();
                    Session::flash('success','opération réussie ');
   
                   return redirect()->to(url('/admin/users/'.$id));
                 } 
                    if($wallet<0){
                    Session::flash('infor','Veuillez saisir une valeur inférieure à la valeur du compte  ');
                    return redirect()->to(url('/admin/changewallet?id='.$id.'&type=2'));
                    }
               
            }  
            
            
            public function acceptedmond()
            {
                $id=$_GET['id'];
                $type=$_GET['type'];
                $mtype='App\/'. $type;
                $mtype=str_replace("/","",  $mtype);
                $modeltype = app($mtype);

                $demond=$modeltype::find($id);
                $demond->status="En cours";
                $demond->save();
                Session::flash('success','opération réussie ');

                return redirect()->back();
            }
            public function rejetdmond()
            {
                $id=$_GET['id'];
                $type=$_GET['type'];
                $mtype='App\/'. $type;
                $mtype=str_replace("/","",  $mtype);
                $modeltype = app($mtype);

                $demond=$modeltype::find($id);
                $demond->status="Annule";
                $demond->save();
                Session::flash('success','opération réussie ');

                return redirect()->back();
            }
            public function terminedmond()
            {
                $id=$_GET['id'];
                $type=$_GET['type'];
                $mtype='App\/'. $type;
                $mtype=str_replace("/","",  $mtype);
                $modeltype = app($mtype);

                $demond=$modeltype::find($id);
                $demond->status="Termine";
                $demond->save();
                Session::flash('success','opération réussie ');

               return redirect()->back();
            }

            public function alldata($id)
            {
                
                $modelusers = app("App\Models\User");
                $user=$modelusers::find($id);
                $modelag = app("App\Agency");
                $Agencies=$modelag::all();
                $modelVisademond = app("App\Visademond");
                $visademonds=$modelVisademond::all();
                $modelHoteldemond = app("App\Hoteldemond");
                $hoteldemonds=$modelHoteldemond::all();
                $modelDemondrecord = app("App\Demondrecord");
                $demondrecords=$modelDemondrecord::all();
                $modelvisa = app("App\Visa");
                $visas=$modelvisa::all();

                $modelhotel = app("App\Hotel");
                $hotels=$modelhotel::all();
                return view('vendor.voyager.alldata')->with('hotels',$hotels)->with('visas',$visas)->with('demondrecords',$demondrecords)->with('user',$user)->with('visademonds',$visademonds)->with('hoteldemonds',$hoteldemonds)->with('Agencies',$Agencies);
            }

            public function docreqssend($id)

            {

                $hotelreq=Hotelreq::find($id);
                $docreqs= DOCreq::where('reqid', '=', $id)->get();
                $user=User::find($hotelreq->userid);
                $to_email   =$user->email;
                $from_email="infor@eljouribooking.com";
                $massage="Cher Monsieur / Madame <br/> 
                Votre demande a été examinée (demande de réservation d'hôtel visa) et nous avons le plaisir de vous envoyer les fichiers suivants <br/>
                Liens de fichiers :<br/>
                ";
                foreach($docreqs as $docreq){
                    $filejson=json_decode($docreq->doclink);
                    $filepath = url('storage/app/public/'.$filejson[0]->download_link);
                    $filename = $docreq->title;
                    $massage= $massage."<a href='". $filepath."'>".  $filename." </a><br/>";
                }
                $massage= $massage."Vous pouvez consulter votre demande sur votre compte sur notre site ";
                $dataa = array( 'email' => $to_email, 'first_name' =>$user->name , 'from' => $from_email,  'body' => $massage, 'subject' => 'lettre d\'information ');
                
               
                Mail::send( [], $dataa, function( $message ) use ($dataa)
                {
                 $message->to( $dataa['email'] )->from( $dataa['from'], $dataa['first_name'] )->subject( $dataa['subject']  )->setBody($dataa['body'] ); // for HTML rich
                });
                Session::flash('success','a été envoyé  ');

                return redirect()->back();
            }
            //driver
            public function drivdemond()

            {
                $drives=Drive::all();

                return view('drivdemond')->with('drives',$drives);

            }

            public function demonddriv()

            {
                // dd(request()->all());
                if(Auth::user()){
                    $active=Auth::user()->active;
                    $drive=Drive::find(request()->categorie);
                    if($active==1){
                        $price=$drive->price;
                      if($price<=Auth::user()->wallet){
                            Auth::user()->wallet=Auth::user()->wallet-$price;
                            Auth::user()->save();
                $drivdemond= new Drivdemond;
                $drivdemond->price=$price;
                $drivdemond->userid= Auth::user()->id;
                $drivdemond->fname=request()->fname;
                $drivdemond->lname=request()->lname;
                $drivdemond->address=request()->address;
                $drivdemond->city=request()->city;
                $drivdemond->province=request()->province;
                $drivdemond->zipcode=request()->zipcode;
                $drivdemond->country=request()->country;
                $drivdemond->databirth=request()->databirth;
                $drivdemond->countrybirth=request()->countrybirth;
                $drivdemond->drivernumber=request()->drivernumber;
                $drivdemond->firstissue=request()->firstissue;
                $drivdemond->mfname=request()->mfname;
                $drivdemond->mlname=request()->mlname;
                $drivdemond->maddress=request()->maddress;
                $drivdemond->mcity=request()->mcity;
                $drivdemond->mprovince=request()->mprovince;
                $drivdemond->mzip=request()->mzip;
                $drivdemond->mcountry=request()->mcountry;
                $drivdemond->phone=request()->phone;
                $drivdemond->email=request()->email;
                $drivdemond->comment=request()->comment;
                $drivdemond->status="En attente";
                $catg=request()->categorie;
                // if(request()->A){
                //     $catg='"A",'. $catg;
                // }
                // if(request()->B){
                //     $catg='"B",'. $catg;
                // }
                // if(request()->C){
                //     $catg='"C",'. $catg;
                // }
                // if(request()->D){
                //     $catg='"D",'. $catg;
                // }
                // if(request()->BE){
                //     $catg='"BE",'. $catg;
                // }
                // if(request()->CE){
                //     $catg='"CE",'. $catg;
                // }
                // if(request()->DE){
                //     $catg='"DE",'. $catg;
                // }
                // if(request()->A1){
                //     $catg='"A1",'. $catg;
                // }
                // if(request()->D1){
                //     $catg='"D1",'. $catg;
                // }
                // if(request()->C1){
                //     $catg='"C1",'. $catg;
                // }
                // if(request()->B1){
                //     $catg='"B1",'. $catg;
                // }
                // if(request()->D1E){
                //     $catg='"D1E",'. $catg;
                // }
                // if(request()->C1E){
                //     $catg='"C1E",'. $catg;
                // }
                // $newarraynama = rtrim($catg, ", ");
                // $drivdemond->category="[".$newarraynama."]";
                $drivdemond->category=$catg;
                $file=request()->file('profpic');
                $fileName = time().$file->getClientOriginalName();
                $file->move('storage/app/public/uploads', $fileName);
                $drivdemond->profpic='[{"download_link":"/uploads/'.$fileName.'","original_name":"'.  $file->getClientOriginalName().'"}]';
               


                $file=request()->file('signature');

                $fileName = time().$file->getClientOriginalName();

                $file->move('storage/app/public/uploads', $fileName);
                $drivdemond->signature='[{"download_link":"/uploads/'.$fileName.'","original_name":"'.$file->getClientOriginalName().'"}]';
              

                $file=request()->file('orgdl');
                $fileName = time().$file->getClientOriginalName();

                $file->move('storage\app\public\uploads', $fileName);
                $drivdemond->orgdl='[{"download_link":"/uploads/'.$fileName.'","original_name":"'. $file->getClientOriginalName().'"}]';
              
              
                $drivdemond->save();
                  
                $demondrecord=new Demondrecord();
                $demondrecord->userid=Auth::user()->id;
                $demondrecord->amount=$price;
                $demondrecord->operationtype='se désister';
                $demondrecord->servicetype="Permis de conduire";
                $demondrecord->serviceid= $drivdemond->id;
                $demondrecord->save();

                Session::flash('success','L\'étape de la demande est terminée ');

                return redirect()->back();
            }else{
                Session::flash('infor','Pas assez de crédit, veuillez recharger  ');
                return redirect()->back();            }
         }else{
             return Redirect::route('/');
         }
  

            }
            return Redirect::route('login');

            }
//////voyager

            public function voyagesgroup()
            {
                $travels=Travell::paginate(6);

                // $hotelcategories=Hotelcategory::all();
                return view('travel')->with('travels',$travels);
            }
            public function travelemond($id)
            {
                $travel=Travell::find($id);

                return view('travels.demond')->with('travel',$travel);
            }  
            
            public function demondtravel()
            {
                if(Auth::user()){
                    $active=Auth::user()->active;
                    if($active==1){
                        $travel=Travell::find(request()->idtravel);
                        $accommodations= Accommodation::where('travelid', '=', request()->idtravel)->get();
                        $offers= Offer::where('travelid', '=', request()->idtravel)->get();
                           $adult=request()->adult;
                           $childern=request()->childern;
                           $babies=request()->babies;
                           $arrayage=[];
                           $request=request();
                           for ($i=1; $i <= $childern ; $i++) {

                               array_push($arrayage,$request->input('childernage'.$i));
                           }
                        //    dd($arrayage);
                        return view('travels.information')->with('offers',$offers)->with('accommodations',$accommodations)->with('arrayage',$arrayage)->with('babies',$babies)->with('childern',$childern)->with('adult',$adult)->with('travel',$travel);
                 
                    }else{
                        return Redirect::route('/');
                    }
             
           
                       }
                       return Redirect::route('login');
       
             }
             
             public function demondtravelinfor()
             {
                 if(Auth::user()){
                     $active=Auth::user()->active;
                     $travel=Travell::find(request()->idtravel);
                     if($active==1){
                         $price=request()->totalprice;
                       if($price<=Auth::user()->wallet){
                             Auth::user()->wallet=Auth::user()->wallet-$price;
                             Auth::user()->save();
                         $traveldemonds=new Traveldemond();
                         $traveldemonds->travelid=request()->travelid;
                         $traveldemonds->userid=Auth::user()->id;
                     
                         $traveldemonds->accomandid=request()->accom;
                         $traveldemonds->status="En attente";
                         $traveldemonds->priceoffer=request()->priceeoffer;
                         $traveldemonds->offersid=request()->offer;
                         $traveldemonds->tavelprice=request()->totalprice;
 
                         $traveldemonds->adults=request()->adult;
                         $traveldemonds->childern=request()->childern;
                         $traveldemonds->babies=request()->babies;
 
                         //totalprice
                         $traveldemonds->save();
                         
 
                         $iddemond= $traveldemonds->id;
                        
                         $demondrecord=new Demondrecord();
                         $demondrecord->userid=Auth::user()->id;
                         $demondrecord->amount=request()->totalprice;
                         $demondrecord->operationtype='se désister';
                         $demondrecord->servicetype="les voyages de groupe";
                         $demondrecord->serviceid=$iddemond;
                         $demondrecord->save();
         
                             // Session::flash('success','L\'étape de la demande est terminée ');
                    
                             Session::flash('demondid',$iddemond);
                             // Session::flash('success','L\'étape de la demande est terminée ');
                        
                       
                         $typepayments= Typepayment::where('travelid', '=', request()->idtravel)->get();
                            $adult=request()->adult;
                            $childern=request()->childern;
                            $babies=request()->babies;
                            $arrayage=[];
                            $request=request();
                            for ($i=1; $i <= $childern ; $i++) {
 
                                array_push($arrayage,$request->input('childernage'.$i));
                            }
                         //    dd($arrayage);
                         return view('travels.finition')->with('totalprice',request()->totalprice)->with('iddemond',$iddemond)->with('typepayments',$typepayments)->with('arrayage',$arrayage)->with('babies',$babies)->with('childern',$childern)->with('adult',$adult)->with('travel',$travel);
                        }else{
                            Session::flash('infor','Pas assez de crédit, veuillez recharger  ');
                            return Redirect::route('travelemond',['id'=>$travel->id]); 
                        }
                     }else{
                         return Redirect::route('/');
                     }
              
            
                        }
                        return Redirect::route('login');
        
              }


              public function demondtravelfinition()
              {
                  if(Auth::user()){
                      $active=Auth::user()->active;
                      $travel=Travell::find(request()->idtravel);
                      if($active==1){
                          $price=request()->totalprice;
                     
                          $traveldemonds= Traveldemond::find(request()->iddemond);
                         
                          $traveldemonds->civility=request()->Civilit;
                          $traveldemonds->name=request()->name;
                          $traveldemonds->email=request()->email;
                          $traveldemonds->mobile=request()->Mobile;
                          $traveldemonds->typepaymentid=request()->typepayment;
  
                          $traveldemonds->note=request()->note;
                       
  
                          //totalprice
                          $traveldemonds->save();
                          $adult=request()->adult;
                          $childern=request()->childern;
                          $babies=request()->babies;
                          $request=request();
                          for ($i=1; $i <=$adult ; $i++) { 
                              # code...
                              $pepoltravels=new Pepoltravel();
                              $pepoltravels->type=  $request->input('adultetype'.$i);
                              $pepoltravels->fname=  $request->input('adultefname'.$i);
                              $pepoltravels->lname=  $request->input('adultelname'.$i);
                              $pepoltravels->travelid=request()->iddemond;
                              $pepoltravels->save();
                          }
                          for ($i=1; $i <=$childern ; $i++) { 
                            # code...
                            $pepoltravels=new Pepoltravel();
                            $pepoltravels->birth=  $request->input('Enfantsbith'.$i);
                            $pepoltravels->fname=  $request->input('Enfantsfname'.$i);
                            $pepoltravels->lname=  $request->input('Enfantslname'.$i);
                            $pepoltravels->travelid=request()->iddemond;

                            $pepoltravels->save();
                        }
                        for ($i=1; $i <=$babies ; $i++) { 
                            # code...
                            $pepoltravels=new Pepoltravel();
                            $pepoltravels->birth=  $request->input('babiesbith'.$i);
                            $pepoltravels->fname=  $request->input('babiesfname'.$i);
                            $pepoltravels->lname=  $request->input('babieslname'.$i);
                            $pepoltravels->travelid=request()->iddemond;
                            $pepoltravels->save();
                        }
                        Session::flash('success','L\'étape de la demande est terminée ');
                        return Redirect::route('travelemond',['id'=>request()->idtravel]); 
                      }else{
                          return Redirect::route('/');
                      }
               
             
                         }
                         return Redirect::route('login');
         
               }

               
            public function voyagessingle()
            {
                $travels=Singletravel::paginate(6);

                // $hotelcategories=Hotelcategory::all();
                return view('voyagessingle')->with('travels',$travels);
            }
            public function travelsingledemond($id)
            {
                $travel=Singletravel::find($id);

                return view('travelsingle.demond')->with('travel',$travel);
            } 
               public function singledemondsend()
                {
                    if(Auth::user()){
                        $active=Auth::user()->active;
                        $travel=Singletravel::find(request()->idtravel);
                        if($active==1){
                           
                              
                            $traveldemonds=new Singledemond();
                            $traveldemonds->singletravelid=request()->travelid;
                            $traveldemonds->userid=Auth::user()->id;
                        
                            $traveldemonds->departdate=request()->depDate;
                            $traveldemonds->status="En attente";
                            $traveldemonds->numdys=request()->flexibility;
                            $traveldemonds->notes=request()->offer;
                            $traveldemonds->fname=request()->firstName;
    
                            $traveldemonds->lname=request()->lastName;
                            $traveldemonds->mobile=request()->mobile;
                            $traveldemonds->email=request()->email;
                            $traveldemonds->town=request()->city;
                            $traveldemonds->country=request()->country;

                            $traveldemonds->adults=request()->adults;
                            $traveldemonds->child=request()->children;
                            $traveldemonds->babies=request()->bebe;
    
                            //totalprice
                            $traveldemonds->save();
                            
    
                            $iddemond= $traveldemonds->id;
                      
            
                                // Session::flash('success','L\'étape de la demande est terminée ');
                       
                                Session::flash('demondid',$iddemond);
                                Session::flash('donee',1);
                                Session::flash('success','L\'étape de la demande est terminée ');
                       
                                return redirect()->back();
                        }else{
                            return Redirect::route('/');
                        }
                 
               
                           }
                           return Redirect::route('login');
           
                 }

                  
            public function flights()
            {
                $flights=Flight::paginate(6);
                $airlines=Airline::all();

                // $hotelcategories=Hotelcategory::all();
                return view('flights')->with('flights',$flights)->with('airlines',$airlines);
            }
            public function flightdemond($id)
            {
                $flights=Flight::find($id);
                $airlines=Airline::all();

                return view('flights.demond')->with('flights',$flights)->with('airlines',$airlines);  }
                public function flightdemondsend()
                {
                    if(Auth::user()){
                        $active=Auth::user()->active;
                        $flight=Flight::find(request()->flightId);
                        if($active==1){
                            $price=request()->totalprice;
                            if($price<=Auth::user()->wallet){
                                  Auth::user()->wallet=Auth::user()->wallet-$price;
                                  Auth::user()->save();
                            $demondflights= new Demondflight();
                            $demondflights->userid= Auth::user()->id;
                            $demondflights->status="En attente";

                            $demondflights->flightid=request()->flightId;
                            $demondflights->adulte=request()->adult;
                            $demondflights->children=request()->child;
                            $demondflights->babies=request()->bebes;
                            $demondflights->note=request()->message;
    
                            $demondflights->price=request()->totalprice;
                         
    
                            //totalprice
                            $demondflights->save();
                            $adult=request()->adult;
                            $childern=request()->child;
                            $babies=request()->bebes;
                            $request=request();
                            $iddemond=$demondflights->id;
                            for ($i=1; $i <=$adult ; $i++) { 
                                # code...
                                $peopleflights=new Peopleflight();
                                $peopleflights->civity=  $request->input('title_AD_'.$i);
                                $peopleflights->fname=  $request->input('firstName_AD_'.$i);
                                $peopleflights->lname=  $request->input('lastName_AD_'.$i);
                                $peopleflights->birth=  $request->input('age_AD_'.$i);

                                $peopleflights->demondid=$iddemond;
                                $peopleflights->save();
                            }
                            for ($i=1; $i <=$childern ; $i++) { 
                              # code...
                              $peopleflights=new Peopleflight();
                              $peopleflights->birth=  $request->input('age_EN_'.$i);
                              $peopleflights->fname=  $request->input('firstName_EN_'.$i);
                              $peopleflights->lname=  $request->input('lastName_EN_'.$i);
                              $peopleflights->demondid=$iddemond;
  
                              $peopleflights->save();
                          }
                          $flights=Flight::find(request()->flightId);
                          $flights->reserveplace= $flights->reserveplace+ $adult+ $childern;
                          $flights->save();

                          $demondrecord=new Demondrecord();
                          $demondrecord->userid=Auth::user()->id;
                          $demondrecord->amount=request()->totalprice;
                          $demondrecord->operationtype='se désister';
                          $demondrecord->servicetype="flight";
                          $demondrecord->serviceid=  $demondflights->id;
                          $demondrecord->save();
          
                          Session::flash('success','L\'étape de la demande est terminée ');
                          return Redirect::route('flights'); 

                        }else{
                            Session::flash('infor','Pas assez de crédit, veuillez recharger  ');
                            return Redirect::route('flights'); 
                        }
                        }else{
                            return Redirect::route('/');
                        }
                 
               
                           }
                           return Redirect::route('login');
           
                 }
  
            
            
}
