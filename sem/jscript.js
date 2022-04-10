var sub1 = new Array(4);
var sub2 = new Array(4);
var sub3 = new Array(4);
var sub4 = new Array(4);
var sgpa = new Array(4);

var currSem = 0;


for(var i = 0 ; i < sub1.length ; i++)
{
    sub1[i] = new Array(5);
    sub2[i] = new Array(5);
    sub3[i] = new Array(5);
    sub4[i] = new Array(5);
}
var colors = new Array(4);
for(var i = 0 ; i < 4 ; i++)
{
    colors[i] = new Array(4);
    for(var j = 0 ; j < 4 ; j++)
    colors[i][j] = "transparent"
}

for(var i = 0 ; i < 4 ; i++)
{
    sgpa[i] = 0.0;
    sub1[i][0] = 100;    
    sub1[i][1] = 40;
    sub1[i][2] = 00;
    sub1[i][3] = 0;
    sub1[i][4] = "Y";

    sub2[i][0] = 100;    
    sub2[i][1] = 40;
    sub2[i][2] = 00;
    sub2[i][3] = 0;
    sub2[i][4] = "Y";

    sub3[i][0] = 100;    
    sub3[i][1] = 40;
    sub3[i][2] = 00;
    sub3[i][3] = 0;
    sub3[i][4] = "Y";

    sub4[i][0] = 100;    
    sub4[i][1] = 40;
    sub4[i][2] = 00;
    sub4[i][3] = 0;
    sub4[i][4] = "Y";
}

function write()
{
    document.getElementById("fm01").value       = sub1[currSem][0];
    document.getElementById("qm01").value       = sub1[currSem][1];
    document.getElementById("se01").value       = sub1[currSem][2];
    document.getElementById("gp01").innerHTML   = sub1[currSem][3].toFixed(2);
    document.getElementById("gl01").innerHTML   = sub1[currSem][4];


    document.getElementById("fm02").value       = sub2[currSem][0];
    document.getElementById("qm02").value       = sub2[currSem][1];
    document.getElementById("se02").value       = sub2[currSem][2];
    document.getElementById("gp02").innerHTML   = sub2[currSem][3].toFixed(2);
    document.getElementById("gl02").innerHTML   = sub2[currSem][4];

    document.getElementById("fm03").value       = sub3[currSem][0];
    document.getElementById("qm03").value       = sub3[currSem][1];
    document.getElementById("se03").value       = sub3[currSem][2];
    document.getElementById("gp03").innerHTML   = sub3[currSem][3].toFixed(2);
    document.getElementById("gl03").innerHTML   = sub3[currSem][4];

    document.getElementById("fm04").value       = sub4[currSem][0];
    document.getElementById("qm04").value       = sub4[currSem][1];
    document.getElementById("se04").value       = sub4[currSem][2];
    document.getElementById("gp04").innerHTML   = sub4[currSem][3].toFixed(2);
    document.getElementById("gl04").innerHTML   = sub4[currSem][4];

    document.getElementById("sgpa").innerHTML = "SGPA (excluding Foundation Course) = " + sgpa[currSem];
}
function read()
{
    sub1[currSem][0] = document.getElementById("fm01").value;
    sub1[currSem][1] = document.getElementById("qm01").value;
    sub1[currSem][2] = document.getElementById("se01").value;

    sub2[currSem][0] = document.getElementById("fm02").value;
    sub2[currSem][1] = document.getElementById("qm02").value;
    sub2[currSem][2] = document.getElementById("se02").value;

    sub3[currSem][0] = document.getElementById("fm03").value;
    sub3[currSem][1] = document.getElementById("qm03").value;
    sub3[currSem][2] = document.getElementById("se03").value;

    sub4[currSem][0] = document.getElementById("fm04").value;
    sub4[currSem][1] = document.getElementById("qm04").value;
    sub4[currSem][2] = document.getElementById("se04").value;
}

