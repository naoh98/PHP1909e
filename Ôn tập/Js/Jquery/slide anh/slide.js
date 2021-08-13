var count = 0;
var total = $(".big-image img").length-1;
$(document).ready(function () {
    var x = setInterval( function () {
        $(".big-image img").eq(count).hide();
        count++;
        if(count>total){
            count = 0;
        }
        $(".big-image img").eq(count).show();
    },2000);
    $(".prev").on("click", function () {
        $(".big-image img").eq(count).hide();
        count--;
        if(count<0){
            count=total;
        }
        $(".big-image img").eq(count).show();
    });
    $(".next").on("click", function () {
        $(".big-image img").eq(count).hide();
        count++;
        if(count>total){
            count=0;
        }
        $(".big-image img").eq(count).show();
    });
    $(".imgs img").on("click", function () {
        count = $(this).index('.imgs img');
        // console.log(count);
        $(".big-image img").hide();
        $(".big-image img").eq(count).show();
    });
});