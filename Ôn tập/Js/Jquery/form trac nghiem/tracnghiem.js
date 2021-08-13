var question = [
    {
        q: "Dap an cau nay la D",
        a: ["A. Dap an A",
            "B. Dap an B",
            "C. Dap an C",
            "D. Dap an D"],
        r: 3
    },
    {
        q: "Dap an cau nay la A",
        a: ["A. Dap an A",
            "B. Dap an B",
            "C. Dap an C",
            "D. Dap an D"],
        r: 0
    },
    {
        q: "Dap an cau nay la D",
        a: ["A. Dap an A",
            "B. Dap an B",
            "C. Dap an C",
            "D. Dap an D"],
        r: 3
    },
    {
        q: "Dap an cau nay la C",
        a: ["A. Dap an A",
            "B. Dap an B",
            "C. Dap an C",
            "D. Dap an D"],
        r: 2
    },
    {
        q: "Dap an cau nay la B",
        a: ["A. Dap an A",
            "B. Dap an B",
            "C. Dap an C",
            "D. Dap an D"],
        r: 1
    },
];
var count=0;
var score=0;
var obj = question[count];
var time = 999;

function load(){
    $(".answer").empty();
    //
    $(".time span").text(time);
    $(".score span").text(score);
    $(".question p").text((count+1)+". "+obj.q);
    $(".answer").attr("r",obj.r);
    for(let i =0; i<obj.a.length;i++){
        $(".answer").append("<p data-index='"+i+"'>"+obj.a[i]+"</p>");
    }
    $(".answer p").on("click", function () {
        let a = parseInt($(".answer").attr("r"));
        let r = parseInt($(this).attr("data-index"));
       if(a==r){
           score+=10;
           $(".score span").text(score);
           count++;
           obj=question[count];
           if(count>=question.length){
               $(".container").empty();
               $(".container").append("<h1 class='tb'>Ban da chien thang</h1>");
               return;
           }
           load();
       } else{
           score-=10;
           $(".score span").text(score);
           count--;
           obj=question[count];
           if(score<0){
               $(".container").empty();
               $(".container").append("<h1 class='tb'>Ban thua roi</h1>");
               return;
           }
           load();
       }
    });
}
$(document).ready(function () {
    load();
    let x = setInterval( function () {
        time--;
        $(".time span").text(time);
        if(time<=0){
            if(count<question.length){
                clearInterval(x);
                $(".container").empty();
                $(".container").append("<h1 class='tb'>Ban thua roi</h1>");
            }else{
                clearInterval(x);
                $(".container").empty();
                $(".container").append("<h1 class='tb'>Ban da chien thang</h1>");
            }
        }
    }, 1000);
});