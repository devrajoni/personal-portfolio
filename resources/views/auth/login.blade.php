<x-layout.auth>
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image"
                data-background-lg="{{ asset('assets/backend/assets/img/illustrations/signin.svg') }}">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">{{ __('Sign in to our platform') }}</h1>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <x-ui.input
                                group="col-lg-12"
                                :label="__('Email')"
                                type="email"
                                name="email"
                                id="email"
                            />
                            <x-ui.input
                                group="col-lg-12"
                                :label="__('Password')"
                                type="password"
                                name="password"
                                id="password"
                            />
                            <div class="d-flex justify-content-between align-items-top mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="remember" id="remember">
                                    <label class="form-check-label mb-0" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">{{ __('Sign in') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.auth>