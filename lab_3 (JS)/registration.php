<html>
  <head>

  </head>
  <body>
    <form>
      <input id="uname" onkeyup="writeOp(this)" type="text" placeholder="Username"><br>
      <span id="op"></span><br>
      <input type="password" placeholder="Password"><br>
    </form>
    <button id="btn_g" onclick="viewGForm()">Login with Google</button><br>
    <form id="g_form"  style="display:none;">
      <input type="text" placeholder="gmail">
      <input type="password" placeholder="gmail password"><br>
    </form>

    <button onclick="turnOn()">Turn On</button>
    <img id="bulb" src="pic_bulboff.gif" alt="">
    <button onclick="turnOff()">Turn Off</button><br>

    <span onmousemove="showDetails()" onmouseout="hideDetails()">AIUB</span>
    <p id="info" style="display:none">The medium of instruction of all academic programs at AIUB is English. The academic year of the university incorporates two regular semesters (Fall and Spring). The Summer semester is an optional semester at AIUB. The duration of each semester is 14 weeks. The academic year starts from Fall semester.</p>

    <script src="myjs.js"></script>
  </body>
</html>
