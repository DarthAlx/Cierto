<!--body wrapper end-->

<!--footer section start-->
<footer class="sticky-footer">
    2016 &copy; Cierto Global
</footer>
<!--footer section end-->


</div>
<!-- main content end-->
</section>

<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="verificar" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Verificar información</h4>
            </div>
            <div class="modal-body">

                <p>Por favor, revisa que la información que estas colocando sea correcta, ya que una vez que aceptes, se guardará sin oportunidad de realizar cambios.</p>



            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Revisar</button>
              <button class="btn btn-primary" data-dismiss="modal" id="verificar-si">Guardar</button>
            </div>
          </form>
        </div>
    </div>
</div>
<!-- modal -->

<!-- Placed js at the end of the document so the pages load faster -->

<script src="<?php echo base_url() ?>js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>js/modernizr.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url() ?>js/select2.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery.validate.min.js"></script>
<script src="<?php echo base_url() ?>js/validation-init.js"></script>
<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
<script src="<?php echo base_url() ?>js/pickers-init.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="<?php echo base_url() ?>js/html2canvas.js" type="text/javascript"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="<?php echo base_url() ?>js/dynamic_table_init.js"></script>

<script type="text/javascript">
  document.getElementById('<?=$menu?>').className += ' nav-active';
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".selectorestado").select2({
      placeholder: "Elige un estado",
      allowClear: true
    });
    $(".selectorcomunidad").select2({
      placeholder: "Elige una comunidad",
      allowClear: true
    });
    $(".selectortrabajador").select2({
      placeholder: "Elige un trabajador",
      allowClear: true
    });
    $(".selectorintegrante").select2({
      placeholder: "Elige un integrante",
      allowClear: true
    });
    $(".contratoselect").select2({
      placeholder: "Elige un contrato",
      allowClear: true
    });

    $(".sede-multiple").select2();
    $(".pro1-multiple").select2();
$(".pro2-multiple").select2();
    $(".vacantes").select2();
    $(".cosecha").select2();


    $(".selectorenlace").select2({
      placeholder: "Selecciona...",
      allowClear: true
    });

    $(".tipouser").select2({
    minimumResultsForSearch: Infinity
  });

  });

  $('.fecha').datepicker({
      format: "dd/mm/yyyy",
      language: "es-ES",
      autoclose: true,
      todayHighlight: true
  });

  $(document).ready(function() {
    $("#rancho").change(function() {
      $("#rancho option:selected").each(function() {
        rancho = $('#rancho').val();
        $.post("<?php echo base_url() ?>index.php/contratos/llena_sedes", {
        rancho : rancho
        }, function(data) {
          $("#sedes").html(data);
        });
      });
    })
  });

  $(document).ready(function() {
    $("#trabajador").change(function() {
      $("#trabajador option:selected").each(function() {
        trabajador = $('#trabajador').val();
        $.post("<?php echo base_url() ?>index.php/evaluaciones/llena_contrato", {
        trabajador : trabajador
        }, function(data) {
          $("#contrato").html(data);
        });
      });
    })
  });
  $(document).ready(function() {
    $("#tipouser").change(function() {
      $("#tipouser option:selected").each(function() {
        tipouser = $('#tipouser').val();
        $.post("<?php echo base_url() ?>index.php/usuarios/llena_usuario", {
        tipouser : tipouser
        }, function(data) {
          $("#idenlace").html(data);
        });
      });
    })
  })

  $("#verificar-si").on('click', function(){
                document.getElementById('botonguardar').click();
            });

  jQuery(document).ready(function(){
       $('.wysihtml5').wysihtml5();
  });


</script>


<?php if($this->session->userdata('tipo')==4){ ?>
<script type="text/javascript" src="http://ciertoglobal.org/admin/chat/php/app.php?widget-init.js"></script>

<?php } ?>

<script>
$(document).ready(function(){

  $(document).ready(function(){
    var element = $("#html-content-holder"); // global variable
    var getCanvas; // global variable
    $("#btn-Preview-Image").on('click', function () {
      element = $("#html-content-holder"); // global variable
             html2canvas(element, {
             onrendered: function (canvas) {

                    getCanvas = canvas;
                 }
             });
             document.getElementById('btn-Preview-Image').style.display="none";
             document.getElementById('btn-Convert-Html2Image').style.display="inline-block";
        });
    $("#btn-Preview-Image2").on('click', function () {
      element = $("#html-content-holder2"); // global variable
       html2canvas(element, {
       onrendered: function (canvas) {

              getCanvas = canvas;
           }
       });
       document.getElementById('btn-Preview-Image2').style.display="none";
       document.getElementById('btn-Convert-Html2Image2').style.display="inline-block";
     });

     $("#btn-Convert-Html2Image").on('click', function () {
      var imgageData = getCanvas.toDataURL("image/png");
      // Now browser starts downloading it instead of just showing it
      var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
      $("#btn-Convert-Html2Image").attr("download", "página1.png").attr("href", newData);
      document.getElementById('btn-Preview-Image').style.display="inline-block";
      document.getElementById('btn-Convert-Html2Image').style.display="none";
    });

    $("#btn-Convert-Html2Image2").on('click', function () {
        var imgageData = getCanvas.toDataURL("image/png");
        // Now browser starts downloading it instead of just showing it
        var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
        $("#btn-Convert-Html2Image2").attr("download", "página2.png").attr("href", newData);
        document.getElementById('btn-Preview-Image2').style.display="inline-block";
        document.getElementById('btn-Convert-Html2Image2').style.display="none";
    });

  });











});

</script>

<script src="<?php echo base_url() ?>js/scripts.js"></script>



</body>
</html>
