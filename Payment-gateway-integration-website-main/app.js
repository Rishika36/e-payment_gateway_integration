const navSlide=()=>{
	const burger =document.querySelector('.burger');
	const nav =document.querySelector('.nav-links');
	const navLinks =document.querySelectorAll('.nav-links li');

	burger.addEventListener('click',()=>
	{
		//toggle nav
		nav.classList.toggle('nav-active');
			navLinks.forEach((link,index)=>{
		if (link.style.animation) {
			link.style.animation=``;
		}
		else {
			link.style.animation=`navLinkFade 0.5s ease forwards ${index /7+0.5}s`;

		}
	}); 
	//animte links
	/*navLinks.forEach((link,index)=>{
		link.style.animation=`navLinkFade 0.5s ease forwards ${index/7+0.5}s`;
		console.log(index/5+0.2);
	});*/

burger.classList.toggle('toggle');
	});

}
navSlide();