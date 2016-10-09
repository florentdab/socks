/**
 * Created by ubuntu on 09/10/16.
 */
var totalVote = 0;

$(function() {

    $("#go-vote").prop("disabled", true);

    $(".media-object").mouseenter(function(){
        $(this).addClass('border-over');
    });

    $(".media-object").mouseleave(function(){
        $(this).removeClass('border-over');
    });

    $(".media-object").click(function(){

        if ($(this).hasClass("border-fixe")){
            totalVote--;
            $(this).removeClass("border-fixe");
        } else {
            if (totalVote < 3) {
                totalVote++;
                $(this).addClass("border-fixe");
            }
        }

        $("#vote-number").text(totalVote);

        if (totalVote == 3) {
            $("#go-vote").prop("disabled", false);
        } else {
            $("#go-vote").prop("disabled", true);
        }
    });

    $("#go-vote").click(function(){

        var images = [];

        $(".border-fixe").each(function(){
            images.push($(this).attr("alt"));
        });

        var imageJsonString = JSON.stringify(images);
        var name = $("input[name='name']").val();

        $.ajax({
            method: "POST",
            url: $("#voteUrl").val(),
            data: { "images": imageJsonString,
                    "name": name
            }
        }).done(function( msg ) {
            alert( "Data Saved: " + msg );
        });
    });
});
