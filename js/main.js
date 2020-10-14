$('input:button').click(function(){
    var regNo = document.getElementById('regNo').value;
    $.ajax({
        url : 'getVehicleData.php',
        data : {regNo : regNo},
        method : 'GET',
        success:function(data)
                {
                    if(data)
                    {
                        console.log(data)
                        $('#mainForm').attr('action','api_integrate.php');
                        $('#mainForm').submit();
                    }
                    else
                    {
                        console.log(data)
                        apiFetch(regNo)
                    }
                }
    })
})
function apiFetch(regNo)
{
    $.ajax({
        url:'https://uk1.ukvehicledata.co.uk/api/datapackage/VehicleData?v=2&api_nullitems=1&auth_apikey=26855df0-2562-4063-82fd-41b6fe44b59e&user_tag=&key_VRM='+regNo,
        success:function(data)
                {
                    if(data.Response.StatusCode == 'Success')
                    {
                        console.log("Inside Success")
                        $('#mainForm').attr('action','api_integrate.php')
                        $('#mainForm').submit()
                    }
                    else
                    {
                        console.log(data)
                        $('div').css('visibility','visible')
                    }
                }
    })
    console.log("Inside API Fetch")
}