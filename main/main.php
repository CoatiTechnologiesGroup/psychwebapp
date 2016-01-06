<?Php include "../functions/header.php";?>



<div id="search_body">

<div id="left_dropdown">
<div id="age">Age</div>
<div id="stage_of_change"> Stage of Change</div>
<div id="SympDisorder">Symptoms & Disorders</div>

</div>

<div id ="search_top">
<input id="search" type="search"  placeholder="Search through here, <?php echo $first." ". $last."...";?>"/>
<input id="done_search" type="button" onclick="searchh();" value="search"/>

<div id='ser'>

</div>

</div>

<!-- search result area-->



</div>

<center><div id="search_result"></div></center>

<?Php include "../functions/footer.php";?>