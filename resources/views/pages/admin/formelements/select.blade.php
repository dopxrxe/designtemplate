<x-app-layout>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row match-height">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-2">Basic input</h4>
                                <p class="mb-1">Example of a basic input group with font awesome icons and validation</p>
                            </div>

                            <div class="card-body pt-0">
                                
                                {{-- <div class="nav-box wm-content mb-1">
                                    <ul class="nav nav-pills d-flex justify-content-between" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link p-25 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><p>Home</p></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-25" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><p>Profile</p></a>
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="h-200 d-flex align-items-center">
                                    <div class="form-group w-100">
                                        <h5 class="mb-1">Basic Text Input <span class="required">*</span></h5>
                                        <div class="controls mb-1">
                                            <fieldset>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">
                                                            <i class="fa-solid fa-font-awesome"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" maxlength="35" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon1">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <p>Max character number of <code>35 character</code> or less.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Example Basic Input text</h4>
                            </div>

                            <div class="card-body pt-0">
                                <div class="nav-box wm-content mb-1">
                                    <ul class="nav nav-pills d-flex justify-content-between" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link p-25 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><p>Home</p></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-25" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><p>Profile</p></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="h-200 d-flex align-items-center">
                                            <div class="form-group w-100">
                                                <h5 class="mb-1">Basic Text Input <span class="required">*</span></h5>
                                                <div class="controls mb-1">
                                                    <fieldset>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="fa-solid fa-font-awesome"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" maxlength="35" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon1">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <p>Max character number of <code>35 character</code> or less.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="code-box h-200">
                                            <a class="btn-copy text-slate-500 hover:text-slate-400"
                                                data-clipboard-action="copy"
                                                data-clipboard-target=".code-html"
                                            >
                                                <i id="fa-copy" class="fa-regular fa-copy"></i>
                                                <i id="fa-check" class="d-none fa-solid fa-check fa-lg text-success"></i>
                                            </a>
                                            <div class="code-html">
                                                <p>Max character number of <code>35 character</code> or less.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
</x-app-layout>
