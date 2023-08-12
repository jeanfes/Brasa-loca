<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pedido.css">
    <title>brasaloca-mi-pedido.com</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="img-container">
                <img src="./assets/logo.png" alt="logo">
                <p>BRASA LOCA</p>
            </div>
            <div class="navbar-menu">
                <ul>
                    <li><a href="./index.html">MENU</a></li>
                    <li>
                        <a href="#">MI PEDIDO</a>
                    </li>
                    <li><a href="./nosotros.html">NOSOTROS</a></li>
                </ul>
            </div>
            <div class="menu-search">
                <input type="text" placeholder="Buscar">
                <picture><img src="./assets/search_black_24dp.svg" alt="search"></picture>
            </div>
        </nav>
    </header>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="main-container">
        <section class="main-products--container">
            <div class="main-card--container1">
                <picture><img src="./assets/hamburguesa-clasica.jpg.jpg" alt="product1"></picture>
                <div class="info--container1">
                    <p>Combo hamburguesa Clásica</p>
                    <p>$13.000 pesos</p>
                </div>
                <div class="value-container">
                    <label class="label-numberinput--container">
                       <p>N:</p>
                       <input class="number-input" type="number" name="cantidadcomboclasica" value="0" min="0" max="30">
                    </label>
                    <input class="sabores-input" list="sabores1" placeholder="Seleccione Sabor" name="gaseosacomboclasica">
                    <datalist id="sabores1">
                       <option value="Manzana Postobón"></option>
                       <option value="Uva Postobón"></option>
                       <option value="Naranja Postobón"></option>
                       <option value="Coca Cola"></option>
                       <option value="Sprite"></option>
                    </datalist>
                </div>
            </div>
            <div class="main-card--container2">
                <picture><img src="./assets/hamburguesa-doble-carne.jpg" alt="product2"></picture>
                <div class="info--container2">
                    <p>Combo hamburguesa Doble</p>
                    <p>$18.000 pesos</p>
                </div>
                <div class="value-container">
                    <label class="label-numberinput--container">
                       <p>N:</p>
                       <input class="number-input" type="number" name="cantidadcombodoble" value="0" min="0" max="30">
                    </label>
                    <input class="sabores-input" list="sabores2" placeholder="Seleccione Sabor" name="gaseosacombodoble">
                    <datalist id="sabores2">
                       <option value="Manzana Postobón"></option>
                       <option value="Uva Postobón"></option>
                       <option value="Naranja Postobón"></option>
                       <option value="Coca Cola"></option>
                       <option value="Sprite"></option>
                    </datalist>
                </div>
            </div>
            <div class="main-card--container3">
                <picture><img src="./assets/perro-caliente.jpg" alt="product3"></picture>
                <div class="info--container3">
                    <p>Combo perro caliente</p>
                    <p>$10.000</p>
                </div>
                <div class="value-container">
                    <label class="label-numberinput--container">
                       <p>N:</p>
                       <input class="number-input" type="number" name="cantidadperrocaliente" value="0" min="0" max="30">
                    </label>
                    <input class="sabores-input" list="sabores3" placeholder="Seleccione Sabor" name="gaseosaperro">
                    <datalist id="sabores3">
                       <option value="Manzana Postobón"></option>
                       <option value="Uva Postobón"></option>
                       <option value="Naranja Postobón"></option>
                       <option value="Coca Cola"></option>
                       <option value="Sprite"></option>
                    </datalist>
                </div>
            </div>
            <div class="main-card--container4">
                <picture><img src="./assets/pizza.jpg" alt="product4"></picture>
                <div class="info--container4">
                    <p>Porción de pizza</p>
                    <p>$8.000 pesos</p>
                </div>
                <div class="value-container">
                    <label class="label-numberinput--container">
                       <p>N:</p>
                       <input class="number-input" type="number" name="cantidadpizza" value="0" min="0" max="30">
                    </label>
                    <input class="sabores-input" list="sabores4" placeholder="Seleccione Sabor" name="saborpizza">
                    <datalist id="sabores4">
                        <option value="Jamón"></option>
                        <option value="Hawaiana"></option>
                        <option value="Pepperoni"></option>
                    </datalist>
                </div>
            </div>
            <div class="main-card--container5">
                <picture><img src="./assets/malteada.jpg" alt="product5"></picture>
                <div class="info--container5">
                    <p>Malteada</p>
                    <p>$8.000 pesos</p>
                </div>
                <div class="value-container">
                    <label class="label-numberinput--container">
                       <p>N:</p>
                       <input class="number-input" type="number" name="cantidadmalteada" value="0" min="0" max="30">
                    </label>
                    <input class="sabores-input" list="sabores5" placeholder="Seleccione Sabor" name="sabormalteada">
                    <datalist id="sabores5">
                        <option value="Chocolate"></option>
                        <option value="Fresa"></option>
                        <option value="Vainilla"></option>
                    </datalist>
                </div>
            </div>
            <div class="main-card--container6">
                <picture><img src="./assets/gaseosas.jpg" alt="product6"></picture>
                <div class="info--container6">
                    <p>Gaseosa</p>
                    <p>$3.000</p>
                </div>
                <div class="value-container">
                    <label class="label-numberinput--container">
                       <p>N:</p>
                       <input class="number-input" type="number" name="cantidadgaseosa" value="0" min="0" max="30">
                    </label>
                    <input class="sabores-input" list="sabores6" placeholder="Seleccione Sabor" name="saborgaseosa">
                    <datalist id="sabores6">
                       <option value="Manzana Postobón"></option>
                       <option value="Uva Postobón"></option>
                       <option value="Naranja Postobón"></option>
                       <option value="Coca Cola"></option>
                       <option value="Sprite"></option>
                    </datalist>
                </div>
            </div>
        </section>
        <section class="main-form--container">
            <h2 class="form-title">Ingrese sus datos personales</h2>
            <div>
              <label class="label1 label-form" for="nombre">
                <span>Nombre</span>
                <input type="text" id="nombre" required autocomplete="name" name="nombre">
              </label>
              <label  class="label2 label-form" for="direccion">
                <span>Direccion</span>
                <input type="text" id="direccion" required autocomplete="street-address" name="direccion">
              </label>
              <label class="label3 label-form" for="numero-cell">
                <span>Telefono</span>
                <input type="tel" id="numero-cell" required autocomplete="tel" name="telefono">
              </label>
              <input class="button-form" type="submit" value="Hacer el pedido">
            </div>
        </section>
    </form>
