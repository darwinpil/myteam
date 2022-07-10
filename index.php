<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
}

.caret {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
}

.caret::before {
  content: "\25B6";
  color: black;
  display: inline-block;
  margin-right: 6px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */'
  transform: rotate(90deg);  
}

.nested {
  display: none;
}

.active {
  display: block;
}
</style>
</head>
<body>

<h2>10-July-2022</h2>
<br>
<br>

<ul id="myUL">
  <li><span class="caret">Jayanta Dutta (DPRL281051), 1 Unit</span>
    <ul class="nested">
    
      
      <li>1. Manoranjan Dutta (DPRL311255), 1 Unit</li>
      <li>2. Sathi Rani Dutta (DPRL225183), 2 Units</li>
      <li>3. Puja Makur (DPRL585051), 1 Unit</li>
      <li>4. Chhabi Saha (DPRL790547), 1 Unit</li>
      
    
      <li><span class="caret">5. Sutapa Mondal (DPRL669322), 1 Unit</span>
      <ul class="nested">
      <li>1. Mohit Kumar Tiwari (DPRL233917), 0 Unit</li>
    <li><span class="caret">2. Raginee Namdev (DPRL946886), 0 Unit</span>
      <ul class="nested">
      <li>1. Jai Kumar Vishnoi (DPRL360566), 1 Unit</li>
     
</ul>
</li>
</ul>
</li>

<li><span class="caret">6. Kanchan Dutta (DPRL863731), 4 Units</span>
      <ul class="nested">
      <li>1. Shraboni Dutta (DPRL129040), 1 Unit</li>
      <li>2. Pratyasha Dutta (DPRL614030), 1 Unit</li>
      <li>3. Supriya Das (DPRL374937), 0 Unit</li>
      
        </ul>
        </li>

        <li><span class="caret">7. Santosh Kumar Sikdar (DPRL184584), 1 Unit</span>
      <ul class="nested">
      <li></li>
      <li></li>
      <li></li>
      
        </ul>
        </li>
      
      
      
    </ul>
  </li>
</ul>

<script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>

</body>
</html>
