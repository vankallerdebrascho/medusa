//fungsi-fungsi OS

//global variable
var id          = "";
var jml_form    = 0;                
var style_asli  = {};


//start menu/navigasi menu untuk mengeksekusi file frm atau php
function exe(fpath){

    id          = fpath.replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, '-').replace(/^(-)+|(-)+$/g,'');
     
    //cek apa sudah dibuka
    var z       = parseInt( $( "#"+id ).css( "z-index" ));
    if (isNaN(z)) {

        //tambah form ke dalam desktop
        jml_form = $(".form").length + 1;

        var asli = $("#work").html();


        if (fpath.indexOf(".frm")>= 0) {
            fpath = '../../Program Files/' + fpath.substr(14, fpath.length)
            $.get('Windows/compiler/compiler.php?path='+fpath, {}, 
                function (data) {
                $("#work").html(data+asli);
            })
            .done(function() {
                inisiasi();
            }) 
        } else {
            $.get(fpath, {}, 
                function (data) {
                $("#work").html(data+asli);
            })
            .done(function() {
                inisiasi();
            })          
        }
            
        

    } else {
        //munculkan sebagai z_index terbesar
        if($('#'+id).attr('state')==='normal') {ke_depan($('#'+id));}
        $('#'+id).show("fast");
    }
}



//fungsi standar semua form
function hapus(id){
    id.closest('.form').remove();
}

function tutup_semua(){
    $("#work").html("");
}

function sembunyi_semua(){
    $(".form").hide("fast");
}

function tampak_semua(){
    $(".form").show("fast");
}

function maximize(id){
    ke_depan(id);
    var id_form = id.closest('.form');

    if(id_form.attr('state')==='normal') {

        //simpan dom css value
        style_asli      = id_form.attr('style');
        style_asli_cont = id_form.children('.container').attr('style');
        style_asli_ins = id_form.children('.container-inside').attr('style');
        style_asli      = style_asli +'z-index: ' +id_form.css('z-index');
        id_form.children('.container').removeAttr('style');
        id_form.children('.container-inside').removeAttr('style');
        //overide internal css
        id_form.css({
            "width":"100%",
            "height":"100%",
            "top":"0px",
            "left":"0px",
            "z-index":"1001",
            "border-radius":"0px"
        });
        id_form.children('.container').css({
            "position": "absolute",
            "top":"23px",
            "height":"97%",
            "width": "100%"
        });
        id_form.attr('state', 'maximize');

    } else if(id_form.attr('state')==='maximize'){

        //restore dom css asli
        id_form.removeAttr('style');
        id_form.attr('style', style_asli);
        id_form.children('.container').removeAttr('style');
        id_form.children('.container').attr('style', style_asli_cont);
        id_form.children('.container-inside').removeAttr('style')
        id_form.children('.container-inside').attr('style', style_asli_ins);
        id_form.attr('state', 'normal');
    }
    return true;
}

function minimize(id) {
    id.closest('.form').hide("fast");
}

function tengah(id) {
    id.css("top", (Math.max(0, (($(window).height() - id.outerHeight()) / 2) + $(window).scrollTop()) + "px")-20);
    id.css("left", Math.max(0, (($(window).width() - id.outerWidth()) / 2) + $(window).scrollLeft()) + "px");
}

function ke_depan(id) {
    var id_form = id.closest('.form');
    $(".form").each(function() {
        $(this).closest('.form').css( "z-index", jml_form-1);
    });
    
    id_form.css("z-index", jml_form);
};

function cycle_wallpaper() {
    var numb = Math.floor((Math.random() * 2) + 1);
    $("#bg").css('background-image', 'url(Windows/desktop/img/wall/wall' + numb + '.jpg)');
}





//fungsi yang dijalankan setiap eksekusi form
function inisiasi(){
    //assign fpath sebagai id_form
    $("#form").attr("id", id); 

    //assign z_index
    $('#'+id).css("z-index", jml_form);
    
    //taruh di tengah
    tengah($('#'+id));  

    //$.getScript('frame/js/render.js');
    init.call($('.form'));
    //$.getScript(fpath+'event.js');   
}

var init = (function() {
    $('.form').on('mousedown', function() {
        if($(this).attr('state')==='normal'){
             ke_depan($(this));
        }
    });
    $('.titleInside').on('dblclick', function() {
        maximize($(this));
    });
    //$(this).resizable({
    //    alsoResize: $(this).children('.container'),
    //    minHeight: 140,
    //    minWidth: 200
    //});
    $(this).draggable({
        handle: '.titleInside'
    });
});





//fungsi yang dijalankan sekali setelah OS ready
$(document).ready(function(){
    //exe(fpath);
    cycle_wallpaper();
    
    var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
    var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

    var newDate = new Date();
    newDate.setDate(newDate.getDate());
    $('#DateAbbr').html(dayNames[newDate.getDay()].substr(0,3) + " ");

    setInterval( function() {
        var minutes = new Date().getMinutes();
        $(".min, .mins").html(( minutes < 10 ? "0" : "" ) + minutes);
        var hours = new Date().getHours();
        $(".hours, .hour").html(( hours < 10 ? "0" : "" ) + hours);
        }, 1000);

    $('.dock ul li').hover(
        function(){
            $(this).addClass('ok').prev().addClass('prev').prev().addClass('prev-ancor');
            $(this).addClass('ok').next().addClass('next').next().addClass('next-ancor');
        },
        function(){
            $('.dock ul li').removeClass('ok prev next next-ancor prev-ancor');
        }
    );
});


