function submission()
{
    var ok=true;
    var name=document.getElementById('inputName').value;
    var type=document.getElementById('inputType').value;
    var comment=document.getElementById("areaComment").value;
    //var temperature= $("#selectionTemperature").val();
    //var time=$("#selectionTime");
    var state= $("input[name='state']:checked").val();
    const URL= "main.php";
    data={
        name:name,
        type:type,
        description:comment
    };
    if(ok){
        $.post(URL,data,function(data,status,jr){
            console.log('${data} and status is ${status}');
        });
    }
}