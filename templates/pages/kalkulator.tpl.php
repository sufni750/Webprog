<h2>Kalkulátor</h2>

<form action="/kiszamol.php"> 
<label for="hossz">Hossz (mm): </label><br>
<input type="number" id="hosszmezo" name="hossz" value="John"><br><br>

<label for="atmero">Átmérő:</label>
<select name="atmero" id="atmero">
  <option value="1,75">1,75 mm2</option>
  <option value="3">3 mm2</option>
</select> 

<label for="anyagok">Anyag:</label>
<select name="anyagok" id="anyagok">
  <option value="abs">ABS</option>
  <option value="pla">PLA</option>
  <option value="petg">PETG</option>
</select> 
 <br><br>
  <input type="submit" value="Kiszámol">
</form>