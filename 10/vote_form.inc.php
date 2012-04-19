<p><b>Do you like my website?</b></p>
 
<form action="" method="post">
<ul>
   <li><input type="radio" name="vote" value="1" /><label> Average</label></li>
   <li><input type="radio" name="vote" value="2" /><label> Not bad, but I've seen better</label></li>
   <li><input type="radio" name="vote" value="3" /><label> Very nice</label></li>
   <li><input type="radio" name="vote" value="4" /><label> Mindblowing!</label></li>
   <li></li>
   <li><font color="red"><?php print $vote_error; ?></font></li>
   <li>
  <input type="submit" name="button1" value="VOTE" />
  <input type="submit" name="button2" value="VIEW RESULTS" />
   </li>
</ul>
</form>