<!-- BEGIN: Main Menu-->

<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ Request::segment(1) === 'admin' ? 'active' : null }} nav-item"><a href="{{ route('admin') }}"><i class="mbri-desktop"></i><span class="menu-title"
                data-i18n="Dashboard">Dashboard</span></a>
                {{-- <ul class="menu-content">
                    <li><a class="menu-item" href="dashboard-ecommerce.html"><i
                                class="la la-cart-plus"></i><span>eCommerce</span></a>
                    </li>
                    <li><a class="menu-item" href="dashboard-crypto.html"><i
                                class="la la-sitemap"></i><span>Crypto</span></a>
                    </li>
                    <li class="active"><a class="menu-item" href="dashboard-sales.html"><i
                                class="la la-dollar"></i><span>Sales</span></a>
                    </li>
                </ul> --}}
            </li>
            <li class=" nav-item"><a href="#"><i class="mbri-edit"></i><span class="menu-title"
                        data-i18n="Forms">Forms</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="#"><i class="la la-terminal"></i><span
                                data-i18n="Form Elements">Form Elements</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::segment(1) === 'inputs' ? 'active' : null }}"><a class="menu-item" href="{{ route('form-inputs') }}"><i></i><span
                                        data-i18n="Form Inputs">Form Inputs</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-input-groups.html"><i></i><span
                                        data-i18n="Input Groups">Input Groups</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-input-grid.html"><i></i><span
                                        data-i18n="Input Grid">Input Grid</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-extended-inputs.html"><i></i><span
                                        data-i18n="Extended Inputs">Extended Inputs</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-checkboxes-radios.html"><i></i><span
                                        data-i18n="Checkboxes &amp; Radios">Checkboxes &amp; Radios</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-switch.html"><i></i><span
                                        data-i18n="Switch">Switch</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="#"><i></i><span data-i18n="Select">Select</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::segment(3) === 'select' ? 'active' : null }}"><a class="menu-item" href="{{ route('form-select') }}"><i></i><span
                                                data-i18n="Select2">Select2</span></a>
                                    </li>
                                    <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-selectize.html"><i></i><span
                                                data-i18n="Selectize">Selectize</span></a>
                                    </li>
                                    <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-selectivity.html"><i></i><span
                                                data-i18n="Selectivity">Selectivity</span></a>
                                    </li>
                                    <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-select-box-it.html"><i></i><span
                                                data-i18n="Select Box It">Select Box It</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-dual-listbox.html"><i></i><span
                                        data-i18n="Dual Listbox">Dual Listbox</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-tags-input.html"><i></i><span
                                        data-i18n="Tags Input">Tags Input</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-validation.html"><i></i><span
                                        data-i18n="Validation">Validation</span></a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="#"><i class="la la-file-text"></i><span
                                data-i18n="Form Layouts">Form Layouts</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-layout-basic.html"><i></i><span
                                        data-i18n="Basic Forms">Basic Forms</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-layout-horizontal.html"><i></i><span
                                        data-i18n="Horizontal Forms">Horizontal Forms</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-layout-hidden-labels.html"><i></i><span
                                        data-i18n="Hidden Labels">Hidden Labels</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-layout-form-actions.html"><i></i><span
                                        data-i18n="Form Actions">Form Actions</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-layout-row-separator.html"><i></i><span
                                        data-i18n="Row Separator">Row Separator</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-layout-bordered.html"><i></i><span
                                        data-i18n="Bordered">Bordered</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-layout-striped-rows.html"><i></i><span
                                        data-i18n="Striped Rows">Striped Rows</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-layout-striped-labels.html"><i></i><span
                                        data-i18n="Striped Labels">Striped Labels</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="#"><i class="la la-paste"></i><span data-i18n="Form Wizard">Form
                                Wizard</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-wizard-circle-style.html"><i></i><span
                                        data-i18n="Circle Style">Circle Style</span></a>
                            </li>
                            <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-wizard-notification-style.html"><i></i><span
                                        data-i18n="Notification Style">Notification Style</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === '' ? 'active' : null }}"><a class="menu-item" href="form-repeater.html"><i class="la la-repeat"></i><span
                                data-i18n="Form Repeater">Form Repeater</span></a>
                    </li> --}}
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->