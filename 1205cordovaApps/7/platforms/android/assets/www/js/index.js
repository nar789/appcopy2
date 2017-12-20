

var app = {
    // Application Constructor
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    onDeviceReady: function() {
        document.getElementById('iframe').src="http://kkk11027421.cafe24.com/ref/app/index.php?no=7";
        window.onmessage=function(e){
            document.getElementById('iframe').src=e.data;
        }
    }
};



app.initialize();