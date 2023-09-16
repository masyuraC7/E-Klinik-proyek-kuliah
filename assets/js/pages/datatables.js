let datatable1 = $('#table1').dataTable();
let datatable2 = $('#table2').dataTable();
let datatable3 = $('#table3').dataTable();

$(document).ready(function() {
    //get time, week and month
    const month = ["Januari","Februari","Maret","April","Mai","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    const d = new Date();
    let thisMonth = d.getMonth();
    let nameOfThisMonth = month[thisMonth];
    let thisDay = d.getDate();
    
    //datatable
    let dataTable1 = $("#tablefilter").DataTable();

    //filter waktu
    $('.status-dropdown').on('change', function(e){
        if ($(this).val() == "month") {
            document.getElementById("filterWaktu").value = thisMonth + 1;
            document.getElementById("typeFilter").value = "bulan";
        }else if ($(this).val() == "week") {
            document.getElementById("filterWaktu").value = thisDay;
            document.getElementById("typeFilter").value = "minggu";
        }else if ($(this).val() == "") {
            document.getElementById("filterWaktu").value = "semua";
            document.getElementById("typeFilter").value = "semua";
        }
        dataTable1.draw();
    })

    //datatable
    let dataTable2 = $("#tablefilter2").DataTable();

    //filter waktu
    $('.status-dropdown2').on('change', function(e){
        if ($(this).val() == "month") {
            document.getElementById("filterWaktu").value = thisMonth + 1;
            document.getElementById("typeFilter").value = "bulan";
        }else if ($(this).val() == "week") {
            document.getElementById("filterWaktu").value = thisDay;
            document.getElementById("typeFilter").value = "minggu";
        }else if ($(this).val() == "") {
            document.getElementById("filterWaktu").value = "semua";
            document.getElementById("typeFilter").value = "semua";
        }
        dataTable2.draw();
    })

    //datatable
    let dataTable3 = $("#tablefilter3").DataTable();

    //filter waktu
    $('.status-dropdown3').on('change', function(e){
        if ($(this).val() == "month") {
            document.getElementById("filterWaktu").value = thisMonth + 1;
            document.getElementById("typeFilter").value = "bulan";
        }else if ($(this).val() == "week") {
            document.getElementById("filterWaktu").value = thisDay;
            document.getElementById("typeFilter").value = "minggu";
        }else if ($(this).val() == "") {
            document.getElementById("filterWaktu").value = "semua";
            document.getElementById("typeFilter").value = "semua";
        }
        dataTable3.draw();
    })

    $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var month = thisMonth + 1;
                var weekEnd = parseInt( $('#filterWaktu').val(), 10 );
                var weekStart = weekEnd - 6;

                if (weekStart < 0) {
                    weekStart = 0;
                }

                var date = data[5].split('-');
                var date2 = date[2].split(' ');
                var typeFilter = $('#typeFilter').val();

                if (weekStart > date2[0]) {
                    console.log("udah")
                }

                if (typeFilter == "minggu") {
                    if ( isNaN(weekEnd) || ((date2[0] >= weekStart) && (date2[0] <= weekEnd)) && month == date[1])
                    {
                        return true;
                    }
                    return false;
                }else if (typeFilter == "bulan") {
                    if ( isNaN(month) || date[1] == month )
                    {
                        return true;
                    }
                    return false;
                }else{
                    return true;
                }
            }
        );
});