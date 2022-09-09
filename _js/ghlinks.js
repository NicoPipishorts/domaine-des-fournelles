function openGHLinks(wine) {
	
	var wine = wine;
	
	var links = new Map([;
		["passion" , "https://www.hachette-vins.com/guide-vins/les-vins/dom-des-fournelles-passion-2017-2019/201934227/"],
		["brouilly" , "https://www.hachette-vins.com/guide-vins/les-vins/dom-des-fournelles-2015-2017-1/201718321/"],
		["cotedebrouilly" , "https://www.hachette-vins.com/guide-vins/les-vins/dom-des-fournelles-2015-2017/201711450/"],
		["godefroy" , "https://www.hachette-vins.com/guide-vins/les-vins/dom-des-fournelles-godefroy-2016-2018/201811450/"]
		]);
	
	var link = links.get(wine);
	alert(console.log(link));	
}