<div class="php-container">
<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $cantidad_combo_clasica = $_POST['cantidadcomboclasica'];
    $cantidad_combo_doble = $_POST['cantidadcombodoble'];
    $cantidad_perro_caliente = $_POST['cantidadperrocaliente'];
    $cantidad_pizza = $_POST['cantidadpizza'];
    $cantidad_malteada = $_POST['cantidadmalteada'];
    $cantidad_gaseosa = $_POST['cantidadgaseosa'];
    $gaseosa_comboclasica = $_POST['gaseosacomboclasica'];
    $gaseosa_combodoble = $_POST['gaseosacombodoble'];
    $gaseosa_perro = $_POST['gaseosaperro'];
    $sabor_pizza = $_POST['saborpizza'];
    $sabor_malteada= $_POST['sabormalteada'];
    $sabor_gaseosa = $_POST['saborgaseosa'];
    $total =0; 
    
    $total = (($cantidad_combo_clasica * 13000) + ($cantidad_combo_doble * 18000) + ($cantidad_perro_caliente * 10000) + ($cantidad_pizza * 8000) + ($cantidad_malteada * 8000) + ($cantidad_gaseosa * 3000));
    echo "<p>--------RECIBO--------</p>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Direccion: $direccion</p>";
    echo "<p>Total de su pedido:$ $total</p>";
    echo "----------------------";
    if($cantidad_combo_clasica > 0){
        echo "<p>$cantidad_combo_clasica Combo Clasica</p>";
        echo "<p>$gaseosa_comboclasica</p>";
    }
    if($cantidad_combo_doble > 0){
        echo "<p>$cantidad_combo_doble Combo Doble</p>";
        echo "<p>$gaseosa_combodoble</p>";
    }
    if($cantidad_perro_caliente > 0){
        echo "<p>$cantidad_perro_caliente Perro caliente</p>";
        echo "<p>$gaseosa_perro</p>";
    }
    if($cantidad_pizza > 0){
        echo "<p>$cantidad_pizza Porcion de Pizza</p>";
        echo "<p>Sabor: $sabor_pizza</p>";
    }
    if($cantidad_malteada > 0){
        echo "<p>$cantidad_malteada Malteada</p>";
        echo "<p>Sabor: $sabor_malteada</p>";
    }
    if($cantidad_gaseosa > 0){
        echo "<p>$cantidad_gaseosa Gaseosa</p>";
        echo "<p>Sabor: $sabor_gaseosa</p>";
    }
    }
?>    
</div>
    <footer>
        <div class="footer-container">
            <p>SIGUENOS EN REDES:</p>
            <a href=""><img src="./assets/facebook.png" alt="facebook">
            </a>
            <a href=""><img src="./assets/whatsapp.png" alt="whatsapp">
            </a>
            <a href=""><img src="./assets/instagram.png" alt="instagram">
            </a>
        </div>
    </footer>
</body>
</html>