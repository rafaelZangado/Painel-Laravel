@yield('conteudo')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    

<nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Menu</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" id='servidor_publico' href="#">Listar servidores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="teste">pg teste</a>
                </li>
            </ul>
            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" name="cpf" id="cpf" aria-label="Search">
                <button class="btn btn-outline-success" id="pesquisar" type="submit">Pesquisar</button>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <script>
        $(document).ready(function() {

            $("#servidor_publico").on('click', function() {
                $.ajax({
                    url: 'servidor.php', // envia para pagina
                    beforeSend: function() {
                        $('#print').html(' <div class="d-flex justify-content-center">Carregando...<div class="spinner-border" role="status"> <span class="visually-hidden"> Loading...</span></div></div>');
                    },

                    success: function(data) {
                        $('#print').html(data);
                    },

                    error: function(data) {
                        $('#print').html('ERRO AO ENCONTRAR PAGINA...');
                    },

                });
            }); // quando eu clicar no botao com o id='pagar'
        }); // quando eu clicar no botao com o id='pagar'F
    </script>

    <div class="container">
        <div id='print'></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="js/pesquisar.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"> </script>
