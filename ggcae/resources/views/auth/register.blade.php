@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Online Class Registration Form') }}</div>

                <div class="card-body">
                    <h6 style="text-align:center;">* indicates a Required Field</h6>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="FirstName" class="col-md-4 col-form-label text-md-end">{{ __('First Name:*') }}</label>

                            <div class="col-md-6">
                                <input id="FirstName" type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" value="{{ old('FirstName') }}" required>

                                @error('FirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="LastName" class="col-md-4 col-form-label text-md-end">{{ __('Last Name:*') }}</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{ old('LastName') }}" required autocomplete="LastName" autofocus>

                                @error('LastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="DOB" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth:*') }}</label>

                            <div class="col-md-6">
                                <input id="DOB" type="date" class="form-control @error('DOB') is-invalid @enderror" name="DOB" value="{{ old('DOB') }}" required autocomplete="DOB" autofocus>

                                @error('DOB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender:*') }}
                                <datalist id = "Gender">
                                    <option value="Male">
                                        <option value="Female"> 
                                        <option value="Other">
                                        <option value="Prefer not to specify">   
                                </datalist>
                            </label>

                            <div class="col-md-6">
                                <input id="Gender" type="text" class="form-control @error('Gender') is-invalid @enderror" name="Gender" value="{{ old('Gender') }}" required autocomplete="Gender" autofocus list="Gender">

                                @error('Gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address:*') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="HomeNumber" class="col-md-4 col-form-label text-md-end">{{ __('Home Number:*') }}</label>

                            <div class="col-md-6">
                                <input id="HomeNumber" type="text" class="form-control @error('HomeNumber') is-invalid @enderror" name="HomeNumber" value="{{ old('HomeNumber') }}" required autocomplete="HomeNumber" placeholder = "XXX-XXX-XXXX" autofocus>

                                @error('HomeNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="MobileNumber" class="col-md-4 col-form-label text-md-end">{{ __('Mobile Number*') }}</label>

                            <div class="col-md-6">
                                <input id="MobileNumber" type="text" class="form-control @error('MobileNumber') is-invalid @enderror" name="MobileNumber" value="{{ old('MobileNumber') }}" required autocomplete="MobileNumber" autofocus placeholder = "XXX-XXX-XXXX">

                                @error('MobileNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="StreetAdd1" class="col-md-4 col-form-label text-md-end">{{ __('Street Address 1:*') }}</label>

                            <div class="col-md-6">
                                <input id="StreetAdd1" type="text" class="form-control @error('StreetAdd1') is-invalid @enderror" name="StreetAdd1" value="{{ old('StreetAdd1') }}" required autocomplete="StreetAdd1" autofocus>

                                @error('StreetAdd1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="StreetAdd2" class="col-md-4 col-form-label text-md-end">{{ __('Street Address 2:') }}</label>

                            <div class="col-md-6">
                                <input id="StreetAdd2" type="text" class="form-control @error('StreetAdd2') is-invalid @enderror" name="StreetAdd2" value="{{ old('StreetAdd2') }}" required autocomplete="StreetAdd2" autofocus>

                                @error('StreetAdd2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="City" class="col-md-4 col-form-label text-md-end">{{ __('City/Town/Village:*') }}</label>

                            <div class="col-md-6">
                                <input id="City" type="text" class="form-control @error('City') is-invalid @enderror" name="City" value="{{ old('City') }}" required autocomplete="City" autofocus>

                                @error('City')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Parish" class="col-md-4 col-form-label text-md-end">{{ __('Parish/State/Province:*') }}</label>

                            <div class="col-md-6">
                                <input id="Parish" type="text" class="form-control @error('Parish') is-invalid @enderror" name="Parish" value="{{ old('Parish') }}" required autocomplete="Parish" autofocus>

                                @error('Parish')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ZIPcode" class="col-md-4 col-form-label text-md-end">{{ __('ZIP Code:') }}</label>

                            <div class="col-md-6">
                                <input id="ZIPcode" type="text" class="form-control @error('ZIPcode') is-invalid @enderror" name="ZIPcode" value="{{ old('ZIPcode') }}" required autocomplete="ZIPcode" autofocus>

                                @error('ZIPcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Parish" class="col-md-4 col-form-label text-md-end">{{ __('Postal Code:') }}</label>

                            <div class="col-md-6">
                                <input id="Parish" type="text" class="form-control @error('Parish') is-invalid @enderror" name="Parish" value="{{ old('Parish') }}" required autocomplete="Parish" autofocus>

                                @error('Parish')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="School" class="col-md-4 col-form-label text-md-end">{{ __('School:*') }}</label>

                            <div class="col-md-6">
                                <input id="School" type="text" class="form-control @error('School') is-invalid @enderror" name="School" value="{{ old('School') }}" required autocomplete="School" autofocus>

                                @error('School')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="GradeLevel" class="col-md-4 col-form-label text-md-end">{{ __('Current Form/Grade Level:*') }}</label>

                            <div class="col-md-6">
                                <input id="GradeLevel" type="text" class="form-control @error('GradeLevel') is-invalid @enderror" name="GradeLevel" value="{{ old('GradeLevel') }}" required autocomplete="GradeLevel" autofocus>

                                @error('GradeLevel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Month" class="col-md-4 col-form-label text-md-end">{{ __('Current Form/Grade Level:*') }}
                                <datalist id = "MonthList">
                                    <option value = "January">
                                    <option value = "May/June">
                                </datalist>

                                <datalist id = "YearList">
                                    <option value = "2021">
                                    <option value = "2022">
                                </datalist>
                            </label>

                            <div class="col-md-6">
                                <input id="Month" type="text" class="form-control @error('Month') is-invalid @enderror" name="Month" value="{{ old('Month') }}" required autocomplete="Month" list = "MonthList" placeholder = "January or May" autofocus>

                                @error('Month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Year" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="Year" id="Year" class="form-control @error('Year') is-invalid @enderror" value="{{ old('Year') }}" required list = "YearList" autofocus>

                                @error('Year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Subject1" class="col-md-4 col-form-label text-md-end">{{ __('Please Select CXC Subjects:*') }}
                                <datalist id = "SubjectList">
                                    <option value = "English">
                                    <option value = "Mathematics">
                                </datalist>
                            </label>

                            <div class="col-md-6">
                                <input type="text" name="Subject1" id="Subject1" class="form-control @error('Subject1') is-invalid @enderror" value="{{ old('Subject1') }}" required list = "SubjectList" autofocus>

                                @error('Subject1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Subject2" class="col-md-4 col-form-label text-md-end">{{ __() }}
                                <datalist id = "SubjectList">
                                    <option value = "English">
                                    <option value = "Mathematics">
                                </datalist>
                            </label>

                            <div class="col-md-6">
                                <input type="text" name="Subject2" id="Subject2" class="form-control @error('Subject2') is-invalid @enderror" value="{{ old('Subject2') }}" required list = "SubjectList" autofocus>

                                @error('Subject2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Subject3" class="col-md-4 col-form-label text-md-end">{{ __() }}
                                <datalist id = "SubjectList">
                                    <option value = "English">
                                    <option value = "Mathematics">
                                </datalist>
                            </label>

                            <div class="col-md-6">
                                <input type="text" name="Subject2" id="Subject3" class="form-control @error('Subject3') is-invalid @enderror" value="{{ old('Subject3') }}" required list = "SubjectList" autofocus>

                                @error('Subject3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password:*') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password:*') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{url()->previous()}}" class="btn btn-primary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
