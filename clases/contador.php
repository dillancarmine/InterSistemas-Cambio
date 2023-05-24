<script>
    $(document).ready(function() {
        var contador = <?php echo isset($_POST['contador']) ? $_POST['contador'] : 0; ?>;

        // Función para sumar 1 al contador
        $("#sumar").click(function() {
            contador++;
            actualizarContador();
        });

        // Función para restar 1 al contador
        $("#restar").click(function() {
            contador--;
            actualizarContador();
        });

        // Función para actualizar el valor del contador en la página
        function actualizarContador() {
            $("#contador").val(contador);
        }
    });
</script>