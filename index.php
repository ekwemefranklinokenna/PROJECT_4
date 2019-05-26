<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="mystyle.css" />
<script src="mycode.js" ></script>
</head>

<body>

      <div id="box1">
      <p>JavaScript_Calculator</p>
      <hr />
          <form>
           <label>INPUT_1</label><br />
           <input type="text" id="value1" /><br /><br />
           <label>INPUT_2</label><br />
           <input type="text" id="value2" /><br /><br />
           <label>Operation</label><br />
           <select id="operator">
              <option value="add">Addition</option>
              <option value="min">Substract</option>
              <option value="div">Division</option>
              <option value="mul">Mutlply</option>
           </select><br /><br />
           <button type="button" onclick="calc()">Calculate</button>

          </form>
       </div>
       <div id="box2">
       <p id="demo1"> ANSWER</p> <p id="demo"></p>
       </div>

</body>
</html>