@extends('backend.__layouts.master')

@section('backend.master')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Site Account</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('/') }}" class="text-muted text-hover-primary">{{ isset($title) ? $title : '||'}}</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Site</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Site Info</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            
            <!--begin::details View-->
            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Site Details</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <div>
                        
                        @if( isset($info) )
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6"><b>Logo</b></label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px"
                                        style="background-image: url({{ !empty($info->image) ? url('storage/images/info/logo/' . $info->image) : url('storage/images/no_image.jpg') }});" alt="{{ $info->name }}"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <div class="col-lg-4 fw-bold fs-6">
                                    <b>Full Name:</b>
                                </div>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fw-bold fs-6">
                                    {{ isset($info->name) ? $info->name : ''}}
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                             <!--begin::Input group-->
                             <div class="row mb-6">
                                <!--begin::Label-->
                                <div class="col-lg-4 fw-bold fs-6">
                                    <b>Phone Number:</b>
                                </div>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fw-bold fs-6">
                                    {{ isset($info->phone) ? $info->phone : ''}}
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <div class="col-lg-4">
                                    <b>Email:</b>
                                </div>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fw-bold fs-6">
                                    {{ isset($info->email) ? $info->email : ''}}
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <div class="col-lg-4 fw-bold fs-6">
                                    <b>Address:</b>
                                </div>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fw-bold fs-6">
                                    {{ isset($info->address) ? $info->address : ''}}
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            
                        </div>
                        <!--end::Card body-->

                        @else

                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <h2>No Data at the moment, <a href="{{ route('admin.info.edit') }}" class="text-primary">Click here</a> to add Site.</h2>
                        </div>

                        @endif

                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="{{ route('admin.info.edit') }}" class="btn btn-primary" id="kt_account_profile_details_submit">Edit Site</a>
                        </div>
                        <!--end::Actions-->
                    
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Basic info-->
            <!--end::details View-->


            
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>



@endsection