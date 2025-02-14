
</main>
        <footer>
            <p>Site criado para o curso Tec. de Informatica para Internet</p>
            <?php
              // date_default_timezone_set('America/Sao_Paulo');
              // $dataHora = new DateTime();
             //  echo $dataHora->format('d/m/Y H:i:s');
             
             // Definir o locale como 'pt_BR' (português do Brasil)
             setlocale(LC_TIME, 'pt_BR.UTF-8');
             
             // Criar um objeto DateTime
             $data = new DateTime();
             
             // Usar IntlDateFormatter para formatar a data por extenso
             $fmt = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
             $data_extenso = $fmt->format($data);
             
             
             
            ?>
            <p><?=$data_extenso?></p>
        </footer>
        <hr>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>    
</body>
</html>