function submitPersonal()
{
    document.getElementById("name").disabled = true;
    document.getElementById("roll").disabled = true;
    document.getElementById("department").disabled = true;
    document.getElementById("persButton").disabled = true;

    document.getElementById("marksheet").style.display="table";
    document.getElementById("semSel").style.visibility="visible";
    document.getElementById("legend1").style.visibility="visible";
    document.getElementById("legend2").style.visibility="visible";
}
function updateSheet()
{
    newSem = 0;
    var rad = document.getElementsByName('sem');
           
    for(i = 0; i < rad.length; i++) 
    {
        if(rad[i].checked)
        {
            newSem = rad[i].value;
            break;
        }
    }
    read();
    currSem=newSem;
    write();
    updateColors();
}
function calculate()
{
    read();
    
    if(!check())
        return;

    sub1[currSem][3] = sub1[currSem][2] / sub1[currSem][0]*10;
    sub2[currSem][3] = sub2[currSem][2] / sub2[currSem][0]*10;
    sub3[currSem][3] = sub3[currSem][2] / sub3[currSem][0]*10;
    sub4[currSem][3] = sub4[currSem][2] / sub4[currSem][0]*10;

    sgpa[currSem] = (sub1[currSem][3] + sub2[currSem][3] + sub3[currSem][3] + sub4[currSem][3])/4;
    sgpa[currSem] = sgpa[currSem].toFixed(2);
    
    if(sub1[currSem][2] < sub1[currSem][1])
    {
        sub1[currSem][4] = "Arrear";
        colors[currSem][0] = "#ff8080";
    }
    else    
    {
        sub1[currSem][4] = getGrade(sub1[currSem][3]);
        colors[currSem][0] = "transparent";
    }

    if(sub2[currSem][2] < sub2[currSem][1])
    {
        sub2[currSem][4] = "Arrear";
        colors[currSem][1] = "#ff8080";
    }
    else  
    {  
        sub2[currSem][4] = getGrade(sub2[currSem][3]);
        colors[currSem][1] = "transparent";
    }

    if(sub3[currSem][2] < sub3[currSem][1])
    {
        sub3[currSem][4] = "Arrear";
        colors[currSem][2] = "#ff8080";
    }
    else  
    { 
        sub3[currSem][4] = getGrade(sub3[currSem][3]);
        colors[currSem][2] = "transparent";
    }

    if(sub4[currSem][2] < sub4[currSem][1])
    {
        sub4[currSem][4] = "Arrear";
        colors[currSem][3] = "#ff8080";
    }
    else    
    {
        sub4[currSem][4] = getGrade(sub4[currSem][3]);
        colors[currSem][3] = "transparent";
    }
    updateColors();
    write();
}
function updateColors()
{
    document.getElementById("sub1").style.backgroundColor=colors[currSem][0];
    document.getElementById("sub2").style.backgroundColor=colors[currSem][1];
    document.getElementById("sub3").style.backgroundColor=colors[currSem][2];
    document.getElementById("sub4").style.backgroundColor=colors[currSem][3];
}
function resetColors()
{

}
function check()
{
    /*read();
    if(sub1[currSem][2] > sub1[currSem][0] || sub1[currSem][2] < 0)
    {
        alert("sub1 marks out of bounds");
        return false;
    }
    if(sub2[currSem][2] > sub2[currSem][0] || sub2[currSem][2] < 0)
    {
        alert("sub2 marks out of bounds");
        return false;
    }
    if(sub3[currSem][2] > sub3[currSem][0] || sub3[currSem][2] < 0)
    {
        alert("sub3 marks out of bounds");
        return false;
    }
    if(sub4[currSem][2] > sub4[currSem][0] || sub4[currSem][2] < 0)
    {
        alert("sub4 marks out of bounds");
        return false;
    }*/
    return true;
}
function getGrade(score)
{
    read();
    if(score >= 9)
        return "O";
    else if(score >= 8 && score < 9 )
        return "A";
    else if(score >= 7 && score < 8 )
        return "B";
    else if(score >= 6 && score < 7 )
        return "C";
    else if(score >= 5 && score < 6 )
        return "D";
    else if(score >= 4 && score < 5 )
        return "E";
}
function printWin()
{
    window.print();
}