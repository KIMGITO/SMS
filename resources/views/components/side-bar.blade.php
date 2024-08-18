 <div class="sidebar close">
    <div class="logo-details bg-light justify-content-between px-2">
          <img src="{{ asset('images/logo.jpg') }}" width="50px" class="rounded-circle  border border-2" alt="">
          <span class="logo_name text-dark text-end">St. JohnFisher's</span>
    </div>
    <ul class="nav-links">
          <x-nav.menu href="#" icon="fa-home"  label="Home" />

          @component('components.nav.menu', [
              'href' => '#',
              'icon' => 'fa-person-chalkboard',
              'label' => 'Stuffs',
              'hasSubMenu' => true,
              'subMenu' => [
                  ['href' => '#', 'label' => 'Stuffs' , 'link_name'=>true],
                  ['href' => '#', 'icon'=>'fa-list-check text-info', 'label' => 'List All'],
                  ['href' => 'teacher/create', 'icon'=>'fa-user-plus text-primary', 'label' => 'Add Teacher'],
                  ['href' => '#', 'icon'=>'fa-person-digging', 'label' => 'Add Non Teaching'],
              ]
          ])plus
          @endcomponent 

          @component('components.nav.menu', [
            'href'=>'#',
            'icon'=>'fa-user-graduate',
            'label'=>'Students',
            'hasSubMenu'=>true,
            'subMenu'=>[
                ['href'=>'#', 'label'=>'Students', 'link_name'=>true],
                ['href'=>'#',  'icon'=>'fa-list-check text-info', 'label' =>'List Students'],
                ['href'=>'#',  'icon'=>'fa-user-plus text-success', 'label'=>'Add Student']
            ]
          ])
          @endcomponent

          @component('components.nav.menu',[
            'href'=>'#',
            'icon'=>'fa-graduation-cap',
            'label'=>'Academics',
            'hasSubMenu'=>true,
            'subMenu'=>[
                ['href'=>'#', 'label'=>'Academics', 'link_name'=>true],
            ]
          ])
            
          @endcomponent
          
          @component('components.nav.menu',[
            'href'=>'#',
            'icon'=>'fa-gears',
            'label'=>'Leadership',
            'hasSubMenu'=>false,
            'subMenu'=>[
                ['href'=>'#', 'label'=>'Leadership', 'link_name'=>true],
            ]
          ])
            
          @endcomponent

          @component('components.nav.menu',[
            'href'=>'#',
            'icon'=>'fa-calendar-day',
            'label'=>'Events',
            'hasSubMenu'=>false,
            'subMenu'=>[
                ['href'=>'#', 'label'=>'Events', 'link_name'=>true],
            ]
          ])
            
          @endcomponent

          @component('components.nav.menu',[
            'href'=>'#',
            'icon'=>'fa-people-roof',
            'label'=>'Classes',
            'hasSubMenu'=>false,
            'subMenu'=>[
                ['href'=>'#', 'label'=>'Classes', 'link_name'=>true],
            ]
          ])
            
          @endcomponent
         
         
            
          </li>
          <li>
            <a href="#">
              <i class='bx bx-compass' ></i>
              <span class="link_name">Explore</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Explore</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-history'></i>
              <span class="link_name">History</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">History</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-cog' ></i>
              <span class="link_name">Setting</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Setting</a></li>
            </ul>
          </li>
          <li>
        <div class="profile-details">
          <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
          </div>
          <div class="name-job">
            <div class="profile_name">Prem Shahi</div>
            <div class="job">Web Desginer</div>
          </div>
          <i class='bx bx-log-out' ></i>
        </div>
      </li>
    </ul>
  </div>