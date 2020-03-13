<?php
require("user_header.php");
$pageTitle = "Directory";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta name="renderer" content="webkit" />
<title>Information Directory</title>

<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>/assets/css/directory.css" />

</head>
<body>
<br><br>
<div class="contains">
    <div class="wareSort clearfix">
		<ul id="sort1"></ul>
		<ul id="sort2" style="display: none;"></ul>
		<ul id="sort3" style="display: none;"></ul>
	</div>
	<div class="selectedSort"><b>You are in: </b><i id="selectedSort"></i></div>
	<div class="wareSortBtn">
		<input id="releaseBtn" type="button" value="Next" disabled="disabled" />
	</div>
</div>


</body>
</html>

<script>

var province = ["item", "item", "item", "item", "item", "item", "item", "item"];

var city = [
	["item", "item", "item"],
	["item", "item", "item", "item"],
	["item", "item", "item"],
	["item", "item", "item", "item", "item", "item", "item", "item", "item", "item"],
	["item", "item", "item", "item", "item"],
	["item", "item", "item"],
	["item", "item", "item", "item", "item", "item", "item"],
	["item", "item", "item", "item", "item", "item", "item", "item", "item", "item"]
];

var district = [
	
	[
		["item", "item", "item"],
		["item", "item", "item"],
		["item", "item", "item", "item", "item", "item", "item", "item", "item"]
	],
	
	[
		["item", "item", "item"],
		["item", "item", "item", "item", "item", "item", "item", "item", "item", "item"],
		["item", "item", "item"],
		["item", "item"]
	],
	
	[
		["item", "item", "item"],
		["item", "item", "item", "item", "item", "item", "item", "item", "item"],
		["item", "item", "item", "item"]
	],
	
	[
		["item", "item", "item"],
		["item", "item", "item", "item", "item", "item"],
		["item", "item", "item", "item", "item"],
		["item", "item", "item", "item"],
		["item", "item", "item", "item", "item", "item"],
		["item", "item", "item", "item", "item"],
		["item", "item", "item"],
		["item", "item", "item", "item"],
		["item", "item", "item", "item"],
		["item", "item", "item", "item", "item", "item", "item", "item"]
	],
	
	[
		["item", "item", "item", "item"],
		["item", "item", "item", "item"],
		["item", "item", "item", "item"],
		["item", "item", "item"],
		["item", "item", "item", "item", "item", "item", "item", "item"]
	],
	
	[
		["item", "item", "item"],
		["item", "item", "item"],
		["item", "item", "item"]
	],
	
	[
		["item", "item", "item", "item", "item", "item"],
		["item", "item", "item", "item", "item"],
		["item", "item", "item", "item", "item"],
		["item", "item", "item", "item", "item"],
		["item", "item", "item", "item", "item", "item", "item", "item", "item", "item"],
		["item", "item", "item", "item", "item", "item", "item", "item"],
		["item", "item", "item", "item", "item", "item", "item", "item"]
	],
	
	[
		["item", "item", "item"],
		["item", "item", "item"],
		["item", "item", "item", "item"],
		["item", "item", "item"],
		["item", "item", "item"],
		["item", "item", "item"],
		["item", "item", "item"],
		["item", "item", "item", "item", "item", "item", "item", "item", "item"],
		["item", "item", "item"],
		["item", "item", "item"]
	]
];
var expressP, expressC, expressD, expressArea, areaCont;
var arrow = " <font>&gt;</font> ";


function intProvince() {
	areaCont = "First class dir";
	for (var i=0; i<province.length; i++) {
		areaCont += '<li onClick="selectP(' + i + ');"><a href="javascript:void(0)">' + province[i] + '</a></li>';
	}
	$("#sort1").html(areaCont);
}
intProvince();


function selectP(p) {
	areaCont = "Second class dir";
	for (var j=0; j<city[p].length; j++) {
		areaCont += '<li onClick="selectC(' + p + ',' + j + ');"><a href="javascript:void(0)">' + city[p][j] + '</a></li>';
	}
	$("#sort2").html(areaCont).show();
	$("#sort3").hide();
	$("#sort1 li").eq(p).addClass("active").siblings("li").removeClass("active");
	expressP = province[p];
	$("#selectedSort").html(expressP);
	$("#releaseBtn").removeAttr("disabled");
}


function selectC(p,c) {
	areaCont = "Third class dir";
	expressC = "";
	for (var k=0; k<district[p][c].length; k++) {
		areaCont += '<li onClick="selectD(' + p + ',' + c + ',' + k + ');"><a href="javascript:void(0)">' + district[p][c][k] + '</a></li>';
	}
	$("#sort3").html(areaCont).show();
	$("#sort2 li").eq(c).addClass("active").siblings("li").removeClass("active");
	expressC = expressP + arrow + city[p][c];
	$("#selectedSort").html(expressC);
}


function selectD(p,c,d) {
	$("#sort3 li").eq(d).addClass("active").siblings("li").removeClass("active");
	expressD = expressC + arrow + district[p][c][d];
	$("#selectedSort").html(expressD);
}


$("#releaseBtn").click(function() {
	var releaseS = $(this).prop("disabled");
	if (releaseS == false) {
		location.href = "search_result.php";
	}
});
</script>

