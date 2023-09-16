<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Search for list of goods:
        <input type="text" name="god" id="god">
        <div id="god_result"></div>
        <script>
            function grt_data-using_Ajax(){
                var xmlhttp= new XMLHttpRequest();
                xmlhttp.onreadystatechange()=function(){
                    if(this.readyState==4 && this.status==200){
                        console.log(this.responseText);
                
                    }
                }
            }
        </script>
</body>

</html>