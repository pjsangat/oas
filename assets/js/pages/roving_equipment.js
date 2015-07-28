/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

    $("#search_roving").click(function() {

        $.ajax({
            url: base_url + "roving_equipment/search_results",
            dataType: "json",
            type: 'POST',
            data: $("#roving_search_form").serialize(),
            success: function(data) {
                console.info(data);
                if (Object.keys(data).length > 0) {

                    $("#roving_search_details").html('');

                    if (Object.keys(data.furnitures).length > 0) {
                        for (var ctr = 0; ctr < data.furnitures.length; ctr++) {

                            var html = '<div class="roving_result_row">';
                            html += '<div class="roving_title value">';
                            html += '<strong>' + data.furnitures[ctr].name + '</strong>';
                            html += '</div>';
                            html += '<div class="roving_value value" align="center">';
                            html += '<strong>' + data.furnitures[ctr].quantity + '</strong>';
                            html += '</div>';
                            html += '<div class="clear"></div>';
                            html += '</div>';

                            $("#roving_search_details").append(html);
                        }
                    }
                    if (Object.keys(data.equipments).length > 0) {

                        for (var ctr = 0; ctr < data.equipments.length; ctr++) {

                            var html = '<div class="roving_result_row">';
                            html += '<div class="roving_title value">';
                            html += '<strong>' + data.equipments[ctr].name + '</strong>';
                            html += '</div>';
                            html += '<div class="roving_value value" align="center">';
                            html += '<strong>' + data.equipments[ctr].quantity + '</strong>';
                            html += '</div>';
                            html += '</div>';

                            $("#roving_search_details").append(html);
                        }
                    }

                    $("#reserve_roving").show();
                    $("#search_result").show();
                }
            },
            // code to run if the request fails; the raw request and
            // status codes are passed to the function
            error: function(xhr, status, errorThrown) {
                console.log("Roving Equipment Search Error : " + errorThrown);
                console.log("Status: " + status);
                console.dir(xhr);
            }
        });

    });

    $("#reserve_roving").click(function() {
        $('#model_contents').modal('show');

    });

});