<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset-utf-8"/>
    <title>Ajax Chat</title>

    <script src="./jquery-1.7.2.js" type="text/javascript"></script>

    <style type="text/css"><!--
        #chatbox{
            background-color: #EEEEEE;
            border: 1px solid #000000;
            width: 500px;
            height: 300px;
        }
        #chatbox #initial {
            text-align: center;
            margin: auto;
            width: 250px;
            padding-top: 100px;
        }
    --></style>
    <script type="text/javascript">

        function chat_initial() {
            var user = document.getElementById("chat_user").value;

            $.post('./chat.php', {stage:"initial",user:user}, function(data) {
                alert(data)
            });
            /*
                get user
                check if taken
                hide the initial div
                display the primary div (main content div)
             */

        }
    </script>

</head>
<body>
    <div id="chatbox">

        <div id="initial">
            <table>
                <tr align="center">
                    <td>Enter a username to start chatting.</td>
                </tr>
                <tr align="center">
                <tr align="center">
                    <td><input type="text" name="chat_user" id="chat_user" style="width: 150px;"/></td>
                </tr>
                <tr align="center">
                    <td><input type="button" value="Continue" onClick="chat_initial();"/></td>
                </tr>
            </table>
        </div>

        <div id="primary"></div>

    </div>

</body>
</html>
