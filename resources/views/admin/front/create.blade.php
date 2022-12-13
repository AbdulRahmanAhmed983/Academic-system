<!DOCTYPE html>
<html>

<head>
    <title>Tourim Registeration System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{'assets/img/logo-icon.png'}}" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!-- font awesome -->
    <script src='js/font-awesome.js'></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
    <div class="container-fluid header-container">
        <div class="row">
            <div class="col-12 header-div">
                <img src="{{('assets/img/logo.png')}}">
            </div>
        </div>
    </div>

    <div class="container form-container mb-5">
        <form class="form" action="{{route('StoreStudents')}}"
            method="POST"
            enctype="multipart/form-data">
          @csrf
            <!-- personal info -->
            <legend class="click btn">البيانات الشخصية</legend>
            <div id="toogle" class="toogle_personal">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> إسم الطالب رباعى  <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" value="{{old('name')}}"  name="name"> @error("name")
                        <span class="text-danger"> {{$message}}</span> @enderror

                    </div>

                    <label for="inputPassword3" class="col-sm-2 col-form-label">صورة الطالب</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control img-input" id="inputPassword3" value="{{old('photo')}}" name="photo"> @error("photo")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">تاريخ الميلاد <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" value="{{old('bith_date')}}" id="inputPassword3" name="birth_date"> @error("bith_date")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">رقم موبايل الطالب <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="{{old('mobile')}}" id="inputPassword3" name="mobile"> @error("mobile")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> الديانة <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" value="{{old('religion')}}" name="religion"> @error("religion")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">  البريد الإلكترونى <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" id="inputPassword3" value="{{old('email')}}" name="email"> @error("email")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">هاتف المنزل </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="inputPassword3" value="{{old('house_phone')}}" name="house_phone">
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> هاتف ولى الأمر 1 <span class="require">*</span></label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="inputPassword3" value="{{old('parent_phone')}}" name="parent_phone"> @error("parent_phone")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> هاتف ولى الأمر 2 </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="inputPassword3" value="{{old('parent_mobile')}}" name="parent_mobile">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">النوع : <span class="require">*</span></label>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineRadio1">ذكر</label>
                        <input class="form-check-input" type="radio" name="gander" id="m" value="ذكر" > @error("gander")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineRadio2">أنثى</label>
                        <input class="form-check-input" type="radio" name="gander" id="f" value="انثي"> @error("gander")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>

                </div>
                <div class="row mb-3" id="military">
                    <label for="milinum" class="col-2 col-form-label">الرقم العسكرى <span class="require">*</span></label>
                    <div class="col-2">
                        <input type="text" class="form-control" value="{{old('military_No')}}" id="milinum" name="military_No"> @error("military_No")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="miliarea" class="col-2 col-form-label"> منطقة التجنيد <span class="require">*</span></label>
                    <div class="col-2">
                        <input type="text" class="form-control" value="{{old('military_area')}}"  id="miliarea" name="military_area"> @error("military_area")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="miliarea" class="col-2 col-form-label"> حالة التجنيد </label>
                    <div class="col-2">

                        
                        <select name="militarystatus_id" class="custom-select mb-3">
                            <optgroup label="من فضلك أختر حالة التجنيد  ">
                                @if($militarystatus && $militarystatus -> count() > 0)
        
                                    @foreach($militarystatus as $militarystatuss)
                                        <option
                                        value="{{$militarystatuss -> id }}">{{$militarystatuss -> name}}</option>
                                        @endforeach
                                        @endif
                            </optgroup>

                          </select> @error("militarystatus_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                
                    <label for="milinum" class="col-2 col-form-label">رقم القرار<span class="require">*</span></label>
                    <div class="col-2">
                        <input type="text" class="form-control " id="milinum" value="{{old('decision_no')}}" name="decision_no"> @error("decision_no")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="miliarea" class="col-2 col-form-label"> تاريخ القرار <span class="require">*</span></label>
                    <div class="col-2">
                        <input type="date" class="form-control " id="miliarea" value="{{old('decision_date')}}" name="decision_date"> @error("decision_date")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="miliarea" class="col-2 col-form-label"> تاريخ الانتهاء </label>
                    <div class="col-2">
                        <input type="date" class="form-control " value="{{old('expiry_date')}}" id="miliarea" name="expiry_date"> @error("expiry_date")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="milinum" class="col-2 col-form-label"> موقف الطالب من التجنيد <span class="require">*</span></label>
                    <div class="col-4">
                        <input type="text" class="form-control " id="milinum" value="{{old('military_situation')}}" name="military_situation"> @error("military_situation")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="miliarea" class="col-2 col-form-label">  ملاحظات عسكرية <span class="require">*</span></label>
                    <div class="col-4">
                        <input type="text" class="form-control " value="{{old('military_area')}}" id="miliarea" name="military_area"> @error("military_area")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">مهنة ولى الأمر</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('parent_job')}}" id="inputPassword3" name="parent_job">
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
                                        value="{{$country -> id }}">{{$country -> name}}</option>
                                        @endforeach
                                        @endif
                            </optgroup>

                          </select> @error("country_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>

                    <label for="inputPassword3" class="col-sm-2 col-form-label" id="label-egy">محافظة الميلاد <span class="require">*</span></label>
                    <label for="inputPassword3" class="col-sm-2 col-form-label birth-place" id="label-others">محل الميلاد <span class="require">*</span></label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control img-input" id="inputPassword3" value="{{old('birth_place')}}" name="birth_place"> @error("birth_place")
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
                                        value="{{$national -> id }}">{{$national -> name}}</option>
                                        @endforeach
                                        @endif
                            </optgroup>

                          </select> @error("national_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>

                    <label for="inputPassword3" class="col-sm-2 col-form-label" id="label-id">الرقم القومى <span class="require">*</span></label>
                    <label for="inputPassword3" class="col-sm-2 col-form-label birth-place" id="label-passport">رقم الباسبور <span class="require">*</span></label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control img-input" id="inputPassword3" name="national_number"> @error("national_number")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">العنوان <span class="require">*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control img-input" id="inputPassword3" value="{{old('address')}}" name="address"> @error("address")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>

                    <div class="form-check col-sm-1">
                        <input class="form-check-input" type="checkbox"value="1" id="flexCheckDefault" value="وافد" name="immigration_std">
                    </div>
                    <label for="inputEmail3" class="col-sm-3 col-form-label">طالب وافد</label>
                </div>
            </div>
            <!-- Educational Info -->
            <legend class="click-info btn">البيانات العلمية</legend>
            <div class="toogle_info">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">الشهادة الحاصل عليها <span class="require">*</span></label>
                    <div class="col-sm-5">
                        <select name="certificate_id" class="custom-select mb-3" id="certificate-type" onchange="cerificateFunction()">
                            <optgroup label="من فضلك أختر الشهادة ">
                                @if($certificates && $certificates -> count() > 0)
        
                                    @foreach($certificates as $certificate)
                                        <option
                                        value="{{$certificate -> id }}">{{$certificate -> name}}</option>
                                        @endforeach
                                        @endif
                            </optgroup>
                          </select> @error("certificate_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="percent" class="col-sm-2 col-form-label">رقم الجلوس<span class="require">*</span></label>
                    <div class="col-sm-3">
                        <input type="text" value="{{old('sit_no')}}" name="sit_no" class="form-control">
                       
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="percent" class="col-sm-3 col-form-label">النسبة المئوية<span class="require">*</span></label>
                    <div class="col-sm-2">
                        <input type="text" id="mark" name="grades" class="form-control">
                        @error("grades")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <span class="percent-span col-sm-1">من</span>
                    <div class="col-sm-2">
                        <input type="text" id="from" class="form-control" readonly>
                    </div>
                    <span class="percent-span col-sm-1">=</span>
                    <div class="col-sm-2">
                        <input id="total" type="text" name="percentage" class="form-control" readonly>
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
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option> 
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                          </select> @error("certificate_date")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail30" class="col-sm-2 col-form-label"> تصنيف الطالب <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <select name="classfication_id" class="custom-select mb-3" id="classfication" onchange="classficationFunction()">
                            <optgroup label="من فضلك أختر التصنيف ">
                                @if($classfications && $classfications -> count() > 0)
        
                                    @foreach($classfications as $classfication)
                                        <option
                                        value="{{$classfication -> id }}">{{$classfication -> name}}</option>
                                        @endforeach
                                        @endif
                            </optgroup>
                          </select> @error("classfication_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="inputEmail30" class="col-sm-2 col-form-label"> الحالة الدراسية <span class="require">*</span></label>
                    <div class="col-sm-4" >
                        <select name="studyStatus_id" class="custom-select mb-3">
                            <optgroup label="من فضلك أختر الحالة الدراسية ">
                                @if($studystatuses && $studystatuses -> count() > 0)
        
                                    @foreach($studystatuses as $studystatus)
                                        <option
                                        value="{{$studystatus -> id }}">{{$studystatus -> name}}</option>
                                        @endforeach
                                        @endif
                            </optgroup>
                          </select> @error("studyStatus_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>

                </div>
                <div class="row mb-3">
                    <label id="science-notes-label"  for="notes-science" class="col-sm-2 col-form-label">ملاحظات التصنيف</label>
                    <div class="col-sm-4" id="science-notes" >
                        <input type="text" class="form-control " value="{{old('classficationNotes')}}" id="notes-science" name="classficationNotes">
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
                                        value="{{$group -> id }}">{{$group -> name}}</option>
                                        @endforeach
                                        @endif
                            </option>
                          </select> @error("group_study")
                        <span class="text-danger"> {{$message}}</span> @enderror
                        </div>
                      
                </div>
              
                <div class="row mb-3">
                    <label for="inputEmail30" class="col-sm-2 col-form-label">الشعبة  <span class="require">*</span></label>
                    <div class="col-sm-4">
                        <select name="department_id" class="custom-select mb-3" id="department-dropdown">
                            {{-- <optgroup label="من فضلك أختر الحالة القسم ">
                                @if($departments && $departments -> count() > 0)
        
                                    @foreach($departments as $department)
                                        <option
                                        value="{{$department -> id }}">{{$department -> name}}</option>
                                        @endforeach
                                        @endif
                            </optgroup>         --}}
                          </select>
                           @error("depatment_id")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                    <label for="specialize" class="col-sm-2 col-form-label">التخصص</label>
                    <div class="col-sm-4">
                        <select class="custom-select mb-3" name="specialize_id" id="specialize-dropdown">
                        </select>
                    </div>
                </div>
            </div>

            <!-- Others -->
            <div class="others">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> كود الطالب</label>
                    <div class="col-sm-4">
                        <input type="text"  class="form-control" id="inputEmail3" value="{{$generator}}" name="username" readonly> 
                        @error("username")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>

                    <label for="inputPassword3" class="col-sm-2 col-form-label"> الرقم السري</label>
                    <div class="col-sm-4">
                        <input type="text"  class="form-control img-input" value="{{$pass}}" id="inputPassword3" name="password" readonly>
                         @error("password")
                        <span class="text-danger"> {{$message}}</span> @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">بيانات أخرى</label>
                    <div class="col-sm-10">
                        <textarea class="form-control other-data" id="inputEmail3" name="oher_data"></textarea>
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
        <footer class=" bg-4 foot">
            © 2022 Copyright
            <a class="text-reset fw-bold" href="https://dahab-informatics.com/">Dahab Informatics.com</a>
        </footer>
        <script src="{{'assets/js/footer.js'}}"></script>

        <script>
            $(document).ready(function() {
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