<style type="text/css">
html, body {
    height: 100%;
}
body {
    margin: 0;
}
.progress-button{
    display: inline-block;
    font-size:24px;
    color:#fff !important;
    text-decoration: none !important;
    padding:14px 60px;
    line-height:1;
    overflow: hidden;
    position:relative;

    box-shadow:0 1px 1px #ccc;
    border-radius:2px;

    background-color: #51b7e6;
    background-image:-webkit-linear-gradient(top, #51b7e6, #4dafdd);
    background-image:-moz-linear-gradient(top, #51b7e6, #4dafdd);
    background-image:linear-gradient(top, #51b7e6, #4dafdd);
}

/* Hide the original text of the button. Then the loading or finished
   text will be shown in the :after element above it. */

.progress-button.in-progress,
.progress-button.finished{
    color:transparent !important;
}

.progress-button.in-progress:after,
.progress-button.finished:after{
    position: absolute;
    z-index: 2;
    width: 100%;
    height: 100%;
    text-align: center;
    top: 0;
    padding-top: inherit;
    color: #fff !important;
    left: 0;
}

/* If the .in-progress class is set on the button, show the
   contents of the data-loading attribute on the butotn */

.progress-button.in-progress:after{
    content:attr(data-loading);
}

/* The same goes for the .finished class */

.progress-button.finished:after{
    content:attr(data-finished);
}

/* The colorful bar that grows depending on the progress */

.progress-button .tz-bar{
    background-color:#e667c0;
    height:3px;
    bottom:0;
    left:0;
    width:0;
    position:absolute;
    z-index:1;

    border-radius:0 0 2px 2px;

    -webkit-transition: width 0.5s, height 0.5s;
    -moz-transition: width 0.5s, height 0.5s;
    transition: width 0.5s, height 0.5s;
}

/* The bar can be either horizontal, or vertical */

.progress-button .tz-bar.background-horizontal{
    height:100%;
    border-radius:2px;
}

.progress-button .tz-bar.background-vertical{
    height:0;
    top:0;
    width:100%;
    border-radius:2px;
}

.blck{width: 100%;text-align: center;}

.flex-container {
    height: 100%;
    padding: 0;
    margin: 0;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-top-left p.err{margin-bottom: 0;opacity:1;color: yellow;font-weight: normal;display: none;}

</style>

<!-- Top content -->
<div class="top-content flex-container">
	
    <div class="inner-bg" style="padding:0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                	<div class="form-top">
                		<div class="form-top-left">
                			<h3>Login to PT. Putra Bahari Mandiri</h3>
                    		<p>Enter your username and password to log on:</p>
                            <p class="err"></p>
                		</div>
                		<div class="form-top-right">
                			<i class="fa fa-lock"></i>
                		</div>
                    </div>
                    <div class="form-bottom">
	                    <form role="form" action="<?php echo site_url('/login/ajax_submit'); ?>" method="post" class="login-form" id="login_form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-username">Username</label>
	                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username" required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-password">Password</label>
	                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password" required>
	                        </div>
	                        <button type="submit" id="ajax_signin" href="#" class="progress-button blck" data-loading="Loading.." data-finished="Submit" style="border: 0;">Submit<span class="tz-bar background-horizontal"></span></button>
	                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script type="text/javascript">
// The progress meter functionality is available as a series of plugins.
// You can put this code in a separate file if you wish to keep things tidy.

(function($){

    // Creating a number of jQuery plugins that you can use to
    // initialize and control the progress meters.

    $.fn.progressInitialize = function(){

        // This function creates the necessary markup for the progress meter
        // and sets up a few event listeners.

        // Loop through all the buttons:

        return this.each(function(){

            var button = $(this),
                progress = 0;

            // Extract the data attributes into the options object.
            // If they are missing, they will receive default values.

            var options = $.extend({
                type:'background-horizontal',
                loading: 'Loading..',
                finished: 'Done!'
            }, button.data());

            // Add the data attributes if they are missing from the element.
            // They are used by our CSS code to show the messages
            button.attr({'data-loading': options.loading, 'data-finished': options.finished});

            // Add the needed markup for the progress bar to the button
            var bar = $('<span class="tz-bar ' + options.type + '">').appendTo(button);

            // The progress event tells the button to update the progress bar
            button.on('progress', function(e, val, absolute, finish){

                if(!button.hasClass('in-progress')){

                    // This is the first progress event for the button (or the
                    // first after it has finished in a previous run). Re-initialize
                    // the progress and remove some classes that may be left.

                    bar.show();
                    progress = 0;
                    button.removeClass('finished').addClass('in-progress')
                }

                // val, absolute and finish are event data passed by the progressIncrement
                // and progressSet methods that you can see near the end of this file.

                if(absolute){
                    progress = val;
                }
                else{
                    progress += val;
                }

                if(progress >= 100){
                    progress = 100;
                }

                if(finish){

                    button.removeClass('in-progress').addClass('finished');

                    bar.delay(500).fadeOut(function(){

                        // Trigger the custom progress-finish event
                        button.trigger('progress-finish');
                        setProgress(0);
                    });

                }

                setProgress(progress);
            });

            function setProgress(percentage){
                bar.filter('.background-horizontal,.background-bar').width(percentage+'%');
                bar.filter('.background-vertical').height(percentage+'%');
            }

        });

    };

    // progressStart simulates activity on the progress meter. Call it first,
    // if the progress is going to take a long time to finish.

    $.fn.progressStart = function(){

        var button = this.first(),
            last_progress = new Date().getTime();

        if(button.hasClass('in-progress')){
            // Don't start it a second time!
            return this;
        }

        button.on('progress', function(){
            last_progress = new Date().getTime();
        });

        // Every half a second check whether the progress 
        // has been incremented in the last two seconds

        var interval = window.setInterval(function(){

            if( new Date().getTime() > 2000+last_progress){

                // There has been no activity for two seconds. Increment the progress
                // bar a little bit to show that something is happening

                button.progressIncrement(5);
            }

        }, 500);

        button.on('progress-finish',function(){
            window.clearInterval(interval);
        });

        return button.progressIncrement(10);
    };

    $.fn.progressFinish = function(){
        return this.first().progressSet(100);
    };

    $.fn.progressIncrement = function(val){

        val = val || 10;

        var button = this.first();

        button.trigger('progress',[val])

        return this;
    };

    $.fn.progressSet = function(val){
        val = val || 10;

        var finish = false;
        if(val >= 100){
            finish = true;
        }

        return this.first().trigger('progress',[val, true, finish]);
    };

    // This function creates a progress meter that 
    // finishes in a specified amount of time.

    $.fn.progressTimed = function(seconds, cb){

        var button = this.first(),
            bar = button.find('.tz-bar');

        if(button.is('.in-progress')){
            return this;
        }

        // Set a transition declaration for the duration of the meter.
        // CSS will do the job of animating the progress bar for us.

        bar.css('transition', seconds+'s linear');
        button.progressSet(99);

        window.setTimeout(function(){
            bar.css('transition','');
            button.progressFinish();

            if($.isFunction(cb)){
                cb();
            }

        }, seconds*1000);
    };

})(jQuery);

$(function(){
    $('.progress-button').progressInitialize();

    $('#login_form').submit(function(){
        $('.err').hide();

        var me = $(this);
        var btn = $('#ajax_signin');
        btn.progressStart();

        var form = me;
        $.ajax( {
            type: "POST",
            url: form.attr( 'action' ),
            data: form.serialize(),
            dataType: 'json',
            success: function( response ) {
                console.log( response );

                if(response.error != '') {
                    $('.err').text(response.error);
                    $('.err').show();
                    $('#form-username , #form-password').val('');
                } else {
                    setTimeout(function(){
                        window.location = response.next_url;
                    } , 1000);
                }

                btn.progressFinish();
            }
        } );

        return false;
    });

});
</script>