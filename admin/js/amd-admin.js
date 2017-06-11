(function( $ ) {
	'use strict';
	
	  $('#id_amd_metadescription').on('keyup', function() {
		
        var len_de = $(this).val().length;
        if (len_de >= 160) {
          $('#adpuamd_desc_charNum').html("Characters exceeded: <span class='red-color-amd'><strong>" + ( len_de - 160) + '</strong></span>');
        } else {
          $('#adpuamd_desc_charNum').html("Characters remaining: <span class='green-color-amd'><strong>" + ( 160 - len_de)+ '</strong></span>');
        }
      });
    $('#id_amd_metatitle').on('keyup', function() {
    
        var len_ti = $(this).val().length;
        if (len_ti >=60) {
          $('#adpuamd_title_charNum').html("Characters exceeded: <span class='red-color-amd'><strong>" + ( len_ti - 60) + '</strong></span>');
        } else {
          $('#adpuamd_title_charNum').html("Characters remaining: <span class='green-color-amd'><strong>" + ( 60 - len_ti)+ '</strong></span>');
        }
      });

})( jQuery );
