<script>
    var laravelFlashifySwalFired = null;
</script>

<script data-turbolinks-eval="false" data-turbo-eval="false">
    window.LaravelFlashify = {
        config: function (key) {
            let config = @json(flashify()->config());

            return config[key] ?? config;
        },
        jsonParse: function (string) {
            return JSON.parse(string ?? '{}', (key, value) => {
                if (typeof value == 'string' && value.startsWith('function')) {
                    try {
                        return new Function('return ' + value)();
                    } catch (error) {
                        return value;
                    }
                }

                return value;
            });
        },
        fire: function (flashify) {
            let instance = this;

            if (flashify.options) {
                flashify.options = instance.jsonParse(JSON.stringify(flashify.options))
            }

            let plugin = flashify.plugin ?? '{{ flashify()->plugin }}';

            switch (plugin) {
                case 'swal':
                    if (window.Swal == undefined) {
                        return console.warn('LaravelFlashify: Swal not defined!');
                    }

                    if (laravelFlashifySwalFired && Swal.isVisible()) {
                        laravelFlashifySwalFired = laravelFlashifySwalFired.then(() => {
                            return instance.swal(flashify);
                        });
                    } else {
                        laravelFlashifySwalFired = instance.swal(flashify);
                    }
                    break;
                case 'izi-toast':
                    instance.iziToast(flashify);
                    break;
                default:
                    break;
            }
        },
        swal: function (flashify) {
            if (window.Swal == undefined) {
                return console.warn('LaravelFlashify: Swal not defined!');
            }

            return Swal.fire({
                title: flashify?.title ?? null,
                html: flashify?.text ?? null,
                icon: flashify?.type ? flashify.type : 'success',
                showCloseButton: true,
                ...flashify.options
            });
        },
        iziToast: function (flashify) {
            if (window.iziToast == undefined) {
                return console.warn('LaravelFlashify: iziToast not defined!');
            }

            return iziToast[flashify.type ?? 'success']({
                title: flashify?.title ?? '',
                message: flashify?.text ?? '',
                ...flashify.options
            });
        }
    };

    window.addEventListener('flashify', event => {
        LaravelFlashify.fire(event.detail);
    });

    var laravelFlashifyDomLoadded = false;
</script>

<script>
    if (laravelFlashifyDomLoadded) {
        handleLaravelFlashify();
    }

    document.addEventListener('DOMContentLoaded', function () {
        handleLaravelFlashify();

        laravelFlashifyDomLoadded = true;
    });

    function handleLaravelFlashify() {
        var flashifies = @json(flashify()->get());

        if (flashifies.length) {
            flashifies.forEach(flashify => {
                LaravelFlashify.fire(flashify);
            });
        }
    }
</script>

{{ ! request()->ajax() ? flashify()->clear() : '' }}
