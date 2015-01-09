var Result = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        console.log('Result Created');
    };
    
    // ------------------------------------------------------------------------
    
    this.success = function(msg) {
        if(typeof msg === 'undefined'){
            $("#success").html("Success");
        }
        $("#success").html(msg).fadeIn();
    };
    
    // ------------------------------------------------------------------------
    
    this.error = function(msg) {
        if(typeof msg === 'undefined'){
            $("#error").html("Error");
        }
        $("#error").html(msg).fadeIn();
    };
    
    // ------------------------------------------------------------------------
    
    this.__construct();
    
};
