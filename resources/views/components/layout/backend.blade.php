@props([
    'css',
    'js',
])

<!--

=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themes.getbootstrap.com/licenses/)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <x-layout.backend.head />
    </head>

    <body>
        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

        <x-layout.backend.drawer />

        <main class="content">
            <x-layout.backend.header />

            <div style="min-height: calc(100vh - 255px)">
                {{ $slot }}
            </div>

            <x-layout.backend.footer />
        </main>

        <x-layout.backend.script />
    </body>
</html>
