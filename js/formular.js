jQuery(document).ready(function () {
    var formHandler = {
        readyLabels: [],
        formCollector: [],
        validatedAllready: 0,
        setAnchor: {},
        init: function(setAnchor){
            console.log('Init.');
            this.setAnchor = setAnchor;
        },
        validate: function(elem, mode){
            var parentFormId = elem.closest('form').attr('id'),
				elemIdNo = parentFormId.split('-')[1],
                newId = (Number(elemIdNo) + 1),
                fieldList = jQuery('#' + parentFormId).find('[data-require=y] input:NOT([name=versicherungsnr]), [data-require=y] select'),
                validateObj = this.validateFormFields(fieldList, mode),
                collector = validateObj.collector,
                groupBox = validateObj.groupBox,
                errorArray = validateObj.errorArray,
                errorGroups = [], 
				formCollector = this.formCollector;
            
            formCollector[elemIdNo] = (jQuery('#'+parentFormId).serializeArray());                  //Serial Form
            
            errorGroups = this.hiLiteError(errorArray, parentFormId, collector, groupBox, mode);
			
            if((errorArray.length > 0)? 0: 1){              //next Tab
                var nextTab = '#check-tab-' + newId;
                this.readyLabels.push(newId);
                if(mode === 'submit'){
                    jQuery(nextTab).click();
                    this.setAnchor(jQuery('.formular'), jQuery('header'));
                    if(parentFormId !== 'tab-3'){
						//Bring data to front
						this.bringDataToFront(formCollector);
					}else{
						console.log('%s, %O', 'abschicken', formCollector);
						jQuery.post('inc/form_val.php', {
							data: formCollector
						}).done(function(resp){
							console.info(resp);
						});
					}
                }
            }else{
                if(mode === 'submit'){
                    this.validatedAllready = 1;
					
					if(errorGroups.length && parentFormId !== 'tab-3'){
	                    this.setAnchor(jQuery('#'+parentFormId+' .formular-box[data-position='+errorGroups[0].split('_')[1]+']'), jQuery('header'));
					}else{
                        this.setAnchor(jQuery('.formular'), jQuery('header'));
					}
                }
            }
        },
		validateFormFields: function(elem, mode){
            var debug = 0, 
                errorArray = [],
                collector = {},
                groupBox = {};

            elem.each(function() {
                var r = jQuery(this),
                    fieldId = r.attr('id'),
                    parent = r.parent().parent(),
                    boxPosition = parent.parent().parent().data('position'),
                    rType = r.attr('type'),
                    rName, rProp, objLine = {};

                if(fieldId === 'datenschutz'){
                    boxPosition = parent.closest('[data-position]').data('position');
                }

                groupBox['position_'+boxPosition] = groupBox['position_'+boxPosition] || [];
                groupBox['position_'+boxPosition].push(fieldId);

                if(rType === 'checkbox'){
                    if(r.prop('checked')){
                        if(fieldId !== 'datenschutz'){
                            parent.removeClass('error');
                        }else{
                            parent.parent().parent().removeClass('error');
                        }
                    }else{
                        if(mode !== 'precheck'){
                            if(fieldId !== 'datenschutz'){
                                parent.addClass('error');
                            }else{
                                parent.parent().parent().addClass('error');
                            }
                            errorArray.push(fieldId);
                        }
                        
                    }
                }else if(rType === 'radio'){
                    rName = r.attr('name');       //fieldId
                    rProp = r.prop('checked');
                    objLine = {title: fieldId,value: rProp};
                    collector[rName] = collector[rName] || [];
                    collector[rName].push(objLine);
                }else if(rType === 'text'){
                    var rVal = r.val();

                    if(rVal === null || rVal === ''){
                        if(mode !== 'precheck'){
                            parent.addClass('error');
                        }
                        if(fieldId === 'strasse' || fieldId === 'hausnr'){
                            rName = 'strasse_hausnr';       //Ausnahme
                            objLine = {title: fieldId,value: rProp};
                            collector[rName] = collector[rName] || [];
                            collector[rName].push(objLine);
                        }else if(fieldId === 'plz' || fieldId === 'ort'){
                            rName = 'plz_ort';              //Ausnahme
                            objLine = {title: fieldId,value: rProp};
                            collector[rName] = collector[rName] || [];
                            collector[rName].push(objLine);
                        }else{
                            errorArray.push(fieldId);
                        }
                    }else{
                        parent.removeClass('error');

                        if(fieldId === 'email'){
                            var atpos = rVal.indexOf("@"),
                                dotpos = rVal.lastIndexOf(".");
                            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= rVal.length) {
                                if(mode !== 'precheck'){
                                    parent.addClass('error');
                                }
                                errorArray.push(fieldId);
                            } else {
                                parent.removeClass('error');
                            }
                        }
                    }
                }else{
                    if (r.attr('id') === 'anrede') {
                        if (r.val() === 'anrede') {
                            if(mode !== 'precheck'){
                                parent.addClass('error');
                            }
                            errorArray.push(fieldId);
                        } else {
                            parent.removeClass('error');
                        }
                    }
                }
            });

            //Group-Handling
            if(Object.getOwnPropertyNames(collector).length !== 0){
                var keys = Object.keys(collector);
                keys.map(function(elemObj){
                    var obj = collector[elemObj],
                        errors = [];
                    if(obj.length){
                        obj.map(function(elem){
                            if(!elem.value){
                                errors.push(elem.title);
                            }
                        });
                        if(obj.length === errors.length){
                            errorArray.push(elemObj);
                        }
                    }
                    obj.map(function(elem){
                        if(obj.length === errors.length){
                            if(mode !== 'precheck'){
                                jQuery('#'+elem.title).parent().parent().addClass('error');
                            }
                        }else{
                            jQuery('#'+elem.title).parent().parent().removeClass('error');
                        }
                    });
                });
            }

            if(debug){console.log('%s: %O', 'Debug', errorArray);}
			
            return {
                errorArray: errorArray,
                collector: collector,
                groupBox: groupBox
            };
        },
		hiLiteError: function(errorArray, formId, groupCollector, groupBox, mode){
            jQuery('#'+formId).find('.show-error-box').removeClass('show-error-box');    //Clear error
            jQuery('#'+formId).find('.show-info-box').removeClass('show-info-box');    //Clear info

            var keys = Object.keys(groupBox),
                errorGroups = [];

            errorArray.forEach(function(elem){
                if(elem === 'kundeninfo'){
                    elem = groupCollector[elem][0].title;
                }else if(elem === 'strasse_hausnr' || elem === 'plz_ort'){
                    var elemFirst = elem.split('_')[0];
                    elem = elemFirst;
                }

                //GroupBox (elem)
                keys.forEach(function(groupElem){
                    if(groupBox[groupElem].indexOf(elem) >= 0){
                        errorGroups[groupElem.split('_')[1]] = groupElem;
                    }
                });
                if(mode !== 'precheck'){
                    jQuery('#'+elem).parent().parent().children('.icon-achtung-round').click();
                }
            });

            //Set complete-sign
            var notYetCompleted = [];
            keys.forEach(function(position, index){
                var positionNo = Number(errorGroups.indexOf(position));
                if(positionNo === -1){
                    jQuery('#'+formId+' .formular-box[data-position='+ (index+1) +']').addClass('completed');
                }else{
                    jQuery('#'+formId+' .formular-box[data-position='+ (index+1) +']').removeClass('completed');
                    notYetCompleted.push(position);
                }
            });

            return notYetCompleted;
        },
        bringDataToFront: function(collection){
            var data = this.mergeFormData(collection),
                parent = jQuery('#tab-3'),
                dataOutPersonal = parent.find('[data-out-personal]'),
                n, c = [], exp, sep;
            
            //Zusatzrisiken
            if(data.tarife !== undefined){
                var tarife = parent.find('.' + data.tarife);
                
                jQuery('.ihr-gewaehlter-tarif').removeClass('active');
                jQuery(tarife).addClass('active');
                
                if(data.tierhalterrisiko === 'on'){
                    jQuery(tarife).find('.zusatz-1').addClass('active');
                }else{
                    jQuery(tarife).find('.zusatz-1').removeClass('active');
                }
                if(data.gewaesserschadensrisiko === 'on'){
                    jQuery(tarife).find('.zusatz-2').addClass('active');
                }else{
                    jQuery(tarife).find('.zusatz-2').removeClass('active');
                }
                
                if(data.tierhalterrisiko === 'on' || data.gewaesserschadensrisiko === 'on'){
                    jQuery(tarife).find('.einschluss-zusatzrisiken').addClass('active');
                }else{
                    jQuery(tarife).find('.einschluss-zusatzrisiken').removeClass('active');
                }
            }
            
			//Kundeninfo
			var kundeninfoMsg = 'Kein Versicherungskunde';
			if(data.kundeninfo === 'kundeninfo-ja' && (data.versicherungsnr !== undefined && data.versicherungsnr.length)){
				kundeninfoMsg = 'Versicherungsnummer (' + data.versicherungsnr + ')';
			}
			jQuery('.personal-data [data-out=kundeninfo]').text(kundeninfoMsg);
			
            //Angebotsversand
			var angebotsversandMsg = '';
			if(data.angebotsversand === 'angebotsversand-email'){
				angebotsversandMsg = 'Angebotsversand per E-Mail';
			}else if(data.angebotsversand === 'angebotsversand-post'){
				angebotsversandMsg = 'Angebotsversand per Post';
			}
			jQuery('.personal-data [data-out=angebotsversand]').text(angebotsversandMsg);
			
            //personal data
            dataOutPersonal.each(function(){
				var elem = jQuery(this);
                n = elem.data('out-personal');
                c = n.split('_');
                exp = '';
				sep = '';
                
                c.map(function(item){
                    exp += sep+data[item];
                    sep = ' ';
                });
                
                elem.text(exp);
            });
        },
		validateSubmit: function(elem){
            this.validate(elem, 'submit');
        },
        validateKeydown: function(elem){
            this.validate(elem, 'keydown');
        },
        validatePreCheck: function(elem){
            this.validate(elem, 'precheck');
        },
		mergeFormData: function(collection){
            var data = [];
            collection.map(function(elem){
                elem.map(function(pair){
                    data[pair.name] = pair.value;
                });
            });
            return data;
        },
        getReadyLabels: function(){
            return this.readyLabels;
        },
        getValidatedAllready: function(){
            return this.validatedAllready;
        },
    };
    
    //Formulare
    (function(){
        try{
			jQuery("#geburtsdatum").mask("99.99.9999",{
				autoclear: false
			});
		}
		catch(e){
			console.info('%s', 'Assuming not a \'formular\', because "jQuery.mask" not loaded!');
		}
        jQuery('form[name=tab-3] .icon-signatur').on('click', function(){
            var labelNo = jQuery(this).parent().data('step'),
                labelId = jQuery('label[for=check-tab-'+labelNo+']');
            
            labelId.click();
        });
        
        //Init
        formHandler.init(setAnchor);
        var readyLabels = formHandler.getReadyLabels(),
            validatedAllready = formHandler.getValidatedAllready();
        
        jQuery('.formular .submit').on('click', readyLabels, function(e){
            e.preventDefault();
            formHandler.validateSubmit(jQuery(this));
        });
        
        jQuery('[data-require=y] input:NOT([name=versicherungsnr]), [data-require=y] select').on('keypress keyup change', validatedAllready, function(){
            if(validatedAllready){
                formHandler.validateKeydown(jQuery(this));
            }else{
                formHandler.validatePreCheck(jQuery(this));
            }
        });
        
        //1-2-3-Navigation
        jQuery('.formular .nav-set label').on('click', readyLabels, function(e){
            var elem = jQuery(this),
                elemFor = elem.attr('for'),
                elemForNo = Number(elemFor.split('-')[2]),
                active = elem.parent().parent().find('.active').attr('for'),
                activeNo = Number(active.split('-')[2]),
				formSubmit = jQuery('#tab-'+activeNo+' .submit');
            
            if(activeNo < elemForNo){
                if(readyLabels.indexOf(elemForNo)===-1){
                    e.preventDefault();
                }else{
                    formSubmit.click();
                }
            }else{
				if(activeNo === 3){
					//uncheck to prevent full-submit!
					jQuery('#datenschutz').prop('checked', false);
				}
                formSubmit.click();
            }
        });
        
        //Labels
        jQuery('.formular .icon-achtung-round').on('click', function(){
            jQuery(this).parent().toggleClass('show-error-box');
        });
        jQuery('.formular .question-mark').on('click', function(){
            jQuery(this).parent().toggleClass('show-info-box');
        });
        jQuery('.formular .icon-x').on('click', function(){
            var elem = jQuery(this),
                parent = elem.parent().parent();
            parent.removeClass('show-error-box show-info-box');
        });
        
        //Hi-lite
        jQuery('.box-form input, .box-form select, .box-form textarea').on('focus', function(){
            jQuery(this).parent().parent().addClass('hi-lite');
        }).on('blur', function(){
            jQuery(this).parent().parent().removeClass('hi-lite');
        });
        //Sync Focus
        jQuery('.box-form .form-kundeninfo-ja input[name=kundeninfo]').on('change', function(){
            jQuery(this).parent().children('input[name=versicherungsnr]').focus();
        });
        jQuery('.box-form .form-kundeninfo-ja input[name=versicherungsnr]').on('keydown', function(){
            jQuery('#tab-2 label[for=kundeninfo-ja]').click();
        });
        
        //Button
        jQuery('.formular .back').on('click', setAnchor, function(e){
            e.preventDefault();
            var elem = jQuery(this),
                parentFormId = elem.parent().parent().attr('id'),
                elemIdNo = parentFormId.split('-')[1],
                newId = (Number(elemIdNo) - 1),
                previousTab = '#check-tab-' + newId;
            jQuery(previousTab).click();
            setAnchor(jQuery('.formular'), jQuery('header'));
        });
    })(setAnchor, formHandler);
});