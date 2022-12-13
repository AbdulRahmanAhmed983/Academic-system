
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<title>Tourim Registeration System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('assets/img/logo-icon.png')}}" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- datatable -->
    <link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@500&display=swap" rel="stylesheet">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">
   <div class="container-fluid header-container">
        <div class="row">
            <div class="col-12 header-div">
                <img src="{{asset('assets/img/logo.png')}}">
            </div>
        </div>
    </div>




      <div class="row2-container mt-3">
        <div class="box orange text-right" style="width: 50%; direction:rtl;font-family: 'Noto Kufi Arabic', sans-serif;border-radius:3%;">
          <h2 class="text-center" style="color: rgb(60, 60, 190)">بيانات الطالب</h2><hr>
          <h3 class="description text-center" style="color: #3a4b7c">{{$dataStd->name}}</h3>
          <h5 class="description text-center" style="direction: ltr;">
           {{$dataStd->username}} : كود الطالب</h5>
          <h5 class="description text-center" style="direction: ltr;">{{$dataStd->password}} : كلمة المرور </h5>
          <h5 class="description text-center">   حالته الدراسية : {{$dataStd->studyStatus->name}}</h5>
          <h5 class="description text-center"> الفرقة الدراسية: {{$dataStd->group->name}}</h5>
        <h5 class="description text-center"> الشعبة : {{$dataStd->department->name}}</h5>    
        <h5 class="description text-center">   التخصص : {{$dataStd->spcialize->name}}</h5>
        </div>
      </div>


    <footer class="container-fluid bg-4 foot">
        © 2022 Copyright
        <a class="text-reset fw-bold" href="https://dahab-informatics.com/">Dahab Informatics.com</a>
    </footer>






