var work_container_scroll_pos = 0;

$(document).ready(function() {

    $.stellar();

    // Site Navigation links, smooth scrolling
    $('#site-navigation li a').each(function() {
        $(this).bind('click',function(event){
            var anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top
            }, 350);
            event.preventDefault();
        });
    });

    $('#control-left').click(function() {
        site_box_scroll('left');
    });
    $('#control-right').click(function() {
        site_box_scroll('right');
    });

    /*
    $('#work-container .wrapper-outer').scroll(function(event) {
        if ($(this).scrollLeft() > work_container_scroll_pos) { site_box_scroll('right'); }
        else { site_box_scroll('left'); }

        work_container_scroll_pos = $(this).scrollLeft();

        event.preventDefault();
//      site_box_scroll('right');
    });
    */

    $('#work-container .site-box').each(function() {
        var boxWidth = $('#work-container').width();

        if ( ! $(this).hasClass('active')) {
            $(this).css('left', ((boxWidth + 20) + 'px'));
        };

    });

});

function site_box_scroll(direction) {
    var count = $('#work-container .site-box').length;
    var boxWidth = $('#work-container').width() + 20;
    var duration = 500;
    var current = $('#work-container .active').attr('id').split('-');
    current = current[1];

    if (direction == 'left') {
        var next = Number(current) - Number(1);
        if (current == 1) { return; }
    }
    if (direction == 'right') {
        var next = Number(current) + Number(1);
        if (current == count) { return; }
    }

    current = '#box-'+current;
    next = '#box-'+next;

    $(current).animate({
        //left: '+='+boxWidth,
        top: '+=500',
        zIndex: 0,
        opacity: 0
    }, duration, function() {
        $(current).removeClass('active');
        $(current).animate({ top: '-=500', left: '+='+boxWidth }, 10, function() {
            $(current).css({ opacity: 1 });
        });
    });

    $(next).animate({
        left: '-='+boxWidth,
        zIndex: 100,
        opacity: 1
    }, duration, function() {
        $(next).addClass('active');
    });

}

var SiteWidget = {
    settings: {
        screenWidth: $(window).width(),
        screenHeight: $(window).height(),
        screenWidth60: $(window).width() / 1.6,
        adjustedWidth: 0,
    },

    init: function() {
        obj = this.settings;
        this.bindUIActions();
        this.resetScreens();
        //this.mobileScroll();
        this.enableHovers();
    },

    bindUIActions: function() {
        $(document).on('mousewheel', function (event, delta, deltaX, deltaY) {
            event.preventDefault();
            $(document).scrollLeft($(document).scrollLeft() - deltaY);
            $(document).scrollLeft($(document).scrollLeft() + deltaX);
        });
    },

    enableHovers: function() {
        $('#works').find('.hl').each(function() {
            var hoverObj = $(this).find('.details-content');
            hoverObj.fadeTo(5, 0);

            $(this).hover(function() {
                hoverObj.animate({
                    top: '-=30px',
                    opacity: 1,
                }, 200);
            }, function() {
                hoverObj.animate({
                    top: '+=30px',
                    opacity: 0,
                });
            });
        });
    },

    getDirection: function(x) {
        switch (x) {
            case 0: return ['top', '-']; break;
            case 1: return ['top', '+']; break;
            case 2: return ['left', '+']; break;
            case 3: return ['left', '+']; break;
        }
    },

    resetScreens: function() {
        $('.dynamic.full-width').each(function() {
            $(this).width(obj.screenWidth);
        });

        var adjustedWidth = 0;
        $('#main').find('.panel').each(function() {
            adjustedWidth += $(this).outerWidth();
        });
        obj.adjustedWidth = adjustedWidth;

        $('#wrapper').width(adjustedWidth);
        $('#scroller').width(obj.adjustedWidth);
        $('#main').width(adjustedWidth);
    },

    mobileScroll: function() {
        var ua = navigator.userAgent,
            isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);

        if (isMobileWebkit) {
            $('html').addClass('mobile');
        }

        if (isMobileWebkit) {
            iScrollInstance = new iScroll('wrapper');

            $('#scroller').stellar({
                scrollProperty: 'transform',
                positionProperty: 'transform',
                horizontalScrolling: true,
                verticalScrolling: false,
                //verticalOffset: 150
            });
        } else {
            $.stellar({
                horizontalScrolling: true,
                verticalScrolling: true,
                //verticalOffset: 150
            });
            $('#scroller').width(obj.adjustedWidth);
        }
    },
};

var ContactWidget = {
    settings: {
        theForm: $('#frm-contact'),
        submitButton: $('#btn-con-submit'),
        theFields: {
            name: $('#con-name'),
            email: $('#con-email'),
            inquiry: $('#con-inquiry'),
            message: $('#con-message'),
            copy: $('#con-copy'),
        },
        errorContainer: 'ctr-errors',
    },

    init: function() {
        var obj = this.settings;

        if (obj.theForm.length) {
            this.bindUIActions();
        }
    },

    bindUIActions: function() {
        var obj = this.settings;

        obj.submitButton.on('click', function(event) {
            event.preventDefault();

            if (ContactWidget.validateForm()) {
                ContactWidget.submitForm();
            }
        });

        $.each(obj.theFields, function(key, theField) {
            theField.on({
                keyup: function() {
                    ContactWidget.hideErrorContainer();
                },
                change: function() {
                    ContactWidget.hideErrorContainer();
                },
            });
        });
    },

    hideErrorContainer: function() {
        var obj = this.settings;

        $.each(obj.theFields, function(key, theField) {
            if (theField.val() != '' && $('#msg-' + theField.attr('id')).length) {
                $('#msg-' + theField.attr('id')).remove();
            }

            if (!$('#' + obj.errorContainer + ' > li').size() && $('#' + obj.errorContainer).size()) {
                $('#' + obj.errorContainer).remove();
            }
        });
    },

    validateForm: function() {
        var errors = [];
        var obj = this.settings;
        var theFields = this.settings.theFields;
        var outString = '';
        $('#' + obj.errorContainer).remove();

        if (theFields['name'].val() == '') {
            errors.push('<li id="msg-' + theFields['name'].attr('id') + '">You must enter your <label for="' + theFields['name'].attr('id') + '">name</label></li>');
        }

        if (theFields['email'].val() == '') {
            errors.push('<li id="msg-' + theFields['email'].attr('id') + '">You must supply an <label for="' + theFields['email'].attr('id') + '">email address</label></li>');
        }

        if (theFields['inquiry'].val() == '') {
            errors.push('<li id="msg-' + theFields['inquiry'].attr('id') + '">Please select an <label for="' + theFields['inquiry'].attr('id') + '">inquiry</label> type</li>');
        }

        if (theFields['message'].val() == '') {
            errors.push('<li id="msg-' + theFields['message'].attr('id') + '">You must enter a <label for="' + theFields['message'].attr('id') + '">message</label></li>');
        }

        if (errors.length) {
            outString = '<div id="' + obj.errorContainer + '" class="alert alert-error">';
            $.each(errors, function(key, value) {
                outString += value;
            });
            outString += '</div>';

            obj.theForm.prepend(outString);
            return false;
        }

        return true;
    },

    submitForm: function() {
        alert('submitting form');
    },
};

$(document).ready(function() {
    SiteWidget.init();
    ContactWidget.init();
});
