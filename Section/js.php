<script src="../Content/js/jquery-3.1.1.min.js"></script>
    <script src="../Content/js/bootstrap.min.js"></script>
    <script src="../Content/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../Content/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="../Content/js/plugins/flot/jquery.flot.js"></script>
    <script src="../Content/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../Content/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../Content/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../Content/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../Content/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="../Content/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../Content/js/inspinia.js"></script>
    <script src="../Content/js/plugins/pace/pace.min.js"></script>

    <!-- Sparkline -->
    <script src="../Content/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <script src="../Content/js/plugins/footable/footable.all.min.js"></script>
     <script src="../Content/js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
   <script src="../Content/js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="../Content/js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="../Content/js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="../Content/js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="../Content/js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="../Content/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="../Content/js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="../Content/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="../Content/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="../Content/js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="../Content/js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="../Content/js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="../Content/js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Select2 -->
    <script src="../Content/js/plugins/select2/select2.full.min.js"></script>

    <!-- TouchSpin -->
    <script src="../Content/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Tags Input -->
    <script src="../Content/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Dual Listbox -->
    <script src="../Content/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>
    <script src="../Content/js/plugins/dataTables/datatables.min.js"></script>

    <script src="../Content/alertifyjs/alertify.js"></script>
     <!-- Page-Level Scripts -->
    

    <script>
        $(document).ready(function(){

            $('.tagsinput').tagsinput({
                tagClass: 'label label-primary'
            });

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            var elem_4 = document.querySelector('.js-switch_4');
            var switchery_4 = new Switchery(elem_4, { color: '#f8ac59' });
                switchery_4.disable();

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


            $(".touchspin1").TouchSpin({
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin2").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%',
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin3").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $('.dual_select').bootstrapDualListbox({
                selectorMinimalHeight: 160
            });


        });

        $('.chosen-select').chosen({width: "100%"});

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        var basic_slider = document.getElementById('basic_slider');

        noUiSlider.create(basic_slider, {
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        var range_slider = document.getElementById('range_slider');

        noUiSlider.create(range_slider, {
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        var drag_fixed = document.getElementById('drag-fixed');

        noUiSlider.create(drag_fixed, {
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });


    </script>


    <script>
        $(document).ready(function() {

            var sparklineCharts = function(){
                $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1ab394',
                    fillColor: "transparent"
                });

                $("#sparkline2").sparkline([32, 11, 25, 37, 41, 32, 34, 42], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1ab394',
                    fillColor: "transparent"
                });

                $("#sparkline3").sparkline([34, 22, 24, 41, 10, 18, 16,8], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1C84C6',
                    fillColor: "transparent"
                });
            };

            var sparkResize;

            $(window).resize(function(e) {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineCharts, 500);
            });

            sparklineCharts();




            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,20],[11,10],[12,13],[13,4],[14,7],[15,8],[16,12]
            ];
            var data2 = [
                [0,0],[1,2],[2,7],[3,4],[4,11],[5,4],[6,2],[7,5],[8,11],[9,5],[10,4],[11,1],[12,5],[13,2],[14,5],[15,2],[16,0]
            ];
            $("#flot-dashboard5-chart").length && $.plot($("#flot-dashboard5-chart"), [
                        data1,  data2
                    ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,

                            borderWidth: 2,
                            color: 'transparent'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                        },
                        tooltip: false
                    }
            );

        });
    </script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
<script type="text/javascript">
    function dogo(){
     //$(document).ready(function(){
      var cod=$("#hotdog").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }

             
        });
         }
         function dogodoble(){
     //$(document).ready(function(){
      var cod=$("#dogodoble").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }

             
        });
         }

         function dogoconpa(){
     //$(document).ready(function(){
      var cod=$("#dogoconpa").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }
             
        });
       
         // })
         }
    function dogodopa(){
     //$(document).ready(function(){
      var cod=$("#dogodopa").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }

             
        });
         }
         function papas(){
     //$(document).ready(function(){
      var cod=$("#papas").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
              agregar();
            }
             
        });

         }
    function momia(){
     //$(document).ready(function(){
      var cod=$("#momia").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }

             
        });
         }
