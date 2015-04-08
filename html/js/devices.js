// Important: Load this file after fhem-tablet-ui.js!

$( document ).ready(function() {
    $('div').each(function(index) {
   		$(this).bind("DOMSubtreeModified", function(event) {
   		    var elem = $(event.target);
   		    var get = elem.attr("data-get");
   		    
   		    // Missed Call Indikator
   		    if(elem.attr("data-device") && elem.attr("data-device").match(/^MISSED_CALL$/)) {
   		        var text = elem.text();
   		        if(text && !text.match(/^(&nbsp;|\s)*$/)) {
   		            $("#missed_call>#bg").css("color", "rgb(170,105,0)");
   		        }else {
   		            $("#missed_call>#bg").css("color", "rgb(80,80,80)");
   		        }
   		    }
   		    
   		    // Calls
   		    if(elem.attr("data-get") && elem.attr("data-get").match(/^A[0-9]$/) && elem.text().match(/^(AB|(in|out)_(not)?connected)$/)) {
   		        var text = elem.text();
   		        var color = 'rgb(111,69,0)';
   		        //if(elem.text().match(/^out_notconnected$/)) {
   		        //    color = 'rgb(255,0,0)';
   		        //} else if(elem.text().match(/^in_notconnected$/)) {
   		        //    color = 'rgb(0,255,0)';
   		        //} 
   		        var img = '<a href="javascript:$.get(\'/fhem?cmd='+encodeURI('{call('+elem.attr("data-get").replace(/^A/, '')+')}')+'&XHR=1\');false;" class="cell fa-stack fa-2x">'
                    + '<i id="bg" class="fa fa-stack-2x fa-circle-thin" style="color: '+color+';"></i>'
                    + '<i id="fg" class="fa fa-stack-1x fa-phone" style="color: '+color+';"></i>'
                    + '</a>';
   		        elem.text('');
   		        
   		        elem.prepend(img);
   		        if(text.match(/^out_/)) {
   		            elem.prepend(img.replace(/fa-phone/, 'fa-angle-right').replace(/rgb\(111,69,0\)/, 'rgb(80,80,80)'));
   		        } else if(text.match(/^in_/)) {
   		            elem.prepend(img.replace(/fa-phone/, 'fa-angle-left').replace(/rgb\(111,69,0\)/, 'rgb(170,105,0)'));
   		        } 
   		    }
   		    if(elem.attr("data-get") && elem.attr("data-get").match(/^B[0-9]$/) && elem.text().match(/^\d+:\d\d:\d\d\ \d\d.\d\d.\d\d\d\d$/)) {
   		        var time = elem.text().replace(/^(\d+:\d\d:\d\d)\ (\d\d.\d\d.\d\d\d\d)$/, '$1');
   		        if(time.match(/^\d:/)) {
   		            time = '0' + time;
   		        }
   		        var date = elem.text().replace(/^(\d+:\d\d:\d\d)\ (\d\d.\d\d.\d\d\d\d)$/, '$2');
   		        elem.text('');
   		        elem.prepend(date + '<br>' + time);
   		    }
        });
	});
});