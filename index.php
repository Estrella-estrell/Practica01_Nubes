
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha384-xyz123" crossorigin="anonymous">

<style>
    .container-fluid {
    width: 340%;
    /* padding-right: 15px; */
    /* padding-left: 15px; */
    /* margin-right: auto; */
    margin-left: -10rem;
    margin-top: -1.1rem;
}
    .welcome-section {
        background-image: url('hero.jpg'); /* Reemplaza 'hero.jpg' con la URL de tu imagen de fondo */
        background-size: cover;
        background-repeat: no-repeat;
        padding: 6% 0;
    }

    /* Si deseas ajustar también la sección slider, puedes hacerlo así: */
    .slider_section {
        background-image: url('hero.jpg'); /* Reemplaza 'hero.jpg' con la URL de tu imagen de fondo */
        padding: 6% 0;
        background-size: cover;
        background-repeat: no-repeat;
    }
    
        /* Estilo para los párrafos con fondo oscuro azulento */
    .col-md-4.text-center p {
        background-color: #1e4875; /* Color de fondo azul oscuro */
        color: white; /* Texto en blanco */
        padding: 20px; /* Espaciado interno para el cuadro */
        border-radius: 10px; /* Bordes redondeados para el cuadro */
        margin-top: 20px; /* Espacio superior entre los cuadros de párrafo */
    }

    /* Aplicar margen inferior solo al último cuadro de párrafo */
    .col-md-4.text-center p:last-child {
        margin-bottom: 20px;
    }


</style>
<?php include_once "encabezado.php"?>
<main role="main" class="container-fluid welcome-section">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <h1 class="display-4 text-white">¡Bienvenido al Panel de Administración!</h1>
            <p class="lead text-white">Gestiona tus elementos de manera eficiente.</p>
        </div>
    </div>
</main>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-check-circle fa-3x text-primary"></i>
            <div class="paragraph-box"> <!-- Aplicar la clase paragraph-box aquí -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-check-circle fa-3x text-primary"></i>
            <div class="paragraph-box"> <!-- Aplicar la clase paragraph-box aquí -->
                <p>Sed auctor tincidunt lectus, eget tincidunt erat volutpat nec.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-check-circle fa-3x text-primary"></i>
            <div class="paragraph-box"> <!-- Aplicar la clase paragraph-box aquí -->
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere .</p>
            </div>
        </div>
    </div>
</div>

<?php include_once "pie.php"?>


