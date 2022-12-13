<!DOCTYPE html>
<html>

<head>
    <title>Tourim Registeration System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('assets/img/logo-icon.png')}}"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!-- font awesome -->
    <script src='js/font-awesome.js'></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>

</head>

<body>
    <div class="container-fluid header-container">
        <div class="row">
            <div class="col-12 header-div">
                <img src="{{asset('assets/img/logo.png')}}">
            </div>
        </div>
    </div>

    <div class="container form-container mb-5">
        <form class="form" action="{{route('UpdateStudents',$dataStd->id)}}"
            method="POST"
            enctype="multipart/form-data">
          @csrf
            <!-- personal info -->
            <legend class="click btn">البيانات الشخصية</legend>
            <div id="toogle" class="toogle_personal">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> إسم الطالب رباعى  <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" value="{{$dataStd ->name}}" name="name"> @error("name")
                        <span class="text-danger"> {{$message}}</span> @enderror

                    </div>

                    <label for="inputPassword3" class="col-sm-2 col-form-label">صورة الطالب</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control img-input" id="inputPassword3" value="{{$dataStd->photo}}" name="photo"> @error("photo")
                        <span class="text-danger"> {{$message}}</span> @enderror

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">تاريخ الميلاد <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="inputPassword3"value="{{$dataStd ->birth_date}}" name="birth_date"> @error("bith_date")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">رقم موبايل الطالب <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3"value="{{$dataStd ->mobile}}" name="mobile"> @error("mobile")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> الديانة <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" value="{{$dataStd ->religion}}" name="religion"> @error("religion")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">  البريد الإلكترونى <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" id="inputPassword3" value="{{$dataStd ->email}}"  name="email"> @error("email")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">هاتف المنزل </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="inputPassword3" value="{{$dataStd ->house_phone}}"   name="house_phone">
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> هاتف ولى الأمر 1 <span class="require">*</span></label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="inputPassword3" value="{{$dataStd ->parent_phone}}" name="parent_phone"> @error("parent_phone")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> هاتف ولى الأمر 2 </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="inputPassword3" value="{{$dataStd ->parent_mobile}}" name="parent_mobile">
                    </div>
                </div>

                {{-- GENDER --}}
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">النوع : <span class="require">*</span></label>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineRadio1">ذكر</label>
                        <input id="m" class="form-check-input" type="radio" name="gander" @if($dataStd ->gander == "ذكر")checked @endif  value="ذكر"> @error("gander")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineRadio2">أنثى</label>
                        <input id="f" class="form-check-input" type="radio" name="gander" @if($dataStd ->gander == "انثي")checked @endif value="انثي"> @error("gander")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
	
                    
                </div>
                <div class="row mb-3" id="military">
                    <label for="milinum" class="col-2 col-form-label">الرقم العسكرى <span class="require">*</span></label>
                    <div class="col-2">
                        <input type="text" class="form-control " id="milinum" value="{{$dataStd ->military_No}}" name="military_No"> @error("military_No")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="miliarea" class="col-2 col-form-label"> منطقة التجنيد <span class="require">*</span></label>
                    <div class="col-2">
                        <input type="text" class="form-control " id="miliarea" value="{{$dataStd ->military_area}}" name="military_area"> @error("military_area")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="miliarea" class="col-2 col-form-label">حالة التجنيد<span class="require">*</span></label>
                    <div class="col-sm-2">
                        <select name="militarystatus_id" class="custom-select mb-3" >
                            <optgroup label="من فضلك أختر حالة التجنيد ">
                                @if($militarystatus && $militarystatus -> count() > 0)
                                    @foreach($militarystatus as $militarystatuss)
                                        <option
                                            value="{{$militarystatuss -> id }}"
                                            @if($dataStd -> country_id == $militarystatuss -> id)  selected @endif
                                        >{{$militarystatuss -> name}}</option>
                                    @endforeach
                                @endif
                        </optgroup>

                          </select> @error("militarystatus_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
           
                    <label for="milinum" class="col-2 col-form-label"> رقم القرار<span class="require">*</span></label>
                    <div class="col-2">
                        <input type="text" class="form-control " id="milinum" value="{{$dataStd ->decision_no}}" name="decision_no"> @error("decision_no")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="miliarea" class="col-2 col-form-label">تاريخ القرار <span class="require">*</span></label>
                    <div class="col-2">
                        <input type="text" class="form-control " id="miliarea" value="{{$dataStd ->decision_date}}" name="decision_date"> @error("decision_date")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="miliarea" class="col-1 col-form-label"> تاريخ الانتهاء  <span class="require">*</span></label>
                    <div class="col-3">
                        <input type="text" class="form-control " id="milinotes" value="{{$dataStd ->expiry_date}}" name="expiry_date"> @error("expiry_date")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
              
                   
                    <label for="miliarea" class="col-2 col-form-label">موقف الطالب من التجنيد <span class="require">*</span></label>
                    <div class="col-4">
                        <input type="text" class="form-control " id="miliarea" value="{{$dataStd ->military_situation}}" name="military_situation"> @error("military_situation")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="miliarea" class="col-2 col-form-label">ملاحظات عسكرية<span class="require">*</span></label>
                    <div class="col-4">
                        <input type="text" class="form-control " id="milinotes" value="{{$dataStd ->milarityNotes}}" name="milarityNotes"> @error("milarityNotes")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">مهنة ولى الأمر</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" value="{{$dataStd ->parent_job}}" name="parent_job">
                    </div>

                </div>
            </div>

            <!-- Address Info -->
            <legend class="click-address btn">بيانات الإقامة</legend>
            <div class="toogle_add">

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">دولة الميلاد <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <select name="country_id" class="custom-select mb-3" onchange="countryFunction()" id="country-select">
                            <optgroup label="من فضلك أختر الدولة ">
                                @if($countries && $countries -> count() > 0)
                                    @foreach($countries as $country)
                                        <option
                                            value="{{$country -> id }}"
                                            @if($dataStd -> country_id == $country -> id  )  selected @endif
                                        >{{$country -> name}}</option>
                                    @endforeach
                                @endif
                        </optgroup>

                          </select> @error("country_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>

                    <label for="inputPassword3" class="col-sm-2 col-form-label" id="label-egy">محافظة الميلاد <span class="require">*</span></label>
                    <label for="inputPassword3" class="col-sm-2 col-form-label birth-place" id="label-others">محل الميلاد <span class="require">*</span></label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control img-input" id="inputPassword3" value="{{$dataStd ->birth_place}}" name="birth_place"> @error("birth_place")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">الجنسية <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <select name="national_id" class="custom-select mb-3" onchange="nationalityFunction()" id="nationality-select">
                            <optgroup label="من فضلك أختر الجنسية ">
                                @if($nationals && $nationals -> count() > 0)
                                    @foreach($nationals as $national)
                                        <option
                                            value="{{$national -> id }}"
                                            @if($dataStd -> national_id == $national -> id  )  selected @endif
                                        >{{$national -> name}}</option>
                                    @endforeach
                                @endif
                        </optgroup>

                          </select> @error("national_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>

                    <label for="inputPassword3" class="col-sm-2 col-form-label" id="label-id">الرقم القومى <span class="require">*</span></label>
                    <label for="inputPassword3" class="col-sm-2 col-form-label birth-place" id="label-passport">رقم الباسبور <span class="require">*</span></label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control img-input" id="inputPassword3" value="{{$dataStd ->national_number}}" name="national_number"> @error("national_number")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">العنوان <span class="require">*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control img-input" id="inputPassword3" value="{{$dataStd ->address}}" name="address"> @error("address")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    
                    <div class="form-check col-sm-1">
                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault" name="immigration_std" {{$dataStd ->immigration_std == 1 ? 'checked' : 'not-checked'}}>  
                    </div>
                    <label for="inputEmail3" class="col-sm-3 col-form-label">طالب وافد</label>
                </div>
            </div>
            <!-- Educational Info -->
            <legend class="click-info btn">البيانات العلمية</legend>
            <div class="toogle_info">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">الشهادة الحاصل عليها <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <select name="certificate_id" class="custom-select mb-3" id="certificate-type" onchange="cerificateFunction()">
                            <optgroup label="من فضلك أختر الشهادة ">
                                @if($certificates && $certificates -> count() > 0)
                                    @foreach($certificates as $certificate)
                                        <option
                                            value="{{$certificate -> id }}"
                                            @if($dataStd -> certificate_id == $certificate -> id)  selected @endif
                                        >{{$certificate -> name}}</option>
                                    @endforeach
                                @endif
                        </optgroup>
                          </select> @error("certificate_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="percent" class="col-sm-2 col-form-label">رقم الجلوس<span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="text" value="{{$dataStd->sit_no}}" name="sit_no"  class="form-control" >
                        @error("grades")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="percent" class="col-sm-3 col-form-label">النسبة المئوية<span class="require">*</span></label>
                    <div class="col-sm-2">
                        <input type="text" value="{{$dataStd->grades}}" name="grades" id="mark" class="form-control" >
                        @error("grades")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <span class="percent-span col-sm-1">من</span>
                    <div class="col-sm-2">
                        <input type="text" id="from" class="form-control" readonly>
                    </div>
                    <span class="percent-span col-sm-1">=</span>
                    <div class="col-sm-2">
                        <input id="total" type="text" name="percentage" value="{{$dataStd->percentage}}" class="form-control">
                        @error("percentage")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <span class="percent-span col-sm-1">%</span>

                </div>
                <div class="row mb-3">
                    <label for="Date" class="col-sm-3 col-form-label">تاريخ الحصول على الشهادة <span class="require">*</span></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control img-input" id="Date" disabled>
                    </div>
                    <span class="seperate-line col-sm-1">/</span>
                    <div class="col-sm-3">
                        <select name="certificate_date" class="custom-select mb-3" onchange="dateFunction()" id="date">
                            <option value="2021" @if($dataStd ->certificate_date == '2021' )selected @endif>2021</option>
                            <option value="2022"@if($dataStd ->certificate_date == '2022' )selected @endif>2022</option>
                            <option value="2023"@if($dataStd ->certificate_date == '2023' )selected @endif>2023</option>
                            <option value="2024"@if($dataStd ->certificate_date == '2024' )selected @endif>2024</option>
                            <option value="2025"@if($dataStd ->certificate_date == '2025' )selected @endif>2025</option>
                            <option value="2026"@if($dataStd ->certificate_date == '2026' )selected @endif>2026</option>
                            <option value="2027"@if($dataStd ->certificate_date == '2027' )selected @endif>2027</option>
                            <option value="2028"@if($dataStd ->certificate_date == '2028' )selected @endif>2028</option>
                            <option value="2029"@if($dataStd ->certificate_date == '2029' )selected @endif>2029</option>
                            <option value="2030"@if($dataStd ->certificate_date == '2030' )selected @endif>2030</option>
                          </select> @error("certificate_date")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail30" class="col-sm-2 col-form-label"> تصنيف الطالب <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <select name="classfication_id" class="custom-select mb-3" id="classification" onchange="classficationFunction()">
                            <optgroup label="من فضلك أختر التصنيف ">
                                @if($classfications && $classfications -> count() > 0)
                                    @foreach($classfications as $classfication)
                                        <option
                                            value="{{$classfication -> id }}"
                                            @if($dataStd -> classfication_id == $classfication -> id)  selected @endif
                                        >{{$classfication -> name}}</option>
                                    @endforeach
                                @endif
                        </optgroup>
                          </select> @error("classfication_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="inputEmail30" class="col-sm-2 col-form-label"> الحالة الدراسية <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <select name="studyStatus_id" class="custom-select mb-3">
                            <optgroup label="من فضلك أختر التصنيف ">
                                @if($studystatuses && $studystatuses -> count() > 0)
                                    @foreach($studystatuses as $studystatus)
                                        <option
                                            value="{{$studystatus -> id }}"
                                            @if($dataStd -> studyStatus_id == $studystatus -> id)  selected @endif
                                        >{{$studystatus -> name}}</option>
                                    @endforeach
                                @endif
                        </optgroup>
                          </select> @error("studyStatus_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                 

                </div>
                <div class="row mb-3" id="science-notes">
                    <label for="notes-science" class="col-sm-2 col-form-label">ملاحظات التصنيف</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="notes-science"value="{{$dataStd ->classficationNotes}}" name="classficationNotes">
                    </div>
                </div>
                <div class="row mb-3">         
                    <label for="inputEmail30" class="col-sm-2 col-form-label"> الفرقة الدراسية <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <select name="group_id" class="custom-select mb-3" id="group-dropdown">
                            <option label="من فضلك أختر الفرقة ">
                                @if($groups && $groups -> count() > 0)
                                    @foreach($groups as $group)
                                        <option
                                            value="{{$group -> id }}"
                                            @if($dataStd -> group_id == $group -> id  )  selected @endif
                                        >{{$group -> name}}</option>
                                    @endforeach
                                @endif
                        </option>
                          </select> @error("group_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="inputEmail30" class="col-sm-2 col-form-label">الشعبة <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="text" hidden id="text-department" name="department_id" value="{{@$dataStd->department->name}}">
                        <input type="text" hidden id="id-department" name="department_id" value="{{@$dataStd->department->id}}">

                        <select  name="department_id" class="custom-select mb-3" id="department-dropdown">
                            <optgroup label="من فضلك أختر القسم ">
                                @if($departments && $departments -> count() > 0)
                                @endif
                        </optgroup>           
                          </select> @error("depatment_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    
                  
                </div>
                <div class="row mb-3">
                    <label for="specialize" class="col-sm-2 col-form-label">التخصص</label>
                        <div class="col-sm-4">
                            <input type="text" hidden id="text-specialize" name="specialize_id" value="{{@$dataStd->spcialize->name}}">
                            <input type="text" hidden id="id-specialize" name="specialize_id" value="{{@$dataStd->spcialize->id}}">
                            <select class="custom-select mb-3" name="specialize_id" id="specialize-dropdown">
                                <optgroup label="اختر التخصص">
                                @if($Specialize && $Specialize -> count() > 0)
                                @endif
                            </optgroup>
                            </select>
                        </div>
                 </div>
             
               
            </div>

            <!-- Others -->
            <div class="others">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> كود الطالب</label>
                    <div class="col-sm-4">
                        <input type="text" disabled class="form-control" id="inputEmail3" value="{{$dataStd ->username}}" name="username">
                    </div>

                    <label for="inputPassword3" class="col-sm-2 col-form-label"> الرقم السري</label>
                    <div class="col-sm-4">
                        <input type="text" disabled class="form-control img-input" id="inputPassword3" value="{{$dataStd ->password}}" name="password"> 
                    </div>
                </div>
                
            
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">بيانات أخرى</label>
                    <div class="col-sm-10">
                        <textarea class="form-control other-data" id="inputEmail3" value="{{$dataStd ->oher_data}}" name="oher_data"></textarea>
                    </div>
                </div>
                <!-- Register button -->
                <div class="row mb-3">
                    <div class="col-sm-12 btn-reg">
                        <button type="submit" class="btn btn-success">تسجيل</button>
                    </div>
                </div>
        </form>
        
        </div>
    </div>
    
        <footer class="container-fluid bg-4 foot">
            © 2022 Copyright
            <a class="text-reset fw-bold" href="https://dahab-informatics.com/">Dahab Informatics.com</a>
        </footer>
        <script src="{{asset('assets/js/edit.js')}}"></script>

        <script>

            $(document).ready(function() {   
                    var depname = $('#text-department').val();
                    var depid = $('#id-department').val();
                    if(depname){
                        $("#department-dropdown").append('<option value="'+depid+'">'+depname+'</option>');
                    }


                    var specname = $('#text-specialize').val();
                    console.log(specname);
                    var specid = $('#id-specialize').val();

                    if(specname){
                        $("#specialize-dropdown").append('<option value="'+specid+'">'+specname+'</option>');
                    }    
         
            $('#group-dropdown').on('change', function() {
            var group_id = this.value;
            $("#department-dropdown").html('');
            $.ajax({
            url:"{{url('get-department-by-group')}}",
            type: "POST",
            data: {
            group_id: group_id,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
            $('#department-dropdown').html('<option value="">اختر الشعبة</option>'); 
            $.each(result.departments,function(key,value){
            $("#department-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
            });
            $('#specialize-dropdown').html('<option value="">اختر الشعبة اولا</option>'); 
            }
            });
            });  

            $('#department-dropdown').on('change', function() {
            var department_id = this.value;
            $("#specialize-dropdown").html('');
            $.ajax({
            url:"{{url('get-specializes-by-department')}}",
            type: "POST",
            data: {
            department_id: department_id,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
            $('#specialize-dropdown').html('<option value="">اختر التخصص</option>'); 
            $.each(result.specializes,function(key,value){
            $("#specialize-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
            });
            }
            });
            });
            });
            </script>  
</body>


</html>