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
        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <div class="layout-top-spacing mb-4">
                        <a href="{{ route('admin.user.index') }}" class="btn btn-gray">{{ __('general.button.cancel') }}</a>
                        <button type="submit" class="btn btn-primary">{{ __('general.button.update') }}</button>
                    </div>
                    <div class="form-group mb-4">
                        <label for="sName">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="sName" placeholder="Name" value="{{ old('name') ? old('name') : $user->name }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="sEmail">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="sEmail" placeholder="Email" value="{{ old('email') ? old('email') : $user->email }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
        $('.selectpicker').selectpicker('val', '{{ @old('role') ? @old('role') : $user->getRoleNames()[0] }}');
    </script>
@endpush
