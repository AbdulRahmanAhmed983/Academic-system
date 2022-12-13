@include('admin.includes.links')





<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header"style="overflow-x: hidden;">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
           
        </div> 
                
        <div class="app-header__content">
            <div class="col-7">
                <img height="70" style="margin-left: auto;display:flex;"  src="{{('assets/img/logo.png')}}"></div>

            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <li class="nav-item dropdown">
                                <a style="font-size: 18px;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل خروج') }}
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>   
                        </div>
                    </div>
                </div>      
              </div>
        </div>
    </div>        
    
    <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>   
                 <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="{{route('AddStudents')}}"> <i class="fas fa-plus"></i> تسجيل طالب جديد</a>
                            </li>

                            <li class="app-sidebar__heading">UI Components</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    Elements
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="elements-buttons-standard.html">
                                            <i class="metismenu-icon"></i>
                                            Buttons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon">
                                            </i>Dropdowns
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-icons.html">
                                            <i class="metismenu-icon">
                                            </i>Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-badges-labels.html">
                                            <i class="metismenu-icon">
                                            </i>Badges
                                        </a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-car"></i>
                                    Components
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="components-progress-bar.html">
                                            <i class="metismenu-icon">
                                            </i>Progress Bar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-tooltips-popovers.html">
                                            <i class="metismenu-icon">
                                            </i>Tooltips &amp; Popovers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-carousel.html">
                                            <i class="metismenu-icon">
                                            </i>Carousel
                                        </a>
                                    </li>
                             
                                </ul>
                            </li>
                            <li  class="mm-active" >
                                <a href="tables-regular.html">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Tables
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Widgets</li>
                            <li>
                                <a href="dashboard-boxes.html">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Dashboard Boxes
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Forms</li>
                            <li>
                                <a href="forms-controls.html">
                                    <i class="metismenu-icon pe-7s-mouse">
                                    </i>Forms Controls
                                </a>
                            </li>
                            <li>
                                <a href="forms-layouts.html">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                    </i>Forms Layouts
                                </a>
                            </li>
                            <li>
                                <a href="forms-validation.html">
                                    <i class="metismenu-icon pe-7s-pendrive">
                                    </i>Forms Validation
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>  
            </div>    
            <div class="app-main__outer">
                <div class="app-main__inner">
                  

                      <div class="row">
                        <div class="col-lg-12 table-responsive">
                            @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors')
                            <table class="mb-0 table dt-responsive nowrap table-striped " id="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">الاسم بالكامل</th>
                                        <th scope="col">اسم المستخدم</th>
                                        <th scope="col">كلمة المرور</th>
                                        <th scope="col">الشعبه</th>
                                        <th scope="col">الحالة الدراسية</th>
                                        <th scope="col">الفرقة</th>
                                        <th scope="col">العمليات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dataStd)
                                    <tr>
                                        <td>{{++$id}}</td>
                                        <td>{{$dataStd->name}}</td>
                                        <td>{{$dataStd->username}}</td>
                                        <td>{{$dataStd->password}}</td>
                                        <td>{{$dataStd->department->name}}</td>
                                        <td>{{$dataStd->Studystatus->name}}</td>
                                        <td>{{$dataStd->group->name}}</td>
                                        <td >
                                            <a  href="{{route('EditStudents',$dataStd->id)}}" class="btn btn-success edit btn-lg edit">تعديل  <i class="fas fa-pen"></i></a>
                                            <a  href="{{route('delete',$dataStd->id)}}" onclick="return confirm('هل انت متأكد من حذف الطالب؟')" class="btn btn-danger print btn-lg edit delbtn">حذف  <i class="fas fa-trash-alt"></i></a>
                                            <a  href="{{route('printData',$dataStd->id)}}" class="btn btn-primary edit btn-lg print">كارنيه  <i class="fas fa-print"></i></a>
                                            <a  href="{{route('AllData',$dataStd->id)}}" class="btn btn-primary edit btn-lg print"> بيانات الطالب <i class="fas fa-database"></i></a>
                                        </td> 
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
             
                    </div>
                </div>
</div>
    </div>
    <footer class="container-fluid bg-4 foot">
        © 2022 Copyright
        <a class="text-reset fw-bold" href="https://dahab-informatics.com/">Dahab Informatics.com</a>
    </footer>
    
</div>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript " src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript " src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript " src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>


<script type="text/javascript ">
    $(document).ready(function() {
        $('#table').dataTable({
            
            "language": {
                "lengthMenu": " _MENU_ عرض ",
                "zeroRecords": "المعلومات غير متوفرة",
                "info": "إظهار صفحة _PAGE_ من _PAGES_ ",
                "infoEmpty": "التجيلات غير متوفرة",
                "infoFiltered": "(تم البحث من  MAX إجمالى التسجيلات )",
                "search": "إبحث من هنا",
                "pagingtype":"simple ",

            },

        });
    });
</script>
