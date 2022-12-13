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
          <h4 class="text-center" style="color: rgb(60, 60, 190)">كارنية الطالب</h4><hr>
          <img class="avatar border-gray" src="{{$dataStd->photo}}" style="float: left;width:180px;border-radius:20%" alt="...">
          <h5 class="card-title"> الاسم : {{$dataStd->name}}</h5>
          <h5 class="card-text">  اسم المستخدم : {{$dataStd->username}}</h5>
          <h5 class="card-text"> االفرقة : {{$dataStd->group->name}}</h5>
          <h5 class="card-text"> الشعبة : {{$dataStd->department->name}}</h5>    
          <h5 class="card-text">   التخصص : {{$dataStd->spcialize->name}}</h5>
           <img src="https://assets.codepen.io/2301174/icon-karma.svg" style="float: right;" alt="">

        </div>
      </div>


    <footer class="container-fluid bg-4 foot">
        © 2022 Copyright
        <a class="text-reset fw-bold" href="https://dahab-informatics.com/">Dahab Informatics.com</a>
    </footer>
