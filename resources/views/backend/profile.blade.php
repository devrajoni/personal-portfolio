<x-layout.backend>
    <div class="row">
        <div class="col-lg-4">
            <div class="card border-0 shadow">
                <div class="card-body text-center">
                    <img src="{{ auth()->user()->profileImage }}" class="img-fluid rounded" width="250" height="250" alt="user" />
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" role="tablist">
                            <a
                                class="nav-item nav-link {{ $tab == 'profile' ? 'active' : '' }}"
                                href="{{ route('backend.profile.index', 'profile') }}"
                                role="tab">
                                {{ __('Profile') }}
                            </a>

                            <a
                                class="nav-item nav-link {{ $tab == 'profile_edit' ? 'active' : '' }}"
                                href="{{ route('backend.profile.index', 'profile_edit') }}"
                                role="tab">
                                {{ __('Edit') }}
                            </a>

                            <a
                                class="nav-item nav-link {{ $tab == 'change_password' ? 'active' : '' }}"
                                href="{{ route('backend.profile.index', 'change_password') }}"
                                role="tab">
                                {{ __('Change Password') }}
                            </a>
                        </div>
                    </nav>

                    <div class="tab-content">
                        @if ($tab == 'profile')
                            <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3"><b>{{ __('Name') }}</b></div>
                                    <div class="col-sm-9">{{ auth()->user()->name ?? 'N/A' }}</div>
                                </div>

                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3"><b>{{ __('Email') }}</b></div>
                                    <div class="col-sm-9">{{ auth()->user()->email ?? 'N/A' }}</div>
                                </div>

                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3"><b>{{ __('Phone') }}</b></div>
                                    <div class="col-sm-9">{{ auth()->user()->phone ?? 'N/A' }}</div>
                                </div>

                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3"><b>{{ __('Username') }}</b></div>
                                    <div class="col-sm-9">{{ auth()->user()->username ?? 'N/A' }}</div>
                                </div>
                            </div>
                        @endif

                        @if ($tab == 'profile_edit')
                            <div class="tab-pane fade show active" id="profile_edit" role="tabpanel">
                                <form method="POST" action="{{ route('backend.profile.update', auth()->id()) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Name')"
                                            name="name"
                                            id="name"
                                            :value="auth()->user()->name ?? null"
                                            required
                                        />

                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Email')"
                                            type="email"
                                            name="email"
                                            id="email"
                                            :value="auth()->user()->email ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Phone')"
                                            name="phone"
                                            id="phone"
                                            :value="auth()->user()->phone ?? null"
                                            required
                                        />

                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Username')"
                                            name="username"
                                            id="username"
                                            :value="auth()->user()->username ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Image')"
                                            type="file"
                                            name="image"
                                            id="image"
                                            :value="isset(auth()->user()->image) ? asset(auth()->user()->image) : null"
                                            accept="image/*"
                                        />
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endif

                        @if ($tab == 'change_password')
                            <div class="tab-pane fade show active" id="change_password" role="tabpanel">
                                <form method="POST" action="{{ route('backend.change_password', auth()->id()) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Current Password')"
                                            type="password"
                                            name="current_password"
                                            id="current_password"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('New Password')"
                                            type="password"
                                            name="password"
                                            id="password"
                                            required
                                        />

                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Confirm Password')"
                                            type="password"
                                            name="password_confirmation"
                                            id="password_confirmation"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">{{ __('Change Password') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.backend>
