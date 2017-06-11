(function( $ ) {
	'use strict';
	
	  $('#id_amd_metadescription').on('keyup', function() {
		
        var len = $(this).val().length;
        if (len >= 160) {
          $('#adpuamd_charNum').html("Characters remaining: <span class='red-color-amd'><strong>" + ( len - 160) + '</strong></span>');
        } else {
          $('#adpuamd_charNum').html("Characters exceeded: <span class='green-color-amd'><strong>" + ( 160 - len)+ '</strong></span>');
        }
      });

})( jQuery );
