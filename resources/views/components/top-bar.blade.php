<div class="top-bar container-fluid bg-light text-dark justify-content-between text-center mt-0 custom-top-bar">
   <ul class="d-flex justify-content-between">
     <li class="m-3">
        <div class="text-end d-flex justify-content-between">
            {{-- <i class="fas fa-bars mt-3 " onclick="showSideBar()"></i> --}}
            <i class="bx bx-menu text-dark"></i>
            <img src="{{ asset('images/logo.jpg') }}" width="50" height="50" class="rounded-circle  border border-2 border-dark mx-4">
            <p class="h-6 fw-bolder customp-1 lead fw-bolder">
                Welcome To M.D.S.S Management System
            </p>
            

        </div>
     </li>
     <li class="d-none d-md-flex mt-2">
        <div class="mt-3">
            <form action=""lg>
                <input type="text" class="form-control p-0 px-3 py-1 rounded-5 bg-dark text-light" placeholder="Search">
                {{-- <button type="submit" class="btn btn-primary">Search</button> --}}
            </form>
        </div>
     </li>
     <li class="d-none d-lg-flex">
        <div class="">
            <ul class="d-flex mt-2 rounded-2 ">
                <li class="px-2 mx-2">
                    <a href="#" class="custom fw-bolder btn btn-sm btn- "> <i class="fas fa-user-circle"></i> Profile</a>
                </li>

                <li class="px-2 mx-2">
                    <a href="#" class="custom fw-bolder btn btn-sm btn- "> <i class="fas fa-gear"></i> settings</a>
                </li>
                <li class="px-2 mx-2">
                    <a href="#" class="custom fw-bolder btn btn-sm btn- "> <i class="fas fa-envelope"></i> message</a>
                </li>
                <li class="px-2">
                    <a href="#" class="text-light btn btn-smcustom"> <i class="fas fa-sign-out"></i></a>
                </li>
            </ul>
        </div>
     </li>
   </ul>
   <ul class="d-lg-none ">
    <div>
        <li class="">
        <div class="">
            <ul class="d-flex mt-2 rounded-2 justify-content-end">
                <li class="px-2 mx-2">
                    <a href="#" class="text-dark fw-bolder btn btn-sm btn- "> <i class="fas fa-user-circle"></i> Profile</a>
                </li>

                <li class="px-2 mx-2">
                    <a href="#" class="text-dark fw-bolder btn btn-sm btn- "> <i class="fas fa-gear"></i> settings</a>
                </li>
                <li class="px-2 mx-2">
                    <a href="#" class="text-dark fw-bolder btn btn-sm btn- "> <i class="fas fa-envelope"></i> message</a>
                </li>
                <li class="px-2">
                    <a href="#" class="text-light btn btn-sm btn-dark"> <i class="fas fa-sign-out"></i></a>
                </li>
            </ul>
        </div>
     </li>
   </ul>
   <ul class="d-md-none d-flex justify-content-center">
    <div class="col-6">
            <form action="">
                <input type="text" class="form-control p-0 px-3 py-1 rounded-5 bg-light text-dark" placeholder="Search">
                {{-- <button type="submit" class="btn btn-primary">Search</button> --}}
            </form>
        </div>
   </ul>
</div>
    <x-nav.bread-cramps/>
