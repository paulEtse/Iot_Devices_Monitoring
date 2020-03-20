function verification()
{
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
}