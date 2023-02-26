<x-layout.backend>
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link {{ $tab == 'website' ? 'active' : '' }}" href="{{ route('backend.settings.index', 'website') }}" role="tab">
                                {{__('Website')}}
                            </a>

                            <a class="nav-item nav-link {{ $tab == 'company' ? 'active' : '' }}" href="{{ route('backend.settings.index','company') }}" role="tab">
                                {{__('Company')}}
                            </a>

                            <a class="nav-item nav-link {{ $tab == 'social' ? 'active' : '' }}" href="{{ route('backend.settings.index','social') }}" role="tab">
                                {{__('Social')}}
                            </a>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        @if ($tab == 'website')
                            <div class="tab-pane fade active show" id="website" role="tabpanel">
                                @include('backend.setting._website')
                            </div>
                        @endif

                        @if ($tab == 'company')
                            <div class="tab-pane fade active show" id="company" role="tabpanel">
                                @include('backend.setting._company')
                            </div>
                        @endif

                        @if ($tab == 'social')
                            <div class="tab-pane fade active show" id="social" role="tabpanel">
                                <livewire:backend.setting.social-form />
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</x-layouts.backend>
