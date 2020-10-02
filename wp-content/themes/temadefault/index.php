<?php
get_header();
?>
<div class="content-area">
    <main>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/wordpressHomework/wordpress/wp-content/themes/temaReto1/imagenes/imgFuac01.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Curso electiva interdisiplinar</h1>
                        <h3>
                            <p>Este curso se trata de wordpress y php la primera tarea es hacer un login.
                            </p>
                        </h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/wordpressHomework/wordpress/wp-content/themes/temaReto1/imagenes/imgFuac02.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Pagina hecha con bootstrap</h1>
                        <h3>
                            <p>Esta página se basa en la documentación de bootstrap hecha por Eder
                                Carbonero.</p>
                        </h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/wordpressHomework/wordpress/wp-content/themes/temaReto1/imagenes/imgFuac03.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><strong>Pendiente por un título</strong></h1>
                        <h3>
                            <p>Esta vista esta pendiente por ser implementada</p>
                        </h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </main>

</div>
<?php
get_footer();
?>