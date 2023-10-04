$(document).ready(function(){
    
    $('.edits').click(function(){
        var uid = $(this).attr('data-edit');
        var usr = $(this).attr('data-usr');
        $.post('/wp-admin/admin-ajax.php', {'action':'edit_appl', 'uid':uid , 'usr':usr }, function(response){
             $('.dataajx'+uid).html(response);
             $('.dataajx'+uid).addClass('active');
        }); 
        return false;
    });
    $('#door-cfg-download-btn1').click(function(){
        var uid = 1;
        var url_string = 'https://portamia.ru/configurator/'+$('#door-cfg-download-btn').attr('href'); 
        var url = new URL(url_string);
         console.log(c);

        var c = url.searchParams.get("door_cfg");
        console.log(c);
        
        
        $.post('/wp-admin/admin-ajax.php', {'action':'create_appl', 'uid':c  }, function(response){
             
        }); 
        
    });
    
 $(document).on('click','.sends',function(){
        idk = $(this).attr('data-edit');
        $.post('/wp-admin/admin-ajax.php', {'action':'ftp', 'idk':idk }, function(response){
           alert(response);
        }); 
        
        return false;  
   });
   
      
    
 
   $(document).on('click','.endis',function(){
       rem = $(this).attr('data-edit');
       $('.dataajx'+rem).removeClass('active');
       $('.dataajx'+rem).html('');
        $("html, body").animate({
        scrollTop: $('body').offset().top
    }, {
        duration: 370,   // по умолчанию «400»
        easing: "linear" // по умолчанию «swing»
    });
       return false;
   });
   
   
   
   $(document).on('click','.none',function(){
       $('.hidd_pra').removeClass('active');
       $(this).next().addClass('active');
   });
   $(document).on('click','.hidd_pra.active div',function(){
       atv = $(this).attr('data-v');
       atp = $(this).attr('data-p');
       if (atv != 0 ) {
       $(this).parent().prev().text(atv);
       $(this).parent().prev().addClass('sels');
       $(this).parent().prev().attr('data-p', atp);
       $('.hidd_pra').removeClass('active');
   } else {
       $('.hidd_pra').removeClass('active');
       $(this).parent().prev().removeClass('sels');
       $(this).parent().prev().attr('data-p', 0);
       $(this).parent().prev().text(atp);
   }
       
   });
    
   
    
    $(document).on('click', '.save_edit', function(){
        alert('Отправим на сохранение');
    });
    
    
     
    $(document).on('click', '.select_typ_uot_on', function(){
         atr = $(this).attr('data-o');
         $('.select_typ_uot_on').removeClass('active');
         $(this).addClass('active');
         param_fos();
         
    });
    
    
    $(document).on('click', '.select_typ_one', function(){
         atr = $(this).attr('data-o');
         $('.select_typ_one').removeClass('active');
         if (atr == 'Остекление') {
          $('.select_typ_uot_on').removeClass('active');
          $('.nonet').addClass('hidden');
         } else {
             $('.nonet').removeClass('hidden');
             $('#starti').addClass('active');
         }
         $(this).addClass('active');
         param_fos();
    });
    
    
   $(document).on('click','.edd_f',function(){
       $('.all_p').addClass('short');
       $('.h_block').addClass('active');
        $("html, body").animate({
        scrollTop: $('.result_ajx').offset().top
    }, {
        duration: 370,   // по умолчанию «400»
        easing: "linear" // по умолчанию «swing»
    });
     });
    


    
    
    
function param_fos() {
    
    var start = 0;
    var full = [];
    
    var param1 = $('.select_typ_one.active').attr('data-o');
    var param2 = $('.select_typ_uot_on.active').attr('data-o');
    if (!param2) {
        param2 = 'none';
    }
    
    
    
    $('.user_edit_manager_all_one').removeClass('hidd');
    
    
    if (param1 == 'Металл/МДФ' && param2 == 'Фрезерованная') { 
        var strs = '144,142,140,138,136,134,132,130,128,126,124,89,112,110,108,116,114';
    }
    if (param1 == 'Металл/МДФ' && param2 == 'Панель гладкая') { 
        var strs = '144,142,140,138,136,134,132,130,128,126,124,89,112,110,108';
    }
    if (param1 == 'Металл/МДФ' && param2 == 'С зеркалом') { 
        var strs = '144,142,140,138,136,134,132,130,128,126,124,89,112,110,108,118,120,122';
    }
    if (param1 == 'Остекление' && param2 == 'none') {
        var strs = '144,142,140,138,136,134,132,130,128,126,124,89,112,110,108,106,104,102';
    }
    if (param1 == 'Рамка' && param2 == 'Фрезерованная') {
        var strs = '144,142,140,138,136,134,132,130,128,126,124,89,112,110,108,116,114,98';
    }
    if (param1 == 'Рамка' && param2 == 'Панель гладкая') {
        var strs = '144,142,140,138,136,134,132,130,128,126,124,89,112,110,108,98';
    }
    if (param1 == 'Рамка' && param2 == 'С зеркалом') {
        var strs = '144,142,140,138,136,134,132,130,128,126,124,89,112,110,108,98,118,120,122';
    }
    
    $('.user_edit_manager_all_one').each(function(){
        pag = $(this).attr('data-p');
        if (strs.indexOf(pag) >= 0) {
            
        } else {
            $(this).addClass('hidd');
        }
    })
    
    
    
            /*  var idk = $('.h_block.active').attr('data-e');
    var model =  new Map([['value', '1'],['price', '79400'],['image', ''],['order', '1']]);
    var leaf =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var leafdooritems_single =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var outdoorstyles =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var hinges =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var metalcolin =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var metalcolout =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var indoorstylesmilled =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var classicmilled =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var doorcolout =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var furnituredoorsteptype =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var furniturecol =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var locknumber =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var lockitems =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var furnituretype =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var furnitem_size =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var furnitem_side =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    var furnitem_met =  new Map([['value', 'single'],['price', '0'],['image', ''],['order', '1']]);
    */
     
    
    ///var personData = '{"model":{"value":"1","price":"79400","image":"","order":"1"},"leaf":{"value":"single","price":"0","image":"","order":"1"},"leafdooritems_single":{"value":"slditem4","price":"0","image":"","order":"1"},"frameglasscol":{"value":"glass-frame-col-item3","price":"0","image":"","order":"1"},"furniture_extra-grid1_check":{"value":"1","price":"0","image":"","order":"1"},"furnitem_extra-grid1":{"value":"extra-grid-step1-item2-step__1","price":"0","image":"","order":"1"},"outdoorstyles":{"value":"baguette","price":"0","image":"","order":"1"},"furnitem_baguette":{"value":"baguette-item3-step__2","price":"0","image":"","order":"1"},"hinges":{"value":"furn-hinges-item2","price":"26600","image":"","order":"1"},"metalcolin":{"value":"btncol2","price":"5400","image":"","order":"1"},"metalcolout":{"value":"btncolout7","price":"6000","image":"","order":"1"},"indoorstylespanel":{"value":"1","price":"0","image":"","order":"1"},"classicmilled":{"value":"1","price":"0","image":"","order":"1"},"doorcolout":{"value":"btndoorcolout3","price":"12500","image":"","order":"1"},"furnituredoorsteptype":{"value":"doorstep-item2","price":"10200","image":"","order":"1"},"furniture_listtype_check":{"value":"1","price":"0","image":"","order":"1"},"furniturelisttype":{"value":"furn-list-item-2","price":"25300","image":"","order":"1"},"furniture_closer_check":{"value":"1","price":"0","image":"","order":"1"},"furnitem_closer":{"value":"closer-item2-step_6","price":"8700","image":"","order":"1"},"furniture_platband_check":{"value":"1","price":"0","image":"","order":"1"},"furnitem_platband":{"value":"platband-item2-step_4","price":"0","image":"","order":"1"},"furniture_dodings_check":{"value":"1","price":"0","image":"","order":"1"},"furnitem_dodings":{"value":"dodings-item1-step_4","price":"0","image":"","order":"1"},"extra-cornice_check":{"value":"1","price":"0","image":"","order":"1"},"furnitem_extra-grid2":{"value":"extra-grid-item1","price":"23600","image":"","order":"1"},"furniturecol":{"value":"furn-col-4","price":"7500","image":"","order":"3"},"locknumber":{"value":"lockbtn1","price":"0","image":"","order":"1"},"lockitems":{"value":"cfg-lock-item2","price":"8300","image":"","order":"1"},"furnituretype":{"value":"furn-item-6","price":"10000","image":"","order":"3"},"furnitem_size":{"value":"size-item2-step_6","price":"0","image":"","order":"1"},"furnitem_side":{"value":"side-item2-step_6","price":"0","image":"","order":"1"},"furnitem_met":{"value":"met-item2-step_6","price":"107900","image":"","order":"1"}}';
     
       ///     $.post('/wp-admin/admin-ajax.php', {'action':'sava_ajx', 'fulljs':personData, 'idk':idk }, function(response){
          ///  }); 



}    




$(document).on('click','.sava_param a',function(){
  var param1 = $('.select_typ_one.active').attr('data-o');
  var param2 = $('.select_typ_uot_on.active').attr('data-o');  
  var param = '{';   
  atv = '"fdoor":{"value":"'+param1+'"},';
  atz = '"fpanel":{"value":"'+param2+'"},';
  param = param + atv;
  param = param + atz;
  
  var all = $('.user_edit_manager_all_one').not( '.hidd').length;
  
  var cou = 1;
  $('.user_edit_manager_all_one').not( '.hidd').each(function(){
     if (!$(this).hasClass('hidd'))  {
         var idsk = $(this).find('.none').attr('data-idsk');
         var datap = $(this).find('.none').attr('data-p');
         var tee = $(this).find('.none').text();
         if (cou == all) {
         var nt = '"dataids'+idsk+'":{"value":"'+datap+'","text":"'+tee+'","datapid":"'+idsk+'"}';
         } else {
             var nt = '"dataids'+idsk+'":{"value":"'+datap+'","text":"'+tee+'","datapid":"'+idsk+'"},';
         }
         param = param + nt;
     }
     cou = cou + 1;
  });
  param = param + '}';
  var idk = $(this).attr('data-form');
   $.post('/wp-admin/admin-ajax.php', {'action':'sava_ajx_man', 'param':param, 'idk':idk }, function(response){
      alert('ok');
  }); 
  return false;
});
    
    
})