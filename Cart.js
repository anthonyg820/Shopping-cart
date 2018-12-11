//This file is used to handle the popup behavior of the box that appears when a user clicks on "Empty Cart"

function openPopup()
{
	var overlay = document.getElementById("pageOverlay");
	var popup = document.getElementById("popupBox");
	
	overlay.style.display = "block";
	
	popup.style.display = "block";
	popup.style.top = "50%";
}

function closePopup()
{
	var overlay = document.getElementById("pageOverlay");
	var popup = document.getElementById("popupBox");
	
	popup.style.top = "-200px";
	
	setTimeout(
		function(){
			overlay.style.display = "none";
			popup.style.display = "block";
		}, 500);
}