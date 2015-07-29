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
                if (Object.keys(data).length > 0) {

                    $("#roving_search_details").html('');
                    if (data.furnitures !== undefined) {
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
                    if (data.equipments !== undefined) {
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




    $('#organization').on('change', function() {
        waiteme("#sub_org");
        var csrf_name = $('input[name=csrf_name]').val();
        var org_id = this.value;

        $.post( base_url + 'roving_equipment/get_organization_group', 
                {
                    org_id: org_id,
                    csrf_name: csrf_name
                },
        function(data) {
            
            if( Object.keys(data).length > 0 ){
                if (data.sub_org !== undefined) {
                    var html = '<option value="">Select Sub Organization</option>';
                    for (var ctr = 0; ctr < data.sub_org.length; ctr++) {
                        var sub_org = data.sub_org[ctr];
                        html += '<option value="' + sub_org['id'] + '">' + sub_org['group_name'] + '</option>';
                    }                    
                    
                    $("#sub_organization").html(html);
                }
            }
            
        }, 'json');

        return false;
    });

});