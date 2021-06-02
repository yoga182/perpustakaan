 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-primary elevation-10">
   <!-- Brand Logo -->
  
   <a href="http://perpus.test:90/admin">
   <span class="logo-mini">
     <img src="assets/img/logo1.png" alt="imip" class="logo" style="opacity: .8">
     
     </span>
     <!-- <span class="logo-lg"><b>Per</b>pus</span> -->
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <nav class="mt-1">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-header">ADMINISTRATOR</li>
         <li class="nav-item">
           <a href="{{route('admin.book.index')}}" class="nav-link">
             <i class="nav-icon fas fa-book"></i>
             <p>
               Book
               <!-- <span class="badge badge-info right">2</span> -->
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{route('admin.author.index')}}" class="nav-link">
             <i class="nav-icon fas fa-user"></i>
             <p>
               Author
             </p>
           </a>
         </li>
         <li class="nav-item">

           <a href="" class="nav-link">
             <i class="nav-icon fas fa-folder"></i>
             <p>
               Log Activity
               <i class="fas fa-angle-right right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('admin.borrow.index')}}" class="nav-link">
                 <b class="btn btn-iframe-close btn-outline-dark btn-block">Borrow</b>

               </a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link">
                 <b class="btn btn-iframe-close btn-outline-dark btn-block">Return</b>

               </a>
             </li>
           </ul>
         </li>


         <li class="nav-header">USER MASTER</li>
         <li class="nav-item">
           <a href="pages/kanban.html" class="nav-link">
             <i class="nav-icon fas fa-users"></i>
             <p>
               User
             </p>
           </a>
         </li>


       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>