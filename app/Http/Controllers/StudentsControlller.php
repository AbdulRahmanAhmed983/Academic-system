<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Studentdata;
use App\Models\Group;
use App\Models\Country;
use App\Models\National;
use App\Models\Classfication;
use App\Models\Department;
use App\Models\Studystatus;
use App\Models\Certificate;
use App\Models\Specialize;
use App\Models\Militarystatus;
use App\Helpers\General;
use App\Http\Requests\ValidationRequest;
use Illuminate\Support\Facades\Input;
use DB;
class StudentsControlller extends Controller
{   public function __construct()
    {
        $this->middleware('auth');
    }

    use General;
    public function index(){
        $id =0;
        $data =  Studentdata::selection()->get();
        return view('admin.front.index',compact(['data','id']));
    }
         public function getDepartment(Request $request){
            $data['departments'] = Department::where("group_id",$request->group_id)
            ->get(["name","id"]);
            return response()->json($data); 
        }
            public function getSpecializes(Request $request){
                $data['specializes'] = Specialize::where("department_id",$request->department_id)
                    ->get(["name","id"]);
                     return response()->json($data);
            }


    public function AllData($id){
        $dataStd = Studentdata::selections()->find($id);
        return view('admin.front.AllData',compact(['dataStd']));
    }



    public function printData($id){
        $dataStd =  Studentdata::selection()->find($id);
        return view('admin.front.cardData',compact(['dataStd']));
    }
  

    public function addStudents(){

        $data =  Studentdata::selections()->get();
        $pass =  $this->setPass();
        $groups = Group::select('id','name')->get();
        $countries = Country::select('id','name')->get();
        $nationals = National::select('id','name')->get();
        $classfications = Classfication::select('id','name')->get();
        $certificates = Certificate::select('id','name')->get();
        $studystatuses = Studystatus::select('id','name')->get();
        $departments = Department::select('id','name')->get();
        $militarystatus = Militarystatus::select('id','name')->get();
        $Specialize = Specialize::select('id','name')->get();
        $generator ='2022/'.str_pad(Studentdata::count() + 1, 5, "0", STR_PAD_LEFT);
        return view('admin.front.create',compact(['pass','generator','data','groups',
        'countries','nationals','classfications','certificates','studystatuses','departments','militarystatus','Specialize']));
    }

    public function StoreStudents(ValidationRequest $request){

            try{

                $filePath = "";
                if ($request->has('photo')) {
                        $filePath = $this->uploadImage('studentPhoto',$request->photo);
                }
            

                Studentdata::create([
                    
                    'name' =>  $request -> name ,
                    'email' =>  $request ->email ,
                    'national_id' =>  $request ->national_id ,
                    'birth_date' =>  $request ->birth_date ,
                    'country_id' =>  $request ->country_id ,
                    'birth_place' =>  $request ->birth_place ,
                    'username' =>  $request ->username ,
                    'password' =>  $request ->password,
                    'mobile' =>  $request ->mobile ,
                    'address' =>  $request ->address ,
                    'national_number' =>  $request ->national_number ,
                    'immigration_std' =>  $request ->input('immigration_std') ,
                    'gander' =>  $request ->gander ,
                    'certificate_id' =>  $request ->certificate_id,
                    'certificate_date' =>  $request ->certificate_date ,
                    'classfication_id' =>  $request ->classfication_id ,
                    'department_id' =>  $request ->department_id,
                    'studyStatus_id' =>  $request ->studyStatus_id ,
                    'group_id' => $request -> group_id,
                    'religion' =>  $request -> religion ,
                    'military_area' =>  $request -> military_area ,
                    'military_No' =>  $request -> military_No ,
                    'parent_job' =>  $request -> parent_job ,
                    'parent_phone' =>  $request -> parent_phone ,
                    'parent_mobile' =>  $request -> parent_mobile ,
                    'house_phone' =>  $request -> house_phone ,
                    'oher_data' =>  $request -> oher_data,
                    'grades' =>  $request ->grades ,
                    'percentage' =>  $request ->percentage ,
                    'milarityNotes' =>  $request ->milarityNotes ,
                    'classficationNotes' =>  $request ->classficationNotes ,
                    'decision_no' =>  $request ->decision_no ,
                    'decision_date' =>  $request ->decision_date ,
                    'expiry_date' =>  $request ->expiry_date ,
                    'military_situation' =>  $request ->military_situation ,
                    'militarystatus_id' =>  $request ->militarystatus_id ,
                    'sit_no' =>  $request ->sit_no ,
                    'specialize_id' => $request ->specialize_id,
                    'photo' =>  $filePath,
                ]);
                    return redirect()->route('index')->with(['success' => 'تم اضافة الطالب بنجاح']);
            }catch(\Exception $ex){
                return redirect()->route('index')->with(['error' => 'من فضلك برجاء المحاولة مره اخري ']);

            }
    }

        public function EditStudents($id){
            try{
              $dataStd = Studentdata::selections()->find($id);
                if(!$dataStd){
                return redirect()->route('index')->with(['error' => 'هذا الطالب ليس موجود']);
            }
                $groups = Group::select('id','name')->get();
                $countries = Country::select('id','name')->get();
                $nationals = National::select('id','name')->get();
                $classfications = Classfication::select('id','name')->get();
                $certificates = Certificate::select('id','name')->get();
                $studystatuses = Studystatus::select('id','name')->get();
                $departments = Department::select('id','name')->get();
                $militarystatus = Militarystatus::select('id','name')->get();
                $Specialize = Specialize::select('id','name')->get();
                return view('admin.front.edit',compact(['dataStd','groups','countries','nationals',
                'classfications','certificates','studystatuses','departments','militarystatus','Specialize']));
                return response()->json($departments);
            }catch(\Exception $ex){

                return redirect()->route('index')->with(['error' => 'من فضلك برجاء المحاولة مره اخري  ']);

            }
           
        }
        public function UpdateStudents($id,Request $request){
            try{
            $dataStd = Studentdata::find($id);
            if(!$dataStd)
            return redirect()->route('index')->with(['error' => 'من فضلك برجاء المحاولة مره اخري  ']);
            DB::beginTransaction();
            if($request->has('photo')){
                $filePath = $this->uploadImage('studentPhoto',$request->photo);

                Studentdata::where('id',$id)->update([
                    'photo' =>  $filePath,
                ]);
            }

            if (!$request->has('immigration_std'))
            $request->request->add(['immigration_std' => 0]);
             else
            $request->request->add(['immigration_std' => 1]);

            $data = $request->except('_token','photo','id','password');
            Studentdata::where('id',$id)->update($data);
            DB::commit();

            return redirect()->route('index')->with(['success' => 'تم اضافة الطالب بنجاح']);

            }catch(\Exception $ex){
                DB::rollback();
                return redirect()->route('index')->with(['error' => 'من فضلك برجاء المحاولة مره اخري  ']);
            }
        }
        public function delete($id){
            try {
            $dataStd = Studentdata::find($id);
            if (!$dataStd)
                return redirect()->route('index')->with(['error' => 'هذا القسم غير موجود ']);
                $dataStd->delete();
                return redirect()->route('index')->with(['success' => 'تم حذف القسم بنجاح']);
            }catch(\Exception $ex){
                return redirect()->route('index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
            }
        }


}

