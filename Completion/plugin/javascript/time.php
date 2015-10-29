<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <script type="text/javascript">
            function printTime(){
                var now =  new date();
                var hours= now.getHours();
                var minutes= now.getMinutes();
                var seconds= now.getSeconds();
                document.write(hours+":"+minutes+":"+seconds +"<br/>");
            }
          
          setInterval("printTime()",1000);
        </script>
    </body>
</html>
