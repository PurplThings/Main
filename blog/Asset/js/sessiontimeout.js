$(function(){

    var duration = 60;

    setInterval(updateTimer,1000);

    function updateTimer(){
        duration--;
        console.log(duration);
        if(duration<1){
            window.location = "../Asset/util/logout.php";
        }
    }

    function resetTimer(){
        duration =60;
        console.log(duration);
    }

    $(document).mousemove(resetTimer);
});