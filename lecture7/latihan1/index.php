<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <div id="tampil">Click button dan informasi akan diampilkan: <br></div>
        <button id="btn_tampil">Tampilkan</button>
        <script>
            $(document).ready(function(){
                $("#btn_tampil").click(function(){
                    $('#tampil').load('demo.php')
                });
            });
        </script>     
    </body>
</html>