<!-- CONTIDO DA PAXINA -->
<?php
require_once(__DIR__ . "/../../core/ViewManager.php");
$view = ViewManager::getInstance();
include('core/language/strings/Strings_' . $_SESSION["idioma"] . '.php');

?>

<!-- refresca o perfil do select -->
<script>
    function enviar() {
        var ruta = 'index.php?controller=reserve&action=add';
    }
</script>

<div class="col-md-6" style="margin-bottom: 30px">
    <h1 class="page-header"><?php echo $strings['create_reserve']; ?></h1>
    <form name="form" id="form" method="POST"
          action="index.php?controller=reserve&action=add"
          enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <?php echo $strings['create_reserve'] ?>
            </div>
            <div class="panel-body">

                <!-- avisos + nome -->
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-info float-left" style="margin-left: 10px">
                        <div class="row">
                            <?php echo $strings['no_white_spaces'] ?>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col col-md-5">
                        <label for="divdatestart"><?= $strings['space']  ?></label>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
                            <!-- <input required class="form-control" type="number" name="id_espacio" placeholder="<?php //echo $strings['space_id'];?>">-->
                            <select autofocus id="space" name="space" class="form-control">
                                <?php
                                $sm = new SpaceMapper();
                                $spaces = $sm->show();
                                echo '<option value=NULL>'.$strings['without_space'].'</option>';
                                foreach ($spaces as $space){
                                    echo '<option value='.$space->getCodspace.'>'.$space->getSpacename().'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    <!--Campo id space-->
                    </div>
                        <div class="col-xs-12 col col-md-5">
                            <label for="divdatestart"><?= $strings['service']  ?></label>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
                                <!-- <input required class="form-control" type="number" name="id_espacio" placeholder="<?php //echo $strings['space_id'];?>">-->
                                <select id="service" name="service" class="form-control">
                                    <?php
                                    $s = new ServiceMapper();
                                    $services = $s->show();
                                    echo '<option value=NULL>'.$strings['without_service'].'</option>';
                                    foreach ($services as $service){
                                        echo '<option value='.$service->getId().'>'.$service->getDescripcion().'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        <!--Campo id service-->
                        </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col col-md-5">
                        <label for="divdatestart"><?= $strings['date']  ?></label>
                        <div id="divdatestart" class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input type="text" class="form-control" id="datestart" name="date"
                                   placeholder= <?php echo $strings['date'] ?> required="true">
                            <div id="error"></div>
                        </div>
                        <!--Campo fecha -->
                    </div>

                    <div class="col-xs-12 col col-md-5">
                        <label for="divdatestart"><?= $strings['alumn']  ?></label>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
                            <!-- <input required class="form-control" type="number" name="id_espacio" placeholder="<?php //echo $strings['space_id'];?>">-->
                            <select required id="alumn" name="alumn" class="form-control">
                                <?php
                                $s = new AlumnMapper();
                                $alumns = $s->show();
                                foreach ($alumns as $alumn){
                                    echo '<option value='.$alumn->getCodalumn().'>'.$alumn->getAlumnname()." ".$alumn->getAlumnsurname().'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    <!--Campo id alumno-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col col-md-5">
                        <label for="divdatestart"><?= $strings['initial_hour']  ?></label>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o fa-fw"></i></span>
                            <input required="true" class="form-control" type="time" id="startTime" name="startTime" placeholder=<?php echo $strings['initial_hour']?>>
                        </div>
                    <!--Campo hora_ini-->
                    </div>
                    <div class="col-xs-12 col col-md-5">
                        <label for="divdatestart"><?php echo $strings['final_hour']  ?></label>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o fa-fw"></i></span>
                            <input class="form-control" type="time" id="endTime" name="endTime" placeholder=<?php echo $strings['final_hour']?> required="true">
                            <div id="error"></div>
                        </div>
                        <!--Campo hora_fin-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col col-md-5">
                        <label for="divdatestart"><?php echo $strings['place_price']  ?></label>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-euro fa-fw"></i></span>
                            <input required class="form-control" type="number" id="spacePrice" name="spacePrice" placeholder=<?php echo $strings['place_price']?>>
                        </div>
                        <!--Campo precio-->
                    </div>
                        <div class="col-xs-12 col col-md-5">
                            <label for="divdatestart"><?php echo $strings['physio_price']  ?></label>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-euro fa-fw"></i></span>
                                <input required class="form-control" type="number" id="physioPrice" name="physioPrice" placeholder="<?php echo $strings['physio_price'];?>">
                            </div>
                            <!--Campo precio-->
                        </div>
                    </div>
                </div>
         </div>


        <div class="row">

            <div class="col-xs-12">
                <div class="pull-left">
                    <a class="btn btn-default btn-md" href="index.php?controller=reserve&action=show">
                        <i class="fa fa-arrow-left"></i>
                        <?php echo $strings['back'] ?></i></a>
                </div>

                <div class="pull-right">
                    <button class="btn btn-outline btn-warning btn-md" name="reset" type="reset">
                        <?php echo $strings['clean'] ?></i></button>

                    <button class="btn btn-success btn-md" id="submit" name="submit" type="submit">
                        <i class="fa fa-plus"></i>
                        <?php echo $strings['ADD'] ?></i></button>
                    <?php

                    ?>
                </div>
            </div>

        </div>
    </form>
    <!--fin formulario-->
</div>
<script>
    $( function() {
        $( "#datestart" ).datepicker();
        $( "#datestart" ).datepicker( "option", "dateFormat", "yy-mm-d" );
    } );
</script>

<script>
    $( function() {
        $( "#dateend" ).datepicker();
        $( "#dateend" ).datepicker( "option", "dateFormat", "yy-mm-d" );
    } );
</script>

<script>
    //Non deixar que o campo input teña espazos
    $("input").on("keydown", function (e) {
        return e.which !== 32;
    });
</script>
