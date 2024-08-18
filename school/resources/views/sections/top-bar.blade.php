<div class="custom-top-bar top-bar  container-fluid bg-light text-dark" >
    <div class="row pt-1">
        <ul class="d-flex justify-content-between my-0">
        <li>
            
            <ul class="d-flex justify-content-center">
                <li class="mt-4 ms-1 ">
                    <div class="btn-sm"><i class="fas fa-list bx-menu text-dark fs-4 px-3"></i></div>
                </li>
                <li class="mx-3">
                    <img src="{{ asset('images/logo.jpg') }}" width="60px" height="60px" class="rounded- rounded-circle" alt="">
                </li>
                <li class="mt-3 d-none d-sm-block">
                    <p class="fs-4 fw-bolder">Welcome to M.D.S.S Management System</p>
                </li>
                <li class="mt-3 d-block d-sm-none">
                    <p class="fs-4 fw-bolder">M.D.S.S</p>
                </li>
            </ul>
        </li>
        <li class="mt-3 d-none d-md-block">
            <x-forms.search-input />
        </li>
        <li class="mt-3 d-none d-lg-block">
            <x-sections.top-info />
        </li>
    </ul>
    <ul class="justify-content-center">
        <li class="mt-3 d-none  d-md-block d-flex justify-content-center  d-lg-none">
            <x-sections.top-info />
        </li>
        <li class="mt-3 d-flex d-md-none justify-content-center">
            <div class="col-8">
                <x-forms.search-input />
            </div>
        </li>
    </ul>
    </div>
</div>
