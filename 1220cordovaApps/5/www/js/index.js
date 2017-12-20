

var app = {
    // Application Constructor
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    onDeviceReady: function() {
        document.getElementById('iframe').src="http://sos9882.cafe24.com/ref/app/index.php?no=5";
        window.onmessage=function(e){
            document.getElementById('iframe').src=e.data;
        }
    }
};



app.initialize();