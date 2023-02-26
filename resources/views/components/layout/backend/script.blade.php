@aware([
    'js',
])

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="{{ asset('assets/backend/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/nouislider/dist/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="{{ asset('assets/backend/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/notyf/notyf.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('assets/backend/assets/js/volt.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>

<x-flashify::scripts />

<livewire:scripts />

{{ $js }}

@stack('js')
