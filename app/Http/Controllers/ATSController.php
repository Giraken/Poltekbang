<?php
//php artisan make:migration create_messages_tables --create=messages
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ATSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function search()
    {
        return view('search');
    }
    public function filled_message()
    {
        return view('filed-message');
    }

    public function filled_messagePost(Request $request)
    {
        $iduser = Auth::user()->id;
        $user = DB::table('users')->where('id',$iduser)->first();
        $type = 'FPL'; //tipe pesan
        $validateData = $request->validate([
            'status' => 'required|in:send-and-save,save',
            'permit-letter' => 'nullable|max:2000|mimes:png,jpg,jpeg,pdf,docx',
            'priority' => 'required|in:ff,dd,gg,kk,ss',
            'address1' => 'nullable|string',
            'address2' => 'nullable|string',
            'address3' => 'nullable|string',
            'address4' => 'nullable|string',
            'address5' => 'nullable|string',
            'address6' => 'nullable|string',
            'address7' => 'nullable|string',
            'address8' => 'nullable|string',
            'address9' => 'nullable|string',
            'address10' => 'nullable|string',
            'address11' => 'nullable|string',
            'address12' => 'nullable|string',
            'address13' => 'nullable|string',
            'address14' => 'nullable|string',
            'address15' => 'nullable|string',
            'address16' => 'nullable|string',
            'address17' => 'nullable|string',
            'address18' => 'nullable|string',
            'address19' => 'nullable|string',
            'address20' => 'nullable|string',
            'address21' => 'nullable|string',
            'address22' => 'nullable|string',
            'address23' => 'nullable|string',
            'address24' => 'nullable|string',
            'address25' => 'nullable|string',
            'address26' => 'nullable|string',
            'address27' => 'nullable|string',
            'address28' => 'nullable|string',
            'aircraft-id' => 'required|string',
            'reg' => 'required|string',
            'rules' => 'required|in:IFR,VFR,Y,Z',
            'type' => 'required|in:S,N,G,M,X',
            'number' => 'required|numeric',
            'type-aircraft' =>  'required|string',
            'fpl_wake_turb' => 'required|string',
            'equipment-aircraft' => 'required|string',
            'equipment-surveillance' => 'required|string',
            'dep-id' => 'required|string',
            'eobt' => 'required|numeric',
            'dest-id' => 'required|string',
            'dof' => 'required|string',
            'eet' => 'required|string',
            '1st-altn-ad' => 'required|string',
            '2nd-altn-ad' => 'required|string',
            'cruising-speed' => 'required|string',
            'cruising-level' => 'required|string',
            'routeP' => 'required|string',
            'STS' => 'nullable|string',
            'PBN' => 'nullable|string',
            'NAV' => 'nullable|string',
            'COM' => 'nullable|string',
            'DAT' => 'nullable|string',
            'SUR' => 'nullable|string',
            'DEP' => 'nullable|string',
            'DEST' => 'nullable|string',
            'REG' => 'nullable|string',
            'EET' => 'nullable|string',
            'SEL' => 'nullable|string',
            'TYP' => 'nullable|string',
            'CODE' => 'nullable|string',
            'DLE' => 'nullable|string',
            'OPR' => 'nullable|string',
            'ORGN' => 'nullable|string',
            'PER' => 'nullable|string',
            'ALTN' => 'nullable|string',
            'RALT' => 'nullable|string',
            'TALT' => 'nullable|string',
            'RIF' => 'nullable|string',
            'RMK' => 'nullable|string',
            'endurance' => 'nullable|string',
            'supp_people' => 'nullable|string',
            'supp_radio.*' => 'nullable|string',
            'supp_survival.*' => 'nullable|string',
            'supp_jacket.*' => 'nullable|string',
            'supp_cover' => 'nullable|string',
            'colour' => 'nullable|string',
            'aircraft-colour' => 'nullable|string',
            'supp_remark' => 'nullable|string',
            'supp_remark_desc' => 'nullable|string',
            'supp_pilot' => 'nullable|string',
            'supp_reserved' => 'nullable|string',
            'filled-by' => 'required|string',
            'accept' => 'required'    
        ]);

        DB::table('messages')->insert([
            'user_id' => $user->id,
            'type' => $type,
            'aircraft_id' => $validateData['aircraft-id'],
            'dep_id' => $validateData['dep-id'],
            'time' => $validateData['eobt'],
            'dest_id' => $validateData['dest-id'],
            'dof' => $validateData['dof'],
            'fpl_status' => $validateData['status'],
            'fpl_permit' => $validateData['permit-letter'],
            'fpl_reg' => $validateData['reg'],
            'fpl_flight_rules' => $validateData['rules'],
            'fpl_flight_type' => $validateData['type'],
            'fpl_number' => $validateData['number'],
            'fpl_aircraft_type' => $validateData['type-aircraft'],
            'fpl_wake_turb' => $validateData['fpl_wake_turb'],
            'fpl_aircraft_equipment' => $validateData['equipment-aircraft'],
            'fpl_surveillance_equipment' => $validateData['equipment-surveillance'],
            'fpl_eet' => $validateData['eet'],
            'fpl_1_altn' => $validateData['1st-altn-ad'],
            'fpl_2_altn' => $validateData['2nd-altn-ad'],
            'fpl_cruising_speed' => $validateData['cruising-speed'],
            'fpl_cruising_level' => $validateData['cruising-level'],
            'filed_by' => $validateData['filled-by'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        $message = DB::table('messages')->where('user_id',$iduser)->latest('created_at')->first();

        $ATK = DB::table('aftn_header')->insert([
            'priority' => $validateData['priority'],
            'message_id' => $message->id,
            'user_id' => $iduser,
            'originator' => $user->name,
            'address1' => $validateData['address1'],
            'address2' => $validateData['address2'],
            'address3' => $validateData['address3'],
            'address4' => $validateData['address4'],
            'address5' => $validateData['address5'],
            'address6' => $validateData['address6'],
            'address7' => $validateData['address7'],
            'address8' => $validateData['address8'],
            'address9' => $validateData['address9'],
            'address10' => $validateData['address10'],
            'address11' => $validateData['address11'],
            'address12' => $validateData['address12'],
            'address13' => $validateData['address13'],
            'address14' => $validateData['address14'],
            'address15' => $validateData['address15'],
            'address16' => $validateData['address16'],
            'address17' => $validateData['address17'],
            'address18' => $validateData['address18'],
            'address19' => $validateData['address19'],
            'address20' => $validateData['address20'],
            'address21' => $validateData['address21'],
            'address22' => $validateData['address22'],
            'address23' => $validateData['address23'],
            'address24' => $validateData['address24'],
            'address25' => $validateData['address25'],
            'address26' => $validateData['address26'],
            'address27' => $validateData['address27'],
            'address28' => $validateData['address28'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        $radio = implode(" ",$validateData['supp_radio']);
        $survival = implode(" ",$validateData['supp_survival']);
        $jacket = implode(" ",$validateData['supp_jacket']);
        DB::table('additional_informations')->insert([
            'message_id' => $message->id,
            'route' => $validateData['routeP'],
            'STS/' => $validateData['STS'],
            'PBN/' => $validateData['PBN'],
            'NAV/' => $validateData['NAV'],
            'COM/' => $validateData['COM'],
            'DAT/' => $validateData['DAT'],
            'SUR/' => $validateData['SUR'],
            'DEP/' => $validateData['DEP'],
            'DEST/' => $validateData['DEST'],
            'REG/' => $validateData['REG'],
            'EET/' => $validateData['EET'],
            'SEL/' => $validateData['SEL'],
            'TYP/' => $validateData['TYP'],
            'CODE/' => $validateData['CODE'],
            'DLE/' => $validateData['DLE'],
            'OPR/' => $validateData['OPR'],
            'ORGN/' => $validateData['ORGN'],
            'PER/' => $validateData['PER'],
            'ALTN/' => $validateData['ALTN'],
            'RALT/' => $validateData['RALT'],
            'TALT/' => $validateData['TALT'],
            'RIF/' => $validateData['RIF'],
            'RMK/' => $validateData['RMK'],
            'supp_endurance' => $validateData['endurance'],
            'supp_people' => $validateData['supp_people'],
            'supp_radio' => $radio,
            'supp_survival' => $survival,
            'supp_jacket' => $jacket,
            'supp_cover' => $validateData['supp_cover'],
            'supp_color' => $validateData['colour'],
            'supp_aircraft_color' => $validateData['aircraft-colour'],
            'supp_remark' => $validateData['supp_remark'],
            'supp_remark_desc' => $validateData['supp_remark_desc'],
            'supp_pilot' => $validateData['supp_pilot'],
            'supp_reserved' => $validateData['supp_reserved'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        
        return redirect()->route('filled-message')->with('berhasil','Pesan telah berhasil dikirim');
    }
    public function delay()
    {
        return view('delay');       
    }
    public function delayPost(Request $request)
    {
        $iduser = Auth::user()->id;
        $user = DB::table('users')->where('id',$iduser)->first();
        $type = 'DLA'; //tipe pesan
        $validateData = $request->validate([
            'priority' => 'required|in:ff,dd,gg,kk,ss',
            'aircraft-id' => 'required|string',
            'dep-id' => 'required|string',
            'time' => 'required|numeric',
            'dest-id' => 'required|string',
            'dof' => 'required|string',
            'filled-by' => 'required|string',
            'address1' => 'nullable|string',
            'address2' => 'nullable|string',
            'address3' => 'nullable|string',
            'address4' => 'nullable|string',
            'address5' => 'nullable|string',
            'address6' => 'nullable|string',
            'address7' => 'nullable|string',
            'address8' => 'nullable|string',
            'address9' => 'nullable|string',
            'address10' => 'nullable|string',
            'address11' => 'nullable|string',
            'address12' => 'nullable|string',
            'address13' => 'nullable|string',
            'address14' => 'nullable|string',
            'address15' => 'nullable|string',
            'address16' => 'nullable|string',
            'address17' => 'nullable|string',
            'address18' => 'nullable|string',
            'address19' => 'nullable|string',
            'address20' => 'nullable|string',
            'address21' => 'nullable|string',
            'address22' => 'nullable|string',
            'address23' => 'nullable|string',
            'address24' => 'nullable|string',
            'address25' => 'nullable|string',
            'address26' => 'nullable|string',
            'address27' => 'nullable|string',
            'address28' => 'nullable|string',
        ]);

        DB::table('messages')->insert([
            'user_id' => $user->id,
            'type' => $type,
            'aircraft_id' => $validateData['aircraft-id'],
            'dep_id' => $validateData['dep-id'],
            'time' => $validateData['time'],
            'dest_id' => $validateData['dest-id'],
            'dof' => $validateData['dof'],
            'filed_by' => $validateData['filled-by'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        $message = DB::table('messages')->where('user_id',$iduser)->latest('created_at')->first();

        $ATK = DB::table('aftn_header')->insert([
            'priority' => $validateData['priority'],
            'message_id' => $message->id,
            'user_id' => $iduser,
            'originator' => $user->name,
            'address1' => $validateData['address1'],
            'address2' => $validateData['address2'],
            'address3' => $validateData['address3'],
            'address4' => $validateData['address4'],
            'address5' => $validateData['address5'],
            'address6' => $validateData['address6'],
            'address7' => $validateData['address7'],
            'address8' => $validateData['address8'],
            'address9' => $validateData['address9'],
            'address10' => $validateData['address10'],
            'address11' => $validateData['address11'],
            'address12' => $validateData['address12'],
            'address13' => $validateData['address13'],
            'address14' => $validateData['address14'],
            'address15' => $validateData['address15'],
            'address16' => $validateData['address16'],
            'address17' => $validateData['address17'],
            'address18' => $validateData['address18'],
            'address19' => $validateData['address19'],
            'address20' => $validateData['address20'],
            'address21' => $validateData['address21'],
            'address22' => $validateData['address22'],
            'address23' => $validateData['address23'],
            'address24' => $validateData['address24'],
            'address25' => $validateData['address25'],
            'address26' => $validateData['address26'],
            'address27' => $validateData['address27'],
            'address28' => $validateData['address28'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        
        return redirect()->route('delay')->with('berhasil','Pesan telah berhasil dikirim');
    }

    public function modification()
    {
        return view('modification');
    }

    public function modificationPost(Request $request)
    {
        $iduser = Auth::user()->id;
        $user = DB::table('users')->where('id',$iduser)->first();
        $type = 'CHG'; //tipepesan
        $validateData = $request->validate([
            'priority' => 'required|in:ff,dd,gg,kk,ss',
            'aircraft-id' => 'required|string',
            'dep-id' => 'required|string',
            'time' => 'required|numeric',
            'dest-id' => 'required|string',
            'dof' => 'required|string',
            'amendment' => 'required|string',
            'filled-by' => 'required|string',
            'address1' => 'nullable|string',
            'address2' => 'nullable|string',
            'address3' => 'nullable|string',
            'address4' => 'nullable|string',
            'address5' => 'nullable|string',
            'address6' => 'nullable|string',
            'address7' => 'nullable|string',
            'address8' => 'nullable|string',
            'address9' => 'nullable|string',
            'address10' => 'nullable|string',
            'address11' => 'nullable|string',
            'address12' => 'nullable|string',
            'address13' => 'nullable|string',
            'address14' => 'nullable|string',
            'address15' => 'nullable|string',
            'address16' => 'nullable|string',
            'address17' => 'nullable|string',
            'address18' => 'nullable|string',
            'address19' => 'nullable|string',
            'address20' => 'nullable|string',
            'address21' => 'nullable|string',
            'address22' => 'nullable|string',
            'address23' => 'nullable|string',
            'address24' => 'nullable|string',
            'address25' => 'nullable|string',
            'address26' => 'nullable|string',
            'address27' => 'nullable|string',
            'address28' => 'nullable|string',
        ]);
        
        DB::table('messages')->insert([
            'user_id' => $user->id,
            'type' => $type,
            'aircraft_id' => $validateData['aircraft-id'],
            'dep_id' => $validateData['dep-id'],
            'time' => $validateData['time'],
            'dest_id' => $validateData['dest-id'],
            'dof' => $validateData['dof'],
            'chg_amandement' => $validateData['amendment'],
            'filed_by' => $validateData['filled-by'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        
        $message = DB::table('messages')->where('user_id',$iduser)->latest('created_at')->first();

        $ATK = DB::table('aftn_header')->insert([
            'priority' => $validateData['priority'],
            'message_id' => $message->id,
            'user_id' => $iduser,
            'originator' => $user->name,
            'address1' => $validateData['address1'],
            'address2' => $validateData['address2'],
            'address3' => $validateData['address3'],
            'address4' => $validateData['address4'],
            'address5' => $validateData['address5'],
            'address6' => $validateData['address6'],
            'address7' => $validateData['address7'],
            'address8' => $validateData['address8'],
            'address9' => $validateData['address9'],
            'address10' => $validateData['address10'],
            'address11' => $validateData['address11'],
            'address12' => $validateData['address12'],
            'address13' => $validateData['address13'],
            'address14' => $validateData['address14'],
            'address15' => $validateData['address15'],
            'address16' => $validateData['address16'],
            'address17' => $validateData['address17'],
            'address18' => $validateData['address18'],
            'address19' => $validateData['address19'],
            'address20' => $validateData['address20'],
            'address21' => $validateData['address21'],
            'address22' => $validateData['address22'],
            'address23' => $validateData['address23'],
            'address24' => $validateData['address24'],
            'address25' => $validateData['address25'],
            'address26' => $validateData['address26'],
            'address27' => $validateData['address27'],
            'address28' => $validateData['address28'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        
        return redirect()->route('modification')->with('berhasil','Pesan telah berhasil dikirim');
    }

    public function cancellation()
    {
        return view('cancellation');
    }

    public function cancellationPost(Request $request)
    {
        $iduser = Auth::user()->id;
        $user = DB::table('users')->where('id',$iduser)->first();
        $type = 'CNL'; //tipe pesan
        $validateData = $request->validate([
            'priority' => 'required|in:ff,dd,gg,kk,ss',
            'aircraft-id' => 'required|string',
            'dep-id' => 'required|string',
            'time' => 'required|numeric',
            'dest-id' => 'required|string',
            'dof' => 'required|string',
            'filled-by' => 'required|string',
            'address1' => 'nullable|string',
            'address2' => 'nullable|string',
            'address3' => 'nullable|string',
            'address4' => 'nullable|string',
            'address5' => 'nullable|string',
            'address6' => 'nullable|string',
            'address7' => 'nullable|string',
            'address8' => 'nullable|string',
            'address9' => 'nullable|string',
            'address10' => 'nullable|string',
            'address11' => 'nullable|string',
            'address12' => 'nullable|string',
            'address13' => 'nullable|string',
            'address14' => 'nullable|string',
            'address15' => 'nullable|string',
            'address16' => 'nullable|string',
            'address17' => 'nullable|string',
            'address18' => 'nullable|string',
            'address19' => 'nullable|string',
            'address20' => 'nullable|string',
            'address21' => 'nullable|string',
            'address22' => 'nullable|string',
            'address23' => 'nullable|string',
            'address24' => 'nullable|string',
            'address25' => 'nullable|string',
            'address26' => 'nullable|string',
            'address27' => 'nullable|string',
            'address28' => 'nullable|string',
        ]);

        DB::table('messages')->insert([
            'user_id' => $user->id,
            'type' => $type,
            'aircraft_id' => $validateData['aircraft-id'],
            'dep_id' => $validateData['dep-id'],
            'time' => $validateData['time'],
            'dest_id' => $validateData['dest-id'],
            'dof' => $validateData['dof'],
            'filed_by' => $validateData['filled-by'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        $message = DB::table('messages')->where('user_id',$iduser)->latest('created_at')->first();

        $ATK = DB::table('aftn_header')->insert([
            'priority' => $validateData['priority'],
            'message_id' => $message->id,
            'user_id' => $iduser,
            'originator' => $user->name,
            'address1' => $validateData['address1'],
            'address2' => $validateData['address2'],
            'address3' => $validateData['address3'],
            'address4' => $validateData['address4'],
            'address5' => $validateData['address5'],
            'address6' => $validateData['address6'],
            'address7' => $validateData['address7'],
            'address8' => $validateData['address8'],
            'address9' => $validateData['address9'],
            'address10' => $validateData['address10'],
            'address11' => $validateData['address11'],
            'address12' => $validateData['address12'],
            'address13' => $validateData['address13'],
            'address14' => $validateData['address14'],
            'address15' => $validateData['address15'],
            'address16' => $validateData['address16'],
            'address17' => $validateData['address17'],
            'address18' => $validateData['address18'],
            'address19' => $validateData['address19'],
            'address20' => $validateData['address20'],
            'address21' => $validateData['address21'],
            'address22' => $validateData['address22'],
            'address23' => $validateData['address23'],
            'address24' => $validateData['address24'],
            'address25' => $validateData['address25'],
            'address26' => $validateData['address26'],
            'address27' => $validateData['address27'],
            'address28' => $validateData['address28'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        
        return redirect()->route('cancellation')->with('berhasil','Pesan telah berhasil dikirim');
    }

    public function departure()
    {
        return view('departure');
    }

    public function departurePost(Request $request)
    {
        $iduser = Auth::user()->id;
        $user = DB::table('users')->where('id',$iduser)->first();
        $type = 'DEP'; //tipe pesan
        $validateData = $request->validate([
            'priority' => 'required|in:ff,dd,gg,kk,ss',
            'aircraft-id' => 'required|string',
            'ssr-mode' => 'required|string',
            'code' => 'required|string',
            'dep-id' => 'required|string',
            'time' => 'required|numeric',
            'dest-id' => 'required|string',
            'dof' => 'required|string',
            'filled-by' => 'required|string',
            'address1' => 'nullable|string',
            'address2' => 'nullable|string',
            'address3' => 'nullable|string',
            'address4' => 'nullable|string',
            'address5' => 'nullable|string',
            'address6' => 'nullable|string',
            'address7' => 'nullable|string',
            'address8' => 'nullable|string',
            'address9' => 'nullable|string',
            'address10' => 'nullable|string',
            'address11' => 'nullable|string',
            'address12' => 'nullable|string',
            'address13' => 'nullable|string',
            'address14' => 'nullable|string',
            'address15' => 'nullable|string',
            'address16' => 'nullable|string',
            'address17' => 'nullable|string',
            'address18' => 'nullable|string',
            'address19' => 'nullable|string',
            'address20' => 'nullable|string',
            'address21' => 'nullable|string',
            'address22' => 'nullable|string',
            'address23' => 'nullable|string',
            'address24' => 'nullable|string',
            'address25' => 'nullable|string',
            'address26' => 'nullable|string',
            'address27' => 'nullable|string',
            'address28' => 'nullable|string',
        ]);

        DB::table('messages')->insert([
            'user_id' => $user->id,
            'type' => $type,
            'aircraft_id' => $validateData['aircraft-id'],
            'dep_ssr' => $validateData['ssr-mode'],
            'dep_code' => $validateData['code'],
            'dep_id' => $validateData['dep-id'],
            'time' => $validateData['time'],
            'dest_id' => $validateData['dest-id'],
            'dof' => $validateData['dof'],
            'filed_by' => $validateData['filled-by'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        $message = DB::table('messages')->where('user_id',$iduser)->latest('created_at')->first();

        $ATK = DB::table('aftn_header')->insert([
            'priority' => $validateData['priority'],
            'message_id' => $message->id,
            'user_id' => $iduser,
            'originator' => $user->name,
            'address1' => $validateData['address1'],
            'address2' => $validateData['address2'],
            'address3' => $validateData['address3'],
            'address4' => $validateData['address4'],
            'address5' => $validateData['address5'],
            'address6' => $validateData['address6'],
            'address7' => $validateData['address7'],
            'address8' => $validateData['address8'],
            'address9' => $validateData['address9'],
            'address10' => $validateData['address10'],
            'address11' => $validateData['address11'],
            'address12' => $validateData['address12'],
            'address13' => $validateData['address13'],
            'address14' => $validateData['address14'],
            'address15' => $validateData['address15'],
            'address16' => $validateData['address16'],
            'address17' => $validateData['address17'],
            'address18' => $validateData['address18'],
            'address19' => $validateData['address19'],
            'address20' => $validateData['address20'],
            'address21' => $validateData['address21'],
            'address22' => $validateData['address22'],
            'address23' => $validateData['address23'],
            'address24' => $validateData['address24'],
            'address25' => $validateData['address25'],
            'address26' => $validateData['address26'],
            'address27' => $validateData['address27'],
            'address28' => $validateData['address28'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        
        return redirect()->route('departure')->with('berhasil','Pesan telah berhasil dikirim');
    }

    public function arrival()
    {
        return view('arrival');
    }

    public function arrivalPost(Request $request)
    {
        $iduser = Auth::user()->id;
        $user = DB::table('users')->where('id',$iduser)->first();
        $type = 'ARR'; //tipe pesan
        $validateData = $request->validate([
            'priority' => 'required|in:ff,dd,gg,kk,ss',
            'aircraft-id' => 'required|string',
            'dep-id' => 'required|string',
            'time' => 'required|numeric',
            'arr-id' => 'required|string',
            'arr_time' => 'required|string',
            'arrival-aerodrome' => 'required|string',
            'filled-by' => 'required|string',
            'address1' => 'nullable|string',
            'address2' => 'nullable|string',
            'address3' => 'nullable|string',
            'address4' => 'nullable|string',
            'address5' => 'nullable|string',
            'address6' => 'nullable|string',
            'address7' => 'nullable|string',
            'address8' => 'nullable|string',
            'address9' => 'nullable|string',
            'address10' => 'nullable|string',
            'address11' => 'nullable|string',
            'address12' => 'nullable|string',
            'address13' => 'nullable|string',
            'address14' => 'nullable|string',
            'address15' => 'nullable|string',
            'address16' => 'nullable|string',
            'address17' => 'nullable|string',
            'address18' => 'nullable|string',
            'address19' => 'nullable|string',
            'address20' => 'nullable|string',
            'address21' => 'nullable|string',
            'address22' => 'nullable|string',
            'address23' => 'nullable|string',
            'address24' => 'nullable|string',
            'address25' => 'nullable|string',
            'address26' => 'nullable|string',
            'address27' => 'nullable|string',
            'address28' => 'nullable|string',
        ]);

        DB::table('messages')->insert([
            'user_id' => $user->id,
            'type' => $type,
            'aircraft_id' => $validateData['aircraft-id'],
            'dep_id' => $validateData['dep-id'],
            'time' => $validateData['time'],
            'arr_id' => $validateData['arr-id'],
            'arr_time' => $validateData['arr_time'],
            'arr_aerodrome' => $validateData['arrival-aerodrome'],
            'filed_by' => $validateData['filled-by'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        $message = DB::table('messages')->where('user_id',$iduser)->latest('created_at')->first();

        $ATK = DB::table('aftn_header')->insert([
            'priority' => $validateData['priority'],
            'message_id' => $message->id,
            'user_id' => $iduser,
            'originator' => $user->name,
            'address1' => $validateData['address1'],
            'address2' => $validateData['address2'],
            'address3' => $validateData['address3'],
            'address4' => $validateData['address4'],
            'address5' => $validateData['address5'],
            'address6' => $validateData['address6'],
            'address7' => $validateData['address7'],
            'address8' => $validateData['address8'],
            'address9' => $validateData['address9'],
            'address10' => $validateData['address10'],
            'address11' => $validateData['address11'],
            'address12' => $validateData['address12'],
            'address13' => $validateData['address13'],
            'address14' => $validateData['address14'],
            'address15' => $validateData['address15'],
            'address16' => $validateData['address16'],
            'address17' => $validateData['address17'],
            'address18' => $validateData['address18'],
            'address19' => $validateData['address19'],
            'address20' => $validateData['address20'],
            'address21' => $validateData['address21'],
            'address22' => $validateData['address22'],
            'address23' => $validateData['address23'],
            'address24' => $validateData['address24'],
            'address25' => $validateData['address25'],
            'address26' => $validateData['address26'],
            'address27' => $validateData['address27'],
            'address28' => $validateData['address28'],
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        
        return redirect()->route('arrival')->with('berhasil','Pesan telah berhasil dikirim');
    }
    
}
