$(function(){

    function timechecker(){
        setInterval(function(){
            var storedTimeStamp = sessionStorage.getItem("lastTimeStamp");
            timeCompare(storedTimeStamp);
        },10000)
    }

    function timeCompare(timeString){
        var currentTime = new Date();
        var pastTime = new Date(timeString);
        var timeDiff = currentTime - pastTime;
        var minpast  = Math.floor((timeDiff/60000));

        if(minpast > 1){
            sessionStorage.removeItem("lastTimeStamp");
            window.location = "../Asset/util/logout.php";
        }else{
            console.log(currentTime +" - "+ pastTime + " - "+ minpast);
        }
    }

    $(document).mousemove(function(){
        var timeStamp = new Date();
        sessionStorage.setItem("lastTimeStamp",timeStamp);
    });

    timechecker();
});