</main>
<!-- _____________________________________________________________ -->
    <footer>
        <p>Site desenvolvido para o curso de <b> Técnico em Informática para Internet</b></p>
        <p>Senac Penha &copy; 2022</p>
<?php
    date_default_timezone_set("America/Sao_Paulo"); // Acerta fuso horário
    $data = date("d/m/Y H:i"); // Função date()
   // $data = date("d/m/Y"); // Função date()
?>
    <p> <time><?=$data?></time> </p>

    </footer>
    
</body>
</html>