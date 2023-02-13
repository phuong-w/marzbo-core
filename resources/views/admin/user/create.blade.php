@extends('admin.layouts.app')

@section('title', __('general.user.title'))

@section('breadcrumbs')
    <li class="breadcrumb-item active" aria-current="page"><span>{{ __('general.user.title') }}</span></li>
@endsection

@push('styles')
    @vite(['resources/sass/plugins/bootstrap-select/bootstrap-select.min.scss'])
@endpush

@section('content')
    <div id="basic" class="col-lg-8 col-sm-12 col-12 layout-spacing">
        <form action="{{ route('admin.user.store') }}" method="POST">
            @csrf
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <div class="layout-top-spacing mb-4">
                        <a href="{{ route('admin.user.index') }}" class="btn btn-gray">{{ __('general.button.cancel') }}</a>
                        <button type="submit" class="btn btn-primary">{{ __('general.button.create') }}</button>
                    </div>
                    <div class="form-group mb-4">
                        <label for="sName">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="sName" placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="sEmail">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="sEmail" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="sPassword">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="sPassword" placeholder="Password" value="{{ old('password') }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="sPasswordConfirm">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="sPasswordConfirm"
                            placeholder="Password" value="{{ old('password_confirmation') }}">
                    </div>
                    <div class="form-group mb-4">
                        <label for="sRolePicker">User Role</label>
                        <div>
                            <select class="selectpicker w-100 @error('role') is-invalid @enderror" id="sRolePicker"
                                title="Choose role" name="role">
                                @foreach ($roles as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('script')
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>

    <script>
        $('.selectpicker').selectpicker('val', '{{ @old('role') }}');
    </script>
@endpush
