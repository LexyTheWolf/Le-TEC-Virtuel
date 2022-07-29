<?php
if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    mail("infos@letec-virtuel.be", "Le TEC Virtuel - Mail Contact Client", $_POST['message'], "From: system@letec-virtuel.be\r\nReply-To: " . $_POST['email']);
}
include('assets/header.php');
?>
<title>Le TEC Virtuel | Contact</title>
<section class="position-relative py-4 py-xl-5">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card mb-5">
                    <div class="card-body p-sm-5">
                        <h2 class="text-center mb-4">Contactez-nous</h2>
                        <form method="post">
                            <div class="mb-3"><input id="name-2" class="form-control" type="text" name="name" placeholder="Nom &amp; Prénom" /></div>
                            <div class="mb-3"><input id="email-2" class="form-control" type="email" name="email" placeholder="Email" /></div>
                            <div class="mb-3"><textarea id="message-2" class="form-control" name="message" rows="6" placeholder="Message"></textarea></div>
                            <div><button class="btn btn-primary d-block w-100" type="submit">Envoyer</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('assets/footer.php');
?>