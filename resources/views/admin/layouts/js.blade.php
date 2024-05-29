<script src="{{ asset('assets/admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/smooth-scrollbar.min.js') }}"></script>

{{-- datatable --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    $(document).ready(function() {
        $('#example').DataTable({
            select: true,
            "searching": true
        });

        const picker = document.querySelector('.timepicker-format');
        const tpFormat24 = new mdb.Timepicker(picker, {
            format24: true
        });

    });

    $(document).ready(function() {
        $('#example2').DataTable({
            select: true,
            "searching": true
        });

        const picker = document.querySelector('.timepicker-format');
        const tpFormat24 = new mdb.Timepicker(picker, {
            format24: true
        });

    });


    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/admin/js/material-dashboard.min.js?v=3.0.5') }}"></script>

@yield('additional-js-bottom')
@yield('script')
