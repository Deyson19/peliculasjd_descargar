
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>


<hr>
<footer class="text-center text-white">

<div class="card-footer text-muted">
                    <?php
                    // Imprimir la fecha calendario actual ejemplo 14/03/2022
                    echo "Fecha actual: " . date("d/m/Y");
                    print "<br>";
                    // Imprime la hora actual del sistema. Se debe configurar de acuerdo al pais (Colombia) 
                    echo "Hora actual: " . date("h:i A");

                    ?>
               </div>
     <!-- Copyright -->
     <div class="text-center text-dark p-8" style="background-color: rgba(0, 0, 0, 0.2);">
          © <?php echo date('Y') ?> Copyright: PelículasJD
     </div>
     <!-- Copyright -->
</footer>

</body>

</html>