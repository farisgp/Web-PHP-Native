<?php 
// panggil sesion
$sesi = $_SESSION["MEMBER"];
?>


    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4">

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Nama Lengkap</h5>
                        <p><a href="#">
                                <?=$sesi["fullname"]?>
                            </a></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Email</h5>
                        <p><?=$sesi["email"]?></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Nama Pengguna</h5>
                        <p> <?=$sesi["username"]?></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Role</h5>
                        <p> <?=$sesi["role"]?></p>
                    </div>
                    <form method="POST"></form>
                </div>
            </div>

        </div>
    </section><!-- End Cource Details Section -->

    </><!-- End #main -->