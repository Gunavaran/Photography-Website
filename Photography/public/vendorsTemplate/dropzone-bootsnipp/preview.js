/**
 * Created by Start on 4/11/2018.
 */

function preview_images()
{
    var total_file=document.getElementById("images").files.length;
    for(var i=0;i<total_file;i++)
    {
        $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
    }
}
