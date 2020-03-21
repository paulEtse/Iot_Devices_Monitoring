function verification()
{
    var ok=true;
    var name=document.getElementById('inputName').value;
    alert(name);
    var type=document.getElementById('inputType').value;
    alert(type);
    var comment=document.getElementById("areaComment").value;
    alert(comment);
    //var temperature= $("#selectionTemperature").val();
    //var time=$("#selectionTime");
    var state= $("input[name='state']:checked").val();
    alert(state);
    const URL= "post.php";
    data={
        name:name,
        type:type,
        description:comment,
        state:state
    };
    if(ok){
        $.post(Url,data,function(data, status){
            console.log('${data} and status is ${status}');
        });
    }
}