@extends('layouts.master')
@section('title') @lang('translation.Form_Validation')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Forms @endslot
@slot('title') Form Validation @endslot
@endcomponent



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">PristineJS Validation</h4>
            </div>
            <!-- end card header -->

            <div class="card-body">
                <div>
                    <h5 class="card-title mb-4">Validation Examples</h5>
                    <form id="pristine-valid-example" novalidate method="post">
                        <input type="hidden"/>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Username</label>
                                    <input type="text" required data-pristine-required-message="Please Enter a username" class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" required data-pristine-required-message="Please Enter a Email" class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Your age (required, min. 14)</label>
                                    <input type="number" min="14" data-pristine-min-message="You must be at least 14-years-old" required class="form-control" value="10" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Password (required)</label>
                                    <input type="password" id="pwd"  required data-pristine-required-message="Please Enter a password" data-pristine-pattern= "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/" data-pristine-pattern-message="Minimum 8 characters, at least one uppercase letter, one lowercase letter and one number" class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Retype password</label>
                                    <input type="password" data-pristine-equals="#pwd" data-pristine-equals-message="Passwords don't match" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="form-group mb-3 form-check">
                            <input id="term-check01" type="checkbox" class="form-check-input" name="future" required data-pristine-required-message="You must accept the terms and conditions"/>
                            <label class="form-check-label" for="term-check01">I accept the terms  and conditions</label><br/>
                        </div>
                        <div class="form-group">
                            <button  type="submit" class="btn btn-primary">Submit form</button>
                        </div>
                    </form>
                </div>

           

              
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/pristinejs/pristinejs.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
