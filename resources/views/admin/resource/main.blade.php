<!DOCTYPE html>
<html lang="en">
    @include("admin.resource.head")
<body>
    <style>
        table.dataTable thead>tr>th.sorting
        {
            text-align: center;
            align-items: center;
        }
    </style>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Main wrapper start -->
    <div id="main-wrapper">
        <!-- Nav header start -->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
               <img src="{{url('/public/admin_assets/images/Logo-one.png')}}" alt="image">
                <h4>DSKSM</h4>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!-- Nav header end -->

        @include("admin.resource.header")
        @include("admin.resource.menubar")
        @yield("content")

        <!-- Footer start -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://vertitect.com/" target="_blank">Vertitect Technologies</a> 2025</p>
            </div>
        </div>
        <!-- Footer end -->
    </div>
    <script>
        setTimeout(function() {
            $(".alert").fadeOut("slow");
        }, 7000);
    </script>
    <!-- Main wrapper end -->
    <!-- Scripts -->
    <!-- Required vendors -->
    <script src="{{url('/public/admin_assets/vendor/global/global.min.js')}}"></script>
	<script src="{{url('/public/admin_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{url('/public/admin_assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <!--Data table ja-->
    <script src="{{ url('/public/admin_assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('/public/admin_assets/js/plugins-init/datatables.init.js') }}"></script>
    <!--Date Picker js-->>
    <script src="{{ url('/public/admin_assets/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ url('/public/admin_assets/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ url('/public/admin_assets/vendor/pickadate/picker.date.js') }}"></script>
    <script src="{{ url('/public/admin_assets/js/plugins-init/pickadate-init.js') }}"></script>
    <script src="{{ url('/public/admin_assets/vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js')}}"></script>
	<script src="{{ url('/public/admin_assets/js/dashboard/cms.js')}}"></script>
	<!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>
	<!-- Chart sparkline plugin files -->
    <script src="{{url('/public/admin_assets/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{url('/public/admin_assets/js/plugins-init/sparkline-init.js')}}"></script>
	<!-- Chart Morris plugin files -->
    <script src="{{url('/public/admin_assets/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{url('/public/admin_assets/vendor/morris/morris.min.js')}}"></script>
    <!-- Init file -->
    <script src="{{url('/public/admin_assets/js/plugins-init/widgets-script-init.js')}}"></script>
	<!-- Svganimation scripts -->
    <script src="{{url('/public/admin_assets/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{url('/public/admin_assets/vendor/svganimation/svg.animation.js')}}"></script>
	<!-- Demo scripts -->
    <script src="{{url('/public/admin_assets/js/dashboard/dashboard.js')}}"></script>
	<script src="{{url('/public/admin_assets/js/custom.min.js')}}"></script>
    <script src="{{url('/public/admin_assets/js/dlabnav-init.js')}}"></script>
    <script src="{{url('/public/admin_assets/js/demo.js')}}"></script>
    <!--<script src="{{url('/public/admin_assets/js/styleSwitcher.js')}}"></script>-->

</body>
</html>