var year = 2016;
// bisextille divisible par 4 mais pas par 100
if ((year % 4 === 0 && year % 100 > 0) || (year % 400 === 0)) {
	alert(year + " est bissextile");
} else {
	alert(year + " n'est pas bissextile");
}