function momiapa(){
     //$(document).ready(function(){
      var cod=$("#momiapa").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }

             
        });
         }
    function momiapic(){
     //$(document).ready(function(){
      var cod=$("#momiapic").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }

             
        });
         }
        function salchipapas(){
     //$(document).ready(function(){
      var cod=$("#salchipapas").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }

             
        });
         }
    function dogomomia(){
     //$(document).ready(function(){
      var cod=$("#dogomomia").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }

             
        });
         }
    function dogomomiapa(){
     //$(document).ready(function(){
      var cod=$("#dogomomiapa").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }

             
        });
         }
    function wini(){
     //$(document).ready(function(){
      var cod=$("#wini").val();
      
       $.ajax({
            url: "../Controlador/busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
            
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#nompro").val(data.Nombre);
              $("#precio").val(data.Precio_Unitario);
              $("#cantidad").val(data.Cantidad);
               agregar();
            }

             
        });
         }




 function agregar(){
   $(document).ready(function(){
         
            var articulo=$("#codigo").val();
             var produc=$("#nombre").val();
             var pro=$("#nompro").val();
            var descripcion=$("#descripcion").val();
            var precio=$("#precioU").val();
            var preci=$("#precio").val();
            var cantidad=$("#cantidad").val();
             if (cantidad=="") {
                cantidad=1;
            }
           
            var monto=cantidad*precio;
           if (monto >= 1) {

            $("#productos > tbody").append("<tr><td class='center'>"+produc+"</td><td class='center'>"+descripcion+"</td><td class='center'>"+precio+"</td><td class='center'>"+cantidad+"</td><td class='total'>"+monto.toFixed(2)+"</td><td class='center'><button class='btn btn-block btn-danger btn-xs Delete'><i class='icon-trash bigger-120'></i> Eliminar</button></td></tr>");
             }
            $("#codigo").val("");
            $("#cantidad").val("");

            $("#precioU").val("");
            $("#preci0").val("");
            $("#nombre").val("");
             $("#descripcion").val("");
            //$("#codigo").focus();
            $("#nompro").val("");
           
             
             var data = [];
          $("td.total").each(function(){
         data.push(parseFloat($(this).text()));
           });
         var suma = data.reduce(function(a,b){ return a+b; },0);
         $("#suma").html(suma);
         $("#terminar").attr("disabled",false);
         
        
      });
           
           
         }

    function cambio(){
   $(document).ready(function(){
         
          var sum=$(".suma").html();
          var pago=$("#pago").val();
          var cam=parseFloat(pago)-parseFloat(sum);
          $(".cambio").html("$ "+cam); 
         
          
      });
           
           
         }

$(document).on('click', '.Delete', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
    var data = [];
     $("td.total").each(function(){
         data.push(parseFloat($(this).text()));
           });
         var suma = data.reduce(function(a,b){ return a+b; },0);
         $("#suma").html(suma);
         if (suma==0) {
          $("#terminar").attr("disabled",true);
         }
     });
function Venta(){
  $(document).ready(function(){
             
           
          var suma=$(".suma").html();
          var sum= parseFloat(suma);
        
          $.ajax({
            url: "vendido.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {suma:sum},
            success: function(data){
              
            }
             
        });
          inser();
          
          
                         /*$(".suma").html("");
                         $("#pago").val("");
                         $(".cambio").html("");*/
                          });
                        }

    function inser(){
   $(document).ready(function(){
         var yapuso=0;
          $('#productos > tbody > tr').each(function(){
                var id=$(this).find('td').eq(5).html();
                var descripcion=$(this).find('td').eq(1).html();
                var proc = $(this).find('td').eq(0).html();
                var can = $(this).find('td').eq(3).html();
                var preciou  = $(this).find('td').eq(2).html();
                var monto=$(this).find('td').eq(4).html();
               
                         $.ajax({
                             beforeSend: function(){
                              },
                             url: 'procesar_venta.php',
                             type: 'POST',
                             data: '&proc='+proc+'&cantidad='+can+'&preciou='+preciou+'&descripcion='+descripcion+'&id='+id,
                             success: function(x){
                                  
                                  var n = noty({
                                   text: "Procesando venta...  articulo actual: "+proc,
                                   theme: 'relax',
                                   layout: 'topLeft',
                                   type: 'success',
                                   timeout: 2000,
                                  });
                               /*if(yapuso==0){
                               llena_ticket_archivo(cod,can,preciou,descripcion_art,yapuso,monto,$("#totales").html(),$("#paga_con").val(),$("#el_cambio").val(),n_tic);
                               yapuso=1;
                               }else{
                               llena_ticket_archivo(cod,can,preciou,descripcion_art,yapuso,monto,$("#totales").html(),$("#paga_con").val(),$("#el_cambio").val(),n_tic);
                               }*/
                              },
                             error: function(jqXHR,estado,error){
                               $("#errores").html('Error... ');
                              }
                             });
                           });
          alert("venta Realizada");
          $(".suma").html("");
          $("#pago").val("");
          $(".cambio").html("");
          $("#tbody").empty();
          
      });
           
           
         }
</script>