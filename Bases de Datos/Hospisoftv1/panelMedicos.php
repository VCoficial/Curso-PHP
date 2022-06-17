<?php
session_start();
if (!isset($_SESSION['usuarioActivo'])) {
    header('Location:index.php');
} else {
    require_once 'plantilla/cabeceraMedicos.php';
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>GRAFICAS</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="https://englishlive.ef.com/es-mx/blog/wp-content/uploads/sites/8/2018/09/Vocabulario-en-ingl%C3%A9s-que-todo-m%C3%A9dico-debe-conocer.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At quia accusantium atque earum maxime obcaecati. Culpa fuga reiciendis blanditiis cumque suscipit, nobis unde, quos, nam exercitationem fugiat sint libero modi.
                    Ipsam, doloremque in nostrum voluptas autem laboriosam, dolor laudantium enim nemo minus, tempora nulla velit vel! Illum reprehenderit id numquam, commodi ab unde magnam. Reprehenderit quasi modi consequuntur porro iste!
                    Accusamus omnis natus eaque totam odio, officia illum obcaecati nemo maxime voluptatum eveniet rem eos fuga asperiores, iure blanditiis modi sequi aut neque voluptate? Dolorum beatae quibusdam quasi inventore dolores.
                    Numquam, reiciendis adipisci maiores perspiciatis culpa nostrum repellat dolores, est obcaecati unde perferendis inventore cupiditate! Eligendi debitis qui labore itaque eveniet esse? Nam quos soluta consequatur, maxime ab minus? Voluptas?
                    Facere odio reiciendis cumque tenetur quibusdam, vitae aut consectetur labore qui explicabo vel ab aliquam voluptatibus voluptate recusandae totam numquam vero iure ut et hic illo sed perspiciatis itaque. Possimus!
                </div>
            </div>
        </div>

        <!-- FIN DEL CONTENIDO -->

    <?php
    require_once 'plantilla/footer.php';
}
    ?>