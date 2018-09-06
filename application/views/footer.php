<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo base_url(); ?>">Varen Techno</a>.</strong> All rights
    reserved.
</footer>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url('assets'); ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/bower_components/responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/bower_components/responsive/js/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/bower_components/scroller/js/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/bower_components/select/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2({
            width: '100%'
        })
        $(function () {
            var applicanttable = $('#applicanttable').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'info'        : true,
                'autoWidth'   : true,
                'aaSorting'   : [],
                'ordering'    : true,
                'dom'         : 'Bfrtip',
                'buttons'     : [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            var companytable = $('#companytable').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'info'        : true,
                'autoWidth'   : true,
                'aaSorting'   : [],
                'ordering'    : true,
                'dom'         : 'Bfrtip',
                'buttons'     : [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        })
    })
</script>

<script>

    <?php echo "var base_url = '".base_url()."';";?>

    var province = document.getElementById('provinsi');
    var city = document.getElementById('kota');
    var district = document.getElementById('kecamatan');
    var area = document.getElementById('desa');

    function loadTable(fieldid)
    {
        var field = document.getElementById(fieldid);
        var value = field.options[field.selectedIndex].value;

        $.ajax ({
            type: 'POST',
            url: base_url+'Applicant/Filter',
            data: { 'fieldid': fieldid, 'value' : value },
            success : function(result) {
                var opts = $.parseJSON(result);

                // Use jQuery's each to iterate over the opts value

                $('#applicanttable tr').not(':first').remove();
                var html = '';
                var no =1;
                $.each(opts, function(i, d) {
                    html += '<tr><td>' + no + '</td><td>' + d.nama_pemohon + '</td><td>' + d.nik + '</td><td>' + d.jenis_kelamin + '</td><td>' + d.tempat_lahir + '</td><td>' + d.tanggal_lahir + '</td><td>' + d.kewarganegaraan + '</td><td>' + '<a href="#" class="label bg-aqua"> Edit <i class="fa fa-edit"></i></a>\n' +
                        '                                            <a href="#" class="label bg-red"> Hapus <i class="fa fa-trash"></i></a>' + '</td></tr>';

                    no+=1;
                });
                $('#applicanttable').append(html);

            }
        });


    }

    function loadUsia(fieldid)
    {
        var field = document.getElementById(fieldid);
        var value = field.options[field.selectedIndex].value;

        $.ajax ({
            type: 'POST',
            url: base_url+'Applicant/Age',
            data: { 'fieldid': fieldid, 'value' : value },
            success : function(result) {

                var opts = $.parseJSON(result);

                // Use jQuery's each to iterate over the opts value

                $('#applicanttable tr').not(':first').remove();
                var html = '';
                var no =1;
                $.each(opts, function(i, d) {
                    html += '<tr><td>' + no + '</td><td>' + d.nama_pemohon + '</td><td>' + d.nik + '</td><td>' + d.jenis_kelamin + '</td><td>' + d.tempat_lahir + '</td><td>' + d.tanggal_lahir + '</td><td>' + d.kewarganegaraan + '</td><td>' + '<a href="#" class="label bg-aqua"> Edit <i class="fa fa-edit"></i></a>\n' +
                        '                                            <a href="#" class="label bg-red"> Hapus <i class="fa fa-trash"></i></a>' + '</td></tr>';

                    no+=1;
                });;
                $('#applicanttable').append(html);

            }
        });


    }

    function loadProvince() {
        city.disabled = false;
        city.innerHTML="";
        var value = province.options[province.selectedIndex].value;
        $.ajax ({
            type: 'POST',
            url: base_url+'Region/GetAreas/'+value+"/5",
            data: { 'value': value },
            success : function(result) {
                var opts = $.parseJSON(result);
                // Use jQuery's each to iterate over the opts value
                $.each(opts, function(i, d) {
                    var opt = document.createElement("option");
                    opt.value= d.kode;
                    opt.innerHTML = d.nama; // whatever property it has

                    // then append it to the select element
                    city.appendChild(opt);
                });
            }
        });
    }

    function loadCity() {
        city.disabled = false;
        city.innerHTML="";
        var value = province.options[province.selectedIndex].value;
        $.ajax ({
            type: 'POST',
            url: base_url+'Region/GetAreas/'+value+"/5",
            data: { 'value': value },
            success : function(result) {
                var opts = $.parseJSON(result);
                // Use jQuery's each to iterate over the opts value
                $.each(opts, function(i, d) {
                    var opt = document.createElement("option");
                    opt.value= d.kode;
                    opt.innerHTML = d.nama; // whatever property it has

                    // then append it to the select element
                    city.appendChild(opt);
                });
            }
        });
    }

    function loadDistrict() {
        district.disabled = false;
        district.innerHTML="";
        var value = city.options[city.selectedIndex].value;
        $.ajax ({
            type: 'POST',
            url: base_url+'Region/GetAreas/'+value+"/8",
            data: { 'value': value },
            success : function(result) {
                var opts = $.parseJSON(result);
                // Use jQuery's each to iterate over the opts value
                $.each(opts, function(i, d) {
                    var opt = document.createElement("option");
                    opt.value= d.kode;
                    opt.innerHTML = d.nama;
                    district.appendChild(opt);
                });
            }
        });
    }


    function loadArea() {
        area.disabled = false;
        area.innerHTML="";
        var value = district.options[district.selectedIndex].value;
        $.ajax ({
            type: 'POST',
            url: base_url+'Region/GetAreas/'+value+"/13",
            data: { 'value': value },
            success : function(result) {
                var opts = $.parseJSON(result);
                // Use jQuery's each to iterate over the opts value
                $.each(opts, function(i, d) {
                    var opt = document.createElement("option");
                    opt.value= d.kode;
                    opt.innerHTML = d.nama;
                    area.appendChild(opt);
                });
            }
        });
    }
</script>
<script>
    var searchNIK;
    $(document).ready(function () {

        var nik = [];
        <?php
            foreach ($nik as $var)
            {
                echo "nik.push('$var->nik');";
            }
        ?>

        var form = document.getElementById("companyForm");
        form.style.display = "none";

        var callout = document.getElementById("idNotFound");
        callout.style.display = "none";
        searchNIK = function () {
            var nik_pemohon = document.getElementById('nik_search').value;

            if(nik.includes(nik_pemohon))
            {
                callout.style.display = "none";
                $.ajax ({
                    type: 'POST',
                    url: base_url+'Applicant/GetData/'+nik_pemohon,
                    data: { 'value': nik_pemohon },
                    success : function(result) {
                        var opts = $.parseJSON(result);
                        // Use jQuery's each to iterate over the opts value
                        document.getElementById('nama_pemohon').value = opts.nama_pemohon;
                        document.getElementById('nik_pemohon').value = nik_pemohon;
                        form.style.display = "block";
                    }
                });
            }
            else
            {
                document.getElementById('nama_pemohon').value = "";
                form.style.display = "none";
                callout.style.display = "block";
            }

        }


        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });
            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }
            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }q
            }
            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function (e) {
                closeAllLists(e.target);
            });
        }

        autocomplete(document.getElementById("nik_search"), nik);
    });
</script>
</body>
</html>