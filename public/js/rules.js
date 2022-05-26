// let rule = document.getElementById('rules').value;
// let point2 = [];
let points = [];

function addPoint()
{
	var point = document.getElementById("pointSelect").value;
    points.push(point);
	document.getElementById("arrival-aerodrome").value = points.join(' ');
}

function removePoint()
{
    points.pop();
    document.getElementById("arrival-aerodrome").value = points.join(' ');
}