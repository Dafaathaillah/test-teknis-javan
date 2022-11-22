@section('sidebar')
<nav class="sidebar">
   <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
         Noble<span>UI</span>
      </a>
      <div class="sidebar-toggler not-active">
         <span></span>
         <span></span>
         <span></span>
      </div>
   </div>
   <div class="sidebar-body">
      <ul class="nav">
         <li class="nav-item nav-category">Soal No 1</li>
         <li class="nav-item">
            <a href="{{ route('soal1.index') }}" class="nav-link">
               <i class="link-icon" data-feather="user"></i>
               <span class="link-title">Soal No 1</span>
            </a>
         </li>
         <li class="nav-item nav-category">Soal No 2 Dan 8</li>
         <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#soal2" role="button" aria-expanded="false">
               <i class="link-icon" data-feather="users"></i>
               <span class="link-title">Input Silsilah</span>
               <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="soal2">
               <ul class="nav sub-menu">
                  <li class="nav-item">
                     <a href="{{ route('orangtua.index') }}" class="nav-link">Orangtua</a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('anak.index') }}" class="nav-link">Anak</a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('cucu.index') }}" class="nav-link">Cucu</a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="nav-item nav-category">Soal No 3</li>
         <li class="nav-item">
            <a href="{{ route('anakbudi.index') }}" class="nav-link">
               <i class="link-icon" data-feather="user"></i>
               <span class="link-title">Anak Budi</span>
            </a>
         </li>
         <li class="nav-item nav-category">Soal No 4</li>
         <li class="nav-item">
            <a href="{{ route('cucubudi.index') }}" class="nav-link">
               <i class="link-icon" data-feather="user"></i>
               <span class="link-title">Cucu Budi</span>
            </a>
         </li>
         <li class="nav-item nav-category">Soal No 5</li>
         <li class="nav-item">
            <a href="{{ route('cucuperempuanbudi.index') }}" class="nav-link">
               <i class="link-icon" data-feather="user"></i>
               <span class="link-title">Cucu Perempuan Budi</span>
            </a>
         </li>
         <li class="nav-item nav-category">Soal No 6</li>
         <li class="nav-item">
            <a href="{{ route('bibifarah.index') }}" class="nav-link">
               <i class="link-icon" data-feather="user"></i>
               <span class="link-title">Bibi Dari Farah</span>
            </a>
         </li>
         <li class="nav-item nav-category">Soal No 7</li>
         <li class="nav-item">
            <a href="{{ route('sepupu.index') }}" class="nav-link">
               <i class="link-icon" data-feather="user"></i>
               <span class="link-title">Sppu Laki-Laki Hani</span>
            </a>
         </li>
      </ul>
   </div>
</nav>
@show