<script>
 document.getElementById('flight-listing').style.marginTop='-5em';
 document.getElementById('mod-search').style.display='none';
 document.getElementById('spacer').style.display='none';
 function showForm(){
   document.getElementById('flight-listing').style.marginTop='0em';
   document.getElementById('spacer').style.display='block';
   document.getElementById('mod-search').style.display='block';
   document.getElementById('submit').innerHTML='<i class="icofont-search"></i> Modify Search';
   //set previous values in searched

   location.href="#searchform";
   let trip="<?php echo $_SESSION['triptype'] ?>";
   trip=trip.toLowerCase();
   document.getElementById(trip).checked=true;
   if(trip=='ow'){
     document.getElementById('search-form').action='flight-results-ow';
     document.getElementById('rt-input').style.display="none";
     document.getElementById('rt-date').style.display="none";
     document.getElementById('rt').addEventListener('click',function(){
     document.getElementById('rt-date').style.display="block";
     document.getElementById('rt-input').style.display="block";
     });
   }
   else if(trip=='rt'){
     document.getElementById('search-form').action='flight-results-rt-out';
     document.getElementById('rt-input').value="<?php echo $_SESSION['dates'][1] ?>";
     document.getElementById('rt-input').style.display="block";

   }
   document.getElementById('fromcode').value="<?php echo $_SESSION['routes'][0] ?>";
   document.getElementById('tocode').value="<?php echo $_SESSION['routes'][1] ?>";
   document.getElementById('departure_date').value="<?php echo $_SESSION['dates'][0] ?>";

   document.getElementById('adults').value="<?php echo $_SESSION['passengers'][0] ?>";
   document.getElementById('children').value="<?php echo $_SESSION['passengers'][1] ?>";
   document.getElementById('infants').value="<?php echo $_SESSION['passengers'][2] ?>";

 }
   document.addEventListener('DOMContentLoaded',function(){
   let nonstop='<?php echo $nonstop; ?>';
   let connecting='<?php echo $connecting ?>';

   document.querySelector('#nonstop').innerHTML="Nonstop (<strong style='color:blue;'>"+nonstop+"</strong>)";
   document.querySelector('#connecting').innerHTML="Connecting (<strong style='color:blue;'>"+connecting+"</strong>)";
     setprices();
 });
 function setprices(){
   var elems = document.getElementsByClassName("classprice");
Array.from(elems).forEach((v,i) => {
var code=v.value;
var txt=v.options[v.selectedIndex].text;
var kes=txt.split(" ");
var ksh=parseFloat(kes[kes.length-1]);
var airlineid=v.id;

   //alert(bookingLink);
  // console.log(bookingLink);
  var rate=parseFloat("<?php echo $rate ;?>");
 // console.log(rate);
   var format = new Intl.NumberFormat('en-KE', {
         style: 'currency',
         currency: 'KES',
         minimumFractionDigits: 2,
     });
      if(airlineid=="255"){
     var localCurrency=format.format(ksh*100);
     }
     else{
     var localCurrency=format.format(ksh*rate);
     }

   document.getElementsByClassName("price-kes")[i].innerHTML=localCurrency;
   document.getElementsByClassName("price-usd")[i].innerHTML="USD "+ksh;

   //set remaining Seats


});
 }
 setprices();


</script>
