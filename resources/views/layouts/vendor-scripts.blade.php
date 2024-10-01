<!-- JAVASCRIPT -->
<script src="{{ URL::asset('/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/metismenu/metismenu.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/node-waves/node-waves.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/waypoints/waypoints.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/jquery-counterup/jquery-counterup.min.js')}}"></script>
<script src="{{ URL::asset('/assets/js/pages/materialdesign.init.js') }}"></script>

@yield('script')

<!-- App js -->
<script src="{{ URL::asset('/assets/js/app.min.js')}}"></script>
<script>
    document.querySelectorAll('.nav-item.dropdown').forEach(function(dropdown) {
        dropdown.addEventListener('mouseover', function() {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            const rect = dropdownMenu.getBoundingClientRect();

            // Jika dropdown melebihi batas kanan layar
            if (rect.right > window.innerWidth) {
                dropdownMenu.style.left = 'auto';
                dropdownMenu.style.right = '0'; // Geser ke kiri
            }
        });
    });
</script>

@yield('script-bottom')