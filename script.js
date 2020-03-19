function verification()
{
    var name=$("#inputName").value;
    var type=$("#inputType").value;
    var comment=$("#areaComment").value;
    var temperature= $("#selectionTemperature").val();
    var time=$("#selectionTime");
    var state= $("input[name='state']:checked").val();    
    alert(name+"\n"+type+"\n"+comment+"\n"+temperature+"\n"+time+"\n"+state);
}