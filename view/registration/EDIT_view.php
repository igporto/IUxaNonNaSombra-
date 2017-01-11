<!-- CONTIDO DA PAXINA -->
<?php
require_once(__DIR__ . "/../../controller/REGISTRATION_controller.php");
include('core/language/strings/Strings_' . $_SESSION["idioma"] . '.php');
$registrationMapper = new RegistrationMapper();
$codRegistration = $_REQUEST["codRegistration"];
$registration = $registrationMapper->view($registrationMapper->getCodRegistration($codRegistration));
?>

<div class="col-md-6">
    <h1 class="page-header"><?php echo $strings['registration_modify'].': '.$_GET['codRegistration']?></h1>
    <form method="POST" name="editform" id="editform"
          action="index.php?controller=registration&action=edit&codRegistration=<?php echo $codRegistration; ?>"
          enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <?php include('core/language/strings/Strings_' . $_SESSION["idioma"] . '.php'); ?>
                <?php echo $strings['management_info'] ?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col col-md-5">
                        <label for="selectperf"><?php echo $strings['reserve'] ?></label>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-dashcube fa-fw"></i></span>
                            <select id='reserve' name='reserve' class='form-control icon-menu'>
                            <?php
                            //Engadimos unha opcion por reserve a escoller
                            $registrationMapper = new RegistrationMapper();
                            //Recuperamos todos os posibles perfiles que se poden escoller para o usuario
                            $reserves = $registrationMapper->selectReserveId();
                            foreach ($reserves as $reserve) {
                                echo "<option value='" . $reserve."'>".$registrationMapper->getCodReserve() . "</option>";
                            }
                            ?>
                            </select>
                        </div>
                        <!--Campo reserve-->
                    </div>
                    <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-cog fa-fw"></i></span>
                            <input class="form-control" type="date" name="date" maxlength="25"
                                   placeholder=<?php echo $strings['date']; ?>>
                    </div>
                    <div class="col-xs-12 col col-md-5">
                        <label for="selectperf"><?php echo $strings['one_payment'] ?></label>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-dashcube fa-fw"></i></span>
                            <select id='payment' name='payment' class='form-control icon-menu'>
                            <?php
                            //Engadimos unha opcion por pago a escoller
                            $registrationMapper = new RegistrationMapper();
                            //Recuperamos todos os posibles perfiles que se poden escoller para o usuario
                            $payments = $registrationMapper->selectPaymentId();
                            foreach ($payments as $payment) {
                                echo "<option value='" . $payment."'>".$registrationMapper->getIdPago() . "</option>";
                            }
                            ?>
                            </select>
                        </div>
                        <!--Campo payment-->
                    </div>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12">
                <div class="pull-left">
                    <a class="btn btn-default btn-md" href="index.php?controller=registration&action=show">
                        <i class="fa fa-arrow-left"></i>
                        <?php echo $strings['back'] ?></i></a>
                </div>

                <div class="pull-right">
                    <button class="btn btn-outline btn-warning btn-md" name="reset" type="reset">
                        <?php echo $strings['clean'] ?></i></button>

                    <button class="btn btn-success btn-md" id="submit" name="submit" type="submit">
                        <i class="fa fa-edit"></i>
                        <?php echo $strings['EDIT'] ?></i></button>
                    <?php
                    ?>
                </div>
            </div>

        </div>
    </form>
    <!--fin formulario-->
</div>

<script>
    //Non deixar que o campo input teña espazos
    $("input").on("keydown", function (e) {
        return e.which !== 32;
    });
</script>