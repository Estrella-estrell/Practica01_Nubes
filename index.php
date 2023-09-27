
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
        background-image: url('hero.jpg'); 
        background-size: cover;
        background-repeat: no-repeat;
        padding: 6% 0;
    }

   
    .slider_section {
        background-image: url('hero.jpg');
        padding: 6% 0;
        background-size: cover;
        background-repeat: no-repeat;
    }
    
        
    .col-md-4.text-center p {
        background-color: #1e4875; 
        color: white; 
        padding: 20px; 
        border-radius: 10px; 
        margin-top: 20px; 
    }

   
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
            <div class="paragraph-box"> 
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-check-circle fa-3x text-primary"></i>
            <div class="paragraph-box"> 
                <p>Sed auctor tincidunt lectus, eget tincidunt erat volutpat nec.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-check-circle fa-3x text-primary"></i>
            <div class="paragraph-box"> 
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere .</p>
            </div>
        </div>
    </div>
</div>

<?php include_once "pie.php"?>


