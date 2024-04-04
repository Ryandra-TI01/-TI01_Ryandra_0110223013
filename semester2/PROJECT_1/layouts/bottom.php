			<!-- footer -->
			<footer class="main-footer">
				<div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
				<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
			</footer>
			<!-- /. footer -->
		</div>
		<!-- ./wrapper -->

		<!-- REQUIRED SCRIPTS -->
		<!-- jQuery -->
		<script src="../assets/plugin/jquery/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="../assets/plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE -->
		<script src="../assets/dist/js/adminlte.js"></script>
		<!-- OPTIONAL SCRIPTS -->
		<script src="../assets/plugin/chart.js/Chart.min.css"></script>
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script>
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })();
        function confirm_delete(id) {
                let result = confirm('Apakah Anda yakin ingin menghapus data ini?');
                if (result) {
                    window.location.href = 'delete_pasien.php?id=' + id;
                }
            }
        </script>
	</body>
</html>