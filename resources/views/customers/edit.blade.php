@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="submit/{{$customer->id}}" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="company_name" class="col-md-4 col-form-label text-md-end">{{ __('Comapny Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ $customer->company_name }}" required autocomplete="company_name" autofocus>

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="street" class="col-md-4 col-form-label text-md-end">{{ __('Street') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ $customer->street }}" required autocomplete="street" autofocus>

                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="street_nr" class="col-md-4 col-form-label text-md-end">{{ __('Street nr') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('street_nr') is-invalid @enderror" name="street_nr" value="{{ $customer->street_nr }}" required autocomplete="street_nr" autofocus>

                                @error('street_nr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="zip" class="col-md-4 col-form-label text-md-end">{{ __('Zip') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ $customer->zip }}" required autocomplete="zip" autofocus>

                                @error('zip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $customer->city }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="contact_person" class="col-md-4 col-form-label text-md-end">{{ __('Contact Person') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('contact_person') is-invalid @enderror" name="contact_person" value="{{ $customer->contact_person }}" required autocomplete="contact_person" autofocus>

                                @error('contact_person')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value= "{{ $customer->phone }}" required autocomplete="new-phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="photo" class="col-md-4 col-form-label text-md-end">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6 offset-md-4">
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="/index">Back </a>
    </li>
  </ul>
        </div>
@endsection
