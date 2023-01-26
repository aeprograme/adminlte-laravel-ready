
@yield('scripts_permanent')
@yield('scripts')
<script>

toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

</script>

@if ($overmsg = Session::get('overmsg'))
    @php
        $toast_type = $overmsg['type'];
        $toast_message = $overmsg['message'];

    @endphp
    <script defer>
        document.addEventListener("DOMContentLoaded", function(event) {

            @php

                $toast_title = '';
                $toast_class = '';

                switch ($toast_type) {
                    case 0:
                        $toast_title = 'error';
                        @endphp
                        toastr.error('{{ $toast_message }}');
                        @php
                        break;
                    case 1:
                        $toast_title = 'success';
                        @endphp
                        toastr.success('{{ $toast_message }}');
                        @php
                        break;
                    case 2:
                        $toast_title = 'warning';
                        @endphp
                        toastr.warning('{{ $toast_message }}');
                        @php
                        break;
                    default:
                        $toast_title = '';
                        @endphp
                        toastr.info('{{ $toast_message }}');
                        @php
                }
            @endphp

        });
    </script>
@endif

    @yield('scripts_last')
</body>
</html>