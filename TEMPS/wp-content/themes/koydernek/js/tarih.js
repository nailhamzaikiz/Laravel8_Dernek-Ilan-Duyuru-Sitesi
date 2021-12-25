var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var dayarray=new Array("Pazar","Pazartesi","Sal&#305;","&Ccedil;ar&#351;amba","Persembe","Cuma","Cumartesi")
var montharray=new Array("Ocak","Subat","Mart","Nisan","May&#305;s","Haziran","Temmuz","Agustos","Eylul","Ekim","Kas&#305;m","Aral&#305;k")
document.write(""+daym+" "+montharray[month]+" "+year+"  "+dayarray[day]+"")