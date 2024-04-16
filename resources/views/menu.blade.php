@section('menu')
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="{{URL('/')}}/home">
      <i class="mdi mdi-grid-large menu-icon"></i>
      <span class="menu-title">Dashboard</span>
    </a>
  </li>
  <li class="nav-item nav-category">Main Menu</li>  
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#master" aria-expanded="false" aria-controls="ui-basic">
      <i class="menu-icon mdi mdi-floor-plan"></i>
      <span class="menu-title">Master</span>
      <i class="menu-arrow"></i> 
    </a>
    <div class="collapse" id="master">
      <ul class="nav flex-column sub-menu">                        
        <li class="nav-item"> <a class="nav-link" href="{{URL('/')}}/asets">Asets</a></li>                        
      </ul>
    </div>
  </li>
</ul>
@endsection