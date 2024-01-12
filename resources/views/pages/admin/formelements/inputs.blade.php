<x-app-layout>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row match-height">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-1">Default Input text</h4>
                                <p class="">Using input <code>type="text"</code> and <code>maxlength="35"</code> group with icon from fontawesome and validation</p>
                            </div>

                            <div class="card-body pt-0">
                                <div class="nav-box wm-content mb-1">
                                    <ul class="nav nav-pills d-flex justify-content-between" id="pills-tab-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link p-25 active" id="default-input-preview-tab" data-toggle="pill" href="#default-input-preview" role="tab" aria-controls="default-input-preview" aria-selected="true"><p>Preview</p></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-25" id="default-input-code-tab" data-toggle="pill" href="#default-input-code" role="tab" aria-controls="default-input-code" aria-selected="false"><p>Code</p></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent1">
                                    <div class="tab-pane fade show active" id="default-input-preview" role="tabpanel" aria-labelledby="default-input-preview-tab">
                                        <div class="h-200 d-flex align-items-center">

                                            {{-- START: Input Text --}}
                                            <div class="form-group w-100">
                                                <h5 class="mb-1">Text Input <span class="required">*</span></h5>
                                                <div class="controls mb-1">
                                                    <fieldset>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="title-textinput">
                                                                    <i class="fa-solid fa-user"></i>
                                                                </span>
                                                            </div>
                                                            <x-forms.elements.inputtext type="text" id="text" name="text" class="form-control" :label="__('Type here for text')" :value="old('email')"/>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <p>Max character number of <code>35 character</code> or less.</p>
                                            </div>
                                            {{-- END: Input Text --}}
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="default-input-code" role="tabpanel" aria-labelledby="default-input-code-tab">
                                        <div class="code-box h-200">
                                            <a class="btn-copy"
                                                data-clipboard-action="copy"
                                                data-clipboard-target="#basicinput"
                                            >
                                                <i id="fa-copy" class="fa-regular fa-copy"></i>
                                                <i id="fa-check" class="d-none fa-solid fa-check fa-lg text-success"></i>
                                            </a>
                                            <div id="basicinput">
                                                <p>
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
                                                                    <x-forms.elements.inputemail id="text" name="text" class="form-control" :label="__('text')" :value="old('text')"/>
                                                                    {{-- <input type="text" maxlength="35" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon1"> --}}
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <p>Max character number of <code>35 character</code> or less.</p>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-1">Telephone Number</h4>
                                <p class="">Using input <code>type="telephone"</code> with validation</p>
                            </div>

                            <div class="card-body pt-0">
                                <div class="nav-box wm-content mb-1">
                                    <ul class="nav nav-pills d-flex justify-content-between" id="pills-tab-2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link p-25 active" id="input-telepon-preview-tab" data-toggle="pill" href="#input-telepon-preview" role="tab" aria-controls="input-telepon-preview" aria-selected="true"><p>Preview</p></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-25" id="input-telepon-code-tab" data-toggle="pill" href="#input-telepon-code" role="tab" aria-controls="input-telepon-code" aria-selected="false"><p>Code</p></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent2">
                                    <div class="tab-pane fade show active" id="input-telepon-preview" role="tabpanel" aria-labelledby="input-telepon-preview-tab">
                                        <div class="h-200 d-flex align-items-center">
                                            {{-- START: Input Telpone Number --}}
                                            <div class="form-group w-100">
                                                <h5 class="mb-1">Telephone Number</h5>
                                                <div class="controls mb-1">
                                                    <fieldset>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                                                </span>
                                                            </div>
                                                            <x-forms.elements.telephone id="telephone" name="telephone" class="form-control" :label="__('0888 8888 8888')" :value="old('telephone')"/>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <p>Max telephone number of <code>12 digits</code> or less.</p>
                                            </div>
                                            {{-- END: Input Telpone Number --}}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="input-telepon-code" role="tabpanel" aria-labelledby="input-telepon-code-tab">
                                        <div class="code-box h-200">
                                            <a class="btn-copy" data-clipboard-action="copy" data-clipboard-target="#inputtlp">
                                                <i id="fa-copy" class="fa-regular fa-copy"></i>
                                                <i id="fa-check" class="d-none fa-solid fa-check fa-lg text-success"></i>
                                            </a>
                                            <div id="inputtlp">
                                                <p>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-1">Email</h4>
                                <p class="">Using input<code>type="email"</code> group with icon from fontawesome and validation</p>
                            </div>

                            <div class="card-body pt-0">
                                <div class="nav-box wm-content mb-1">
                                    <ul class="nav nav-pills d-flex justify-content-between" id="pills-tab-2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link p-25 active" id="input-telepon-preview-tab" data-toggle="pill" href="#input-telepon-preview" role="tab" aria-controls="input-telepon-preview" aria-selected="true"><p>Preview</p></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-25" id="input-telepon-code-tab" data-toggle="pill" href="#input-telepon-code" role="tab" aria-controls="input-telepon-code" aria-selected="false"><p>Code</p></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent2">
                                    <div class="tab-pane fade show active" id="input-telepon-preview" role="tabpanel" aria-labelledby="input-telepon-preview-tab">
                                        <div class="h-200 d-flex align-items-center">
                                            {{-- START: Input Telpone Number --}}
                                            <div class="form-group w-100">
                                                <h5 class="mb-1">Email</h5>
                                                <div class="controls mb-1">
                                                    <fieldset>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="fa-solid fa-envelope"></i>
                                                                </span>
                                                            </div>
                                                            <x-forms.elements.inputemail id="email" name="email" class="form-control" :label="__('text@example.com')" :value="old('email')"/>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <p>Input with your email <code>@gmail.com</code> or other.</p>

                                            </div>
                                            {{-- END: Input Telpone Number --}}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="input-telepon-code" role="tabpanel" aria-labelledby="input-telepon-code-tab">
                                        <div class="code-box h-200">
                                            <a class="btn-copy" data-clipboard-action="copy" data-clipboard-target="#inputtlp">
                                                <i id="fa-copy" class="fa-regular fa-copy"></i>
                                                <i id="fa-check" class="d-none fa-solid fa-check fa-lg text-success"></i>
                                            </a>
                                            <div id="inputtlp">
                                                <p>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-1">Number</h4>
                                <p class="">Using <code>input type="number"</code> group with icon from fontawesome and validation</p>
                            </div>

                            <div class="card-body pt-0">
                                <div class="nav-box wm-content mb-1">
                                    <ul class="nav nav-pills d-flex justify-content-between" id="pills-tab-2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link p-25 active" id="input-telepon-preview-tab" data-toggle="pill" href="#input-telepon-preview" role="tab" aria-controls="input-telepon-preview" aria-selected="true"><p>Preview</p></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-25" id="input-telepon-code-tab" data-toggle="pill" href="#input-telepon-code" role="tab" aria-controls="input-telepon-code" aria-selected="false"><p>Code</p></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent2">
                                    <div class="tab-pane fade show active" id="input-telepon-preview" role="tabpanel" aria-labelledby="input-telepon-preview-tab">
                                        <div class="h-200 d-flex align-items-center">
                                            {{-- START: Input Telpone Number --}}
                                            <div class="form-group w-100">
                                                <h5 class="mb-1">Number</h5>
                                                <div class="controls mb-1">
                                                    <fieldset class="mb-1">
                                                        <x-forms.elements.inputnumber id="number" name="number" class="form-control" :label="__('0')" :value="old('number')"/>
                                                    </fieldset>
                                                    <p>using <code>input type="number"</code></p>
                                                </div>
                                            </div>
                                            {{-- END: Input Telpone Number --}}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="input-telepon-code" role="tabpanel" aria-labelledby="input-telepon-code-tab">
                                        <div class="code-box h-200">
                                            <a class="btn-copy" data-clipboard-action="copy" data-clipboard-target="#inputtlp">
                                                <i id="fa-copy" class="fa-regular fa-copy"></i>
                                                <i id="fa-check" class="d-none fa-solid fa-check fa-lg text-success"></i>
                                            </a>
                                            <div id="inputtlp">
                                                <p>1</p>
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
