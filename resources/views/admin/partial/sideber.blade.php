 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
         <a class="sidebar-brand brand-logo" href="{{ route('home') }}"><img src="{{ asset('assets/images/Edteco_logo.png') }}"
                 alt="logo" /></a>
         <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                 src="{{ asset('assets/images/third-degree.svg') }}" alt="logo" /></a>
     </div>
     <ul class="nav">
         {{-- <li class="nav-item nav-category">
             <span class="nav-link">Navigation</span>
         </li> --}}
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('home') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('session.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Academic Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('teacher.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Teacher Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('student.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Student Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('unc_message') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Online Admisssion</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('routine.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Routine Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('exam.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Exam Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('onlineexam.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Online Exam</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('homework.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Home Work</span>
             </a>
             
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('attendance.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Attendance</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('smsmanagement.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">SMS Management</span>
             </a>
             
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('pushnotification.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Push Notification</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('unc_message') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Manage Trasport</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('unc_message') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Hostel Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('unc_message') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Library Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('unc_message') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Inventrory Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('digitalclassroom.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 
                 <span class="menu-title">Digital Classroom</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('reportmanagement.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 
                 <span class="menu-title">Report Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('accountmanagement.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 
                 <span class="menu-title">Accounts Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('websitemanagement.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                     
                 </span>
                 <span class="menu-title">Website Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('unc_message') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                     
                 </span>
                 <span class="menu-title">Role Management</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="{{ route('softwaresetting.index') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Software Setting</span>
             </a>
         </li>

     </ul>
 </nav>
