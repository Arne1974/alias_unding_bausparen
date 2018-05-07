jQuery(document).ready(function () {
    //aussendienstmitarbeitersuche
    jQuery('.finden-sie .icon-search-find.submit').on('click', function(){
        var suche_val = jQuery(this).parent().find('#plz-ort').val();
        
        jQuery.ajax({
            type: "POST",
            url:"adp_suche/index.php",
            data : { 
                suche_startseite: suche_val
            },
            success: function( returnedData ) {
                jQuery('.adp-suchergebnis').html( returnedData );
            }
        });
    });
    //Submit finden-sie on return-press
    jQuery('.finden-sie #plz-ort').on('keypress', function(e){
        if(e.which === 13) {
            jQuery('.finden-sie .icon-search-find.submit').click();
        }
    });
    
    //Fancybox stuff
    jQuery('.standard-image, .standard-video').fancybox({
		padding: 0,
        maxWidth: 525,
        maxHeight: 540,
        aspectRatio: true,
        fitToView: true,
        autoResize: true,
        autoSize: true,
        autoCenter: true,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none',
        helpers: {
            title : {
                type : 'float'
            }
        },
	});
    jQuery('.standard-image-width').fancybox({
		padding: 0,
        maxWidth: '80%',
        maxHeight: '80%',
        aspectRatio: true,
        fitToView: true,
        autoResize: true,
        autoSize: true,
        autoCenter: true,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none',
        helpers: {
            title : {
                type : 'float'
            }
        },
	});
    
    //Fixing Overlay-double issue
    jQuery('.navbar-nav .dropdown > a').on('click', function(){
        var navLogin = jQuery('.nav-kunden-login'),
            isOpen = navLogin.hasClass('open');
        if(isOpen){
            navLogin.removeClass('open');
        }
    });
    
    //Reset Layer
    jQuery('.overlay-main').on('click', function(){
        jQuery(this).toggleClass('active');
    });
    
    //imitate closing behaviour
    jQuery('.overlay').on('click', function(){
        jQuery('.nav-kunden-login').removeClass('open');
    });
    
    // Footer
    jQuery('.toggle-list').on('click', function(e){
        e.preventDefault();
        jQuery(this).toggleClass('active');
    });
    
    //Navigation
    jQuery('.dropdown-menu .dropdown-list-left .item-side-left a').on('mouseover', function(e){
        e.preventDefault();
        var elem = jQuery(this),
            parent = elem.parent(),
            closest = elem.closest('.dropdown-list-left');
        
        closest.find('.active').removeClass('active');
        parent.addClass('active');
    }).on('mouseout blur', function(e){
        e.preventDefault();
        var elem = jQuery(this),
            closest = elem.closest('.dropdown-list-left');
        
        closest.find('.active').removeClass('active');
        closest.find('.dropdown-list li:first-child .item-side-left').addClass('active');
    });
    
    //Change-on-hover
    jQuery('.change-on-hover').on('mouseover', 'li:first-child a', function(e){
        e.preventDefault();
        var elem = jQuery(this),
            posi = elem.data('position'),
            changeOnHover = jQuery('.change-on-hover');
        changeOnHover.find('[data-nav]').hide();
        changeOnHover.find('[data-nav="'+posi+'"]').css('display', 'table-cell');
    });
    
    //Kundenlogin
    jQuery('.toggle-kunden-login').on('click', function(){
        var elem = jQuery(this),
            target = elem.data('target');
        jQuery(target).toggleClass('open');
    });
    jQuery('.nav-kunden-login').on('click', '.tab', function(){
        var elem = jQuery(this),
            nav = elem.data('nav'),
            offsetParent = jQuery('.nav-kunden-login');
        offsetParent.find('div:NOT(.'+nav+')').removeClass('active');
        offsetParent.find('.' + nav).addClass('active');
    });
    
    //Seiten-Verlinkung
    jQuery('.preview-3 .left, .preview-3 .middle, .preview-3 .right, .tile-4 .more-link, .vor-ort').on('click', function(e){
        e.preventDefault();
        var elem = jQuery(this),
            dHref = elem.data('href');
        document.location.href = dHref;
    });
    
    //Search-box
    jQuery('.nav-further .links .icon-lupe').on('click', function(){
        var elem = jQuery(this),
            parent = elem.parent(),
            browserWidth = jQuery(window).width();
        if(browserWidth<768){
            parent.find('.search-box').toggleClass('active');
        }else{
            console.log('Search clicked!');
        }
    });
    
    //Sitemap
    jQuery('.sitemap').on('click', 'h2', function(){
        var elem = jQuery(this);
        elem.find('+.level-1').toggleClass('active');
    }).on('click', '.level-1 > li', function(){
        var elem = jQuery(this);
        elem.children('.level-2').toggleClass('active');
    });
    
    //Toggle Radio
    var activeTab = jQuery('.info_boxes:not(.info_boxes.formular) .content-box > input[type=radio]:first-child').index();
    (function(){
        //Un-toggle radios
        var activeRadio = jQuery('.accordion .wrapper > input[type=radio]:checked').index();
        jQuery('.accordion .wrapper > input[type=radio]').on('click', function () {
            var elem = jQuery(this),
                parent = elem.parent(),
                parentIndex = parent.index();
                
            if(activeRadio === parentIndex){
                elem.prop('checked', false);
                activeRadio = -1;
            }else{
                activeRadio = parentIndex;
            }
        }).on('change', function(){
            var elem = jQuery(this),
                parent = elem.parent();
            setAnchor(parent, jQuery('header'));
        });
        
        //Un-toggle tabs
        jQuery('.info_boxes:not(.info_boxes.formular) .content-box > input[type=radio]').on('click', activeTab, function(){
            var elem = jQuery(this),
                elemIndex = elem.index(),
                width = jQuery(window).width();
            
            if(width < 768){
                if(activeTab === elemIndex){
                    elem.prop('checked', false);
                    activeTab = -1;
                }else{
                    activeTab = elemIndex;
                }
            }
        }).on('change', function(){
            var elem = jQuery(this),
                childActive = elem.find('+.left'),
                width = jQuery(window).width();
            
            if(width < 768){
                setAnchor(childActive, jQuery('header'));
            }
        });
    })(activeTab, setAnchor);
    
    //Sync tab-accordion: input w/ label
    jQuery('.info_boxes .content-box > input[type=radio].info-check-grp').on('change', function(){
        var elem = jQuery(this),
            parent = elem.parent().parent(),
            navSet = parent.find('.nav-set'),
            id = elem.attr('id'),
            hasFormular = parent.hasClass('formular');
        
        if(hasFormular){
            navSet.find('.active').addClass('ready').removeClass('active inactive');
            navSet.find('[for="' + id + '"]').addClass('active').removeClass('inactive ready');
        }else{
            navSet.find('.active').removeClass();
            navSet.find('[for="' + id + '"]').addClass('active');
        }
    });
    
    //Resize
    (function(){
        var resizeTimer;
        jQuery(window).resize(function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                //Show tab Default
                if (jQuery('.info_boxes .content-box > input[type=radio]:checked').length === 0) {
                    jQuery('.info_boxes .content-box > input[type=radio]:first-child').prop('checked', true);
                    activeTab = jQuery('.info_boxes .content-box > input[type=radio]:first-child').index();
                }
            }, 250);
        });
    })(activeTab);
    
    //Marker
    (function(){
        //calls on every data-marker-Tag
        jQuery('[data-marker]').on('click', function(){
            var elem = jQuery(this),
                marker = elem.data('marker'),
                markerOnce = elem.data('marker-once');
            if(markerOnce === true){
                setMarkerOnce(marker);
            }else{
                setMarker(marker);
            }
        });
        //setMarkerOnce
        var usedMarker = [];
        var setMarkerOnce = function(name){
            if(usedMarker[name] !== true){
                setMarker(name);
            }
            usedMarker[name] = true;
        };
        //setMarker
        var setMarker = function(marker){
            var emospro = {
                siteid: 'www.alias-unding.de',
                marker: 'SI/HP/Bausparen/' + marker
            };
            
            //catch adblocker JS error
            if (typeof(window.emosPropertiesEvent) !== "function"){
                window.emosPropertiesEvent = function (){
                    return;
                };
            }else{
                window.emosPropertiesEvent(emospro);
            }
            
            console.log('%s %O', marker, emospro);
        };
    })();
});

//Set anchor-fn once and for all
var setAnchor = function(elem, header){
    var formBoxOffset = elem.offset().top;
    var abstand = (header.outerHeight() + 10);
    jQuery('html, body').animate({scrollTop: formBoxOffset - abstand}, 800);
};